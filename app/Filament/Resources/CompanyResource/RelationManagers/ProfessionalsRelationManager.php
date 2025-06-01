<?php

namespace App\Filament\Resources\CompanyResource\RelationManagers;

use App\Models\User;
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

    protected static ?string $title = 'Company Employees';

    protected static ?string $modelLabel = 'Professional';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Professional Information')
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->label('Professional Type')
                            ->options([
                                'lawyer' => 'Lawyer',
                                'accountant' => 'Accountant',
                            ])
                            ->required()
                            ->live(),

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
                    ]),

                Forms\Components\Section::make('User Account')
                    ->schema([
                        Forms\Components\Toggle::make('create_user_account')
                            ->label('Create User Account')
                            ->default(false)
                            ->live(),

                        Forms\Components\TextInput::make('user_name')
                            ->label('Full Name')
                            ->required()
                            ->visible(fn(Forms\Get $get): bool => $get('create_user_account')),

                        Forms\Components\TextInput::make('user_email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->unique(User::class, 'email')
                            ->visible(fn(Forms\Get $get): bool => $get('create_user_account')),

                        Forms\Components\TextInput::make('user_password')
                            ->label('Password')
                            ->password()
                            ->required()
                            ->minLength(8)
                            ->visible(fn(Forms\Get $get): bool => $get('create_user_account')),

                        Forms\Components\Select::make('user_id')
                            ->label('Existing User Account')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->nullable()
                            ->visible(fn(Forms\Get $get): bool => !$get('create_user_account')),
                    ]),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name_en')
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

                Tables\Columns\TextColumn::make('user.name')
                    ->label('User Account')
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
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'lawyer' => 'Lawyer',
                        'accountant' => 'Accountant',
                    ]),
                Tables\Filters\SelectFilter::make('country')
                    ->relationship('country', 'name_en'),
                Tables\Filters\TrashedFilter::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        // Set freelancer to false since this is a company employee
                        $data['freelancer'] = false;

                        // Handle user account creation
                        if ($data['create_user_account'] ?? false) {
                            $user = User::create([
                                'name' => $data['user_name'],
                                'email' => $data['user_email'],
                                'password' => bcrypt($data['user_password']),
                            ]);
                            $data['user_id'] = $user->id;
                        }

                        // Clean up temporary fields
                        unset($data['create_user_account'], $data['user_name'], $data['user_email'], $data['user_password']);

                        return $data;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->modifyQueryUsing(fn(Builder $query) => $query->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]));
    }
}
