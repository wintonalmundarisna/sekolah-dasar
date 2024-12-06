<?php

use Illuminate\Support\Facades\Route;

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
