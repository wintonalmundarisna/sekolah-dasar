<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Peserta Didik | SD ISLAM NURUL FIRDAUS</title>

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

    @vite('resources/css/app.css')
</head>

<body>
    {{-- navbar --}}
    @include('navbar')
    {{-- navbar --}}

    {{-- Daftar Peserta Didik --}}
    <section class="mt-6 !overflow-hidden lg:mt-10">
        <div class="container">
            <div class="z-10 flex items-center justify-center gap-2 py-4">
                <img data-aos="fade-right" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                    data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                    src="/assets/illustrasi03.png" alt="illustrasi" class="w-6">
                <h1 data-aos="fade-up" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                    data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                    class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Daftar Peserta
                    Didik</h1>
                <img data-aos="fade-left" data-aos-delay="30" data-aos-duration="500" data-aos-easing="ease-in-out"
                    data-aos-mirror="true" data-aos-once="false" data-aos-anchor-placement="top-center"
                    src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
            </div>
            {{-- daftar peserta didik --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right">
                    <thead class="text-xs uppercase text-colorprimarytosca font-outfit bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Foto
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tempat Lahir
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Agama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rombel Saat Ini
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td scope="row"
                                    class="px-6 py-4 font-medium text-colorprimaryblack font-outfit whitespace-nowrap">
                                    {{ $d->nama }}
                                </td>
                                <td class="px-6 py-4">
                                    @if (@isset($d->foto))
                                        <img src="{{ asset('storage/' . $d->foto) }}"
                                            class="w-16 max-w-full max-h-full md:w-32" alt="foto-siswa">
                                    @else
                                        <img src="{{ asset('assets/default-teacher.jpg') }}"
                                            class="w-16 max-w-full max-h-full md:w-32" alt="foto-siswa">
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    @if ($d->jk == 'L')
                                        Laki-Laki
                                    @else
                                        Perempuan
                                    @endif

                                </td>
                                <td class="px-6 py-4">
                                    {{ $d['tempat-lahir'] }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $d->agama }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $d['rombel-saat-ini'] }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- daftar peserta didik --}}
        </div>
    </section>
    {{-- Daftar Peserta Didik --}}

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
