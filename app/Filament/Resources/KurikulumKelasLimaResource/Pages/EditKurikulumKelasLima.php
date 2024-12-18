<?php

namespace App\Filament\Resources\KurikulumKelasLimaResource\Pages;

use App\Filament\Resources\KurikulumKelasLimaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumKelasLima extends EditRecord
{
    protected static string $resource = KurikulumKelasLimaResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
