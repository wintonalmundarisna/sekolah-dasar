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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data) {
            if ($data['nik-ayah']) {
                $data['nik-ayah'] = "@ " . $data['nik-ayah'];
            }
            if ($data['hp']) {
                $data['hp'] = "@ " . $data['hp'];
            }
            if ($data['telepon']) {
                $data['telepon'] = "@ " . $data['telepon'];
            }
            if ($data['nik']) {
                $data['nik'] = "@ " . $data['nik'];
            }
            if ($data['nik-ibu']) {
                $data['nik-ibu'] = "@ " . $data['nik-ibu'];
            }
            if ($data['no-kk']) {
                $data['no-kk'] = "@ " . $data['no-kk'];
            }
            if ($data['nik-wali']) {
                $data['nik-wali'] = "@ " . $data['nik-wali'];
            }
        }

        return $data;
    }

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
