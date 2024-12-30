<?php

namespace App\Filament\Resources\KalenderAkademikResource\Pages;

use App\Filament\Resources\KalenderAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Table;
use Filament\Tables\Actions\CreateAction;

class CreateKalenderAkademik extends CreateRecord
{
    protected static string $resource = KalenderAkademikResource::class;
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
                fn() => redirect('/kalender-akademik')
            ),
        ]);
    }

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
