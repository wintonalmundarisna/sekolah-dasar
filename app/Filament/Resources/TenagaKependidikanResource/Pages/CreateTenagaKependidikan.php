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
        $data['nuptk'] = "@ " . $data['nuptk'];
        $data['hp'] = "@ " . $data['hp'];
        $data['telepon'] = "@ " . $data['telepon'];
        $data['nip'] = "@ " . $data['nip'];
        $data['nip_suami_istri'] = "@ " . $data['nip_suami_istri'];
        $data['nik'] = "@ " . $data['nik'];
        $data['no_kk'] = "@ " . $data['no_kk'];

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
