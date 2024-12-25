<?php

namespace App\Filament\Resources\FasilitasResource\Pages;

use App\Filament\Resources\FasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitas extends ListRecords
{
    protected static string $resource = FasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
