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
            $table->string('nama');
            $table->string('nipd');
            $table->string('jk');
            $table->string('nisn');
            $table->string('tempat-lahir');
            $table->date('tanggal-lahir');
            $table->string('nik');
            $table->string('agama');
            $table->text('alamat');
            $table->smallInteger('rt');
            $table->smallInteger('rw');
            $table->string('dusun')->nullable();
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kode-pos')->nullable();
            $table->string('jenis-tinggal');
            $table->string('alat-transportasi');
            $table->string('telepon')->nullable();
            $table->string('hp')->nullable();
            $table->string('email')->nullable();
            $table->string('skhun')->nullable();
            $table->string('penerima-kps');
            $table->string('no-kps')->nullable();
            $table->string('nama-ayah');
            $table->string('tahun-lahir-ayah');
            $table->string('jenjang-pendidikan-ayah');
            $table->string('pekerjaan-ayah');
            $table->bigInteger('penghasilan-ayah');
            $table->string('nik-ayah')->nullable();
            $table->string('nama-ibu');
            $table->string('tahun-lahir-ibu');
            $table->string('jenjang-pendidikan-ibu');
            $table->string('pekerjaan-ibu');
            $table->bigInteger('penghasilan-ibu');
            $table->string('nik-ibu')->nullable();
            $table->string('nama-wali')->nullable();
            $table->string('tahun-lahir-wali')->nullable();
            $table->string('jenjang-pendidikan-wali');
            $table->string('pekerjaan-wali')->nullable();
            $table->bigInteger('penghasilan-wali')->nullable();
            $table->string('nik-wali')->nullable();
            $table->string('rombel-saat-ini');
            $table->string('no-ujian-nasioanl')->nullable();
            $table->string('no-seri-ijazah')->nullable();
            $table->string('penerima-kip');
            $table->string('no-kip')->nullable();
            $table->string('nama-di-kip')->nullable();
            $table->string('no-kks')->nullable();
            $table->string('no-akta-lahir')->nullable();
            $table->string('bank')->nullable();
            $table->string('no-rekening-bank')->nullable();
            $table->string('rekening-atas-nama')->nullable();
            $table->string('layak-pip');
            $table->string('alasan-layak-pip')->nullable();
            $table->string('kebutuhan-khusus');
            $table->string('sekolah-asal')->nullable();
            $table->string('anak-ke-berapa');
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('no-kk')->nullable();
            $table->string('berat-badan');
            $table->string('tinggi-badan');
            $table->string('lingkar-kepala')->nullable();
            $table->string('jml-saudara-kandung')->nullable();
            $table->string('jarak-ke-sekolah')->nullable();
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
