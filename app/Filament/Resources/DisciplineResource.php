<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Concerns\HasForm;
use App\Filament\Resources\DisciplineRescource\Forms\DisciplineForm;
use App\Filament\Resources\DisciplineResource\Pages;
use App\Filament\Resources\DisciplineResource\RelationManagers;
use App\Models\Discipline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DisciplineResource extends Resource
{
    protected static ?string $model = Discipline::class;

    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    public static function form(Form $form): Form
    {
        return $form->schema(DisciplineForm::fields($form->getRecord()));
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('order')
            ->defaultSort('order')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
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
            'index' => Pages\ListDisciplines::route('/'),
            'create' => Pages\CreateDiscipline::route('/create'),
            //'edit' => Pages\EditDiscipline::route('/{record}/edit'),
        ];
    }
}
