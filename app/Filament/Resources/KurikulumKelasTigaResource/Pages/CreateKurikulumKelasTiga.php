<?php

namespace App\Filament\Resources\KurikulumKelasTigaResource\Pages;

use App\Filament\Resources\KurikulumKelasTigaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKurikulumKelasTiga extends CreateRecord
{
    protected static string $resource = KurikulumKelasTigaResource::class;
    protected static bool $canCreateAnother = false;


    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/kurikulum-kelas-tiga')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
