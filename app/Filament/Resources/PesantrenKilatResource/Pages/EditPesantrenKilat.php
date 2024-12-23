<?php

namespace App\Filament\Resources\PesantrenKilatResource\Pages;

use App\Filament\Resources\PesantrenKilatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesantrenKilat extends EditRecord
{
    protected static string $resource = PesantrenKilatResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
