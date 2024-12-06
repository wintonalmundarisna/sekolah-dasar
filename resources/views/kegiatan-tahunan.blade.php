<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kegiatan Tahunan | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- Kegiatan Tahunan --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Kegiatan</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- Grid --}}
        <div class="grid w-full grid-cols-1 mx-auto mt-4 lg:w-4/5">
          <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-colorsecondorangemuda">
            {{-- accordion --}}
            <h2 id="accordion-color-heading-1">
              <button type="button" class="flex items-center justify-between w-full gap-3 p-5 text-xl font-bold border border-b-0 border-gray-200 text-colorprimaryorange rtl:text-right rounded-t-xl font-outfit" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                <span class="text-colorprimaryorange">Kegiatan Tahunan</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-colorprimaryorange" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
              <div class="p-5 border border-b-0 border-gray-200">
                <ol class="space-y-2 font-normal list-decimal list-inside text-colorprimaryblack font-outfit">
                  <li>MPLS (Masa Pengenalan Lingkungan Sekolah)</li>
                  <li>MOK (Masa Orientasi Kepramukaan)</li>
                  <li>Lomba HUT RI</li>
                  <li>Field Trip</li>
                  <li>Project Class</li>
                  <li>Parenting</li>
                  <li>Class Meeting</li>
                  <li>Manasaik Haji</li>
                  <li>Pentas Seni</li>
                  <li>Market Day</li>
                  <li>Sapta Lomba</li>
                  <li>Kegiatan Ramadhan</li>
                  <li>Pesantren Kilat</li>
                  <li>Penyembelihan hewan Qurban</li>
                  <li>Persari (Perkemahan Satu hari)</li>
                  <li>Persera (Perkemahan selasa rabu)</li>
                  <li>Orientasi Pembina Pramuka</li>
                  <li>Rihlah</li>
                  <li>ASTS (Asesmen Sumatif Tengah Semester)</li>
                  <li>ASAS (Asesmen Sumatif Akhir Semester)</li>
                  <li>ASAT (Asesmen Sumatif Akhir Tahun)</li>
                  <li>ANBK</li>
                  <li>ASAJ</li>
                  <li>Wisuda</li>
                </ol>
              </div>
            </div>
            {{-- accordion --}}
            {{-- accordion --}}
            <h2 id="accordion-color-heading-2">
              <button type="button" class="flex items-center justify-between w-full gap-3 p-5 text-xl font-bold border border-b-0 border-gray-200 text-colorprimaryorange rtl:text-right rounded-t-xl font-outfit" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                <span class="text-colorprimaryorange">Kegiatan Unggulan</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-colorprimaryorange" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
              <div class="p-5 border border-b-0 border-gray-200">
                <ol class="space-y-2 font-normal list-decimal list-inside text-colorprimaryblack font-outfit">
                  <li>Tahfidz dan Tahsin al-quran metode Tilawati</li>
                  <li>Pembinaan ibadah harian</li>
                  <li>Pembinaan akhlak sehari-hari</li>
                  <li>Disiplin waktu</li>
                  <li>Kelas 1 sampai kelas 2 dibimbing oleh 2 guru</li>
                  <li>Latihan kepemimpinan siswa</li>
                  <li>Ekskul yang bervariasi</li>
                </ol>
              </div>
            </div>
            {{-- accordion --}}
          </div>
        </div>
        {{-- grid --}}
      </div>
    </section>
    {{-- Kegiatan Tahunan --}}

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
