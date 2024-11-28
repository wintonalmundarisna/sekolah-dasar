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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextArea;

class GuruResource extends Resource
{
    protected static ?string $model = Guru::class;
    protected static ?string $slug = 'guru';
    protected static ?string $label = 'Data Guru';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Kesiswaan';
    protected static ?string $navigationLabel = 'Guru';
    protected static ?string $panel = 'Guru';
    // public function panel(Panel $panel): Panel
    // {
    //     return $panel
    //         ->tenant(Guru::class, slugAttribute: 'slug');
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        FileUpload::make('foto')
                            ->image()
                            ->directory('guru')
                            ->required(),
                        TextInput::make('nama')
                            ->required()
                            ->maxLength(100),
                        TextInput::make('nuptk')
                            ->required()
                            ->maxLength(255)
                            ->numeric()
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
                        TextInput::make('tempat-lahir')
                            ->required()
                            ->maxLength(20)
                            ->label('Tempat Lahir'),
                        DatePicker::make('tanggal-lahir')
                            ->required()
                            ->label('Tanggal Lahir'),
                        TextInput::make('nip')
                            ->label('NIP')
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Status Perkawinan'),
                        TextInput::make('nama-suami-istri')
                            ->maxLength(length: 20)
                            ->label('Nama Suami / Istri'),
                        TextInput::make('nip-suami-istri')
                            ->maxLength(255)
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Sudah Lisensi Kepala Sekolah'),
                        Radio::make('diklat-kepengawasan')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
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
                            ->inline()
                            ->inlineLabel(false)
                            ->required()
                            ->label('Keahlian Braille'),
                        Radio::make('keahlian-bahasa-isyarat')
                            ->options([
                                'Ya' => 'Ya',
                                'Tidak' => 'Tidak',
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
                            ->required()
                            ->numeric()
                            ->maxLength(20),
                        TextInput::make('no-kk')
                            ->label('No KK')
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
                    ->circular(),
                TextColumn::make('nama')
                    ->sortable()
                    ->markdown(true)
                    ->searchable(),
                TextColumn::make('jk')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                TextColumn::make('jenis-ptk')
                    ->label('Jenis PTK')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->color('warning'),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListGurus::route('/'),
            'create' => Pages\CreateGuru::route('/create'),
            'edit' => Pages\EditGuru::route('/{record}/edit'),
        ];
    }
}
