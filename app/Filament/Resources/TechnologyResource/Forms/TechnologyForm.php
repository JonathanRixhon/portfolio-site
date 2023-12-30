<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use App\Filament\Resources\DisciplineRescource\Forms\DisciplineForm;

class TechnologyForm extends Form
{
    public static function fields(): array
    {


        return [
            self::titleField(TextInput::make('name'))
                ->required(),
            self::slugField('name'),

            Select::make('discipline_id')
                ->relationship('discipline', 'name')
                ->searchable()
                ->preload()
                ->createOptionForm(DisciplineForm::fields())
                ->editOptionForm(DisciplineForm::fields()),
        ];
    }
}
