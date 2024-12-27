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
use App\Models\PesertaDidik;
use App\Models\KegiatanTahunan;
use App\Models\ProgramUnggulan;
use App\Models\ProgramSemester;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FieldTripController;
use App\Models\Ekstrakurikuler;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

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
    return view('data-sekolah', [
        'data' => Fasilitas::get()
    ]);
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
    return view('kegiatan-tahunan', [
        'data' => KegiatanTahunan::get()
    ]);
});

Route::get('/kegiatan-unggulan', function () {
    return view('kegiatan-unggulan', [
        'data' => ProgramUnggulan::get()
    ]);
});

Route::get('/program-semester', function () {
    return view('program-semester', [
        'data' => ProgramSemester::get()
    ]);
});

Route::get('/ekskul', function () {
    return view('ekskul', [
        'data' => Ekstrakurikuler::get()
    ]);
});

Route::get('/fasilitas-sekolah', function (Request $request) {
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
        'data' => KurikulumKelasDua::get()
    ]);
});

Route::get('/kurikulum-kelas-3', function () {
    return view('kurikulum-kelas-3', [
        'data' => KurikulumKelasTiga::get()
    ]);
});

Route::get('/kurikulum-kelas-4', function () {
    return view('kurikulum-kelas-4', [
        'data' => KurikulumKelasEmpat::get()
    ]);
});
Route::get('/kurikulum-kelas-5', function () {
    return view('kurikulum-kelas-5', [
        'data' => KurikulumKelasLima::get()
    ]);
});

Route::get('/kurikulum-kelas-6', function () {
    return view('kurikulum-kelas-6', [
        'data' => KurikulumKelasEnam::get()
    ]);
});

Route::get('/kalender-akademik', function () {
    return view('kalender-akademik');
});

Route::get('/tata-tertib-peserta-didik', function () {
    return view('tata-tertib-peserta-didik');
});

Route::get('/program-kesiswaan', function () {
    return view('program-kesiswaan');
});

Route::get('/inpresik', function () {
    return view('inpresik');
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
    return view('daftar-peserta-didik', [
        'data' => PesertaDidik::get()
    ]);
});

Route::get('/pengumuman', function () {
    return view('pengumuman', [
        'data' => SkPenerimaanPpdb::get()
    ]);
});

Route::get('/show-pdf/{id}', function (Request $request, $id) {
    $data = SkPenerimaanPpdb::find($id);
    $filename = $data->surat_keputusan;
    $path = storage_path('app/public/' . $filename);

    return Response::make(file_get_contents($path), 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="' . basename($path) . '"'
    ]);
});
