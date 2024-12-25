<?php

namespace App\Filament\Resources\KegiatanLuarResource\Pages;

use App\Filament\Resources\KegiatanLuarResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKegiatanLuar extends CreateRecord
{
    protected static string $resource = KegiatanLuarResource::class;

    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kegiatan-luar')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
