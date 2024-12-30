<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery | SD ISLAM NURUL FIRDAUS</title>

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
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Javascript --}}
    {{-- @vite(['resources/js/index.js'])

    @vite('resources/css/app.css') --}}
</head>

<body>
    {{-- navbar --}}
    @include('navbar')
    {{-- navbar --}}

    {{-- gallery --}}
    <section class="mt-6 !overflow-hidden lg:mt-10">
        <div class="container">
            @if (@isset($data))
                <div class="flex items-center justify-center gap-2 py-4">
                    <img data-aos="fade-right" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                        src="/assets/illustrasi03.png" alt="illustrasi" class="w-6">
                    <h1 data-aos="fade-up" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                        class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">
                        {{ $tema }}
                        Sekolah
                    </h1>
                    <img data-aos="fade-left" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                        data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                        src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
                </div>
                {{-- gallery --}}
                <div class="flex items-center justify-between w-full py-4 md:py-8">
                    <div class="flex w-full gap-3 overflow-y-auto no-scrollbar">
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="field_trips">
                            <button class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap" data-category="filed-trip" value="field_trips">Field Trip</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="rakers">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="rakers" value="rakers">Kegiatan Raker</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="market_days">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="market-day" value="market_days">Market Day</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="mpls">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="mpls-peserta-didik-baru" value="mpls">MPLS Peserta Didik Baru</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="munaqosyahs">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="munaqosyah" value="munaqosyahs">Munaqosyah</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="parentings">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="parenting" value="parentings">Parenting</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="perkajum_persaris">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="perkajum-dan-persari" value="perkajum_persaris">Perkajum Dan
                                Persari</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="pesantren_kilats">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="pesantren-kilat" value="pesantren_kilats">Pesantren Kilat</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="kurbans">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="qurban" value="kurbans">Qurban</button>
                        </form>
                        <form action="/gallery" method="get">
                            <input type="hidden" name="kategori" value="workshops">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active whitespace-nowrap"
                                data-category="upgrading-dan-workshop-guru" value="workshops">Upgrading Dan Workshop
                                Guru</button>
                        </form>
                    </div>
                </div>
            @endif
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
            @foreach ($data as $d)
                {{-- card all --}}
                <div class="max-w-sm py-4 rounded-lg card" data-category="filed-trip">
                    <div class="bg-white rounded-md">
                        <a class="relative flex items-center justify-center cursor-default bg-cover bg-no-repeat bg-center overflow-hidden h-[150px]">
                            <img class="w-full bg-cover bg-no-repeat bg-center rounded-t-lg overflow-hidden" src="{{ asset('storage/' . $d->dokumentasi) }}"
                                alt="foto {{ $d->judul }}" />
                            <img class="absolute bottom-0 w-full" src="/assets/aksesoris-2.png" alt="wave">
                            <img class="absolute top-0 w-full" src="/assets/aksesoris-1.png" alt="wave">
                        </a>
                        <h1 class="text-sm font-semibold tracking-tight text-start md:text-lg text-colorprimaryblack font-outfit">{{ $d->judul }}</h1>
                    </div>
                </div>
                {{-- card all --}}
            @endforeach
            
        </div>
        {{-- gallerty --}}
        </div>
    </section>
    {{-- gallerty --}}

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
