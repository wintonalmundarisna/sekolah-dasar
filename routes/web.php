<?php

use App\Models\SkPenerimaanPpdb;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
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
    dd($id);
    $data = SkPenerimaanPpdb::find($id);
    if (!$data) {
        abort(404, 'Data not found');
    }
    $pdf = PDF::loadView('pdf_view', compact('data'));
    $pdf->setPaper('A4', 'portrait'); // Ganti karakter yang tidak diizinkan dalam nama file 
    $filename = str_replace(['/', '\\'], '_', $data->surat_keputusan); // Buat URL untuk file PDF 
    // $path = Storage::url('public/' . $data->surat_keputusan);
    return response($pdf->stream($filename))
    ->header('Content-Type', 'application/pdf')
    ->header('Content-Disposition', 'inline; filename="' . $filename . '"');
});
