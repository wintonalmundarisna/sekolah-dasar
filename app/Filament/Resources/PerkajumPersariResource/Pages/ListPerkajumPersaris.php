<?php

namespace App\Filament\Resources\PerkajumPersariResource\Pages;

use App\Filament\Resources\PerkajumPersariResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerkajumPersaris extends ListRecords
{
    protected static string $resource = PerkajumPersariResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
