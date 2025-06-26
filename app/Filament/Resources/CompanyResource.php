<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    protected static ?string $navigationGroup = 'Business Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Owner')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('name_en')
                    ->label('Name (English)')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('name_ar')
                    ->label('Name (Arabic)')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('registration_number')
                    ->label('Registration Number')
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Forms\Components\TextInput::make('legal_entity')
                    ->label('Legal Entity')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('license')
                    ->label('License Document')
                    ->acceptedFileTypes(['application/pdf'])
                    ->directory('companies/licenses')
                    ->nullable(),

                Forms\Components\Textarea::make('about_ar')
                    ->label('About (Arabic)')
                    ->rows(4),

                Forms\Components\Textarea::make('about_en')
                    ->label('About (English)')
                    ->rows(4),

                Forms\Components\Textarea::make('address_en')
                    ->label('Address (English)')
                    ->required()
                    ->rows(3),

                Forms\Components\Textarea::make('address_ar')
                    ->label('Address (Arabic)')
                    ->required()
                    ->rows(3),

                Forms\Components\FileUpload::make('image')
                    ->label('Company Logo')
                    ->image()
                    ->directory('companies')
                    ->nullable(),

                Forms\Components\Select::make('country_id')
                    ->label('Country')
                    ->relationship('country', 'name_en')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('services')
                    ->label('Services')
                    ->relationship('services', 'title_en')
                    ->multiple()
                    ->searchable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Logo')
                    ->circular(),

                Tables\Columns\TextColumn::make('name_en')
                    ->label('Name (EN)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('name_ar')
                    ->label('Name (AR)')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Owner')
                    ->sortable(),

                Tables\Columns\TextColumn::make('country.name_en')
                    ->label('Country')
                    ->sortable(),

                Tables\Columns\TextColumn::make('registration_number')
                    ->label('Registration #')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('legal_entity')
                    ->label('Legal Entity')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('services_count')
                    ->label('Services')
                    ->counts('services')
                    ->sortable(),

                Tables\Columns\TextColumn::make('professionals_count')
                    ->label('Professionals')
                    ->counts('professionals')
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
                Tables\Filters\SelectFilter::make('country')
                    ->relationship('country', 'name_en'),
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

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProfessionalsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'view' => Pages\ViewCompany::route('/{record}'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
