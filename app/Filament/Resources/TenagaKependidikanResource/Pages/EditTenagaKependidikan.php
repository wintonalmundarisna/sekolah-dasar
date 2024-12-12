<?php

namespace App\Filament\Resources\TenagaKependidikanResource\Pages;

use App\Filament\Resources\TenagaKependidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTenagaKependidikan extends EditRecord
{
    protected static string $resource = TenagaKependidikanResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
