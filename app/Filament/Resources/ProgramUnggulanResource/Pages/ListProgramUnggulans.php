<?php

namespace App\Filament\Resources\ProgramUnggulanResource\Pages;

use App\Filament\Resources\ProgramUnggulanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgramUnggulans extends ListRecords
{
    protected static string $resource = ProgramUnggulanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
