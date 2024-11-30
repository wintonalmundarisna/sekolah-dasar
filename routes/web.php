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

Route::get('/data-sekolah.blade.php', function () {
    return view('data-sekolah');
});

Route::get('/info-pendidik.blade.php', function () {
    return view('info-pendidik');
});

Route::get('/info-tenaga-pendidik.blade.php', function () {
    return view('info-tenaga-pendidik');
});

Route::get('/komite-sekolah.blade.php', function () {
    return view('komite-sekolah');
});
