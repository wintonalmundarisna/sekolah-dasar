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
                <div class="flex items-center justify-center w-full py-4 md:py-8">
                    <div class="flex gap-3 overflow-y-auto no-scrollbar">
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="field_trips">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="filed-trip" value="field_trips">Field Trip</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="rakers">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="rakers" value="rakers">Kegiatan Raker</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="market_days">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="market-day" value="market_days">Market Day</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="mpls">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="mpls-peserta-didik-baru" value="mpls">MPLS Peserta Didik Baru</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="munaqosyahs">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="munaqosyah" value="munaqosyahs">Munaqosyah</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="parentings">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="parenting" value="parentings">Parenting</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="perkajum_persaris">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="perkajum-dan-persari" value="perkajum_persaris">Perkajum Dan
                                Persari</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="pesantren_kilats">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="pesantren-kilat" value="pesantren_kilats">Pesantren Kilat</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="kurbans">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="qurban" value="kurbans">Qurban</button>
                        </form>
                        <form action="/gallery" action="get">
                            <input type="hidden" name="kategori" value="workshops">
                            <button
                                class="text-white hover:text-colorprimarytosca btn font-outfit bg-colorprimarytosca category-link active"
                                data-category="upgrading-dan-workshop-guru" value="workshops">Upgrading Dan Workshop
                                Guru</button>
                        </form>
            @endif
        </div>
        </div>
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
            @foreach ($data as $d)
                {{-- card all --}}
                <div class="max-w-sm py-4 rounded-lg card" data-category="filed-trip">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="{{ asset('storage/' . $d->dokumentasi) }}"
                                alt="foto {{ $d->judul }}" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                        <h1>{{ $d->judul }}</h1>
                    </div>
                </div>
                {{-- card all --}}
            @endforeach


            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="filed-trip">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="filed-trip">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card field trip --}}
            {{-- card kegiatan raker --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="kegiatan-raker">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="kegiatan-raker">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="kegiatan-raker">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card kegiatan raker --}}
            {{-- card market day --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="market-day">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="market-day">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card market day --}}
            {{-- card mpls peserta didik baru --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="mpls-peserta-didik-baru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="mpls-peserta-didik-baru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="mpls-peserta-didik-baru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="mpls-peserta-didik-baru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card mpls peserta didik baru --}}
            {{-- card munaqosyah --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="munaqosyah">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card munaqosyah --}}
            {{-- card parenting --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="parenting">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="parenting">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card parenting --}}
            {{-- card perkajum dan persari --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="perkajum-dan-persari">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="perkajum-dan-persari">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="perkajum-dan-persari">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card perkajum dan persari --}}
            {{-- card pesantren kilat --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="pesantren-kilat">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="pesantren-kilat">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="pesantren-kilat">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="pesantren-kilat">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card pesantren kilat --}}
            {{-- card qurban --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="qurban">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="qurban">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="qurban">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card qurban --}}
            {{-- card upgrading dan workshop guru --}}
            {{-- <div class="max-w-sm py-4 rounded-lg card" data-category="upgrading-dan-workshop-guru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="upgrading-dan-workshop-guru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div>
                <div class="max-w-sm py-4 rounded-lg card" data-category="upgrading-dan-workshop-guru">
                    <div class="rounded-md bg-colorsecondorangemuda">
                        <a href="#" class="relative flex items-center justify-center">
                            <img class="w-full rounded-t-lg" src="/assets/foto-ujian.png" alt="foto-ujian" />
                            <img class="absolute bottom-0 w-full" src="/assets/wave-card.png" alt="wave">
                        </a>
                    </div>
                </div> --}}
            {{-- card upgrading dan workshop guru --}}
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
