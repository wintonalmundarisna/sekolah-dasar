<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Fasilitas Sekolah | SD ISLAM NURUL FIRDAUS</title>

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

        {{-- Javascript --}}
        @vite(['resources/js/index.js'])

    @vite('resources/css/app.css')
  </head>

  <body>
    {{-- navbar --}}
    @include('navbar')
    {{-- navbar --}}

    {{-- Fasilitas sekolah --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Fasilitas Sekolah</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- fasilitas sekolah --}}
        <div class="flex items-center justify-center w-full py-4 md:py-8">
          <div class="flex gap-3 overflow-y-auto no-scrollbar">
            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active" data-category="sarana">Sarana</button>
            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active" data-category="sarana-penunjang">Sarana Penunjang</button>
            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active" data-category="alat-peraga">Alat Peraga</button>
            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active" data-category="bangunan">Bangunan</button>
            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active" data-category="fasilitas">Fasilitas</button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Kursi Siswa</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Meja Siswa</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Lemari</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Meja Guru</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Kursi Guru</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Loker Guru</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Papan Tulis</h3>
            </div>
            {{-- card sarana --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Komputer</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Raket</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Shuttlecock</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Bola Kasti</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Bola Sepak</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Bola Volley</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Cone</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Sarana Air Bersih</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card sarana penunjang --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="sarana-penunjang">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Printer</h3>
            </div>
            {{-- card sarana penunjang --}}
            {{-- card alat peraga --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="alat-peraga">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Anatomi Manusia</h3>
            </div>
            {{-- card alat peraga --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang Belajar</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang Guru</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang Kepala Sekolah</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang UKS</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang Perpustakaan</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card bangunan --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="bangunan">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Ruang Kamar Mandi</h3>
            </div>
            {{-- card bangunan --}}
            {{-- card fasilitas --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="fasilitas">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Lapangan Bola</h3>
            </div>
            {{-- card fasilitas --}}
            {{-- card fasilitas --}}
            <div class="max-w-sm py-4 rounded-lg card" data-category="fasilitas">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Lapangan Basket</h3>
            </div>
            {{-- card fasilitas --}}
        </div>
        {{-- fasilitas sekolah --}}
      </div>
    </section>
    {{-- Fasilitas sekolah --}}

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
