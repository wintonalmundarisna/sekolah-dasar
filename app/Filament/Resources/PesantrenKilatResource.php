<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesantrenKilatResource\Pages;
use App\Filament\Resources\PesantrenKilatResource\RelationManagers;
use App\Models\PesantrenKilat;
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


class PesantrenKilatResource extends Resource
{
    protected static ?string $model = PesantrenKilat::class;

    protected static ?string $slug = 'pesantren-kilat';
    protected static ?string $label = 'Data Pesantren Kilat';
    protected static ?string $navigationLabel = 'Pesantren Kilat';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-o-bolt';
    protected static ?string $navigationGroup = 'Galeri';
    protected static ?string $panel = 'Pesantren Kilat';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\FileUpload::make('dokumentasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Tidak boleh kosong'
                            ])
                            ->acceptedFileTypes(['image/*', 'video/*'])
                            ->downloadable()
                            ->previewable(true)
                            ->openable(true)
                            ->disk('public')
                            ->directory('galeri/pesantren_kilat')
                            ->maxSize(512000)
                            ->preserveFilenames() // ambil nama file ori
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('dokumentasi')
                    ->formatStateUsing(function ($state) {
                        $mime = mime_content_type(storage_path('app/public/' . $state));
                        if (str_starts_with($mime, 'image/')) {
                            return new HtmlString('<img src="' . asset('storage/' . $state) . '" width="150" height="150" />');
                        } elseif (str_starts_with($mime, 'video/')) {
                            return new HtmlString('<video width="150" height="150" controls> <source src="' . asset('storage/' . $state) . '" type="video/mp4"> Your browser does not support the video tag. </video>');
                        }
                        return $state;
                    })
                    ->sortable()
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
                                ->fromModel(PesantrenKilat::class)
                                ->except(['id', 'created_at', 'updated_at']),
                        ]),
                    BulkAction::make('exportImages')
                        ->label('Export Dokumentasi')
                        ->icon('heroicon-o-photo') // Menambahkan ikon 
                        ->requiresConfirmation()
                        ->action(function ($records, $action) {
                            $zip = new \ZipArchive();
                            $zipFileName = tempnam(sys_get_temp_dir(), 'images') . '.zip';
                            $missingFiles = [];
                            if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                                foreach ($records as $record) {
                                    if (!empty($record->dokumentasi)) { // Memeriksa apakah kolom dokumentasi tidak null atau kosong 
                                        $imagePath = storage_path('app/public/' . $record->dokumentasi);
                                        if (file_exists($imagePath)) {
                                            $zip->addFile($imagePath, basename($imagePath));
                                        } else { // Tangani kasus di mana file tidak ditemukan 
                                            $notification = Notification::make()
                                                ->title('File tidak ditemukan')
                                                ->body('File tidak ditemukan: ')
                                                ->danger();
                                            $action->failureNotification($notification);
                                            return;
                                            // throw new \Exception('File tidak ditemukan: ' . $record->dokumentasi);
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
            'index' => Pages\ListPesantrenKilats::route('/'),
            'create' => Pages\CreatePesantrenKilat::route('/create'),
            'edit' => Pages\EditPesantrenKilat::route('/{record}/edit'),
        ];
    }
}
