<?php

namespace App\Filament\Resources\KurikulumKelasEmpatResource\Pages;

use App\Filament\Resources\KurikulumKelasEmpatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumKelasEmpat extends EditRecord
{
    protected static string $resource = KurikulumKelasEmpatResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
