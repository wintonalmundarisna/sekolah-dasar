<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TenagaKependidikanResource\Pages;
use App\Filament\Resources\TenagaKependidikanResource\RelationManagers;
use App\Models\TenagaKependidikan;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Illuminate\Support\Str;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use ZipStream\ZipStream;
use ZipStream\Option\Archive as ZipStreamOptions;
use Filament\Notifications\Notification;

class TenagaKependidikanResource extends Resource
{
    protected static ?string $model = TenagaKependidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $slug = 'tenaga-kependidikan';
    protected static ?string $label = 'Data Tenaga Kependidikan';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Tenaga Kependidikan';
    protected static ?string $navigationGroup = 'Kesiswaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        FileUpload::make('foto')
                            ->image()
                            ->disk('public')
                            ->directory('tenaga-kependidikan')
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
                            ->required(),
                        TextInput::make('nuptk')
                            ->afterStateUpdated(fn($state, $set) => $set('nuptk', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NUPTK sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 30 angka'
                            ])
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
                        TextInput::make('tempat_lahir')
                            ->required()
                            ->label('Tempat Lahir'),
                        DatePicker::make('tanggal_lahir')
                            ->label('Tanggal Lahir')
                            ->required(),
                        TextInput::make('nip')
                            ->afterStateUpdated(fn($state, $set) => $set('nip', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIP sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 20 angka'
                            ])
                            ->label('NIP'),
                        TextInput::make('status_kepegawaian')
                            ->required()
                            ->label('Status Kepegawaian'),
                        TextInput::make('jenis_ptk')
                            ->label('Jenis PTK')
                            ->required(),
                        TextInput::make('agama')
                            ->required(),
                        Textarea::make('alamat')
                            ->required()
                            ->columnSpanFull(),
                        TextInput::make('rt')
                            ->label('RT'),
                        TextInput::make('rw')
                            ->label('RW'),
                        TextInput::make('nama_dusun')
                            ->label('Nama Dusun'),
                        TextInput::make('desa_kelurahan')
                            ->label('Desa / Kelurahan'),
                        TextInput::make('kecamatan')
                            ->required(),
                        TextInput::make('kode_pos')
                            ->label('Kode POS'),
                        TextInput::make('telepon')
                            ->tel(),
                        TextInput::make('hp')
                            ->label('Nomor Handphone')
                            ->required(),
                        TextInput::make('email')
                            ->email()
                            ->required(),
                        TextInput::make('tugas_tambahan')
                            ->label('Tugas Tambahan'),
                        TextInput::make('sk_cpns')
                            ->label('SK CPNS'),
                        TextInput::make('tanggal_cpns')
                            ->label('Tanggal CPNS'),
                        TextInput::make('sk_pengangkatan')
                            ->label('SK Pengangkatan'),
                        DatePicker::make('tmt_pengangkatan')
                            ->label('TMT Pengangkatan')
                            ->required(),
                        TextInput::make('lembaga_pengangkatan')
                            ->label('Lembaga Pengangkatan')
                            ->required(),
                        TextInput::make('pangkat_golongan')
                            ->label('Pangkat Golongan'),
                        TextInput::make('sumber_gaji')
                            ->label('Sumber Gaji')
                            ->required(),
                        TextInput::make('nama_ibu_kandung')
                            ->label('Nama Ibu Kandung')
                            ->required(),
                        Radio::make('status_perkawinan')
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
                        TextInput::make('nama_suami_istri')
                            ->label('Nama Suami / Istri'),
                        TextInput::make('nip_suami_istri')
                            ->afterStateUpdated(fn($state, $set) => $set('nip_suami_istri', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIP sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 100 angka'
                            ])
                            ->label('NIP Suami / Istri'),
                        TextInput::make('pekerjaan_suami_istri')
                            ->label('Pekerjaan Suami / Istri')
                            ->required(),
                        TextInput::make('tmt_pns')
                            ->label('TMT PNS'),
                        Radio::make('lisensi_kepala_sekolah')
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
                        Radio::make('diklat_kepengawasan')
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
                        Radio::make('keahlian_braille')
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
                        Radio::make('keahlian_bahasa_isyarat')
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
                            ->label('NPWP'),
                        TextInput::make('nama_wajib_pajak')
                            ->label('Nama Wajib Pajak'),
                        TextInput::make('kewarganegaraan')
                            ->required(),
                        TextInput::make('bank'),
                        TextInput::make('no_rekening')
                            ->label('Nomor Rekening'),
                        TextInput::make('rekening_atas_nama')
                            ->label('Rekening Atas Nama'),
                        TextInput::make('nik')
                            ->afterStateUpdated(fn($state, $set) => $set('nik', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'NIK sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 30 angka'
                            ])
                            ->label('NIK')
                            ->required(),
                        TextInput::make('no_kk')
                            ->afterStateUpdated(fn($state, $set) => $set('no_kk', '@ ' . $state))
                            ->unique()
                            ->validationMessages([
                                'unique' => 'Nomor KK sudah ada',
                                'max_digits' => 'Tidak boleh lebih dari 30 angka'
                            ])
                            ->label('Nomor KK'),
                        TextInput::make('karpeg'),
                        TextInput::make('karis_karsu')
                            ->label('Karis / Karsu'),
                        TextInput::make('lintang'),
                        TextInput::make('bujur'),
                        TextInput::make('nuks')
                            ->label('NUKS')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->circular()
                    ->defaultImageUrl(asset('assets/default-teacher.jpg'))
                    ->searchable(),
                TextColumn::make('nama')
                    ->markdown(true)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jenis_ptk')
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
                                ->fromModel(TenagaKependidikan::class)
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
            'index' => Pages\ListTenagaKependidikans::route('/'),
            'create' => Pages\CreateTenagaKependidikan::route('/create'),
            'edit' => Pages\EditTenagaKependidikan::route('/{record}/edit'),
        ];
    }
}
