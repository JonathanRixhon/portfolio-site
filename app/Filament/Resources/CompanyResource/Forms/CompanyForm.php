<?php

namespace App\Filament\Resources\DisciplineRescource\Forms;

use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;

class CompanyForm extends Form
{
    public static function fields(null|Model $record=null): array
    {
        return [
            TextInput::make('name')
                ->required(),
            TextInput::make('url')
                ->url()
                ->nullable(),
        ];
    }
}
