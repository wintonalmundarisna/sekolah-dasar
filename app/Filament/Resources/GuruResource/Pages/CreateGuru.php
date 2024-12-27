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
        $data['nuptk'] = "@ " . $data['nuptk'];
        $data['telepon'] = "@ " . $data['telepon'];
        $data['nip'] = "@ " . $data['nip'];
        $data['nip-suami-istri'] = "@ " . $data['nip-suami-istri'];
        $data['hp'] = "@ " . $data['hp'];
        $data['nik'] = "@ " . $data['nik'];
        $data['no-kk'] = "@ " . $data['no-kk'];

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
