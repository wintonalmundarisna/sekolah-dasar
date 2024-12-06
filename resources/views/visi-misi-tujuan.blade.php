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

    {{-- visi, misi, dan tujuan --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Visi, Misi, dan Tujuan</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-3">
          {{-- card-1 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="relative block p-6 border rounded-lg border-colorprimaryorange bg-colorsecondorangemuda max-w-auto">
            <img data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"  
            src="/assets/illustrasi05.png" alt="illustrasi" class="absolute w-12 -top-9 -right-2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-colorprimaryorange font-outfit">VISI</h5>
            <p class="font-normal text-colorprimaryblack font-outfit">“Pendidikan Sekolah Dasar Islam yang sesuai Al-Qur`an & As- Sunnah dalam melahirkan generasi yang Akhlaqul karimah, Alim dan Faqih, Mandiri, dan Berprestasi yang terintegrasi dengan Profil Pelajar Pancasila (P3)”</p>
          </div>
          {{-- card-2 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="relative block p-6 border rounded-lg border-colorsecondyellowtua bg-colorsecondyellowmuda max-w-auto">
            <img data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"  
            src="/assets/illustrasi04.png" alt="illustrasi" class="absolute w-9 -top-9 -right-2">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-colorsecondyellowtua font-outfit">MISI</h5>
            <ol class="space-y-3 font-normal list-decimal list-inside text-colorprimaryblack font-outfit">
                <li>Menjadikan anak didik sebagai pecinta Al-Qur`an dan As-Sunnah</li>
                <li>Menjadikan anak didik sebagai penghafal Al-Quran dan As-Sunnah</li>
                <li>Menyiapkan anak didik yang shalih berkarakter Al-Qur`an.</li>
                <li>Menyiapkan anak didik sebagai calon pemimpin yang amanah dan berakhlak mulia.</li>
                <li>Menyiapkan anak didik yang cerdas, mandiri, berprestasi berkarya demi kemajuan Agama, bangsa dan negara.</li>
                <li>Menjadikan anak didik menguasai teknologi informasi dan komunikasi berbasis Al-Qur'an.</li>
                <li>Menjadikan anak didik mampu berbahasa Arab sebagai bahasa Al-Quran dan bahasa Inggris sebagai bahasa Internasional.</li>
                <li>Melaksanakan Jaminan Pendidikan Prima kepada Peserta Didik untuk mendukung proses pembelajaran</li>
                <li>Melaksanakan pelatihan bagi guru dalam meningkatkan prestasi dalam upaya pencapaian hasil pendidikan yang berkualitas.</li>
            </ol>
          </div>
          {{-- card-3 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="relative block p-6 border rounded-lg border-colorprimarytosca bg-colorsecondtoscamuda max-w-auto">
            <img data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"  
            src="/assets/illustrasi01.png" alt="illustrasi" class="absolute w-9 -top-9 -right-1">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-center text-colorprimarytosca font-outfit">TUJUAN</h5>
            <ol class="space-y-3 font-normal list-decimal list-inside text-colorprimaryblack font-outfit">
                <li>Menciptakan Siswa yang Shaleh Mandiri Dan Berprestasi.</li>
                <li>Mengoptimalkan sarana prasana sekolah untuk mecapai keberhasilan dalam belajar.</li>
                <li>Pemanfaatan digitalisasi untuk menunjang keberhasilan guru dalam mentrasfer ilmu.</li>
                <li>Membentuk peserta didik yang taat dan tepat waktu melaksanakan ibadah.</li>
                <li>Menumbuhkan sikap percaya diri dan berjiwa satria.</li>
                <li>Merancang program sekolah untuk mengenalkan implementasi kebhinekaan global di masyarakat.</li>
                <li>Menumbuhkan kecintaan dan bangga akan potensi daerah.</li>
                <li>Membiasakan siswa untuk bernalar kritis dan kreatif.</li>
                <li>Melaksanakan pembelajaran untuk mengasah kemampuan literasi dan numerasi.</li>
                <li>Menumbuhkan sikap toleransi dalam bermasyarakat.</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    {{-- visi, misi, dan tujuan --}}

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
