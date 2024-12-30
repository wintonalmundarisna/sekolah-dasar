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
            $table->string('nama', 100);
            $table->string('foto')->nullable();
            $table->string('nuptk', 30)->unique();
            $table->string('jk', 10);
            $table->string('tempat-lahir', 50);
            $table->date('tanggal-lahir');
            $table->string('nip', 20)->nullable();
            $table->string('status-kepegawaian', 10);
            $table->string('jenis-ptk', 50);
            $table->string('jabatan', 150)->nullable();
            $table->string('agama', 30);
            $table->text('alamat');
            $table->string('rt', 5)->nullable();
            $table->string('rw', 5)->nullable();
            $table->string('nama-dusun', 50)->nullable();
            $table->string('desa-kelurahan', 50);
            $table->string('kecamatan', 100);
            $table->string('kode-pos', 5)->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('hp', 20);
            $table->string('email', 100);
            $table->string('tugas-tambahan', 100)->nullable();
            $table->string('sk-cpns', 100)->nullable();
            $table->string('tanggal-cpns', 100)->nullable();
            $table->string('sk-pengangkatan', 100);
            $table->string('tmt-pengangkatan', 100);
            $table->string('lembaga-pengangkatan', 100);
            $table->string('pangkat-golongan', 100)->nullable();
            $table->string('sumber-gaji', 50);
            $table->string('nama-ibu-kandung', 100);
            $table->string('status-perkawinan', 15);
            $table->string('nama-suami-istri', 100)->nullable();
            $table->string('nip-suami-istri', 30)->nullable();
            $table->string('pekerjaan-suami-istri', 100);
            $table->string('tmt-pns', 100)->nullable();
            $table->string('lisensi-kepala-sekolah', 5);
            $table->string('diklat-kepengawasan', 5);
            $table->string('keahlian-braille', 5);
            $table->string('keahlian-bahasa-isyarat', 5);
            $table->string('npwp', 100)->nullable();
            $table->string('nama-wajib-pajak', 100)->nullable();
            $table->string('kewarganegaraan', 50);
            $table->string('bank', 100)->nullable();
            $table->string('no-rekening-bank', 100)->nullable();
            $table->string('rekening-atas-nama', 100)->nullable();
            $table->string('nik', 50);
            $table->string('no-kk', 50)->nullable();
            $table->string('karpeg', 100)->nullable();
            $table->string('karis-karsu', 100)->nullable();
            $table->string('lintang', 100)->nullable();
            $table->string('bujur', 100)->nullable();
            $table->string('nuks', 100)->nullable();
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
