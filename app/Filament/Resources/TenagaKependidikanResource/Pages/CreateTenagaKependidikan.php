<?php

namespace App\Filament\Resources\TenagaKependidikanResource\Pages;

use App\Filament\Resources\TenagaKependidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateTenagaKependidikan extends CreateRecord
{
    protected static string $resource = TenagaKependidikanResource::class;

    protected static bool $canCreateAnother = false;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if ($data) {
            if ($data['nuptk']) {
                $data['nuptk'] = "@ " . $data['nuptk'];
            }
            if ($data['hp']) {
                $data['hp'] = "@ " . $data['hp'];
            }
            if ($data['telepon']) {
                $data['telepon'] = "@ " . $data['telepon'];
            }
            if ($data['nip']) {
                $data['nip'] = "@ " . $data['nip'];
            }
            if ($data['nip_suami_istri']) {
                $data['nip_suami_istri'] = "@ " . $data['nip_suami_istri'];
            }
            if ($data['nik']) {
                $data['nik'] = "@ " . $data['nik'];
            }
            if ($data['no_kk']) {
                $data['no_kk'] = "@ " . $data['no_kk'];
            }
        }

        return $data;
    }

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/tenaga-kependidikan')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
