<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kontak Person | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- Kontak Person --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Kontak Person</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- form --}}
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 w-full">
          <form>
                <div class="grid gap-3 mb-6">
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-colorprimaryblack font-outfit">Nama Anda</label>
                        <input type="text" id="nama" class="bg-gray-50 border border-colorprimarytosca text-colorprimaryblack font-outfit text-sm rounded-sm focus:ring-colorprimarytosca focus:border-colorprimarytosca block w-full p-2.5" placeholder="John" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-colorprimaryblack font-outfit">Email Anda</label>
                        <input type="email" id="email" class="bg-gray-50 border border-colorprimarytosca text-colorprimaryblack font-outfit text-sm rounded-sm focus:ring-colorprimarytosca focus:border-colorprimarytosca block w-full p-2.5" placeholder="John@gmail.com" required />
                    </div>
                    <div>
                        <label for="judul" class="block mb-2 text-sm font-medium text-colorprimaryblack font-outfit">Judul</label>
                        <input type="text" id="judul" class="bg-gray-50 border border-colorprimarytosca text-colorprimaryblack font-outfit text-sm rounded-sm focus:ring-colorprimarytosca focus:border-colorprimarytosca block w-full p-2.5" placeholder="Tulisakan judul" required />
                    </div>
                    <div>
                      <label for="pesan" class="block mb-2 text-sm font-medium text-colorprimaryblack font-outfit">Pesan Anda</label>
                      <textarea id="pesan" rows="4" class="block p-2.5 w-full text-sm text-colorprimaryblack bg-gray-50 rounded-sm border border-colorprimarytosca focus:ring-colorprimarytosca focus:border-colorprimarytosca" placeholder="Tulisakan pesan anda disini..."></textarea>
                    </div>
                <button type="submit" class="text-white font-outfit bg-colorprimarytosca focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm w-full sm:w-auto px-5 py-2.5 text-center">Kirim Pesan</button>
            </form>
          </div>
          {{-- informasi kontak --}}
          <div class="bg-colorprimarywhite p-3 rounded-lg shadow-lg border">
            <h4 class="text-center text-colorprimarytosca font-outfit text-2xl font-semibold mb-4">Informasi Kontak</h4>
            <div class="flex gap-3 items-center mb-3">
              <i class="fa-solid fa-map-location-dot text-colorprimaryorange text-xl"></i>
              <p class="text-colorprimaryblack font-outfit text-normal">Komplek Puri Idaman, Jl. Bintara Jaya Raya, Kec. Bekasi Barat, Kota Bekasi, Jawa Barat 17136</p>
            </div>
            <div class="flex gap-3 items-center mb-3">
              <i class="fa-brands fa-square-whatsapp text-colorprimarytosca text-2xl"></i>
              <p class="text-colorprimaryblack font-outfit text-normal">0813-1302-6012</p>
            </div>
            <div class="flex gap-3 items-center mb-3">
              <i class="fa-solid fa-square-phone text-colorsecondyellowtua text-2xl"></i>
              <p class="text-colorprimaryblack font-outfit text-normal">021-3029-6957</p>
            </div>
            <div class="flex gap-3 items-center mb-3">
              <i class="fa-solid fa-square-envelope text-colorsecondgreen text-2xl"></i>
              <p class="text-colorprimaryblack font-outfit text-normal">thenurulfirdaus@gmail.com</p>
            </div>
            <a href="https://maps.app.goo.gl/47vDGkmN68tkfDux9" target="_blank" class="w-full">
              <button class="btn btn-md w-full bg-colorsecondgreen text-white hover:bg-green-700"><i class="fa-solid fa-location-dot text-white"></i> Maps</button>
            </a>
          </div>
      </div>
    </section>
    {{-- Kontak Person --}}

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
