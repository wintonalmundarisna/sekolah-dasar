<?php

namespace App\Filament\Resources;

use Filament\Panel;
use App\Filament\Resources\GuruResource\Pages;
use App\Models\Guru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
// use Filament\Infolists\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use ZipStream\ZipStream;
use ZipStream\Option\Archive as ZipStreamOptions;
use Filament\Notifications\Notification;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;
    protected static ?string $slug = 'guru';
    protected static ?string $label = 'Data Guru';
    protected static ?string $navigationLabel = 'Guru';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Kesiswaan';
    protected static ?string $panel = 'Guru';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        FileUpload::make('foto')
                            ->image()
                            ->disk('public')
                            ->directory('guru')
                            ->imageEditorAspectRatios([
                                null, // ada button bebas crop
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditor()
                            ->imageEditorMode(2)
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            ),
                        TextInput::make('nama')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('nuptk')
                            ->required()
                            ->afterStateUpdated(fn ($state, $set) => $set('nuptk', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NUPTK sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 30 angka'
                            ])
                            ->maxLength(255)
                            ->numeric()
                            ->label('NUPTK'),
                        Radio::make('jk')
                            ->options([
                                'Laki-Laki' => 'Laki-Laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Jenis Kelamin'),
                        TextInput::make('tempat-lahir')
                            ->required()
                            ->maxLength(20)
                            ->label('Tempat Lahir'),
                        DatePicker::make('tanggal-lahir')
                            ->required()
                            ->label('Tanggal Lahir'),
                        TextInput::make('nip')
                            ->label('NIP')
                            ->afterStateUpdated(fn ($state, $set) => $set('nip', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIP sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 20 angka'
                            ])
                            ->maxLength(255),
                        TextInput::make('status-kepegawaian')
                            ->required()
                            ->maxLength(10)
                            ->label('Status Kepegawaian'),
                        TextInput::make('jenis-ptk')
                            ->required()
                            ->maxLength(50)
                            ->label('Jenis PTK'),
                        TextInput::make('agama')
                            ->required()
                            ->maxLength(10),
                        TextArea::make('alamat')
                            ->required()
                            ->maxLength(65535),
                        TextInput::make('rt')
                            ->maxLength(2)
                            ->label('RT'),
                        TextInput::make('rw')
                            ->maxLength(2)
                            ->label('RW'),
                        TextInput::make('nama-dusun')
                            ->maxLength(50)
                            ->label('Nama Dusun'),
                        TextInput::make('desa-kelurahan')
                            ->required()
                            ->maxLength(30)
                            ->label('Desa / Kelurahan'),
                        TextInput::make('kecamatan')
                            ->required()
                            ->maxLength(30),
                        TextInput::make('kode-pos')
                            ->maxLength(5)
                            ->label('Kode Pos'),
                        TextInput::make('telepon')
                            ->numeric()
                            ->maxLength(20),
                        TextInput::make('hp')
                            ->required()
                            ->numeric()
                            ->label('Nomor HP')
                            ->maxLength(50),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(100),
                        TextInput::make('tugas-tambahan')
                            ->maxLength(100)
                            ->label('Tugas Tambahan'),
                        TextInput::make('sk-cpns')
                            ->maxLength(255)
                            ->label('SK CPNS'),
                        TextInput::make('tanggal-cpns')
                            ->maxLength(255)
                            ->label('Tanggal CPNS'),
                        TextInput::make('sk-pengangkatan')
                            ->required()
                            ->maxLength(100)
                            ->label('SK Pengangkatan'),
                        TextInput::make('tmt-pengangkatan')
                            ->maxLength(255)
                            ->required()
                            ->label('TMT Pengangkatan'),
                        TextInput::make('lembaga-pengangkatan')
                            ->required()
                            ->maxLength(100)
                            ->label('Lembaga Pengangkatan'),
                        TextInput::make('pangkat-golongan')
                            ->maxLength(255)
                            ->label('Pangkat Golongan'),
                        TextInput::make('sumber-gaji')
                            ->required()
                            ->maxLength(50)
                            ->label('Sumber Gaji'),
                        TextInput::make('nama-ibu-kandung')
                            ->required()
                            ->maxLength(50)
                            ->label('Nama Ibu Kandung'),
                        Radio::make('status-perkawinan')
                            ->options([
                                'Kawin' => 'Kawin',
                                'Belum Kawin' => 'Belum Kawin',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Status Perkawinan'),
                        TextInput::make('nama-suami-istri')
                            ->maxLength(length: 20)
                            ->label('Nama Suami / Istri'),
                        TextInput::make('nip-suami-istri')
                            ->afterStateUpdated(fn ($state, $set) => $set('nip-suami-istri', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIP sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 100 angka'
                            ])
                            ->label('NIP Suami / Istri'),
                        TextInput::make('pekerjaan-suami-istri')
                            ->required()
                            ->maxLength(50)
                            ->label('Pekerjaan Suami / Istri'),
                        TextInput::make('tmt-pns')
                            ->maxLength(255)
                            ->label('TMT PNS'),
                        Radio::make('lisensi-kepala-sekolah')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Sudah Lisensi Kepala Sekolah'),
                        Radio::make('diklat-kepengawasan')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Pernah Diklat Kepengawasan'),
                        Radio::make('keahlian-braille')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Keahlian Braille'),
                        Radio::make('keahlian-bahasa-isyarat')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->validationMessages([
                                'required' => 'Pilih salah satu !'
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Keahlian Bahasa Isyarat'),
                        TextInput::make('npwp')
                            ->maxLength(255)
                            ->label('NPWP'),
                        TextInput::make('nama-wajib-pajak')
                            ->maxLength(50)
                            ->label('Nama Wajib Pajak'),
                        TextInput::make('kewarganegaraan')
                            ->required()
                            ->maxLength(30),
                        TextInput::make('bank')
                            ->maxLength(255),
                        TextInput::make('no-rekening-bank')
                            ->label('Nomor Rekening Bank')
                            ->maxLength(255),
                        TextInput::make('rekening-atas-nama')
                            ->label('Rekening Atas Nama')
                            ->maxLength(255),
                        TextInput::make('nik')
                            ->label('NIK')
                            ->afterStateUpdated(fn ($state, $set) => $set('nik', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIk sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 20 angka'
                            ])
                            ->required()
                            ->numeric()
                            ->maxLength(20),
                        TextInput::make('no-kk')
                            ->label('No KK')
                            ->afterStateUpdated(fn ($state, $set) => $set('no-kk', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'Nomor KK sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 20 angka'
                            ])
                            ->numeric()
                            ->maxLength(20),
                        TextInput::make('karpeg')
                            ->maxLength(255),
                        TextInput::make('karis-karsu')
                            ->label('Karis / Karsu')
                            ->maxLength(255),
                        TextInput::make('lintang')
                            ->maxLength(255),
                        TextInput::make('bujur')
                            ->maxLength(255),
                        TextInput::make('nuks')
                            ->label('NUKS')
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->defaultImageUrl(asset('assets/default-teacher.jpg'))
                    ->circular(),
                TextColumn::make('nama')
                    ->sortable()
                    ->markdown(true)
                    ->searchable(),
                TextColumn::make('jenis-ptk')
                    ->label('Jenis PTK')
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
                                ->fromModel(Guru::class)
                                ->except(['id', 'created_at', 'updated_at']),
                        ]),
                    BulkAction::make('exportImages')
                        ->label('Export Gambar')
                        ->icon('heroicon-o-photo') // Menambahkan ikon 
                        ->requiresConfirmation()
                        ->action(function ($records, $action) {
                            $zip = new \ZipArchive();
                            $zipFileName = tempnam(sys_get_temp_dir(), 'images') . '.zip';
                            $missingFiles = [];
                            if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                                foreach ($records as $record) {
                                    if (!empty($record->foto)) { // Memeriksa apakah kolom foto tidak null atau kosong 
                                        $imagePath = storage_path('app/public/' . $record->foto);
                                        if (file_exists($imagePath)) {
                                            $zip->addFile($imagePath, basename($imagePath));
                                        } else { // Tangani kasus di mana file tidak ditemukan 
                                            $notification = Notification::make()
                                                ->title('File tidak ditemukan')
                                                ->body('File tidak ditemukan: ')
                                                ->danger();
                                            $action->failureNotification($notification);
                                            return;
                                            // throw new \Exception('File tidak ditemukan: ' . $record->foto);
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
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}
