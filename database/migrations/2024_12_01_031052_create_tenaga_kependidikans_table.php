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
        Schema::create('tenaga_kependidikans', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 100)->nullable();
            $table->string('nama', 50);
            $table->string('nuptk', 20)->nullable();
            $table->string('jk', 10);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('nip', 50)->nullable();
            $table->string('status_kepegawaian', 10);
            $table->string('jenis_ptk', 50);
            $table->string('jabatan', 150)->nullable();
            $table->string('agama', 15);
            $table->text('alamat');
            $table->string('rt', 2)->nullable();
            $table->string('rw', 2)->nullable();
            $table->string('nama_dusun', 50)->nullable();
            $table->string('desa_kelurahan', 50)->nullable();
            $table->string('kecamatan', 50);
            $table->string('kode_pos', 5)->nullable();
            $table->string('telepon', 15)->nullable();
            $table->string('hp', 15);
            $table->string('email', 100);
            $table->string('tugas_tambahan', 100)->nullable();
            $table->string('sk_cpns', 100)->nullable();
            $table->string('tanggal_cpns', 20)->nullable();
            $table->string('sk_pengangkatan', 30)->nullable();
            $table->date('tmt_pengangkatan');
            $table->string('lembaga_pengangkatan', 20);
            $table->string('pangkat_golongan', 100)->nullable();
            $table->string('sumber_gaji', 50);
            $table->string('nama_ibu_kandung', 50);
            $table->string('status_perkawinan', 15);
            $table->string('nama_suami_istri', 50)->nullable();
            $table->string('nip_suami_istri', 50)->nullable();
            $table->string('pekerjaan_suami_istri', 50);
            $table->string('tmt_pns', 50)->nullable();
            $table->string('lisensi_kepala_sekolah', 5);
            $table->string('diklat_kepengawasan', 5);
            $table->string('keahlian_braille', 5);
            $table->string('keahlian_bahasa_isyarat', 5);
            $table->string('npwp', 50)->nullable();
            $table->string('nama_wajib_pajak', 50)->nullable();
            $table->string('kewarganegaraan', 20);
            $table->string('bank', 50)->nullable();
            $table->string('no_rekening', 50)->nullable();
            $table->string('rekening_atas_nama', 50)->nullable();
            $table->string('nik',20);
            $table->string('no_kk',20)->nullable();
            $table->string('karpeg',50)->nullable();
            $table->string('karis_karsu',50)->nullable();
            $table->string('lintang',50)->nullable();
            $table->string('bujur',50)->nullable();
            $table->string('nuks',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenaga_kependidikans');
    }
};
