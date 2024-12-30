<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TataTertibResource\Pages;
use App\Filament\Resources\TataTertibResource\RelationManagers;
use App\Models\TataTertib;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use Filament\Forms\Components\Section;

class TataTertibResource extends Resource
{
    protected static ?string $model = TataTertib::class;

    protected static ?string $slug = 'tata-tertib';
    protected static ?string $label = 'Data Tata Tertib';
    protected static ?string $navigationLabel = 'Tata Tertib';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-scale';
    protected static ?string $panel = 'Admin';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('judul_tata_tertib')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\FileUpload::make('dokumen')
                            ->disk('public')
                            ->validationMessages([
                                'required' => 'Tidak boleh kosong'
                            ])
                            ->directory('tata_tertib')
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                            ->unique()
                            ->openable()
                            ->previewable(true)
                            ->preserveFilenames() // ambil nama file ori
                            ->downloadable()
                            ->required()
                            ->columnSpanFull()
                            ->appendFiles()
                            ->label('File PDF Tata Tertib')
                            ->acceptedFileTypes([
                                'application/pdf', // PDF
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_tata_tertib')
                    ->label('Judul Tata Tertib')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dokumen')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return basename($state);
                    })
                    ->label('File Tata Tertib')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->color('warning'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTataTertibs::route('/'),
            'create' => Pages\CreateTataTertib::route('/create'),
            'edit' => Pages\EditTataTertib::route('/{record}/edit'),
        ];
    }
}
