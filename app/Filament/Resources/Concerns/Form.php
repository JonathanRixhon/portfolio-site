<?php

namespace App\Filament\Resources\Concerns;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;

abstract class Form
{
    abstract public static function fields(): array;

    protected static function titleField(TextInput $titleField): TextInput
    {
        return $titleField->live('blur')
            ->afterStateUpdated(function (Set $set, $state, $context) {
                $set('slug', Str::slug($state));
            });
    }

    protected static function slugField(string $sluggable = 'title'): TextInput
    {
        return TextInput::make('slug')
            ->disabled()
            ->rules(['alpha_dash'])
            ->maxLength(255)
            ->helperText('This field is automatically generated from the ' . $sluggable . ' field.')
            ->unique(ignoreRecord: true)
            ->required();
    }
}
