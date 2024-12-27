<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PesertaDidikResource\Pages;
use App\Filament\Resources\PesertaDidikResource\RelationManagers;
use App\Models\PesertaDidik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use ZipStream\ZipStream;
use ZipStream\Option\Archive as ZipStreamOptions;
use Filament\Notifications\Notification;

class PesertaDidikResource extends Resource
{
    protected static ?string $model = PesertaDidik::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $slug = 'peserta-didik';
    protected static ?string $navigationLabel = 'Peserta Didik';
    protected static ?string $navigationGroup = 'Kesiswaan';
    protected static ?string $label = 'Data Peserta Didik';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        FileUpload::make('foto')
                            ->image()
                            ->disk('public')
                            ->directory('peserta-didik')
                            ->columnSpanFull()
                            ->imageEditorAspectRatios([
                                null, // ada button bebas crop
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->imageEditor()
                            ->getUploadedFileNameForStorageUsing(
                                fn(TemporaryUploadedFile $file): string => (string) str($file->getClientOriginalName())
                                    ->prepend(substr(Str::uuid(), 0, 5) . '_'),
                            )
                            ->imageEditorMode(2),
                        TextInput::make('nama')
                            ->required(),
                        TextInput::make('nipd')
                            ->required()
                            ->label('NIPD'),
                        Radio::make('jk')
                            ->options([
                                'Laki-Laki' => 'Laki-Laki',
                                'Perempuan' => 'Perempuan',
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Jenis Kelamin'),
                        TextInput::make('nisn')
                            ->required()
                            ->label('NISN'),
                        TextInput::make('tempat-lahir')
                            ->required()
                            ->label('Tempat Lahir'),
                        DatePicker::make('tanggal-lahir')
                            ->label('Tanggal Lahir')
                            ->required(),
                        TextInput::make('nik')
                            ->label('NIK')
                            ->required(),
                        TextInput::make('agama')
                            ->required(),
                        Textarea::make('alamat')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('rt')
                            ->required()
                            ->label('RT')
                            ->numeric(),
                        TextInput::make('rw')
                            ->required()
                            ->label('RW')
                            ->numeric(),
                        TextInput::make('dusun'),
                        TextInput::make('kelurahan')
                            ->required(),
                        TextInput::make('kecamatan')
                            ->required(),
                        TextInput::make('kode-pos')
                            ->label('Kode Pos'),
                        TextInput::make('jenis-tinggal')
                            ->required()
                            ->label('Jenis Tinggal'),
                        TextInput::make('alat-transportasi')
                            ->required()
                            ->label('Alat Transportasi'),
                        TextInput::make('telepon')
                            ->tel()
                            ->numeric(),
                        TextInput::make('hp')
                            ->label('Nomor HP')
                            ->numeric(),
                        TextInput::make('email')
                            ->email(),
                        TextInput::make('skhun')
                            ->label('SKHUN'),
                        Radio::make('penerima-kps')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Penerima KPS'),
                        TextInput::make('no-kps')
                            ->label('No KPS'),
                        Section::make('Data Ayah')
                            ->schema([
                                TextInput::make('nama-ayah')
                                    ->label('Nama Ayah')
                                    ->required(),
                                TextInput::make('tahun-lahir-ayah')
                                    ->required()
                                    ->label('Tahun Lahir'),
                                Select::make('jenjang-pendidikan-ayah')
                                    ->options([
                                        'Tidak Sekolah' => 'Tidak Sekolah',
                                        'SD' => 'SD',
                                        'SMP' => 'SMP',
                                        'SMA / Sederajat' => 'SMA / Sederajat',
                                        'S1' => 'S1',
                                        'S2' => 'S2',
                                        'S3' => 'S3',
                                    ])
                                    ->label('Jenjang Pendidikan Ayah')
                                    ->required(),
                                TextInput::make('pekerjaan-ayah')
                                    ->label('Pekerjaan Ayah')
                                    ->required(),
                                TextInput::make('penghasilan-ayah')
                                    ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                                    ->numeric()
                                    ->required()
                                    ->label('Penghasilan Ayah')
                                    ->prefix('Rp'),
                                TextInput::make('nik-ayah')
                                    ->label('NIK Ayah')
                            ]),
                        Section::make('Data Ibu')
                            ->schema([
                                TextInput::make('nama-ibu')
                                    ->required()
                                    ->label('Nama Ibu'),
                                TextInput::make('tahun-lahir-ibu')
                                    ->label('Tahun Lahir Ibu')
                                    ->required(),
                                Select::make('jenjang-pendidikan-ibu')
                                    ->options([
                                        'Tidak Sekolah' => 'Tidak Sekolah',
                                        'SD' => 'SD',
                                        'SMP' => 'SMP',
                                        'SMA / Sederajat' => 'SMA / Sederajat',
                                        'S1' => 'S1',
                                        'S2' => 'S2',
                                        'S3' => 'S3',
                                    ])
                                    ->label('Jenjang Pendidikan Ibu')
                                    ->required(),
                                TextInput::make('pekerjaan-ibu')
                                    ->required()
                                    ->label('Pekerjaan Ibu'),
                                TextInput::make('penghasilan-ibu')
                                    ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                                    ->required()
                                    ->label('Penghasilan Ibu')
                                    ->numeric()
                                    ->prefix('Rp'),
                                TextInput::make('nik-ibu')
                                    ->label('NIK Ibu')
                            ]),
                        Section::make('Data Wali')
                            ->schema([
                                TextInput::make('nama-wali')
                                    ->label('Nama Wali'),
                                TextInput::make('tahun-lahir-wali')
                                    ->label('Tahun Lahir Wali'),
                                Select::make('jenjang-pendidikan-wali')
                                    ->options([
                                        'Tidak Sekolah' => 'Tidak Sekolah',
                                        'SD' => 'SD',
                                        'SMP' => 'SMP',
                                        'SMA / Sederajat' => 'SMA / Sederajat',
                                        'S1' => 'S1',
                                        'S2' => 'S2',
                                        'S3' => 'S3',
                                    ])
                                    ->label('Jenjang Pendidikan Wali'),
                                TextInput::make('pekerjaan-wali')
                                    ->label('Pekerjaan Wali'),
                                TextInput::make('penghasilan-wali')
                                    ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                                    ->label('Penghasilan Wali')
                                    ->numeric()
                                    ->prefix('Rp'),
                                TextInput::make('nik-wali')
                                    ->label('NIK Wali')
                            ]),
                        Select::make('rombel-saat-ini')
                            ->options([
                                'Kelas 1A' => 'Kelas 1A',
                                'Kelas 2' => 'Kelas 2',
                                'Kelas 3' => 'Kelas 3',
                                'Kelas 4' => 'Kelas 4',
                                'Kelas 5' => 'Kelas 5',
                                'Kelas 6' => 'Kelas 6',
                            ])
                            ->label('Rombel Saat Ini')
                            ->required(),
                        TextInput::make('no-ujian-nasioanl')
                            ->label('Nomor Ujian Nasional'),
                        TextInput::make('no-seri-ijazah')
                            ->label('Nomor Seri Ijazah'),
                        Radio::make('penerima-kip')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Penerima KIP'),
                        TextInput::make('no-kip')
                            ->label('Nomor KIP'),
                        TextInput::make('nama-di-kip')
                            ->label('Nama KIP'),
                        TextInput::make('no-kks')
                            ->label('Nomor KKS'),
                        TextInput::make('no-akta-lahir')
                            ->label('Nomor Registrasi Akta Lahir'),
                        TextInput::make('bank'),
                        TextInput::make('no-rekening-bank')
                            ->label('Nomor Rekening Bank'),
                        TextInput::make('rekening-atas-nama')
                            ->label('Rekening Atas Nama'),
                        Radio::make('layak-pip')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Layak PIP (Usulan dari sekolah)'),
                        Select::make('alasan-layak-pip')
                            ->options([
                                'Pemegang PKH/KPS/KKS' => 'Pemegang PKH/KPS/KKS',
                                'Siwa Miskin/Rentan Miskin' => 'Siwa Miskin/Rentan Miskin',
                            ])
                            ->label('Alasan Layak PIP'),
                        Radio::make('kebutuhan-khusus')
                            ->options([
                                'Ada' => 'Ada',
                                'Tidak Ada' => 'Tidak Ada',
                            ])
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Kebutuhan Khusus'),
                        TextInput::make('sekolah-asal')
                            ->label('Sekolah Asal'),
                        TextInput::make('anak-ke-berapa')
                            ->label('Anak Ke Berapa')
                            ->required()
                            ->numeric(),
                        TextInput::make('lintang'),
                        TextInput::make('bujur'),
                        TextInput::make('no-kk')
                            ->label('Nomor KK'),
                        TextInput::make('berat-badan')
                            ->label('Berat Badan')
                            ->required()
                            ->numeric(),
                        TextInput::make('tinggi-badan')
                            ->label('Tinggi Badan')
                            ->required()
                            ->numeric(),
                        TextInput::make('lingkar-kepala')
                            ->label('Lingkar Kepala')
                            ->numeric(),
                        TextInput::make('jml-saudara-kandung')
                            ->label('Jumlah Saudara Kandung')
                            ->numeric(),
                        TextInput::make('jarak-ke-sekolah')
                            ->label('Jarak Dari Rumah Ke Sekolah')
                            ->numeric(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    // ->circular(),
                    ->defaultImageUrl(asset('assets/default-teacher.jpg')),
                TextColumn::make('nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nipd')
                    ->label('NIPD')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nisn')
                    ->label('NISN')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('rombel-saat-ini')
                    ->label('Rombel')
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
                        ->exports([
                            ExcelExport::make()
                                ->askForFilename()
                                // ->askForWriterType()
                                ->fromModel(PesertaDidik::class)
                                ->except(['id', 'created_at', 'updated_at']),
                        ]),
                    BulkAction::make('exportImages')
                        ->label('Export Gambar')
                        ->icon('heroicon-o-users') // Menambahkan ikon 
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
            'index' => Pages\ListPesertaDidiks::route('/'),
            'create' => Pages\CreatePesertaDidik::route('/create'),
            'edit' => Pages\EditPesertaDidik::route('/{record}/edit'),
        ];
    }
}
