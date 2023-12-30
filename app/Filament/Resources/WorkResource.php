<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Work;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Barryvdh\Debugbar\Facades\Debugbar;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\WorkResource\Pages;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use App\Filament\Resources\TechnologyResource\Forms\WorkForm;
use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    public static function form(Form $form): Form
    {
        return $form->schema(WorkForm::fields());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->collection('thumbnails'),
                Tables\Columns\TextColumn::make('name')
                    ->description(function (Work $record) {
                        return Str::limit($record->description, 40);
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('technologies.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company.name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Work Details')
                    ->columns(2)
                    ->schema([
                        SpatieMediaLibraryImageEntry::make('thumbnail')
                            ->collection('thumbnails')
                            ->columnSpan(1),
                        Group::make()
                            ->columns(2)
                            ->schema([
                                TextEntry::make('name'),
                                TextEntry::make('slug'),
                                TextEntry::make('description')
                                    ->columnSpanFull()
                                    ->html(),
                                TextEntry::make('company.name')
                                    ->url(fn ($record) => $record->company->url, true),
                                IconEntry::make('featured')
                                    ->boolean(),
                                TextEntry::make('disciplines')
                                    ->getStateUsing(fn ($record) => $record->disciplines->pluck('name'))
                                    ->bulleted()
                                    ->listWithLineBreaks(),
                                TextEntry::make('technologies.name')
                                    ->bulleted()
                                    ->listWithLineBreaks(),
                            ]),
                    ]),
                Section::make('Body')
                    ->schema([
                        TextEntry::make('body')
                            ->label(false)
                            ->extraAttributes(['class' => 'prose dark:prose-invert'])
                            ->html(),
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'view' => Pages\SingleView::route('/{record}'),
            //'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
