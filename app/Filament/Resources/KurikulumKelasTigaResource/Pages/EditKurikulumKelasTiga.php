<?php

namespace App\Filament\Resources\KurikulumKelasTigaResource\Pages;

use App\Filament\Resources\KurikulumKelasTigaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumKelasTiga extends EditRecord
{
    protected static string $resource = KurikulumKelasTigaResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
