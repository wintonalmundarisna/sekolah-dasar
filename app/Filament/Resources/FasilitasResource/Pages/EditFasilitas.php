<?php

namespace App\Filament\Resources\FasilitasResource\Pages;

use App\Filament\Resources\FasilitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitas extends EditRecord
{
    protected static string $resource = FasilitasResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
