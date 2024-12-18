<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Informasi PPDB | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- Informasi PPDB --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Informasi PPDB</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- informasi ppdb --}}
        <div class="relative grid w-full grid-cols-1 gap-3 p-4 mx-auto mt-3 border rounded-lg md:w-3/4 bg-colorprimarywhite drop-shadow-xl">
          <h4 class="mb-4 text-2xl font-semibold text-center text-colorprimarytosca font-outfit">Informasi PPDB </h4>
          <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
            Dengan mengucapkan segala puja dan puji syukur kepada Allah SWT, kuota pendaftaran peserta didik baru (PPDB) di SD ISLAM NURUL FIRDAUS sudah <span class="text-colorsecondgreen">terpenuhi</span>.
          </p>
          <p class="text-lg font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit">
            Dan kami umumkan bahwa pendaftaran untuk calon peserta didik baru tahun ajaran 2024-2025 telah di <span class="text-colorprimaryorange">tutup</span>.
          </p>
          <img src="/assets/illustrasi05.png" alt="illustrasi" class="absolute w-12 -top-7 -right-2">
        </div>
        {{-- informasi ppdb --}}
      </div>
    </section>
    {{-- Informasi PPDB --}}

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
