<?php

namespace App\Filament\Resources\KelasSatuResource\Pages;

use App\Filament\Resources\KelasSatuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelasSatus extends ListRecords
{
    protected static string $resource = KelasSatuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
