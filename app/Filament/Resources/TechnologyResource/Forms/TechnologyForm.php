<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\DisciplineRescource\Forms\DisciplineForm;

class TechnologyForm extends Form
{
    public static function fields(null|Model $record = null): array
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
                            ->required()
                            ->preload()
                            ->createOptionForm(DisciplineForm::fields())
                            ->editOptionForm(DisciplineForm::fields()),
                        Toggle::make('featured')
                            ->required(),
                    ]),
                    TextInput::make('url')
                        ->url()
                        ->columnSpanFull(),
                ])
        ];
    }
}
