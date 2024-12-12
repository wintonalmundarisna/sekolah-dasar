<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Alumni | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- Alumni --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Alumni</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- Alumni --}}
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 4</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 5</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 6</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 6</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Hari Angkatan 7</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 7</h3>
            </div>
            {{-- card --}}
            {{-- card --}}
            <div data-aos="fade-up"
            data-aos-delay="40"
            data-aos-duration="500"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
            data-aos-anchor-placement="top-center"
            class="max-w-sm py-4 rounded-lg card">
              <div class="rounded-md bg-colorsecondorangemuda">
                <a href="#" class="relative flex items-center justify-center">
                  <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian"/>
                  <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                </a>
              </div>
              <h3 class="text-sm font-bold tracking-tight md:text-lg text-colorprimaryblack font-outfit ">Angkatan 8</h3>
            </div>
            {{-- card --}}
        </div>
        {{-- Alumni --}}
      </div>
    </section>
    {{-- Alumni --}}

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
