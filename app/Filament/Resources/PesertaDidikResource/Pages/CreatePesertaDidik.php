<?php

namespace App\Filament\Resources\PesertaDidikResource\Pages;

use App\Filament\Resources\PesertaDidikResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreatePesertaDidik extends CreateRecord
{
    protected static string $resource = PesertaDidikResource::class;
    
    protected static bool $canCreateAnother = false;

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/peserta-didik')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
