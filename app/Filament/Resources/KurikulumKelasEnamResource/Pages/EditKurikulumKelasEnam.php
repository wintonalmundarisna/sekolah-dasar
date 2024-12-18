<?php

namespace App\Filament\Resources\KurikulumKelasEnamResource\Pages;

use App\Filament\Resources\KurikulumKelasEnamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKurikulumKelasEnam extends EditRecord
{
    protected static string $resource = KurikulumKelasEnamResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
