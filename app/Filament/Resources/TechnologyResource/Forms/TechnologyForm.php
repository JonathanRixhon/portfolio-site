<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\DisciplineRescource\Forms\DisciplineForm;
use Filament\Forms\Components\Group;

class TechnologyForm extends Form
{
    public static function fields(): array
    {
        return [
            Section::make('General informations')
                ->columns(2)
                ->schema([
                    SpatieMediaLibraryFileUpload::make('thumbnail')
                        ->image()
                        ->imageEditor()
                        ->columnSpan(1)
                        ->directory('technologies')
                        ->collection('thumbnails')
                        ->required(),
                    Group::make([
                        self::titleField(TextInput::make('name'))
                            ->required(),
                        self::slugField('name'),

                        Select::make('discipline_id')
                            ->relationship('discipline', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm(DisciplineForm::fields())
                            ->editOptionForm(DisciplineForm::fields()),
                    ]),
                ])
        ];
    }
}
