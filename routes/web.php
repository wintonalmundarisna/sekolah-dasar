<?php

use App\Models\FieldTrip;
use App\Models\SkPenerimaanPpdb;
use App\Models\Guru;
use App\Models\InformasiPpdb;
use App\Models\Workshop;
use App\Models\Parenting;
use App\Models\KurikulumKelasSatu;
use App\Models\KurikulumKelasDua;
use App\Models\KurikulumKelasTiga;
use App\Models\KurikulumKelasEmpat;
use App\Models\KurikulumKelasLima;
use App\Models\KurikulumKelasEnam;
use App\Models\TenagaKependidikan;
use App\Models\Fasilitas;
use App\Models\KegiatanLuar;
use App\Models\KegiatanTerdekat;
use App\Models\Alumni;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FieldTripController;
// use Illuminate\Support\Facades\Storage;

// use PDF;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/visi-misi-tujuan', function () {
    return view('visi-misi-tujuan');
});

Route::get('/data-sekolah', function () {
    return view('data-sekolah');
});

Route::get('/info-pendidik', function () {
    return view('info-pendidik', [
        'data' => Guru::get()
    ]);
});

Route::get('/info-tenaga-pendidik', function () {
    return view('info-tenaga-pendidik', [
        'data' => TenagaKependidikan::get()
    ]);
});

Route::get('/komite-sekolah', function () {
    return view('komite-sekolah');
});

Route::get('/kegiatan-tahunan', function () {
    return view('kegiatan-tahunan');
});

Route::get('/kegiatan-unggulan', function () {
    return view('kegiatan-unggulan');
});

Route::get('/program-semester', function () {
    return view('program-semester');
});

Route::get('/ekskul', function () {
    return view('ekskul');
});

Route::get('/fasilitas-sekolah', function (Request $request) {
    $kategori = $request->kategori;
    if($request->kategori) {
        $data = Fasilitas::where('kategori', $kategori)->get();
    }else {
        $data = Fasilitas::get();
    }
    return view('fasilitas-sekolah', [
        'data' => $data,
        'kategori' => $kategori,
    ]);
});

Route::get('/kegiatan-terdekat', function () {
    return view('kegiatan-terdekat', [
        'data' => KegiatanTerdekat::get()
    ]);
});

Route::get('/kegiatan-luar', function () {
    return view('kegiatan-luar', [
        'data' => KegiatanLuar::get()
    ]);
});

Route::get('/alumni', function () {
    return view('alumni', [
        'data' => Alumni::get()
    ]);
});

Route::get('/kurikulum-kelas-1', function () {
    return view('kurikulum-kelas-1', [
        'data' => KurikulumKelasSatu::get()
    ]);
});

Route::get('/kurikulum-kelas-2', function () {
    return view('kurikulum-kelas-2', [
        'data' => KurikulumKelasSatu::get()
    ]);
});

Route::get('/kurikulum-kelas-3', function () {
    return view('kurikulum-kelas-3', [
        'data' => KurikulumKelasSatu::get()
    ]);
});

Route::get('/kurikulum-kelas-4', function () {
    return view('kurikulum-kelas-4', [
        'data' => KurikulumKelasSatu::get()
    ]);
});
Route::get('/kurikulum-kelas-5', function () {
    return view('kurikulum-kelas-5', [
        'data' => KurikulumKelasSatu::get()
    ]);
});

Route::get('/kurikulum-kelas-6', function () {
    return view('kurikulum-kelas-6', [
        'data' => KurikulumKelasSatu::get()
    ]);
});

Route::get('/kalender-akademik', function () {
    return view('kalender-akademik');
});

Route::get('/gallery', [FieldTripController::class, 'index']);

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/informasi', function () {
    return view('informasi', [
        'data' => InformasiPpdb::get()
    ]);
});

Route::get('/form-online', function () {
    return view('form-online');
});

Route::get('/daftar-peserta-didik', function () {
    return view('daftar-peserta-didik');
});

Route::get('/pengumuman', function () {
    return view('pengumuman', [
        'data' => SkPenerimaanPpdb::get()
    ]);
});

Route::get('/show-pdf/{id}', function (Request $request, $id) {
    dd($id);
    $data = SkPenerimaanPpdb::find($id);
    // dd($data);
    $pdf = PDF::loadView('pdf_view', compact('data'));
    $pdf->setPaper('A4', 'potrait');
    // Check if 'surat_keputusan' key exists
    // $suratKeputusan = $data['surat_keputusan'] ?? 'default_value';
    return response($pdf->stream($data->surat_keputusan))->header('Content-Type', 'application/pdf')->header('Content-Disposition', 'inline; filename="' . $data->surat_keputusan . '"');
});
