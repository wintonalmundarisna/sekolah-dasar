<?php

namespace App\Filament\Resources\MplsResource\Pages;

use App\Filament\Resources\MplsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMpls extends EditRecord
{
    protected static string $resource = MplsResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
