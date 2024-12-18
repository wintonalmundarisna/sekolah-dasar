<?php

namespace App\Filament\Resources\KurikulumKelasDuaResource\Pages;

use App\Filament\Resources\KurikulumKelasDuaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumKelasDua extends EditRecord
{
    protected static string $resource = KurikulumKelasDuaResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
