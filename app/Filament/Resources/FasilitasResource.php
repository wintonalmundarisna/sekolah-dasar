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
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ViewAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use ZipStream\ZipStream;
use ZipStream\Option\Archive as ZipStreamOptions;
use Filament\Notifications\Notification;

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
                            ->validationMessages([
                                'required' => 'Tidak boleh kosong'
                            ])
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
                    ExportBulkAction::make()
                        ->label('Export Data')
                        ->icon('heroicon-o-document-text') // Menambahkan ikon 
                        ->exports([
                            ExcelExport::make()
                                ->askForFilename()
                                // ->askForWriterType()
                                ->fromModel(Fasilitas::class)
                                ->except(['id', 'created_at', 'updated_at']),
                        ]),
                    BulkAction::make('exportImages')
                        ->label('Export Foto')
                        ->icon('heroicon-o-photo') // Menambahkan ikon 
                        ->requiresConfirmation()
                        ->action(function ($records, $action) {
                            $zip = new \ZipArchive();
                            $zipFileName = tempnam(sys_get_temp_dir(), 'images') . '.zip';
                            $missingFiles = [];
                            if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                                foreach ($records as $record) {
                                    if (!empty($record->foto_fasilitas)) { // Memeriksa apakah kolom foto_fasilitas tidak null atau kosong 
                                        $imagePath = storage_path('app/public/' . $record->foto_fasilitas);
                                        if (file_exists($imagePath)) {
                                            $zip->addFile($imagePath, basename($imagePath));
                                        } else { // Tangani kasus di mana file tidak ditemukan 
                                            $notification = Notification::make()
                                                ->title('File tidak ditemukan')
                                                ->body('File tidak ditemukan: ')
                                                ->danger();
                                            $action->failureNotification($notification);
                                            return;
                                            // throw new \Exception('File tidak ditemukan: ' . $record->foto_fasilitas);
                                        }
                                    }
                                }
                                $zip->close();
                                // Periksa apakah file ZIP ada sebelum mengirimkannya 
                                if (file_exists($zipFileName)) {
                                    // Mengirim file ZIP ke browser untuk diunduh 
                                    return response()->download($zipFileName)->deleteFileAfterSend(true);
                                } else {
                                    // Tangani kasus di mana file ZIP tidak ada
                                    $notification = Notification::make()
                                        ->title('File ZIP tidak ditemukan')
                                        ->body('File ZIP tidak ditemukan: ')
                                        ->danger();
                                    $action->failureNotification($notification);
                                    return;

                                    // throw new \Exception('File ZIP tidak ditemukan.');
                                }
                            } else {
                                // Tangani kasus di mana file ZIP tidak bisa dibuka 
                                $notification = Notification::make()
                                    ->title('Tidak dapat menemukan file ZIP')
                                    ->body('Tidak dapat menemukan file ZIP')
                                    ->danger();
                                $action->failureNotification($notification);
                                return;

                                // throw new \Exception('Tidak dapat membuka file ZIP.');
                            }
                            // Tampilkan pesan jika ada file yang tidak ditemukan 
                            if (!empty($missingFiles)) {
                                $missingFilesList = implode(', ', $missingFiles);
                                $notification = Notification::make()
                                    ->title('File ZIP tidak ditemukan')
                                    ->body('File ZIP tidak ditemukan: ')
                                    ->danger();
                                $action->failureNotification($notification);
                            }
                        }),
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
