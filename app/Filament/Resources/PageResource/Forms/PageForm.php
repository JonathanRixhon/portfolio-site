<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class PageForm extends Form
{
    protected static Model $record;

    public static function fields(null|Model $record=null): array
    {
        self::$record = $record;
        $pageFields = [];

        if (method_exists(self::class, $record->route)) {
            $pageFields = self::{$record->route}();
        }

        return [
            Section::make('General informations')
                ->columns(2)
                ->schema([
                    TextInput::make('route')
                        ->disabled()
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                    TextArea::make('meta_description')
                        ->columnSpanFull(),
                    TextArea::make('meta_og')
                        ->columnSpanFull(),
                    TextArea::make('meta_twitter')
                        ->columnSpanFull(),
                ]),
                ...$pageFields
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
                        ->imageCropAspectRatio('1:1')
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
                        ->required()
                        ->toolbarButtons([
                            'bold',
                            'italic',
                            'link',
                        ])
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

    public static function contact(): array
    {
        return [
            Section::make('Form')
                ->columns(2)
                ->schema([
                    TextInput::make('content.form.title')
                        ->required()
                        ->columnSpan(1),
                    TextInput::make('content.form.submit')
                        ->required()
                        ->columnSpan(1),
                    TextInput::make('content.form.subtitle')
                        ->required()
                        ->columnSpanFull(),
                ]),
        ];
    }

    public static function works(): array
    {
        return [
            Section::make('Works')
                ->schema([
                    TextInput::make('content.works.title')
                        ->required(),
                ]),
        ];
    }
}
