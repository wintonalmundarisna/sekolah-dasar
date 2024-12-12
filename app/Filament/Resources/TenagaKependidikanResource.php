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
                            ->directory('tenaga-kependidikan')
                            ->required(),
                        TextInput::make('nama')
                            ->required()
                            ->maxLength(50),
                        TextInput::make('nuptk')
                            ->label('NUPTK')
                            ->maxLength(20),
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
                            ->label('Tempat Lahir')
                            ->maxLength(50),
                        DatePicker::make('tanggal_lahir')
                            ->label('Tanggal Lahir')
                            ->required(),
                        TextInput::make('nip')
                            ->label('NIP')
                            ->maxLength(50),
                        TextInput::make('status_kepegawaian')
                            ->required()
                            ->label('Status Kepegawaian')
                            ->maxLength(10),
                        TextInput::make('jenis_ptk')
                            ->label('Jenis PTK')
                            ->required()
                            ->maxLength(50),
                        TextInput::make('agama')
                            ->required()
                            ->maxLength(15),
                        Textarea::make('alamat')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                        TextInput::make('rt')
                            ->label('RT')
                            ->maxLength(2),
                        TextInput::make('rw')
                            ->label('RW')
                            ->maxLength(2),
                        TextInput::make('nama_dusun')
                            ->label('Nama Dusun')
                            ->maxLength(50),
                        TextInput::make('desa_kelurahan')
                            ->label('Desa / Kelurahan')
                            ->maxLength(50),
                        TextInput::make('kecamatan')
                            ->required()
                            ->maxLength(50),
                        TextInput::make('kode_pos')
                            ->label('Kode POS')
                            ->maxLength(5),
                        TextInput::make('telepon')
                            ->tel()
                            ->maxLength(15),
                        TextInput::make('hp')
                            ->label('Nomor Handphone')
                            ->required()
                            ->maxLength(15),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(100),
                        TextInput::make('tugas_tambahan')
                            ->label('Tugas Tambahan')
                            ->maxLength(100),
                        TextInput::make('sk_cpns')
                            ->label('SK CPNS')
                            ->maxLength(100),
                        TextInput::make('tanggal_cpns')
                            ->label('Tanggal CPNS')
                            ->maxLength(20),
                        TextInput::make('sk_pengangkatan')
                            ->label('SK Pengangkatan')
                            ->maxLength(30),
                        DatePicker::make('tmt_pengangkatan')
                            ->label('TMT Pengangkatan')
                            ->required(),
                        TextInput::make('lembaga_pengangkatan')
                            ->label('Lembaga Pengangkatan')
                            ->required()
                            ->maxLength(20),
                        TextInput::make('pangkat_golongan')
                            ->label('Pangkat Golongan')
                            ->maxLength(100),
                        TextInput::make('sumber_gaji')
                            ->label('Sumber Gaji')
                            ->required()
                            ->maxLength(50),
                        TextInput::make('nama_ibu_kandung')
                            ->label('Nama Ibu Kandung')
                            ->required()
                            ->maxLength(50),
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
                            ->label('Nama Suami / Istri')
                            ->maxLength(50),
                        TextInput::make('nip_suami_istri')
                            ->label('NIP Suami / Istri')
                            ->maxLength(50),
                        TextInput::make('pekerjaan_suami_istri')
                            ->label('Pekerjaan Suami / Istri')
                            ->required()
                            ->maxLength(50),
                        TextInput::make('tmt_pns')
                            ->label('TMT PNS')
                            ->maxLength(50),
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
                            ->label('NPWP')
                            ->maxLength(50),
                        TextInput::make('nama_wajib_pajak')
                            ->label('Nama Wajib Pajak')
                            ->maxLength(50),
                        TextInput::make('kewarganegaraan')
                            ->required()
                            ->maxLength(20),
                        TextInput::make('bank')
                            ->maxLength(50),
                        TextInput::make('no_rekening')
                            ->label('Nomor Rekening')
                            ->maxLength(50),
                        TextInput::make('rekening_atas_nama')
                            ->label('Rekening Atas Nama')
                            ->maxLength(50),
                        TextInput::make('nik')
                            ->label('NIK')
                            ->required()
                            ->maxLength(20),
                        TextInput::make('no_kk')
                            ->label('Nomor KK')
                            ->maxLength(20),
                        TextInput::make('karpeg')
                            ->maxLength(50),
                        TextInput::make('karis_karsu')
                            ->label('Karis / Karsu')
                            ->maxLength(50),
                        TextInput::make('lintang')
                            ->maxLength(50),
                        TextInput::make('bujur')
                            ->maxLength(50),
                        TextInput::make('nuks')
                            ->label('NUKS')
                            ->maxLength(50),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                    ->circular()
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
