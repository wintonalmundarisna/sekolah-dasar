<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>VISI, MISI, DAN TUJUAN | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- data sekolah --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Data Sekolah</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- grid --}}
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-3">
          {{-- card-1 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorsecondgreen bg-colorsecondgreenmuda max-w-auto lg:col-span-2">
            <div class="flex justify-between items-center gap-5">
              <img src="/assets/logo-inf.png" alt="illustrasi" class="w-1/4">
              <div class="grid gap-1">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-colorsecondgreen font-outfit text-start">SD ISLAM NURUL FIRDAUS</h5>
                <p class="text-sm text-colorprimaryblack font-outfit">Komplek Puri Idaman, Jl. Bintara Jaya Raya No. 354 Rt 005/Rw 003, Kel. Bintara Jaya, Kec. Bekasi Barat 17136. Telp : 021-8694 2175</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-start text-colorsecondgreen font-outfit">Terakreditasi B</h5>
              </div>
            </div>
          </div>
          {{-- card-2 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorsecondpurple bg-colorsecondpurplemuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi07.png" alt="illustrasi" class="lg:w-1/2 w-1/4">
              <h5 class="text-7xl font-bold tracking-tight text-colorsecondpurple font-outfit">13</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorsecondpurple font-outfit">Data Guru dan Tata Usaha</h5>
          </div>
        </div>
      </div>
    </section>
    {{-- data sekolah --}}

    {{-- data siswa --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Data Siswa</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- grid --}}
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-3">
          {{-- card-1 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorsecondyellowtua bg-colorsecondyellowmuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi08.png" alt="illustrasi" class="w-1/12">
              <h5 class="text-7xl font-bold tracking-tight text-colorsecondyellowtua font-outfit">51</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorsecondyellowtua font-outfit">Jumlah Siswa Laki-laki</h5>
          </div>
          {{-- card-2 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorprimarytosca bg-colorsecondtoscamuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi09.png" alt="illustrasi" class="w-1/12">
              <h5 class="text-7xl font-bold tracking-tight text-colorprimarytosca font-outfit">34</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorprimarytosca font-outfit">Jumlah Siswa Perempuan</h5>
          </div>
          {{-- card-3 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorprimaryorange bg-colorsecondorangemuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi10.png" alt="illustrasi" class="w-1/6">
              <h5 class="text-7xl font-bold tracking-tight text-colorprimaryorange font-outfit">85</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorprimaryorange font-outfit">Total Seluruh Siswa</h5>
          </div>
        </div>
      </div>
    </section>
    {{-- data siswa --}}

    {{-- data ruangan --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Data Ruangan</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- grid --}}
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-3">
          {{-- card-1 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorprimaryorange bg-colorsecondorangemuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi11.png" alt="illustrasi" class="w-1/6">
              <h5 class="text-7xl font-bold tracking-tight text-colorprimaryorange font-outfit">6</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorprimaryorange font-outfit">Jumlah Ruang Belajar</h5>
          </div>
          {{-- card-2 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorsecondyellowtua bg-colorsecondyellowmuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi12.png" alt="illustrasi" class="w-1/6">
              <h5 class="text-7xl font-bold tracking-tight text-colorsecondyellowtua font-outfit">1</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorsecondyellowtua font-outfit">Jumlah Ruang Perpustakaan</h5>
          </div>
          {{-- card-3 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="block p-4 border rounded-lg border-colorprimarytosca bg-colorsecondtoscamuda max-w-auto">
            <div class="flex justify-between items-center gap-5 w-full">
              <img src="/assets/illustrasi13.png" alt="illustrasi" class="w-1/6">
              <h5 class="text-7xl font-bold tracking-tight text-colorprimarytosca font-outfit">7</h5>
            </div>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-center text-colorprimarytosca font-outfit">Total Jumlah Ruangan</h5>
          </div>
        </div>
      </div>
    </section>
    {{-- data ruangan --}}

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
