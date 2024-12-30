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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Info Guru</h1>
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
        <div class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4">
          {{-- card --}}
          @foreach ($data as $d)
            <div data-aos="fade-up"
              data-aos-delay="40"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center"
              class="max-w-sm py-4 rounded-lg">
              <div class="rounded-md bg-colorsecondorangemuda overflow-hidden">
                <a class="flex items-center justify-center cursor-default bg-cover bg-no-repeat bg-center overflow-hidden h-[200px]">
                  <img class="w-full bg-cover bg-no-repeat bg-center rounded-t-lg overflow-hidden" src="{{ asset('storage/'.$d->foto) }}" alt="info-pendidik"/>
                </a>
              </div>
              <div class="py-3">
                <div class="flex items-center justify-between">
                  <div>
                    <h5 class="mb-0.5 text-sm font-bold tracking-tight md:text-base text-colorprimaryorange font-outfit line-clamp-1">{{ $d->nama }}</h5>
                    <p class="text-sm font-normal tracking-tight md:text-md text-colorprimaryblack font-outfit">{{ $d['jenis-ptk'] }}</p>
                  </div>
                  <a onclick="my_modal_{{ $d->id }}.showModal()" class="px-4 py-2.5 text-md font-medium text-center text-white bg-colorprimaryorange rounded-md">
                    <i class="cursor-pointer fa-solid fa-address-card"></i>
                  </a>
                  {{-- modal --}}
                  <dialog id="my_modal_{{ $d->id }}" class="modal">
                    <div class="modal-box">
                      <form method="dialog">
                        <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
                      </form>
                      <h3 class="mb-2 text-lg font-bold text-center border-b-2 font-outfit text-colorprimaryorange border-colorprimaryorange">Detail Guru</h3>
                      <p class="py-1 font-bold border-b-2 font-outfit text-colorprimaryblack">Nama : {{ $d->nama }}</p>
                      <p class="py-1 border-b-2 font-outfit text-colorprimaryblack">Jabatan : {{ $d->jabatan }}</p>
                      <p class="py-1 border-b-2 font-outfit text-colorprimaryblack">Jenis PTK : {{ $d['jenis-ptk'] }}</p>
                    </div>
                  </dialog>
                  {{-- modal --}}
                </div>
              </div>
            </div>
            @endforeach
          {{-- card --}}
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
