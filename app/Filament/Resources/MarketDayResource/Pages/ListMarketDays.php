<?php

namespace App\Filament\Resources\MarketDayResource\Pages;

use App\Filament\Resources\MarketDayResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarketDays extends ListRecords
{
    protected static string $resource = MarketDayResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
