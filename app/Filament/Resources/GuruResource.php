<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GuruResource\Pages;
use App\Filament\Resources\GuruResource\RelationManagers;
use App\Models\Guru;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GuruResource extends Resource
{
    // ! Baru berhasil ganti label
    protected static ?string $model = Guru::class;
    protected static ?string $slug = 'guru';
    protected static ?string $label = 'Kelola Data Guru';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Kesiswaan';
    

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('foto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nuptk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat-lahir')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tanggal-lahir')
                    ->required(),
                Forms\Components\TextInput::make('nip')
                    ->maxLength(255),
                Forms\Components\TextInput::make('status-kepegawaian')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jenis-ptk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('agama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('rt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rw')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama-dusun')
                    ->maxLength(255),
                Forms\Components\TextInput::make('desa-kelurahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kode-pos')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telepon')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('hp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tugas-tambahan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sk-cpns')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal-cpns')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sk-pengangkatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tmt-pengangkatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('lembaga-pengangkatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pangkat-golongan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sumber-gaji')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama-ibu-kandung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('status-perkawinan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama-suami-istri')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nip-suami-istri')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan-suami-istri')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tmt-pns')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lisensi-kepala-sekolah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('diklat-kepengawasan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keahlian-braille')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keahlian-bahasa-isyarat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('npwp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama-wajib-pajak')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kewarganegaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bank')
                    ->maxLength(255),
                Forms\Components\TextInput::make('no-rekening-bank')
                    ->maxLength(255),
                Forms\Components\TextInput::make('rekening-atas-nama')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no-kk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('karpeg')
                    ->maxLength(255),
                Forms\Components\TextInput::make('karis-karsu')
                    ->maxLength(255),
                Forms\Components\TextInput::make('lintang')
                    ->maxLength(255),
                Forms\Components\TextInput::make('bujur')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nuks')
                    ->maxLength(255),
            ])->tenant(Guru::class, slugAttribute: 'slug');
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nuptk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat-lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal-lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status-kepegawaian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenis-ptk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rw')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama-dusun')
                    ->searchable(),
                Tables\Columns\TextColumn::make('desa-kelurahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode-pos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tugas-tambahan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sk-cpns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal-cpns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sk-pengangkatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tmt-pengangkatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lembaga-pengangkatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pangkat-golongan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sumber-gaji')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama-ibu-kandung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status-perkawinan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama-suami-istri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip-suami-istri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan-suami-istri')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tmt-pns')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lisensi-kepala-sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('diklat-kepengawasan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keahlian-braille')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keahlian-bahasa-isyarat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npwp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama-wajib-pajak')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kewarganegaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bank')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no-rekening-bank')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rekening-atas-nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no-kk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('karpeg')
                    ->searchable(),
                Tables\Columns\TextColumn::make('karis-karsu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lintang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bujur')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nuks')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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

    protected static ?string $navigationLabel = 'Guru';
    protected static ?string $panel = 'Guru';
}
