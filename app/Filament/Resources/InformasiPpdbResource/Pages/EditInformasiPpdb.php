<?php

namespace App\Filament\Resources\InformasiPpdbResource\Pages;

use App\Filament\Resources\InformasiPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInformasiPpdb extends EditRecord
{
    protected static string $resource = InformasiPpdbResource::class;
    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
