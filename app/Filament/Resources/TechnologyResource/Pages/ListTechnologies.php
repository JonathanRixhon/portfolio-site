<?php

namespace App\Filament\Resources\TechnologyResource\Pages;

use Filament\Actions;
use App\Models\Discipline;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TechnologyResource;

class ListTechnologies extends ListRecords
{
    protected static string $resource = TechnologyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return Discipline::all()->mapWithKeys(function ($discipline) {
            return [
                $discipline->slug => Tab::make($discipline->name)
                    ->query(function ($query) use ($discipline) {
                        $query->where('discipline_id', $discipline->id);
                    }),
            ];
        })->all();
    }
}
