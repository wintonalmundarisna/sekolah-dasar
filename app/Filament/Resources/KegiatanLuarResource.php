<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KegiatanLuarResource\Pages;
use App\Filament\Resources\KegiatanLuarResource\RelationManagers;
use App\Models\KegiatanLuar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use Carbon\Carbon;

class KegiatanLuarResource extends Resource
{
    protected static ?string $model = KegiatanLuar::class;

    protected static ?string $slug = 'kegiatan-luar';
    protected static ?string $label = 'Data Kegiatan Luar Sekolah';
    protected static ?string $navigationLabel = 'Kegiatan Luar';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationGroup = 'Informasi';
    protected static ?string $panel = 'Kegiatan Luar';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_kegiatan')
                            ->label('Nama Kegiatan')
                            ->required()
                            ->maxLength(150),
                        Forms\Components\FileUpload::make('foto_kegiatan')
                            ->label('Foto Kegiatan')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->directory('informasi/kegiatan-luar')
                            ->preserveFilenames() // ambil nama file ori
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                            ->imageEditorAspectRatios([
                                null, // ada button bebas crop
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditor()
                            ->imageEditorMode(2),
                        Forms\Components\DatePicker::make('tanggal_kegiatan')
                            ->label('Tanggal Kegiatan')
                            ->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kegiatan')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto_kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kegiatan')
                    ->date()
                    ->date()->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->isoFormat('dddd, DD MMMM YYYY');
                    })
                    ->sortable(),
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
            'index' => Pages\ListKegiatanLuars::route('/'),
            'create' => Pages\CreateKegiatanLuar::route('/create'),
            'edit' => Pages\EditKegiatanLuar::route('/{record}/edit'),
        ];
    }
}
