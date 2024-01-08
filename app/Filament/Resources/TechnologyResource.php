<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Technology;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Resources\TechnologyResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\TechnologyResource\Forms\TechnologyForm;

class TechnologyResource extends Resource
{
    protected static ?string $model = Technology::class;

    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(TechnologyForm::fields($form->getRecord()));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('order')
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('thumbnails'),
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('discipline.name')
                    ->numeric()
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
            'index' => Pages\ListTechnologies::route('/'),
            'create' => Pages\CreateTechnology::route('/create'),
            //'edit' => Pages\EditTechnology::route('/{record}/edit'),
        ];
    }
}
