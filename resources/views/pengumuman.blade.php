<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pengumuman PPDB | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- pengumuman PPDB --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Pengumuman PPDB</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- pengumuman ppdb --}}
        <div class="w-full mx-auto mt-3 border md:w-3/4">
          <div class="relative w-auto shadow-xl card bg-base-100">
            <div class="card-body">
              <h2 class="py-2 text-lg font-semibold text-center font-outfit text-colorprimarytosca">PENGUMUMAN PPDB TAHUN AJARAN 2024-2025</h2>
              <p class="py-1 text-lg font-bold font-outfit text-colorprimaryblack"><i>Assalaamu‘alaikum Warahmatullahi Wabarakaatuh</i></p>
              <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
                Alhamdulillah segala puji hanya milik Allah SWT. Shalawat dan salam selalu tercurahkan kepada utusan dan hamba Allah yaitu Nabi Muhammad SAW. 
              </p>
              <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
                Panitia Penerimaan Peserta Didik Baru (PPDB) Sekolah Dasar Islam Terpadu SD ISLAM NURUL FIRDAUS Tahun Ajaran 2024-2025, berdasarkan hasil Tes Kemampuan Dasar, Tes Kematangan Belajar dan Wawancara Orang Tua/Wali dengan sekolah yang diselenggarakan pada setiap periode pendaftaran menghasilkan keputusan sebagai berikut :
              </p>
              <div class="card-actions">
                <button class="w-full text-sm text-white btn bg-colorsecondgreen hover:bg-green-700 md:text-base font-outfit"><a href="/storage/sk_ppdb/SK-PPDB-24-25.pdf" target="_blank">PENGUMUMAN PPDB KELAS I</a> <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                <button class="w-full text-sm text-white btn bg-colorsecondyellowtua hover:bg-yellow-700 md:text-base font-outfit"><a href="https://www.sditaliman.sch.id/wp-content/uploads/2023/12/SK-Pindahan-Ke-Kelas-3-TP-24-25.pdf" target="_blank">PENGUMUMAN SISWA PINDAHAN</a> <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
              </div>
              <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
                Keputusan Panitia PPDB dan Dewan Guru SD ISLAM NURUL FIRDAUS ini tidak dapat diganggu gugat.
              </p>
              <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
                Demikian pengumuman kelulusan ini kami sampaikan, untuk dapat di maklumi.
              </p>
              <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
                Terimakasih, alhamdulillah jaza kumullahu khoiro
              </p>
              <p class="py-1 text-lg font-bold font-outfit text-colorprimaryblack"><i>Wassalamu‘alaikum Warahmatullahi Wabarakaatuh</i></p>
            </div>
            <img src="/assets/illustrasi01.png" alt="illustrasi" class="absolute right-0 w-10 -top-7">
          </div>
        </div>
        {{-- pengumuman ppdb --}}
      </div>
    </section>
    {{-- pengumuman PPDB --}}

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
