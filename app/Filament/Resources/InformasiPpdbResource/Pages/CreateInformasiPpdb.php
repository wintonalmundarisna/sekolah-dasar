<?php

namespace App\Filament\Resources\InformasiPpdbResource\Pages;

use App\Filament\Resources\InformasiPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CreateInformasiPpdb extends CreateRecord
{
    protected static string $resource = InformasiPpdbResource::class;

    protected static bool $canCreateAnother = false;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Periksa apakah data ada 
        if (empty($data['is_active'])) {
            // Jika data tidak ada, set nilai menjadi false 
            $data['is_active'] = false;
        }
        return $data;
    }

    public function table(Table $table): Table
    {
        return $table->headerActions([
            CreateAction::make()->cancelAction(
                fn() => redirect('/informasi')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
