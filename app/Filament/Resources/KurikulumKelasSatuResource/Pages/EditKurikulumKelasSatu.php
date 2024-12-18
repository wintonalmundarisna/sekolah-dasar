<?php

namespace App\Filament\Resources\KurikulumKelasSatuResource\Pages;

use App\Filament\Resources\KurikulumKelasSatuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;


class EditKurikulumKelasSatu extends EditRecord
{
    protected static string $resource = KurikulumKelasSatuResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
