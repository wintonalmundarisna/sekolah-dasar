<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Informasi PPDB | SD ISLAM NURUL FIRDAUS</title>

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

    {{-- Informasi PPDB --}}
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
              class="text-2xl font-bold text-center lg:text-3xl text-colorprimarytosca font-outfit">Daftar Peserta Didik</h1>
          <img data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="500"
              data-aos-easing="ease-in-out"
              data-aos-mirror="true"
              data-aos-once="false"
              data-aos-anchor-placement="top-center" 
              src="/assets/illustrasi02.png" alt="illustrasi"class="w-6">
        </div>
        {{-- daftar peserta didik --}}
        <div class="overflow-x-auto">
          <table class="table table-zebra table-xs table-pin-rows table-pin-cols font-outfit text-colorprimaryblack">
            <thead>
              <tr>
                <th class="text-colorprimarytosca font-outfit text-md">No</th>
                <td class="text-colorprimarytosca font-outfit text-md">Name</td>
                <td class="text-colorprimarytosca font-outfit text-md">Job</td>
                <td class="text-colorprimarytosca font-outfit text-md">company</td>
                <td class="text-colorprimarytosca font-outfit text-md">location</td>
                <td class="text-colorprimarytosca font-outfit text-md">Last Login</td>
                <td class="text-colorprimarytosca font-outfit text-md">Favorite Color</td>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th>1</th>
                <td>Cy Ganderton</td>
                <td>Quality Control Specialist</td>
                <td>Littel, Schaden and Vandervort</td>
                <td>Canada</td>
                <td>12/16/2020</td>
                <td>Blue</td>
                <th>1</th>
              </tr>
              <tr>
                <th>2</th>
                <td>Hart Hagerty</td>
                <td>Desktop Support Technician</td>
                <td>Zemlak, Daniel and Leannon</td>
                <td>United States</td>
                <td>12/5/2020</td>
                <td>Purple</td>
                <th>2</th>
              </tr>
              <tr>
                <th>3</th>
                <td>Brice Swyre</td>
                <td>Tax Accountant</td>
                <td>Carroll Group</td>
                <td>China</td>
                <td>8/15/2020</td>
                <td>Red</td>
                <th>3</th>
              </tr>
              <tr>
                <th>4</th>
                <td>Marjy Ferencz</td>
                <td>Office Assistant I</td>
                <td>Rowe-Schoen</td>
                <td>Russia</td>
                <td>3/25/2021</td>
                <td>Crimson</td>
                <th>4</th>
              </tr>
              <tr>
                <th>5</th>
                <td>Yancy Tear</td>
                <td>Community Outreach Specialist</td>
                <td>Wyman-Ledner</td>
                <td>Brazil</td>
                <td>5/22/2020</td>
                <td>Indigo</td>
                <th>5</th>
              </tr>
              <tr>
                <th>6</th>
                <td>Irma Vasilik</td>
                <td>Editor</td>
                <td>Wiza, Bins and Emard</td>
                <td>Venezuela</td>
                <td>12/8/2020</td>
                <td>Purple</td>
                <th>6</th>
              </tr>
              <tr>
                <th>7</th>
                <td>Meghann Durtnal</td>
                <td>Staff Accountant IV</td>
                <td>Schuster-Schimmel</td>
                <td>Philippines</td>
                <td>2/17/2021</td>
                <td>Yellow</td>
                <th>7</th>
              </tr>
              <tr>
                <th>8</th>
                <td>Sammy Seston</td>
                <td>Accountant I</td>
                <td>O'Hara, Welch and Keebler</td>
                <td>Indonesia</td>
                <td>5/23/2020</td>
                <td>Crimson</td>
                <th>8</th>
              </tr>
              <tr>
                <th>9</th>
                <td>Lesya Tinham</td>
                <td>Safety Technician IV</td>
                <td>Turner-Kuhlman</td>
                <td>Philippines</td>
                <td>2/21/2021</td>
                <td>Maroon</td>
                <th>9</th>
              </tr>
              <tr>
                <th>10</th>
                <td>Zaneta Tewkesbury</td>
                <td>VP Marketing</td>
                <td>Sauer LLC</td>
                <td>Chad</td>
                <td>6/23/2020</td>
                <td>Green</td>
                <th>10</th>
              </tr>
              <tr>
                <th>11</th>
                <td>Andy Tipple</td>
                <td>Librarian</td>
                <td>Hilpert Group</td>
                <td>Poland</td>
                <td>7/9/2020</td>
                <td>Indigo</td>
                <th>11</th>
              </tr>
              <tr>
                <th>12</th>
                <td>Sophi Biles</td>
                <td>Recruiting Manager</td>
                <td>Gutmann Inc</td>
                <td>Indonesia</td>
                <td>2/12/2021</td>
                <td>Maroon</td>
                <th>12</th>
              </tr>
              <tr>
                <th>13</th>
                <td>Florida Garces</td>
                <td>Web Developer IV</td>
                <td>Gaylord, Pacocha and Baumbach</td>
                <td>Poland</td>
                <td>5/31/2020</td>
                <td>Purple</td>
                <th>13</th>
              </tr>
              <tr>
                <th>14</th>
                <td>Maribeth Popping</td>
                <td>Analyst Programmer</td>
                <td>Deckow-Pouros</td>
                <td>Portugal</td>
                <td>4/27/2021</td>
                <td>Aquamarine</td>
                <th>14</th>
              </tr>
              <tr>
                <th>15</th>
                <td>Moritz Dryburgh</td>
                <td>Dental Hygienist</td>
                <td>Schiller, Cole and Hackett</td>
                <td>Sri Lanka</td>
                <td>8/8/2020</td>
                <td>Crimson</td>
                <th>15</th>
              </tr>
              <tr>
                <th>16</th>
                <td>Reid Semiras</td>
                <td>Teacher</td>
                <td>Sporer, Sipes and Rogahn</td>
                <td>Poland</td>
                <td>7/30/2020</td>
                <td>Green</td>
                <th>16</th>
              </tr>
              <tr>
                <th>17</th>
                <td>Alec Lethby</td>
                <td>Teacher</td>
                <td>Reichel, Glover and Hamill</td>
                <td>China</td>
                <td>2/28/2021</td>
                <td>Khaki</td>
                <th>17</th>
              </tr>
              <tr>
                <th>18</th>
                <td>Aland Wilber</td>
                <td>Quality Control Specialist</td>
                <td>Kshlerin, Rogahn and Swaniawski</td>
                <td>Czech Republic</td>
                <td>9/29/2020</td>
                <td>Purple</td>
                <th>18</th>
              </tr>
              <tr>
                <th>19</th>
                <td>Teddie Duerden</td>
                <td>Staff Accountant III</td>
                <td>Pouros, Ullrich and Windler</td>
                <td>France</td>
                <td>10/27/2020</td>
                <td>Aquamarine</td>
                <th>19</th>
              </tr>
              <tr>
                <th>20</th>
                <td>Lorelei Blackstone</td>
                <td>Data Coordinator</td>
                <td>Witting, Kutch and Greenfelder</td>
                <td>Kazakhstan</td>
                <td>6/3/2020</td>
                <td>Red</td>
                <th>20</th>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th></th>
                <td>Name</td>
                <td>Job</td>
                <td>company</td>
                <td>location</td>
                <td>Last Login</td>
                <td>Favorite Color</td>
                <th></th>
              </tr>
            </tfoot>
          </table>
        </div>
        {{-- daftar peserta didik --}}
      </div>
    </section>
    {{-- Informasi PPDB --}}

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
