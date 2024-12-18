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
                            ->label('NUPTK'),
                        Radio::make('jk')
                            ->options([
                                'Laki-Laki' => 'Laki-Laki',
                                'Perempuan' => 'Perempuan',
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Status Perkawinan'),
                        TextInput::make('nama_suami_istri')
                            ->label('Nama Suami / Istri'),
                        TextInput::make('nip_suami_istri')
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Sudah Lisensi Kepala Sekolah'),
                        Radio::make('diklat_kepengawasan')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Keahlian Braille'),
                        Radio::make('keahlian_bahasa_isyarat')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
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
                            ->label('NIK')
                            ->required(),
                        TextInput::make('no_kk')
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
