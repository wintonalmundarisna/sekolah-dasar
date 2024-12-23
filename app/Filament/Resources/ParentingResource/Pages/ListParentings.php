<?php

namespace App\Filament\Resources\ParentingResource\Pages;

use App\Filament\Resources\ParentingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListParentings extends ListRecords
{
    protected static string $resource = ParentingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
