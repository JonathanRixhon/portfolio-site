<?php

namespace App\Filament\Resources\WorkResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\WorkResource;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\TechnologyResource\Forms\WorkForm;

class SingleView extends ViewRecord
{
    protected static string $resource = WorkResource::class;

    public function getHeaderActions(): array
    {
        return [
            EditAction::make('Edit Speaker')
                ->icon('heroicon-o-pencil')
                ->form(WorkForm::fields()),
        ];
    }
}
