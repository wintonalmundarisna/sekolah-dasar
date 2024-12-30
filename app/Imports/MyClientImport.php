<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\PesertaDidik;

class MyClientImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            PesertaDidik::create([
                'nama' => $row['Nama'],
                'nipd' => $row['NIPD'],
                'jk' => $row['JK'],
                'nisn' => $row['NISN'],
                'tempat-lahir' => $row['Tempat Lahir'],
                'tanggal-lahir' => $row['Tanggal Lahir'],
                'nik' => $row['NIK'],
                'agama' => $row['Agama'],
                'alamat' => $row['Alamat'],
                'rt' => $row['RT'],
                'rw' => $row['RW'],
                'dusun' => $row['Dusun'],
                'kelurahan' => $row['Kelurahan'],
                'kecamatan' => $row['Kecamatan'],
                'kode-pos' => $row['Kode Pos'],
                'jenis-tinggal' => $row['Jenis Tinggal'],
                'alat-transportasi' => $row['Alat Transportasi'],
                'telepon' => $row['Telepon'],
                'hp' => $row['HP'],
                'email' => $row['E-Mail'],
                'skhun' => $row['SKHUN'],
                'penerima-kps' => $row['Penerima KPS'],
                'no-kps' => $row['No. KPS'],
                'nama-ayah' => $row['Nama Ayah'],
                'tahun-lahir-ayah' => $row['Tahun Lahir Ayah'],
                'jenjang-pendidikan-ayah' => $row['Jenjang Pendidikan Ayah'],
                'pekerjaan-ayah' => $row['Pekerjaan Ayah'],
                'penghasilan-ayah' => $row['Penghasilan Ayah'],
                'nik-ayah' => $row['NIK Ayah'],
                'nama-ibu' => $row['Nama Ibu'],
                'tahun-lahir-ibu' => $row['Tahun Lahir Ibu'],
                'jenjang-pendidikan-ibu' => $row['Jenjang Pendidikan Ibu'],
                'pekerjaan-ibu' => $row['Pekerjaan Ibu'],
                'penghasilan-ibu' => $row['Penghasilan Ibu'],
                'nik-ibu' => $row['NIK Ibu'],
                'nama-wali' => $row['Nama Wali'],
                'tahun-lahir-wali' => $row['Tahun Lahir Wali'],
                'jenjang-pendidikan-wali' => $row['Jenjang Pendidikan Wali'],
                'pekerjaan-wali' => $row['Pekerjaan Wali'],
                'penghasilan-wali' => $row['Penghasilan Wali'],
                'nik-wali' => $row['NIK Wali'],
                'rombel-saat-ini' => $row['Rombel Saat Ini'],
                'no-ujian-nasional' => $row['No Peserta Ujian Nasional'],
                'no-seri-ijazah' => $row['No Seri Ijazah'],
                'penerima-kip' => $row['Penerima KIP'],
                'no-kip' => $row['Nomor KIP'],
                'nama-di-kip' => $row['Nama di KIP'],
                'no-kks' => $row['Nomor KKS'],
                'no-akta-lahir' => $row['No Registrasi Akta Lahir'],
                'bank' => $row['Bank'],
                'no-rekening-bank' => $row['Nomor Rekening Bank'],
                'rekening-atas-nama' => $row['Rekening Atas Nama'],
                'layak-pip' => $row['Layak PIP (usulan dari sekolah)'],
                'alasan-layak-pip' => $row['Alasan Layak PIP'],
                'kebutuhan-khusus' => $row['Kebutuhan Khusus'],
                'sekolah-asal' => $row['Sekolah Asal'],
                'anak-ke-berapa' => $row['Anak ke-berapa'],
                'lintang' => $row['Lintang'],
                'bujur' => $row['Bujur'],
                'no-kk' => $row['No KK'],
                'berat-badan' => $row['Berat Badan'],
                'tinggi-badan' => $row['Tinggi Badan'],
                'lingkar-kepala' => $row['Lingkar Kepala'],
                'jml-saudara-kandung' => $row['Jml. Saudara Kandung'],
                'jarak-ke-sekolah' => $row['Jarak Rumah ke Sekolah (KM)'],
            ]);
        }
    }
}
