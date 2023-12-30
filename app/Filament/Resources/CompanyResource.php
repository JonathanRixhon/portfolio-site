<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Company;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\DisciplineRescource\Forms\CompanyForm;
use Filament\Tables\Columns\TextColumn;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(CompanyForm::fields());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            //'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
