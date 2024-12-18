<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kurikulum | SD ISLAM NURUL FIRDAUS</title>

        {{-- font outfit --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

        {{-- font titan one --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
        
        <!-- fontawesome -->
        <link rel="stylesheet" href="/fontawesome/css/all.min.css" />

        {{-- AOS --}}
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

        <!-- favicon -->
        <link rel="icon" type="image/svg+xml" href="/assets/icon.png">

        {{-- Flowbite --}}
        @vite(['resources/css/app.css','resources/js/app.js'])

    @vite('resources/css/app.css')
  </head>

  <body>
    {{-- navbar --}}
    @include('navbar')
    {{-- navbar --}}

    {{-- Kurikulum --}}
    <section class="mt-6 !overflow-hidden lg:mt-10">
      <div class="container">
        <div class="flex items-center justify-center gap-2 py-4">
          <img data-aos="fade-right"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi03.png" alt="illustrasi" class="w-6">
          <h1 data-aos="fade-up"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Kurikulum</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- Kurikulum --}}
        <div class="w-full mx-auto mt-4 md:w-4/5">
          <div tabindex="0" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondorangemuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorprimaryorange">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 1</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimaryorange md:text-base">
                    <li>Tilawati 1</li>
                    <li>Tilawati 2</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimaryorange md:text-base">
                    <p>Semester 1</p>
                    <li>An-Nass</li>
                    <li>Al-Falaq</li>
                    <li>Al-Ikhlas</li>
                    <li>Al-Asr</li>
                    <p>Semester 2</p>
                    <li>An-Nashr</li>
                    <li>Al-Kaafirun</li>
                    <li>Al-Kautsar</li>
                    <li>Al-Lahab</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimaryorange md:text-base">
                    <p>Semester 1</p>
                    <li>Do’a kebaikan dunia akherat</li>
                    <li>Do’a untuk kedua orang tua</li>
                    <li>Do’a akan makan dan minum</li>
                    <li>Do’a lupa membaca do’a makan</li>
                    <li>Do’a sesudah minum susu</li>
                    <li>Do’a sesudah makan dan minum</li>
                    <li>Do’a berjabat tangan</li>
                    <li>Do’a sebelum dan bangun tidur</li>
                    <p>Semester 2</p>
                    <li>Do’a minta ilham yang baik</li>
                    <li>Do’a minta ilmu yang manfaat</li>
                    <li>Doa masuk Rumah</li>
                    <li>Doa keluar rumah</li>
                    <li>Doa pagi dan sore</li>
                    <li>Doa masuk Masjid</li>
                    <li>Doa keluar masjid</li>
                    <li>Doa memakai pakaian</li>
                    <li>Doa Ketika berbuka puasa</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimaryorange md:text-base">
                    <li>Menulis huruf hijaiyah dengan tanda fathah</li>
                    <li>Membaca angka arab</li>
                    <li>Menulis kata berharokat fathah, kasroh, dhomah, fathah tain, kasrotain, dhomatain</li>
                    <li>Menulis angka arab</li>
                    <li>Menulis huruf sambung (di depan, Tengah, belakang)</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimaryorange md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Ta’dzim dan berbuat baik pada Orangtua</li>
                    <li>Menghormati saudara yang lebih tua dan sayangi yang muda</li>
                    <li>Menghormati guru</li>
                    <li>Bergaul dengan teman</li>
                    <li>Ketika di masjid</li>
                    <li>Ketika di tempat pengajian, rumah dan lingkungan</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-sm list-inside ms-4 text-colorprimaryorange md:text-base">
                    <li>1 sampai 40</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div tabindex="1" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondtoscamuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorprimarytosca">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 2</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimarytosca md:text-base">
                    <p>Tilawati 3 dan 4</p>
                    <li>Cara membaca huruf yang bersukun</li>
                    <li>Cara membaca huruf bertasyid</li>
                    <li>Bacaan idghom</li>
                    <li>Bacaan ikhfa</li>
                    <li>Bacaan mad wajib dan jaiz</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimarytosca md:text-base">
                    <p>Semester 1</p>
                    <li>Al-Maun</li>
                    <li>Al-Quroisy</li>
                    <li>Al-Fill</li>
                    <li>Humazah</li>
                    <p>Semester 2</p>
                    <li>At-Takatsur</li>
                    <li>Al-Qoriah</li>
                    <li>Al-Adiyat</li>
                    <li>Zalzalah</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimarytosca md:text-base">
                    <p>Semester 1</p>
                    <li>Do’a mohon kesabaran</li>
                    <li>Do’a mohon Kesehatan</li>
                    <p>Semester 2</p>
                    <li>Do’a Ketika bersin</li>
                    <li>Do’a Ketika ada angin kencang</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimarytosca md:text-base">
                    <li>Menulis rangkaian kata</li>
                    <li>Menulis potongan ayat</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorprimarytosca md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Tata krama tidur</li>
                    <li>Tata krama bertamu</li>
                    <li>Tata krama berpakaian</li>
                    <li>Tata krama bersin</li>
                    <li>Tata krama menguap</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-sm list-inside ms-4 text-colorprimarytosca md:text-base">
                    <li>1 sampai 60</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div tabindex="2" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondyellowmuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorsecondyellowtua">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 3</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <p>Tilawati 5 dan 6</p>
                    <li>Cara membaca qolqolah</li>
                    <li>Cara membaca iqlab</li>
                    <li>Bacaan idzhar, idghom bilagunnah</li>
                    <li>Bacaan mad</li>
                    <li>Tanda – tanda waqaf</li>
                    <li>Surat – surat pendek annas-adduha</li>
                    <li>Ayat ayat pilihan</li>
                    <li>Bacaan musykilat dan ghorib</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <p>Semester 1</p>
                    <li>Al-Bayyinah</li>
                    <p>Semester 2</p>
                    <li>Al-Qodar</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <p>Semester 1</p>
                    <li>Do’a Ketika menjenguk orang sakit</li>
                    <li>Do’a Ketika memakai pakaian baru</li>
                    <li>Do’a Ketika naik kendaraan</li>
                    <li>Do’a lailatul Qodar</li>
                    <p>Semester 2</p>
                    <li>Do’a Ketika masuk pasar</li>
                    <li>Do’a berlindung dari syirik</li>
                    <li>Do’a berlindung dari siksa kubur</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <li>Menulis rangkaian kata</li>
                    <li>Menulis Pegon dasar</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Tata krama terhadap kerabat</li>
                    <li>Tata krama terhadap tetangga</li>
                    <li>Tata krama bersepeda</li>
                    <li>Tata krama Ketika makan Bersama</li>
                    <li>Tata krama mencari ilmu</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-sm list-inside ms-4 text-colorsecondyellowtua md:text-base">
                    <li>1 sampai 80</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div tabindex="3" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondgreenmuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorsecondgreen">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 4</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondgreen md:text-base">
                    <p>Semester 1</p>
                    <li>Bacaan Al-Qur’an Juz 30</li>
                    <p>Semester 2</p>
                    <li>Bacaan Al-Qur’an Juz 1 dan 2</li>
                    <li>Tajwid</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondgreen md:text-base">
                    <p>Semester 1</p>
                    <li>Al-Alaq</li>
                    <p>Semester 2</p>
                    <li>At-Tin</li>
                    <li>Al-insyirah</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondgreen md:text-base">
                    <p>Semester 1</p>
                    <li>Doa sujud Al-Qur’an</li>
                    <li>Kumpulan do’a Nabi Muhammad</li>
                    <li>Do’a berlindung dari sifat munafiq</li>
                    <p>Semester 2</p>
                    <li>Do’a agar bisa bersyukur</li>
                    <li>Do’a berlindung dari jeleknya pendengaran, ucapan dan penglihatan</li>
                    <li>Do’a berlindung dari sifat pelit dan penakut</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondgreen md:text-base">
                    <li>Menulis Pegon Baku </li>
                    <li>Latihan makna dengan pegon</li>
                    <li>Penulisan kode – kode dalam makna</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondgreen md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Tata krama terhadap kerabat</li>
                    <li>Tata krama terhadap tetangga</li>
                    <li>Tata krama bersepeda</li>
                    <li>Tata krama Ketika makan Bersama</li>
                    <li>Tata krama mencari ilmu</li>
                    <li>Kemandirian dalam keluarga</li>
                    <li>Kemandirian dalam lingkungan jamaah dan sekolah</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-smlist-inside ms-4 text-colorsecondgreen md:text-base">
                    <li>1 sampai 99</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div tabindex="4" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondpurplemuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorsecondpurple">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 5</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Bacaan Al-Qur’an Juz 3 dan 4</li>
                    <p>Semester 2</p>
                    <li>Bacaan Al-Qur’an Juz 5 dan 6</li>
                    <li>Tajwid</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Ad-Duha</li>
                    <li>Al-lail</li>
                    <p>Semester 2</p>
                    <li>As-syams</li>
                    <li>Al-Balad</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Do’a minta dimudahkan dalam segala urusan</li>
                    <li>Do’a minta dipilihkan sesuatu yang baik</li>
                    <li>Do’a Ketika ada petir</li>
                    <li>Do’a Setelah membaca Al-Qur’an</li>
                    <p>Semester 2</p>
                    <li>Do’a 10 Kebaikan</li>
                    <li>Do’a Berlindung dari bencana</li>
                  </ol>
                </li>
                <li>
                  Hafalan Dalil – dalil
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Mengaji</li>
                    <li>Mengamal</li>
                    <p>Semester 2</p>
                    <li>To’at</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li>Terampil menulis Arab</li>
                    <li>Terampil menggunakan makna Pegon</li>
                    <li>Terampil Pegon Baku</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Tata krama terhadap kerabat</li>
                    <li>Tata krama terhadap tetangga</li>
                    <li>Tata krama bersepeda</li>
                    <li>Tata krama Ketika makan Bersama</li>
                    <li>Tata krama mencari ilmu</li>
                    <li>Kemandirian dalam keluarga</li>
                    <li>Kemandirian dalam lingkungan sekolah</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-sm list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li> 1 sampai 99 (Lancar dan fasih)</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
          <div tabindex="5" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorprimarywhite">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorprimaryblack">Kurikulum PPK (Pendidikan Penguatan Karakter) Kelas 6</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <ol class="space-y-2 text-sm list-decimal list-inside md:text-base">
                <li>
                  Tilawati
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Bacaan Al-Qur’an Juz 7 dan 8</li>
                    <p>Semester 2</p>
                    <li>Bacaan Al-Qur’an Juz 9 dan 10</li>
                    <li>Tajwid</li>
                  </ol>
                </li>
                <li>
                  Hafalan Surat Pendek (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Al-Fajr</li>
                    <li>Al-Ghasiyyah</li>
                    <p>Semester 2</p>
                    <li>Al-A’la</li>
                    <li>At-tariq</li>
                  </ol>
                </li>
                <li>
                  Hafalan Do’a Harian (Murojaah hafalan sebelumnya)
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Do’a berlindung dari penganiyayaan</li>
                    <li>Do’a Ketika takut pada orang kafir</li>
                    <li>Do’a Ketika bertempat di tempat yang baru</li>
                    <li>Do’a Pengayoman</li>
                    <p>Semester 2</p>
                    <li>Do’a minta syurga Firdaus</li>
                    <li>Do’a Maskumambang/sapu jagad</li>
                    <li>Do’a Ketika mimpi yang baik dan jelek</li>
                  </ol>
                </li>
                <li>
                  Hafalan Dalil – dalil
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <p>Semester 1</p>
                    <li>Bersyukur</li>
                    <li>Mengagungkan</li>
                    <li>Mempersunggung</li>
                    <li>Berdo’a</li>
                    <p>Semester 2</p>
                    <li>Berakhlakul karimah</li>
                    <li>Alim faqih</li>
                    <li>Mandiri</li>
                  </ol>
                </li>
                <li>
                  Menulis Arab
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li>Terampil menulis Arab</li>
                    <li>Terampil menggunakan makna Pegon</li>
                    <li>Terampil Pegon Baku</li>
                  </ol>
                </li>
                <li>
                  Akhlak
                  <ol class="space-y-2 text-sm list-decimal list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li>Faham Surga neraka</li>
                    <li>Faham al-qur’an dan al-hadist</li>
                    <li>Tata krama terhadap kerabat</li>
                    <li>Tata krama terhadap tetangga</li>
                    <li>Tata krama bersepeda</li>
                    <li>Tata krama Ketika makan Bersama</li>
                    <li>Tata krama mencari ilmu</li>
                    <li>Kemandirian dalam keluarga</li>
                    <li>Kemandirian dalam lingkungan  sekolah</li>
                  </ol>
                </li>
                <li>
                  Asmaul husna
                  <ol class="space-y-2 text-sm list-inside ms-4 text-colorsecondpurple md:text-base">
                    <li> 1 sampai 99 (Lancar dan fasih)</li>
                  </ol>
                </li>
              </ol>
            </div>
          </div>
        </div>
        {{-- Kurikulum --}}
      </div>
    </section>
    {{-- Kurikulum --}}

    {{-- Kalender Akademik --}}
    <section class="mt-6 !overflow-hidden lg:mt-10">
      <div class="container">
        <div class="flex items-center justify-center gap-2 py-4">
          <img data-aos="fade-right"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi03.png" alt="illustrasi" class="w-6">
          <h1 data-aos="fade-up"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Kalender Akademik</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- Kurikulum --}}
        <div class="w-full mx-auto mt-4 md:w-4/5">
          <div tabindex="0" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondorangemuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorprimaryorange">Semester 1 Tahun Ajaran 2024/2025</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <p>tabindex="0" attribute is necessary to make the div focusable</p>
            </div>
          </div>
          <div tabindex="1" class="mb-2 border collapse border-base-300 collapse-arrow bg-colorsecondtoscamuda">
            <div class="text-sm font-medium md:text-xl collapse-title font-outfit text-colorprimarytosca">Semester 2 Tahun Ajaran 2024/2025</div>
            <div class="collapse-content font-outfit text-colorprimaryblack">
              <p>tabindex="0" attribute is necessary to make the div focusable</p>
            </div>
          </div>
        </div>
        {{-- Kurikulum --}}
      </div>
    </section>
    {{-- Kalender Akademik --}}

    {{-- footer --}}
      @include('footer')
    {{-- footer --}}

    {{-- AOS --}}
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
  </body>
</html>
