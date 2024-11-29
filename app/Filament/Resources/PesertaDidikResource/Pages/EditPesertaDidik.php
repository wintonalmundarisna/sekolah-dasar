<?php

namespace App\Filament\Resources\PesertaDidikResource\Pages;

use App\Filament\Resources\PesertaDidikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPesertaDidik extends EditRecord
{
    protected static string $resource = PesertaDidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
