<?php

namespace App\Filament\Resources\ServiceResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfessionalsRelationManager extends RelationManager
{
    protected static string $relationship = 'professionals';

    protected static ?string $title = 'Assigned Professionals';

    protected static ?string $modelLabel = 'Professional';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id')
                    ->label('Professional')
                    ->options(function () {
                        return \App\Models\Professional::query()
                            ->with(['user', 'company'])
                            ->get()
                            ->mapWithKeys(function ($professional) {
                                $label = $professional->name_en;
                                if ($professional->user) {
                                    $label .= ' (' . $professional->user->name . ')';
                                }
                                if ($professional->company && !$professional->freelancer) {
                                    $label .= ' - ' . $professional->company->name_en;
                                } elseif ($professional->freelancer) {
                                    $label .= ' - Freelancer';
                                }
                                return [$professional->id => $label];
                            });
                    })
                    ->searchable()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name_en')
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public')
                    ->size(50)
                    ->circular(),

                Tables\Columns\TextColumn::make('name_en')
                    ->label('Name (EN)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name_ar')
                    ->label('Name (AR)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->label('Type')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'lawyer' => 'primary',
                        'accountant' => 'success',
                        default => 'gray',
                    }),

                Tables\Columns\IconColumn::make('freelancer')
                    ->label('Freelancer')
                    ->boolean(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Account')
                    ->sortable(),

                Tables\Columns\TextColumn::make('company.name_en')
                    ->label('Company')
                    ->sortable()
                    ->placeholder('Freelancer'),

                Tables\Columns\TextColumn::make('country.name_en')
                    ->label('Country')
                    ->sortable(),

                Tables\Columns\TextColumn::make('years_of_experience')
                    ->label('Experience (Years)')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'lawyer' => 'Lawyer',
                        'accountant' => 'Accountant',
                    ]),
                Tables\Filters\TernaryFilter::make('freelancer')
                    ->label('Freelancer Status'),
                Tables\Filters\SelectFilter::make('country')
                    ->relationship('country', 'name_en'),
                Tables\Filters\SelectFilter::make('company')
                    ->relationship('company', 'name_en'),
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                    ->preloadRecordSelect()
                    ->form(fn(Tables\Actions\AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search) {
                                return \App\Models\Professional::query()
                                    ->with(['user', 'company'])
                                    ->where(function ($query) use ($search) {
                                        $query->where('name_en', 'like', "%{$search}%")
                                            ->orWhere('name_ar', 'like', "%{$search}%")
                                            ->orWhereHas('user', function ($userQuery) use ($search) {
                                                $userQuery->where('name', 'like', "%{$search}%");
                                            });
                                    })
                                    ->limit(50)
                                    ->get()
                                    ->mapWithKeys(function ($professional) {
                                        $label = $professional->name_en;
                                        if ($professional->user) {
                                            $label .= ' (' . $professional->user->name . ')';
                                        }
                                        if ($professional->company && !$professional->freelancer) {
                                            $label .= ' - ' . $professional->company->name_en;
                                        } elseif ($professional->freelancer) {
                                            $label .= ' - Freelancer';
                                        }
                                        return [$professional->id => $label];
                                    });
                            })
                            ->getOptionLabelUsing(function ($value) {
                                $professional = \App\Models\Professional::with(['user', 'company'])->find($value);
                                if (!$professional)
                                    return $value;

                                $label = $professional->name_en;
                                if ($professional->user) {
                                    $label .= ' (' . $professional->user->name . ')';
                                }
                                if ($professional->company && !$professional->freelancer) {
                                    $label .= ' - ' . $professional->company->name_en;
                                } elseif ($professional->freelancer) {
                                    $label .= ' - Freelancer';
                                }
                                return $label;
                            }),
                    ]),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DetachBulkAction::make(),
                ]),
            ])
            ->modifyQueryUsing(fn(Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
