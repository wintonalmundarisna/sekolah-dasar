<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SD ISLAM NURUL FIRDAUS</title>

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

    {{-- hero --}}
    <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <div class="relative z-10">
          <div class="absolute flex flex-col items-center justify-center w-full bg-opacity-25 h-60 md:h-96 bg-colorprimaryorange">
            <img src="/assets/wave-01.png" alt="wave" class="absolute top-0 z-20 w-full">
            <img src="/assets/wave-02.png" alt="wave" class="absolute bottom-0 z-20 w-full">
            <h5 data-aos="fade-up"
                data-aos-delay="30"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center"
                class="text-lg font-bold text-white text-opacity-100 lg:text-2xl font-outfit">Sekolah Dasar</h5>
            <h1 data-aos="fade-up"
                data-aos-delay="40"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center"
                class="text-xl font-bold text-white lg:text-3xl font-outfit">ISLAM NURUL FIRDAUS</h1>
            <button data-aos="fade-up"
                data-aos-delay="50"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="true"
                data-aos-once="false"
                data-aos-anchor-placement="top-center"
                class="mt-5">
              <a class="border-none rounded-sm btn btn-sm font-outfit bg-colorprimaryorange text-colorprimarywhite hover:bg-orange-700 lg:btn-md">Profile Sekolah</a>
            </button>
          </div>
        </div>
        <!-- Carousel wrapper -->
        <div class="relative z-0 overflow-hidden h-60 md:h-96 xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="/assets/image-01.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 -z-10 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-02.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-03.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-04.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-05.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 6 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-06.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 7 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-07.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 8 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-08.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
            <!-- Item 9 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="/assets/image-09.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="foto-guru-dan-siswa">
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 z-10 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    {{-- hero --}}

    {{-- sambutan kepsek --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Kepala Sekolah</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-2">
          <div class="flex items-center justify-center">
            <img data-aos="fade-right"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            src="/assets/image-bg.png
            " alt="foto-kepsek" class="w-1/2 rounded-lg">
          </div>
          <div data-aos="fade-left"
            data-aos-delay="50"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="space-y-2 text-base font-normal leading-6 tracking-tight text-colorprimaryblack font-outfit">
            <h1 class="mt-2 text-xl font-bold text-center text-colorprimarytosca font-outfit lg:text-left lg:mt-0">SAMBUTAN KEPALA SEKOLAH <br>SD ISLAM NURUL FIRDAUS</h1>
            <p class="font-bold text-colorsecondyellowtua">Syukron Hidayatullah, S.Pd.</p>
            <p>Bismillahirrohmanirrohiim…</p>
            <p class="font-bold"><i>Assalamu’alaikum warohmatullahi wabarokatuh</i></p>
            <p>Selamat datang di Website sekolah kami SD Islam Nurul Firdaus yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum.</p>
            <p>Alhamdulillahi rabbil ‘alamiin, puji syukur marilah kita panjatkan kepada Tuhan Yang Maha Esa yang telah memberikan limpahan rahmat, nikmat, dan karuniaNya sehingga saya mampu menuliskan kata sambutan Kepala Sekolah dalam rangka penerbitan webs...</p>
            <a onclick="my_modal_3.showModal()" class="border-none rounded-sm btn btn-sm font-outfit bg-colorprimaryorange text-colorprimarywhite hover:bg-orange-700 lg:btn-md">Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
        {{-- modal --}}
        <dialog id="my_modal_3" class="w-screen modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="mb-5 text-lg font-bold text-center text-colorprimarytosca">Sambutan Kepala Sekolah</h3>
            <div class="space-y-2 text-base font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit text-balance">
              <p>Bismillahirrohmanirrohiim…</p>
              <p class="font-bold"><i>Assalamu’alaikum warohmatullahi wabarokatuh</i></p>
              <p>Selamat datang di Website sekolah kami SD Islam Nurul Firdaus yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum.</p>
              <p>Alhamdulillahi rabbil ‘alamiin, puji syukur marilah kita panjatkan kepada Tuhan Yang Maha Esa yang telah memberikan limpahan rahmat, nikmat, dan karuniaNya sehingga saya mampu menuliskan kata sambutan Kepala Sekolah dalam rangka penerbitan website sekolah SD Islam Nurul Firdaus sebagai sarana informasi dan komunikasi sekolah ini melalui media online.</p>
              <p>Di era global dan pesatnya Teknologi Informasi saat ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu organisasi, sangatlah penting. Website dapat menjadi ajang promosi sekolah yang cukup efektif. Berbagai kegiatan dan progres sekolah dapat disampaikan secara faktual dan aktual sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SD Islam Nurul Firdaus.</p>
              <p>Sebagai media pembelajaran, website sekolah juga dapat dimanfaatkan untuk memuat artikel yang dibuat oleh pendidik dan tenaga kependidikan. Fasilitas ini akan menunjang kegiatan pembelajaran berbasis Teknologi Informasi. Selain itu, website juga dapat dijadikan sebagai sarana komunikasi antara sekolah dengan para alumni sehingga terbentuk ikatan alumni yang semakin solid.</p>
              <p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahim yang erat disegala unsur. Mari kita bekerja, berkarya, dan beramal sholih dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus di jiwa demi masa depan generasi penerus bangsa. Saya mengucapkan Terima Kasih. Alhamdulillahi Jazakumullahu Khoiro.</p>
              <p class="font-bold"><i>Wassalamu’alaikum Warahmatullahi Wabarakatuh</i></p>
            </div>
          </div>
        </dialog>
        {{-- modal --}}
      </div>
    </section>
    {{-- sambutan kepsek --}}

    {{-- selayang pandang --}}
    <section class="mt-6 lg:mt-10 !overflow-hidden">
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Selayang Pandang</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        <div class="grid grid-cols-1 gap-5 mt-4 lg:mt-8 md:grid-cols-2 place-items-center">
          <div data-aos="fade-right"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="space-y-2 text-base font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit text-balance lg:mb-0">
            <p>
              SD Islam Nurul Firdaus merupakan salah satu lembaga pendidikan Tingkat Sekolah Dasar Islam yang berada di bawah naungan Dinas Pendidikan Kota Bekasi. Terletak di Komplek Puri Idaman Jl. Bintara Jaya Raya No. 354 Kel. Bintara Jaya Kec. Bekasi Barat Kota Bekasi. Berdiri sejak tahun 2010 dan telah menghasilkan lulusan berkarakter religius menggunakan kurikulum Diknas, Kurikulum Agama Islam, dan muatan lokal. Sekolah ini menanamkan nilai berbasis karakter dan kreativitas yaitu “Three Best Education; Best Character, Best Moeslem, Best Achievement”, sehingga sekolah ini menjadi pilihan yang tepat untuk  mempersiapkan generasi yang merindukan surga dan siap memimpin dunia sejak dini.
            </p>
          </div>
          <div class="flex items-center justify-center">
            <img data-aos="fade-left"
            data-aos-delay="50"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            src="/assets/image-05.png" alt="selayang-pandang" class="rounded-lg">
          </div>
        </div>
      </div>
    </section>
    {{-- selayang pandang --}}

    {{-- maps --}}
    <section class="mt-6 lg:mt-10 !overflow-hidden">
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Lokasi</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
          <div class="grid grid-cols-1 mt-6">
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="relative w-full h-96">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.134167626985!2d106.9466355!3d-6.2460444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7f9f0a5e17%3A0x4218350a367c5ed9!2sSD%20Islam%20Nurul%20Firdaus!5e0!3m2!1sid!2sid!4v1732447089418!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded-md"></iframe>
            </div>
          </div>
      </div>
    </section>
    {{-- maps --}}

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
