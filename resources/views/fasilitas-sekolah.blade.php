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
        {{-- @vite(['resources/js/index.js']) --}}

    {{-- @vite('resources/css/app.css') --}}
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
              <form action="/fasilitas-sekolah" method="get">
                <input type="hidden" name="kategori" value="Sarana">
                <button class="btn btn-active btn-neutral font-outfit bg-{{ $kategori == 'Sarana' ? 'colorprimaryblack' : 'colorprimarytosca' }} category-link active whitespace-nowrap" data-category="sarana" value="sarana">Sarana</button>
              </form>
              <form action="/fasilitas-sekolah" method="get">
                <input type="hidden" name="kategori" value="Sarana Penunjang">
                <button class="btn btn-active btn-neutral font-outfit bg-{{ $kategori == 'Sarana Penunjang' ?  'colorprimaryblack' : 'colorprimarytosca' }} category-link active whitespace-nowrap" data-category="sarana-penunjang" value="sarana-penunjang">Sarana Penunjang</button>
              </form>
              <form action="/fasilitas-sekolah" method="get">
                <input type="hidden" name="kategori" value="Alat Peraga">
                <button class="btn btn-active btn-neutral font-outfit bg-{{ $kategori == 'Alat Peraga' ?  'colorprimaryblack' : 'colorprimarytosca' }} category-link active whitespace-nowrap" data-category="alat-peraga" value="alat-peraga">Alat Peraga</button>
              </form>
              <form action="/fasilitas-sekolah" method="get">
                <input type="hidden" name="kategori" value="Bangunan">
                <button class="btn btn-active btn-neutral font-outfit bg-{{ $kategori == 'Bangunan' ?  'colorprimaryblack' : 'colorprimarytosca' }} category-link active whitespace-nowrap" data-category="bangunan" value="bangunan">Bangunan</button>
              </form>
              <form action="/fasilitas-sekolah" method="get">
                <input type="hidden" name="kategori" value="Fasilitas">
                <button class="btn btn-active btn-neutral font-outfit bg-{{ $kategori == 'Fasilitas' ?  'colorprimaryblack' : 'colorprimarytosca' }} category-link active whitespace-nowrap" data-category="fasilitas" value="fasilitas">Fasilitas</button>
              </form>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
          @if(@isset($data))          
            
            {{-- card all --}}
            @foreach ($data as $d)
              <div class="max-w-sm py-4 rounded-lg card" 
                  data-category="{{ $d->kategori }}">
                    <div class="bg-white rounded-md">
                        <a class="relative flex items-center justify-center cursor-default bg-cover bg-no-repeat bg-center overflow-hidden h-[180px]">
                            <img class="w-full bg-cover bg-no-repeat bg-center rounded-t-lg overflow-hidden" src="{{ asset('storage/' . $d->foto_fasilitas) }}"
                                alt="foto {{ $d->nama_fasilitas }}" />
                            <img class="absolute bottom-0 w-full" src="/assets/aksesoris-2.png" alt="wave">
                            <img class="absolute top-0 w-full" src="/assets/aksesoris-1.png" alt="wave">
                        </a>
                        <div class="flex justify-between items-center w-full mt-3">
                          <h1 class="text-sm font-semibold tracking-tight text-star md:text-lg text-colorprimaryblack font-outfit line-clamp-1">{{ $d->nama_fasilitas }}</h1>
                          <a onclick="my_modal_{{ $d->id }}.showModal()" class="px-4 py-2.5 text-sm text-center text-white bg-colorprimarytosca rounded-md cursor-pointer">
                            <i class="fa-regular fa-eye"></i>
                          </a>
                        </div>
                    </div>
                </div>
                {{-- modal --}}
                  <dialog id="my_modal_{{ $d->id }}" class="modal">
                    <div class="modal-box">
                      <form method="dialog">
                        <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
                      </form>
                      <h3 class="mb-4 text-lg font-bold text-center border-b-2 font-outfit text-colorprimarytosca border-colorprimarytosca">Detail Fasilitas</h3>
                      <img src="{{ asset('storage/' . $d->foto_fasilitas) }}"
                                alt="foto {{ $d->nama_fasilitas }}" />
                      <h4 class="mt-3 text-sm font-semibold tracking-tight text-star md:text-lg text-colorprimaryblack font-outfit">Nama Fasilitas : {{ $d->nama_fasilitas }}</h4>
                      <p class="text-sm font-semibold tracking-tight text-star md:text-lg text-colorprimaryblack font-outfit">Jumlah Fasilitas : {{ $d->jumlah }}</p>
                      <p class="text-sm font-semibold tracking-tight text-star md:text-lg text-colorprimaryblack font-outfit">Kategori Fasilitas : {{ $d->kategori }}</p>
                    </div>
                  </dialog>
                  {{-- modal --}}
            @endforeach
            {{-- card all --}}
          @endif

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
