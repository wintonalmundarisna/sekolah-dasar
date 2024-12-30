<?php

namespace App\Filament\Resources\GuruResource\Pages;

use App\Filament\Resources\GuruResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;
use Illuminate\Support\Str;


class CreateGuru extends CreateRecord
{
    protected static string $resource = GuruResource::class;
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
            if ($data['nip-suami-istri']) {
                $data['nip-suami-istri'] = "@ " . $data['nip-suami-istri'];
            }
            if ($data['nik']) {
                $data['nik'] = "@ " . $data['nik'];
            }
            if ($data['no-kk']) {
                $data['no-kk'] = "@ " . $data['no-kk'];
            }
        }

        return $data;
    }

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/guru')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
