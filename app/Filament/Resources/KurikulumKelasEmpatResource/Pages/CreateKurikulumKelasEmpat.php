<?php

namespace App\Filament\Resources\KurikulumKelasEmpatResource\Pages;

use App\Filament\Resources\KurikulumKelasEmpatResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasEmpat extends CreateRecord
{
    protected static string $resource = KurikulumKelasEmpatResource::class;
    protected static bool $canCreateAnother = false;


    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-empat')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
