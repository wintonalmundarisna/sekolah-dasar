<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFasilitasRequest;
use App\Http\Requests\UpdateFasilitasRequest;
use App\Models\PesertaDidik;
use App\Models\Guru;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;


class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kategori = $request->kategori;
        if ($request->kategori) {
            $data = Fasilitas::where('kategori', $kategori)->get();
        } else {
            $data = Fasilitas::get();
        }
        return view('fasilitas-sekolah', [
            'data' => $data,
            'kategori' => $kategori,
        ]);
    }
    public function data()
    {
        $jmlSiswa = PesertaDidik::count();
        $laki = PesertaDidik::where('jk', 'L')->count();
        $perempuan = PesertaDidik::where('jk', 'P')->count();

        $ruangBelajar = Fasilitas::where('nama_fasilitas', 'Ruang Belajar')->first();
        $totalRuangBelajar = $ruangBelajar ? $ruangBelajar->jumlah : 0;
        $ruangPerpus = Fasilitas::where('nama_fasilitas', 'Ruang Perpustakaan')->first();
        $totalRuangPerpus = $ruangPerpus ? $ruangPerpus->jumlah : 0;
        $ruangGuru = Fasilitas::where('nama_fasilitas', 'Ruang Guru')->first();
        $totalRuangGuru = $ruangGuru ? $ruangGuru->jumlah : 0;
        $ruangKepalaSekolah = Fasilitas::where('nama_fasilitas', 'Ruang Kepala Sekolah')->first();
        $totalRuangKepalaSekolah = $ruangKepalaSekolah ? $ruangKepalaSekolah->jumlah : 0;
        $ruangUks = Fasilitas::where('nama_fasilitas', 'Ruang UKS')->first();
        $totalRuangUks = $ruangUks ? $ruangUks->jumlah : 0;
        $ruangKamarMandi = Fasilitas::where('nama_fasilitas', 'Ruang Kamar Mandi')->first();
        $totalRuangKamarMandi = $ruangKamarMandi ? $ruangKamarMandi->jumlah : 0;
        
        $totalRuangan = $totalRuangBelajar + $totalRuangPerpus + $totalRuangGuru + $totalRuangKepalaSekolah + $totalRuangUks + $totalRuangKamarMandi;

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
            'ruang_guru' => $totalRuangGuru,
            'ruang_kepala_sekolah' => $totalRuangKepalaSekolah,
            'ruang_uks' => $totalRuangUks,
            'ruang_kamar_mandi' => $totalRuangKamarMandi,
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
