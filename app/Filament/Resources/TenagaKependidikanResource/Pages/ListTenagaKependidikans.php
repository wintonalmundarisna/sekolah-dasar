<?php

namespace App\Filament\Resources\TenagaKependidikanResource\Pages;

use App\Filament\Resources\TenagaKependidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenagaKependidikans extends ListRecords
{
    protected static string $resource = TenagaKependidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
