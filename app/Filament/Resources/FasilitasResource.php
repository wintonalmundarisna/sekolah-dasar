<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasResource\Pages;
use App\Filament\Resources\FasilitasResource\RelationManagers;
use App\Models\Fasilitas;
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

class FasilitasResource extends Resource
{
    protected static ?string $model = Fasilitas::class;

    protected static ?string $slug = 'fasilitas';
    protected static ?string $label = 'Data Fasilitas';
    protected static ?string $navigationLabel = 'Fasilitas';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Informasi';
    protected static ?string $panel = 'Fasilitas';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('nama_fasilitas')
                            ->label('Nama Fasilitas')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('jumlah')
                            ->label('Jumlah Fasilitas')
                            ->required()
                            ->numeric(),
                        Forms\Components\FileUpload::make('foto_fasilitas')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->directory('informasi/fasilitas')
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
                            ->imageEditorMode(2)
                            ->label('Foto Fasilitas'),
                        Forms\Components\Select::make('kategori')
                            ->options([
                                'Sarana' => 'Sarana',
                                'Sarana Penunjang' => 'Sarana Penunjang',
                                'Alat Peraga' => 'Alat Peraga',
                                'Bangunan' => 'Bangunan',
                                'Fasilitas' => 'Fasilitas',
                            ])
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_fasilitas')
                    ->label('Nama Fasilitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah Fasilitas')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto_fasilitas')
                    ->label('Foto Fasilitas')
                    // ->formatStateUsing(function ($state) {
                    //     return basename($state);
                    // })
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
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
            'index' => Pages\ListFasilitas::route('/'),
            'create' => Pages\CreateFasilitas::route('/create'),
            'edit' => Pages\EditFasilitas::route('/{record}/edit'),
        ];
    }
}
