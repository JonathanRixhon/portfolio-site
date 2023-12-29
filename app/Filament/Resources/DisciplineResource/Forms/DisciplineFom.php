<?php

namespace App\Filament\Resources\DisciplineRescource\Forms;

use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;

class DisciplineForm extends Form
{
    public static function fields(): array
    {
        return [
            TextInput::make('name')
                ->required(),
        ];
    }
}
