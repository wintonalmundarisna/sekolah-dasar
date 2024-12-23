<?php

namespace App\Filament\Resources\RakerResource\Pages;

use App\Filament\Resources\RakerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRakers extends ListRecords
{
    protected static string $resource = RakerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
