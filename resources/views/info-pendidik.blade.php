<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Info Pendidik | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- info pendidik --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Info Pendidik</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- modal --}}
        <dialog id="my_modal_3" class="w-screen modal">
          <div class="modal-box">
            <form method="dialog">
              <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="mb-5 text-lg font-bold text-center text-colorprimarytosca">Info Detail Pendidik</h3>
            <div class="space-y-2 text-base font-normal leading-7 tracking-tight text-colorprimaryblack font-outfit text-balance">
              <p>Syukron Hidayatullah, S.Pd.</p>
              <p>Kepala Sekolah</p>
              <p>SD Islam Nurul Firdaus</p>
            </div>
          </div>
        </dialog>
        {{-- modal --}}

        {{-- grid --}}
        <div class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4">
          {{-- card-1 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondorangemuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimaryorange font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimaryorange rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
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
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondtoscamuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimarytosca font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimarytosca rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-3 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondyellowmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondyellowtua font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondyellowtua rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-4 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondgreenmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondgreen font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondgreen rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-5 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondgreenmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondgreen font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondgreen rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-6 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondyellowmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondyellowtua font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondyellowtua rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-7 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondtoscamuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimarytosca font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimarytosca rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-8 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondorangemuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimaryorange font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimaryorange rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-9 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondorangemuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimaryorange font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimaryorange rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-10 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondtoscamuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorprimarytosca font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimarytosca rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-11 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondyellowmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondyellowtua font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondyellowtua rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-12 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondgreenmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondgreen font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondgreen rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
          {{-- card-13 --}}
          <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center" 
            class="max-w-sm py-4 rounded-lg">
            <div class="rounded-md bg-colorsecondgreenmuda pt-4">
              <a href="#" class="flex items-center justify-center">
                <img class="rounded-t-lg w-1/2" src="/assets/pendidik03.png" alt="info-pendidik"/>
              </a>
            </div>
            <div class="py-3">
              <div class="flex items-center justify-between">
                <div>
                  <h5 class="mb-1 text-sm font-bold tracking-tight md:text-md text-colorsecondgreen font-outfit ">Syukron Hidayatullah, S.Pd.</h5>
                  <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">Kepala Sekolah</p>
                </div>
                <a onclick="my_modal_3.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorsecondgreen rounded-md">
                  <i class="fa-solid fa-address-card"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- info pendidik --}}

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
