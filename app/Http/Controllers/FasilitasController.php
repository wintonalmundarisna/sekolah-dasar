<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\TenagaKependidikan;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jmlSiswa = PesertaDidik::count();
        $laki = PesertaDidik::where('jk', 'Laki-Laki')->count();
        $perempuan = PesertaDidik::where('jk', 'Perempuan')->count();

        $ruangBelajar = Fasilitas::where('nama_fasilitas', 'Ruang Belajar')->first();
        $totalRuangBelajar = $ruangBelajar ? $ruangBelajar->jumlah : 0;
        $ruangPerpus = Fasilitas::where('nama_fasilitas', 'Ruang Perpustakaan')->first();
        $totalRuangPerpus = $ruangPerpus ? $ruangPerpus->jumlah : 0;
        $totalRuangan = $totalRuangBelajar + $totalRuangPerpus;

        $jmlGuru = Guru::count();
        $jmlTendik = TenagaKependidikan::count();
        $staff = $jmlGuru + $jmlTendik;

        return view('data-sekolah', [
            'staff' => $staff,
            'siswa_laki' => $laki,
            'siswa_perempuan' => $perempuan,
            'semua_siswa' => $jmlSiswa,
            'ruang_belajar' => $totalRuangBelajar,
            'ruang_perpus' => $totalRuangPerpus,
            'total_ruangan' => $totalRuangan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFasilitasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFasilitasRequest $request, Fasilitas $fasilitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fasilitas $fasilitas)
    {
        //
    }
}
