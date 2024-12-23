<?php

namespace App\Filament\Resources\MarketDayResource\Pages;

use App\Filament\Resources\MarketDayResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMarketDay extends EditRecord
{
    protected static string $resource = MarketDayResource::class;

    protected static bool $canCreateAnother = false;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
