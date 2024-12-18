<?php

namespace App\Filament\Resources\KurikulumKelasLimaResource\Pages;

use App\Filament\Resources\KurikulumKelasLimaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasLima extends CreateRecord
{
    protected static string $resource = KurikulumKelasLimaResource::class;
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-lima')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
