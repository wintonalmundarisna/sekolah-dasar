<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peserta_didiks', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama',100);
            $table->string('nipd', 15);
            $table->string('jk', 10);
            $table->string('nisn', 15);
            $table->string('tempat-lahir', 20);
            $table->date('tanggal-lahir');
            $table->string('nik', 20);
            $table->string('agama', 15);
            $table->text('alamat');
            $table->smallInteger('rt');
            $table->smallInteger('rw');
            $table->string('dusun', 50)->nullable();
            $table->string('kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('kode-pos', 5)->nullable();
            $table->string('jenis-tinggal', 100);
            $table->string('alat-transportasi', 50);
            $table->string('telepon', 30)->nullable();
            $table->string('hp', 30)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('skhun', )->nullable();
            $table->string('penerima-kps', 5);
            $table->string('no-kps', 50)->nullable();
            $table->string('nama-ayah', 100);
            $table->string('tahun-lahir-ayah', 5);
            $table->string('jenjang-pendidikan-ayah', 50);
            $table->string('pekerjaan-ayah', 100);
            $table->bigInteger('penghasilan-ayah');
            $table->string('nik-ayah', 20)->nullable();
            $table->string('nama-ibu', 100);
            $table->string('tahun-lahir-ibu', 5);
            $table->string('jenjang-pendidikan-ibu', 50);
            $table->string('pekerjaan-ibu', 100);
            $table->bigInteger('penghasilan-ibu');
            $table->string('nik-ibu', 20)->nullable();
            $table->string('nama-wali', 100)->nullable();
            $table->string('tahun-lahir-wali', 5)->nullable();
            $table->string('jenjang-pendidikan-wali', 100)->nullable();
            $table->string('pekerjaan-wali', 100)->nullable();
            $table->bigInteger('penghasilan-wali')->nullable();
            $table->string('nik-wali', 20)->nullable();
            $table->string('rombel-saat-ini', 20);
            $table->string('no-ujian-nasioanl', 50)->nullable();
            $table->string('no-seri-ijazah', 100)->nullable();
            $table->string('penerima-kip', 5);
            $table->string('no-kip', 50)->nullable();
            $table->string('nama-di-kip', 100)->nullable();
            $table->string('no-kks', 50)->nullable();
            $table->string('no-akta-lahir', 100)->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('no-rekening-bank', 100)->nullable();
            $table->string('rekening-atas-nama', 100)->nullable();
            $table->string('layak-pip', 5);
            $table->string('alasan-layak-pip', 100)->nullable();
            $table->string('kebutuhan-khusus', 10);
            $table->string('sekolah-asal', 100)->nullable();
            $table->string('anak-ke-berapa', 10);
            $table->string('lintang', 100)->nullable();
            $table->string('bujur', 100)->nullable();
            $table->string('no-kk', 20)->nullable();
            $table->string('berat-badan', 10);
            $table->string('tinggi-badan', 10);
            $table->string('lingkar-kepala', 10)->nullable();
            $table->string('jml-saudara-kandung', 10)->nullable();
            $table->string('jarak-ke-sekolah', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_didiks');
    }
};
