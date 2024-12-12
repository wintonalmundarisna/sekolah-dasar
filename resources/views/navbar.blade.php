<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar</title>

  {{-- font outfit --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

  {{-- font titan one --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">

  <!-- fontawesome -->
  <link rel="stylesheet" href="/src/fontawesome/css/all.min.css" />
</head>
<body>
  <!-- Navbar -->
  <div class="sticky top-0 z-20 navbar bg-base-100">
    <div class="navbar-start">
      {{-- mobile --}}
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </div>
        <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-80 p-2 shadow font-semibold">
          <li><a href="/" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Beranda</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Profile</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li><a href="/visi-misi-tujuan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Visi, Misi, dan Tujuan</a></li>
                <li><a href="/data-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Data Sekolah</a></li>
                <li><a href="/visi-misi-tujuan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Visi dan Misi</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Tujuan</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Data Sekolah</a></li>
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">SDM</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a href="/info-pendidik" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Info Pendidik</a></li>
                      <li><a href="info-tenaga-pendidik" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Info Tenaga Pendidik</a></li>
                    </ul>
                  </details>
                </li>
                <li><a href="/komite-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Komite Sekolah</a></li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Sekolah</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a href="/kegiatan-tahunan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Tahunan</a></li>
                      <li><a href="/kegiatan-unggulan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Unggulan</a></li>
                    </ul>
                  </details>
                </li>
                <li><a href="/program-semester" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Semester</a></li>
                <li><a href="/ekskul" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Ekskul</a></li>
              </ul>
            </details>
          </li>
          <li><a href="/kurikulum" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kurikulum</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kesiswaan</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-80 p-2 shadow">
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Tata Tertib Peserta Didik</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Kesiswaan</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Inpresik (Informasi Prestasi Peserta Didik)</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Daftar Peserta Didik</a></li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Informasi</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-72 p-2 shadow">
                <li><a href="/fasilitas-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Fasilitas Sekolah</a></li>
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Berita</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                      <li><a href="/kegiatan-luar" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan Luar Sekolah</a></li>
                      <li><a href="/kegiatan-terdekat" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan Terdekat Sekolah</a></li>
                      <li><a href="/alumni" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Alumni</a></li>
                    </ul>
                  </details>
                </li>
              </ul>
            </details>
          </li>
          <li><a href="/gallery" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Gallery</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">PPDB</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Informasi</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Form Online</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Pengumuman</a></li>
              </ul>
            </details>
          </li>
          <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kontak Person</a></li>
        </ul>
      </div>
      {{-- mobile --}}
      <a class="lg:hidden"><img src="./assets/logo_new.png" alt="Logo" width="150"></a>
      {{-- desktop --}}
      <div class="hidden navbar-center lg:flex">
        <a class="text-xl"><img src="./assets/logo_new.png" alt="Logo" width="150"></a>
        <ul class="px-1 font-semibold menu menu-horizontal">
          <li><a href="/" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Beranda</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Profile</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li><a href="/visi-misi-tujuan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Visi, Misi, dan Tujuan</a></li>
                <li><a href="/data-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Data Sekolah</a></li>
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">SDM</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a href="/info-pendidik" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Info Pendidik</a></li>
                      <li><a href="info-tenaga-pendidik" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Info Tenaga Pendidik</a></li>
                    </ul>
                  </details>
                </li>
                <li><a href="/komite-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Komite Sekolah</a></li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Sekolah</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                      <li><a href="/kegiatan-tahunan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Tahunan</a></li>
                      <li><a href="/kegiatan-unggulan" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Unggulan</a></li>
                    </ul>
                  </details>
                </li>
                <li><a href="/program-semester" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Semester</a></li>
                <li><a href="/ekskul" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Ekskul</a></li>
              </ul>
            </details>
          </li>
          <li><a href="/kurikulum" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kurikulum</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kesiswaan</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-80 p-2 shadow">
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Tata Tertib Peserta Didik</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Program Kesiswaan</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Inpresik (Informasi Prestasi Peserta Didik)</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Daftar Peserta Didik</a></li>
              </ul>
            </details>
          </li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Informasi</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-72 p-2 shadow">
                <li><a href="/fasilitas-sekolah" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Fasilitas Sekolah</a></li>
                <li>
                  <details>
                    <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Berita</summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                      <li><a href="/kegiatan-luar" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan Luar Sekolah</a></li>
                      <li><a href="/kegiatan-terdekat" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kegiatan Terdekat Sekolah</a></li>
                      <li><a href="/alumni" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Alumni</a></li>
                    </ul>
                  </details>
                </li>
              </ul>
            </details>
          </li>
          <li><a href="/gallery" class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Gallery</a></li>
          <li>
            <details>
              <summary class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">PPDB</summary>
              <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-64 p-2 shadow">
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Informasi</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Form Online</a></li>
                <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Pengumuman</a></li>
              </ul>
            </details>
          </li>
          <li><a class="font-outfit hover:text-colorprimaryorange text-colorprimaryblack">Kontak Person</a></li>
        </ul>
      </div>
      {{-- desktop --}}
    </div>
    <div class="navbar-end">
      <a class="rounded-sm btn btn-sm font-outfit bg-colorprimaryorange text-colorprimarywhite hover:bg-orange-700 lg:btn-md">Daftar Sekarang</a>
    </div>
  </div>
  <!-- Navbar -->
</body>
</html>