<?php

namespace App\Filament\Resources\DisciplineRescource\Forms;

use Closure;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;

class CompanyForm extends Form
{
    public static function fields(): array
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
