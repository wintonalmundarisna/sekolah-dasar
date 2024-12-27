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
        // dd($data);
        $data['nik'] = "@ " . $data['nik'];
        $data['telepon'] = "@ " . $data['telepon'];
        $data['hp'] = "@ " . $data['hp'];
        $data['nik-ayah'] = "@ " . $data['nik-ayah'];
        $data['nik-ibu'] = "@ " . $data['nik-ibu'];
        $data['nik-wali'] = "@ " . $data['nik-wali'];
        $data['no-kk'] = "@ " . $data['no-kk'];

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
