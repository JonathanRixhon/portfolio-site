<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\DisciplineRescource\Forms\CompanyForm;

class WorkForm extends Form
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
                        ->directory('works')
                        ->collection('thumbnails')
                        ->required()
                        ->imageEditorAspectRatios(['9:16', '16:9', '1:1']),
                    Group::make([
                        self::titleField(TextInput::make('name'))
                            ->required(),
                        self::slugField('name'),
                        Toggle::make('featured')
                            ->required(),
                        Select::make('company_id')
                            ->relationship('company', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm(CompanyForm::fields())
                            ->editOptionForm(CompanyForm::fields())
                    ]),
                    Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                    Select::make('technologies')
                        ->columnSpanFull()
                        ->relationship('technologies', 'name')
                        ->searchable()
                        ->preload()
                        ->multiple()
                        ->createOptionForm(TechnologyForm::fields())
                        ->required(),
                ]),
            Section::make('Content')
                ->schema([
                    RichEditor::make('body')
                        ->required()
                        ->fileAttachmentsDirectory('works')
                        ->columnSpanFull(),
                ])
        ];
    }
}
