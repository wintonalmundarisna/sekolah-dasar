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


class PesertaDidikResource extends Resource
{
    protected static ?string $model = PesertaDidik::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $slug = 'peserta-didik';
    protected static ?string $navigationLabel = 'Peserta Didik';
    protected static ?string $navigationGroup = 'Kesiswaan';
    protected static ?string $label = 'Data Peserta Didik';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section::make()
                //     ->schema([
                FileUpload::make('foto')
                    ->image()
                    ->directory('peserta-didik')
                    ->columnSpanFull()
                    ->required(),
                TextInput::make('nama')
                    ->required()
                    ->maxLength(50),
                TextInput::make('nipd')
                    ->required()
                    ->label('NIPD')
                    ->maxLength(10),
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
                    ->label('NISN')
                    ->maxLength(10),
                TextInput::make('tempat-lahir')
                    ->required()
                    ->label('Tempat Lahir')
                    ->maxLength(30),
                DatePicker::make('tanggal-lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                TextInput::make('nik')
                    ->label('NIK')
                    ->required()
                    ->maxLength(20),
                TextInput::make('agama')
                    ->required()
                    ->maxLength(30),
                Textarea::make('alamat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                TextInput::make('rt')
                    ->required()
                    ->label('RT')
                    ->numeric(),
                TextInput::make('rw')
                    ->required()
                    ->label('RW')
                    ->numeric(),
                TextInput::make('dusun')
                    ->maxLength(50),
                TextInput::make('kelurahan')
                    ->required()
                    ->maxLength(50),
                TextInput::make('kecamatan')
                    ->required()
                    ->maxLength(50),
                TextInput::make('kode-pos')
                    ->label('Kode Pos')
                    ->maxLength(5),
                TextInput::make('jenis-tinggal')
                    ->required()
                    ->label('Jenis Tinggal')
                    ->maxLength(100),
                TextInput::make('alat-transportasi')
                    ->required()
                    ->label('Alat Transportasi')
                    ->maxLength(50),
                TextInput::make('telepon')
                    ->tel()
                    ->numeric(),
                TextInput::make('hp')
                    ->label('Nomor HP')
                    ->numeric(),
                TextInput::make('email')
                    ->email()
                    ->maxLength(100),
                TextInput::make('skhun')
                    ->label('SKHUN')
                    ->maxLength(100),
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
                    ->label('No KPS')
                    ->maxLength(100),
                Section::make('Data Ayah')
                    ->schema([
                        TextInput::make('nama-ayah')
                            ->label('Nama Ayah')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('tahun-lahir-ayah')
                            ->required()
                            ->label('Tahun Lahir')
                            ->maxLength(5),
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
                            ->required()
                            ->maxLength(50),
                        TextInput::make('penghasilan_ayah')
                            ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                            ->numeric()
                            ->required()
                            ->label('Penghasilan Ayah')
                            ->prefix('Rp'),
                        TextInput::make('nik-ayah')
                            ->label('NIK Ayah')
                            ->maxLength(20),
                    ]),
                Section::make('Data Ibu')
                    ->schema([
                        TextInput::make('nama-ibu')
                            ->required()
                            ->label('Nama Ibu')
                            ->maxLength(100),
                        TextInput::make('tahun-lahir-ibu')
                            ->label('Tahun Lahir Ibu')
                            ->required()
                            ->maxLength(5),
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
                            ->maxLength(50)
                            ->label('Pekerjaan Ibu'),
                        TextInput::make('penghasilan-ibu')
                            ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                            ->required()
                            ->label('Penghasilan Ibu')
                            ->numeric()
                            ->prefix('Rp'),
                        TextInput::make('nik-ibu')
                            ->label('NIK Ibu')
                            ->maxLength(20),
                    ]),
                Section::make('Data Wali')
                    ->schema([
                        TextInput::make('nama-wali')
                            ->label('Nama Wali')
                            ->maxLength(50),
                        TextInput::make('tahun-lahir-wali')
                            ->label('Tahun Lahir Wali')
                            ->maxLength(5),
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
                            ->label('Pekerjaan Wali')
                            ->maxLength(50),
                        TextInput::make('penghasilan-wali')
                            ->currencyMask(thousandSeparator: '.', decimalSeparator: ',', precision: 2)
                            ->label('Penghasilan Wali')
                            ->numeric()
                            ->prefix('Rp'),
                        TextInput::make('nik-wali')
                            ->label('NIK Wali')
                            ->maxLength(20),
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
                    ->label('Nomor Ujian Nasional')
                    ->maxLength(50),
                TextInput::make('no-seri-ijazah')
                    ->label('Nomor Seri Ijazah')
                    ->maxLength(50),
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
                    ->label('Nomor KIP')
                    ->maxLength(50),
                TextInput::make('nama-di-kip')
                    ->label('Nama KIP')
                    ->maxLength(50),
                TextInput::make('no-kks')
                    ->label('Nomor KKS')
                    ->maxLength(100),
                TextInput::make('no-akta-lahir')
                    ->label('Nomor Registrasi Akta Lahir')
                    ->maxLength(100),
                TextInput::make('bank')
                    ->maxLength(50),
                TextInput::make('no-rekening-bank')
                    ->label('Nomor Rekening Bank')
                    ->maxLength(50),
                TextInput::make('rekening-atas-nama')
                    ->label('Rekening Atas Nama')
                    ->maxLength(50),
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
                    ->label('Sekolah Asal')
                    ->maxLength(50),
                TextInput::make('anak-ke-berapa')
                    ->label('Anak Ke Berapa')
                    ->required()
                    ->numeric(),
                TextInput::make('lintang')
                    ->maxLength(100),
                TextInput::make('bujur')
                    ->maxLength(100),
                TextInput::make('no-kk')
                    ->label('Nomor KK')
                    ->maxLength(50),
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
                // ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                // ->circular(),
                ,
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
