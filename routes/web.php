<?php

use App\Models\SkPenerimaanPpdb;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
// use PDF;

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
    return view('info-pendidik');
});

Route::get('/info-tenaga-pendidik', function () {
    return view('info-tenaga-pendidik');
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

Route::get('/fasilitas-sekolah', function () {
    return view('fasilitas-sekolah');
});

Route::get('/kegiatan-terdekat', function () {
    return view('kegiatan-terdekat');
});

Route::get('/kegiatan-luar', function () {
    return view('kegiatan-luar');
});

Route::get('/alumni', function () {
    return view('alumni');
});

Route::get('/kurikulum', function () {
    return view('kurikulum');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::get('/form-online', function () {
    return view('form-online');
});

Route::get('/pengumuman', function () {
    return view('pengumuman', [
        'data' => SkPenerimaanPpdb::get()
    ]);
});

Route::get('/show-pdf/{id}', function (Request $request, $id) {
    $data = SkPenerimaanPpdb::find($id);
    // dd($data);
    $pdf = PDF::loadView('pdf_view', compact('data'));
    $pdf->setPaper('A4', 'potrait');
    // Check if 'surat_keputusan' key exists
    // $suratKeputusan = $data['surat_keputusan'] ?? 'default_value';
    return response($pdf->stream($data->surat_keputusan))->header('Content-Type', 'application/pdf')->header('Content-Disposition', 'inline; filename="' . $data->surat_keputusan . '"');
});
