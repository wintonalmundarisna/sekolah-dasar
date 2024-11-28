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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->string('nuptk')->unique();
            $table->string('jk');
            $table->string('tempat-lahir');
            $table->date('tanggal-lahir');
            $table->string('nip')->nullable();
            $table->string('status-kepegawaian');
            $table->string('jenis-ptk');
            $table->string('agama');
            $table->text('alamat');
            $table->string('rt');
            $table->string('rw');
            $table->string('nama-dusun')->nullable();
            $table->string('desa-kelurahan');
            $table->string('kecamatan');
            $table->string('kode-pos');
            $table->string('telepon');
            $table->string('hp');
            $table->string('email');
            $table->string('tugas-tambahan');
            $table->string('sk-cpns')->nullable();
            $table->string('tanggal-cpns')->nullable();
            $table->string('sk-pengangkatan');
            $table->string('tmt-pengangkatan');
            $table->string('lembaga-pengangkatan');
            $table->string('pangkat-golongan')->nullable();
            $table->string('sumber-gaji');
            $table->string('nama-ibu-kandung');
            $table->string('status-perkawinan');
            $table->string('nama-suami-istri');
            $table->string('nip-suami-istri')->nullable();
            $table->string('pekerjaan-suami-istri');
            $table->string('tmt-pns')->nullable();
            $table->string('lisensi-kepala-sekolah');
            $table->string('diklat-kepengawasan');
            $table->string('keahlian-braille');
            $table->string('keahlian-bahasa-isyarat');
            $table->string('npwp')->nullable();
            $table->string('nama-wajib-pajak')->nullable();
            $table->string('kewarganegaraan');
            $table->string('bank')->nullable();
            $table->string('no-rekening-bank')->nullable();
            $table->string('rekening-atas-nama')->nullable();
            $table->string('nik')->unique();
            $table->string('no-kk');
            $table->string('karpeg')->nullable();
            $table->string('karis-karsu')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('nuks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
