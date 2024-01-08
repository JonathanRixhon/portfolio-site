<?php

namespace App\Filament\Resources\TechnologyResource\Forms;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\Concerns\Form;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\CompanyRescource\Forms\CompanyForm;

class WorkForm extends Form
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
                        ->directory('works')
                        ->collection('thumbnails')
                        ->required()
                        ->imageResizeTargetWidth('854')
                        ->imageResizeTargetHeight('480')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeMode('cover'),
                    Group::make([
                        self::titleField(TextInput::make('name'))
                            ->required(),
                        self::slugField('name'),
                        DateTimePicker::make('published_at')
                            ->native(false)
                            ->nullable()
                            ->weekStartsOnMonday(),
                        Toggle::make('featured')
                            ->required(),
                    ]),
                    TextInput::make('url')
                        ->nullable()
                        ->columnSpan(1)
                        ->url(),
                    Select::make('company_id')
                        ->relationship('company', 'name')
                        ->searchable()
                        ->preload()
                        ->createOptionForm(CompanyForm::fields())
                        ->editOptionForm(CompanyForm::fields()),
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
                        ->fileAttachmentsVisibility('private')
                        ->toolbarButtons([
                            'attachFiles',
                            'bold',
                            'bulletList',
                            'codeBlock',
                            'h3',
                            'italic',
                            'link',
                            'orderedList',
                            'redo',
                            'strike',
                            'underline',
                            'undo',
                        ])->columnSpanFull(),
                ])
        ];
    }
}
