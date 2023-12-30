<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PageForm extends Form
{
    public static function fields(): array
    {
        return [
            Section::make('General informations')
                ->columns(2)
                ->schema([
                    TextInput::make('route')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TextArea::make('meta_description')
                        ->columnSpanFull(),
                ]),
            ...self::home()
        ];
    }

    public static function home(): array
    {
        return [
            Section::make('Hero')
                ->columns(4)
                ->schema([
                    FileUpload::make('content.hero.image')
                        ->avatar()
                        ->imageEditor()
                        ->imageEditorAspectRatios(['1:1'])
                        ->required()
                        ->columnSpan(1),
                    Group::make()
                        ->columns(2)
                        ->columnSpan(3)
                        ->schema([
                            TextInput::make('content.hero.welcome')
                                ->required()
                                ->columnSpan(1),
                            TextInput::make('content.hero.job')
                                ->required()
                                ->columnSpan(1),
                            TextInput::make('content.hero.subtitle')
                                ->required()
                                ->columnSpan(1),
                            TextInput::make('content.hero.cta')
                                ->required()
                                ->columnSpan(1),
                        ])
                ]),
            Section::make('Works')
                ->columns(2)
                ->schema([
                    TextInput::make('content.works.title')
                        ->required()
                        ->columnSpan(1),
                    TextInput::make('content.works.cta')
                        ->required()
                        ->columnSpan(1),
                ]),
            Section::make('About me')
                ->schema([
                    TextInput::make('content.about.title')
                        ->required(),
                    RichEditor::make('content.about.body')
                        ->required(),
                ]),
            Section::make('Skills')
                ->schema([
                    TextInput::make('content.skills.title')
                        ->required()
                ]),
            Section::make('Contact')
                ->columns(2)
                ->schema([
                    TextInput::make('content.contact.title')
                        ->required(),
                    TextInput::make('content.contact.cta')
                        ->required(),
                    TextInput::make('content.contact.body')
                        ->columnSpanFull()
                        ->required(),
                ])
        ];
    }
}
