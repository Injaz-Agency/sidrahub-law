<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfessionalResource\Pages;
use App\Filament\Resources\ProfessionalResource\RelationManagers;
use App\Models\Professional;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfessionalResource extends Resource
{
    protected static ?string $model = Professional::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Business Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('User Account')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                Forms\Components\Select::make('type')
                    ->label('Professional Type')
                    ->options([
                        'lawyer' => 'Lawyer',
                        'accountant' => 'Accountant',
                    ])
                    ->required()
                    ->live(),

                Forms\Components\Toggle::make('freelancer')
                    ->label('Is Freelancer')
                    ->default(true)
                    ->live(),

                Forms\Components\Select::make('company_id')
                    ->label('Company')
                    ->relationship('company', 'name_en')
                    ->searchable()
                    ->preload()
                    ->nullable()
                    ->hidden(fn(Forms\Get $get): bool => $get('freelancer')),

                Forms\Components\TextInput::make('name_en')
                    ->label('Name (English)')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('name_ar')
                    ->label('Name (Arabic)')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('job_title_en')
                    ->label('Job Title (English)')
                    ->maxLength(255)
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'lawyer'),

                Forms\Components\TextInput::make('job_title_ar')
                    ->label('Job Title (Arabic)')
                    ->maxLength(255)
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'lawyer'),

                Forms\Components\TextInput::make('description_en')
                    ->label('Description (English)')
                    ->maxLength(255)
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'accountant'),

                Forms\Components\TextInput::make('description_ar')
                    ->label('Description (Arabic)')
                    ->maxLength(255)
                    ->visible(fn(Forms\Get $get): bool => $get('type') === 'accountant'),

                Forms\Components\TextInput::make('years_of_experience')
                    ->label('Years of Experience')
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(50),

                Forms\Components\Textarea::make('info_en')
                    ->label('Additional Info (English)')
                    ->rows(3),

                Forms\Components\Textarea::make('info_ar')
                    ->label('Additional Info (Arabic)')
                    ->rows(3),

                Forms\Components\Select::make('country_id')
                    ->label('Country')
                    ->relationship('country', 'name_en')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('services')
                    ->label('Assigned Services')
                    ->multiple()
                    ->relationship('services', 'title_en')
                    ->searchable()
                    ->preload()
                    ->placeholder('Select services for this professional'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_en')
                    ->label('Name (EN)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name_ar')
                    ->label('Name (AR)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('type')
                    ->label('Type')
                    ->colors([
                        'primary' => 'lawyer',
                        'success' => 'accountant',
                    ]),

                Tables\Columns\IconColumn::make('freelancer')
                    ->label('Freelancer')
                    ->boolean(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Account')
                    ->sortable(),

                Tables\Columns\TextColumn::make('company.name_en')
                    ->label('Company')
                    ->sortable(),

                Tables\Columns\TextColumn::make('country.name_en')
                    ->label('Country')
                    ->sortable(),

                Tables\Columns\TextColumn::make('years_of_experience')
                    ->label('Experience (Years)')
                    ->sortable(),

                Tables\Columns\TextColumn::make('services_count')
                    ->label('Services')
                    ->counts('services')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfessionals::route('/'),
            'create' => Pages\CreateProfessional::route('/create'),
            'view' => Pages\ViewProfessional::route('/{record}'),
            'edit' => Pages\EditProfessional::route('/{record}/edit'),
        ];
    }
}
