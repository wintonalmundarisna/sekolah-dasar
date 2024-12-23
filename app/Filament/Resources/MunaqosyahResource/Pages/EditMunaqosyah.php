<?php

namespace App\Filament\Resources\MunaqosyahResource\Pages;

use App\Filament\Resources\MunaqosyahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMunaqosyah extends EditRecord
{
    protected static string $resource = MunaqosyahResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
