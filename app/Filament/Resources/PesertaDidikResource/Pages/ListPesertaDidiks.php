<?php

namespace App\Filament\Resources\PesertaDidikResource\Pages;

use App\Filament\Resources\PesertaDidikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class ListPesertaDidiks extends ListRecords
{
    protected static string $resource = PesertaDidikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->slideOver()
                ->color("primary")
                // ->use(App\Imports\MyClientImport::class)
                ->processCollectionUsing(function (string $modelClass, Collection $collection) {
                    return $collection->map(function ($row) use ($modelClass) {
                        // Do some stuff with the collection
                        try {
                            $data = [
                                'foto' => null,
                                'nama' => $row['nama'],
                                'nipd' => $row['nipd'],
                                'jk' => $row['jk'],
                                'nisn' => $row['nisn'],
                                'tempat-lahir' => $row['tempat_lahir'],
                                'tanggal-lahir' => $row['tanggal_lahir'],
                                'nik' => '@ '.$row['nik'],
                                'agama' => $row['agama'],
                                'alamat' => $row['alamat'],
                                'rt' => $row['rt'],
                                'rw' => $row['rw'],
                                'dusun' => $row['dusun'],
                                'kelurahan' => $row['kelurahan'],
                                'kecamatan' => $row['kecamatan'],
                                'kode-pos' => $row['kode_pos'],
                                'jenis-tinggal' => $row['jenis_tinggal'],
                                'alat-transportasi' => $row['alat_transportasi'],
                                'telepon' => '@ '.$row['telepon'],
                                'hp' => '@ '.$row['hp'],
                                'email' => $row['e_mail'],
                                'skhun' => $row['skhun'],
                                'penerima-kps' => $row['penerima_kps'],
                                'no-kps' => $row['no_kps'],
                                'nama-ayah' => $row['nama_ayah'],
                                'tahun-lahir-ayah' => $row['tahun_lahir_ayah'],
                                'jenjang-pendidikan-ayah' => $row['jenjang_pendidikan_ayah'],
                                'pekerjaan-ayah' => $row['pekerjaan_ayah'],
                                'penghasilan-ayah' => $row['penghasilan_ayah'],
                                'nik-ayah' => '@ '.$row['nik_ayah'],
                                'nama-ibu' => $row['nama_ibu'],
                                'tahun-lahir-ibu' => $row['tahun_lahir_ibu'],
                                'jenjang-pendidikan-ibu' => $row['jenjang_pendidikan_ibu'],
                                'pekerjaan-ibu' => $row['pekerjaan_ibu'],
                                'penghasilan-ibu' => $row['penghasilan_ibu'],
                                'nik-ibu' => '@ '.$row['nik_ibu'],
                                'nama-wali' => $row['nama_wali'],
                                'tahun-lahir-wali' => $row['tahun_lahir_wali'],
                                'jenjang-pendidikan-wali' => $row['jenjang_pendidikan_wali'],
                                'pekerjaan-wali' => $row['pekerjaan_wali'],
                                'penghasilan-wali' => $row['penghasilan_wali'],
                                'nik-wali' => '@ '.$row['nik_wali'],
                                'rombel-saat-ini' => $row['rombel_saat_ini'],
                                'no-ujian-nasional' => $row['no_peserta_ujian_nasional'],
                                'no-seri-ijazah' => $row['no_seri_ijazah'],
                                'penerima-kip' => $row['penerima_kip'],
                                'no-kip' => $row['nomor_kip'],
                                'nama-di-kip' => $row['nama_di_kip'],
                                'no-kks' => $row['nomor_kks'],
                                'no-akta-lahir' => $row['no_registrasi_akta_lahir'],
                                'bank' => $row['bank'],
                                'no-rekening-bank' => $row['nomor_rekening_bank'],
                                'rekening-atas-nama' => $row['rekening_atas_nama'],
                                'layak-pip' => $row['layak_pip_usulan_dari_sekolah'],
                                'alasan-layak-pip' => $row['alasan_layak_pip'],
                                'kebutuhan-khusus' => $row['kebutuhan_khusus'],
                                'sekolah-asal' => $row['sekolah_asal'],
                                'anak-ke-berapa' => $row['anak_ke_berapa'],
                                'lintang' => $row['lintang'],
                                'bujur' => $row['bujur'],
                                'no-kk' => '@ '.$row['no_kk'],
                                'berat-badan' => $row['berat_badan'],
                                'tinggi-badan' => $row['tinggi_badan'],
                                'lingkar-kepala' => $row['lingkar_kepala'],
                                'jml-saudara-kandung' => $row['jml_saudara_kandung'],
                                'jarak-ke-sekolah' => $row['jarak_rumah_ke_sekolah_km'],
                            ];
                            $modelClass::create($data);
                        } catch (\Exception $e) {
                            // Menangkap dan mencetak kesalahan
                            Log::error('Error saving data: ' . $e->getMessage());
                        }
                    });
                }),
            Actions\CreateAction::make(),
        ];
    }
}
