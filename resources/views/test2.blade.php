<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- <style>
        * {
            border: 1px solid red;
        }
    </style> --}}
</head>
<body class="bg-[#101326]">
    <!-- Header -->
    <header>

    <!-- Navigation bar -->
    <nav
      class="absolute top-0 z-50 flex w-full flex-wrap items-center justify-between bg-transparent py-2 text-neutral-200 lg:flex-wrap lg:justify-start lg:py-4"
      data-te-navbar-ref>
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
          class="block border-0 bg-transparent px-2 text-neutral-200 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
          type="button"
          data-te-collapse-init
          data-te-target="#navbarSupportedContent4"
          aria-controls="navbarSupportedContent4"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <!-- Hamburger icon -->
          <span class="[&>svg]:w-7">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              class="h-7 w-7">
              <path
                fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Collapsible navigation container -->
        <div
          class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
          id="navbarSupportedContent4"
          data-te-collapse-item>
          <!-- Navbar title -->
          <a class="pr-2 text-xl font-semibold text-white" href="#">KaptenBiu</a>
          <!-- Left navigation links -->
          <ul
            class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
            data-te-navbar-nav-ref>
            <!-- Dashboard link -->
            <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="text-[#FFD369] disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-te-nav-link-ref
                >Home</a
              >
            </li>
            <!-- Team link -->
            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="p-0 text-[#FFD369] opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-te-nav-link-ref
                >Blogs</a
              >
            </li>
            <!-- Projects link -->
            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="p-0 text-[#FFD369] opacity-60 hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                href="#"
                data-te-nav-link-ref
                >Projects</a
              >
            </li>
          </ul>
        </div>

        <!-- Right elements -->
        <div class="relative flex items-center">
          <!-- Cart Icon -->
          <a
            class="mr-4 text-white opacity-60 hover:opacity-80 focus:opacity-80"
            href="#">
            <span class="[&>svg]:w-5">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5">
                <path
                  d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
              </svg>
            </span>
          </a>

          <!-- Container with two dropdown menus -->
          <div class="relative" data-te-dropdown-ref>
            <!-- First dropdown trigger -->
            <a
              class="hidden-arrow mr-4 flex items-center text-white opacity-60 hover:opacity-80 focus:opacity-80"
              href="#"
              id="dropdownMenuButton1"
              role="button"
              data-te-dropdown-toggle-ref
              aria-expanded="false">
              <!-- Dropdown trigger icon -->
              <span class="[&>svg]:w-5">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="h-5 w-5">
                  <path
                    fill-rule="evenodd"
                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                    clip-rule="evenodd" />
                </svg>
              </span>
              <!-- Notification counter -->
              <span
                class="absolute -mt-2.5 ml-2 rounded-full bg-red-700 px-1.5 py-0 text-xs text-white"
                >1</span
              >
            </a>
            <!-- First dropdown menu -->
            <ul
              class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
              aria-labelledby="dropdownMenuButton1"
              data-te-dropdown-menu-ref>
              <!-- First dropdown menu items -->
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Action</a
                >
              </li>
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Another action</a
                >
              </li>
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Something else here</a
                >
              </li>
            </ul>
          </div>

          <!-- Second dropdown container -->
          <div class="relative" data-te-dropdown-ref>
            <!-- Second dropdown trigger -->
            <a
              class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
              href="#"
              id="dropdownMenuButton2"
              role="button"
              data-te-dropdown-toggle-ref
              aria-expanded="false">
              <!-- User avatar -->
              <img
                src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg"
                class="rounded-full"
                style="height: 25px; width: 25px"
                alt=""
                loading="lazy" />
            </a>
            <!-- Second dropdown menu -->
            <ul
              class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
              aria-labelledby="dropdownMenuButton2"
              data-te-dropdown-menu-ref>
              <!-- Second dropdown menu items -->
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Action</a
                >
              </li>
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Another action</a
                >
              </li>
              <li>
                <a
                  class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-white/30"
                  href="#"
                  data-te-dropdown-item-ref
                  >Something else here</a
                >
              </li>
            </ul>
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </nav>

    <!-- Hero section with background image, heading, subheading and button -->
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat h-screen"
        style="
          background-position: 50%;
          background-image: url('img/header.jpg');
        ">
        <div
          class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[#1C1D39]/[.9] bg-fixed"
          {{-- style="background-color: rgba(0, 0, 0, 0.5)" --}}
          >
          <div class="flex mt-12 h-full items-center justify-center">
            <div class="px-6 text-center text-white md:px-40">
              <h1 class="mb-2 text-3xl lg:text-6xl text-[#FED059] font-bold">ABIYYU SHIDDIQ ASAD</h1>
              <h3 class="mb-6 text-2xl lg:text-4xl text-[#FED059] font-bold">FRONT END DEVELOPER</h3>
              <p class="mb-6 text-center text-sm lg:text-lg text-[#EEEEEE]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem ipsum, euismod ut lobortis sit amet, faucibus vel nunc. Maecenas id turpis venenatis arcu placerat posuere quis vitae risus. Fusce ultricies sapien ut est fringilla posuere. Curabitur cursus enim ac odio pulvinar vulputate. Donec quis nibh odio. Nunc euismod egestas diam quis blandit. Vivamus aliquet nisl tristique augue sollicitudin, ac congue nulla gravida.</p>
              <a
                type="button"
                href="#about"
                class="inline-block rounded border-2 border-neutral-50 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Get started
              </a>
            </div>
          </div>
        </div>
    </div>

    </header>
    {{-- bagan about --}}
    <div id="about" class="grid grid-cols-2 lg:h-screen items-center bg-[#1C1D39] md:rounded-bl-[600px] border-2 border-transparent border-b-[#FED059] overflow-hidden">
        <div class="place-self-end pt-10 self-end">
            <img src="img/hero.png" class="md:w-[800px]" alt="">
        </div>
        <div class="text-left text-white pt-5 md:pr-10 md:mr-20">
            <h1 class="text-[#FED059] font-normal text-xl">Ketahui</h1>
            <h2 class="font-bold text-3xl">Tentang Saya</h2>
            <p class="py-3 text-xs md:text-lg font-medium leading-relaxed">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id, quos incidunt modi dolor ea, aspernatur, ipsam odit similique commodi eum maiores aut exercitationem necessitatibus vel. Itaque quis veritatis odit doloribus. Vitae vero dolorem unde, iure aspernatur eos ab fugiat recusandae accusamus. Odit corrupti labore eius iusto nihil expedita velit ea quo inventore. Tenetur iste voluptas hic similique autem aspernatur molestias explicabo fugit, repudiandae voluptate in laboriosam dolorum, minima eos tempora. Rem, modi ex. Ex ullam rem illo mollitia nam quae!
            </p>
            <button
                type="button"
                class="inline-block rounded-full border-2 border-[#FED059] px-6 pb-[6px] pt-2 text-sm font-bold uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Kontak Saya
            </button>
            <button
                type="button"
                class="inline-block md:ml-2 rounded-full border-2 bg-[#FED059] border-neutral-50 px-6 pb-[6px] pt-2 text-sm font-bold uppercase leading-normal text-[#1C1D39] transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                data-te-ripple-init
                data-te-ripple-color="light">
                Download CV
            </button>
        </div>
    </div>
    {{-- akhir bagan about --}}

    <!-- information card -->
    <div class="container my-24 mx-auto md:px-20">
    <!-- Section: Design Block -->
    <section class="text-left text-white">
        <h3 class="text-2xl font-semibold text-center text-white">Lingkup</h3>
        <h2 class="mb-20 text-3xl font-bold text-center text-[#FED059]">Keahlian</h2>

        <div class="grid lg:grid-cols-3 lg:gap-x-6">
        <div class="mb-12 lg:mb-0">
            <div
            class="block h-full bg-[#1C1D39] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Support 24/7</h5>
                <p>
                Laudantium totam quas cumque pariatur at doloremque hic quos
                quia eius. Reiciendis optio minus mollitia rerum labore
                facilis inventore voluptatem ad, quae quia sint.
                </p>
            </div>
            </div>
        </div>

        <div class="mb-12 lg:mb-0">
            <div
            class="block h-full bg-[#1C1D39] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Safe and solid</h5>
                <p>
                Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                ullam aspernatur odio soluta, quisquam dolore animi mollitia a
                omnis praesentium, expedita nobis!
                </p>
            </div>
            </div>
        </div>

        <div class="">
            <div
            class="block h-full bg-[#1C1D39] shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
            <div class="flex justify-center">
                <div class="-mt-8 inline-block rounded-full bg-primary-100 p-4 text-primary shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="h-7 w-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                </svg>
                </div>
            </div>
            <div class="p-6">
                <h5 class="mb-4 text-lg font-semibold">Extremely fast</h5>
                <p>
                Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                ullam beatae hic voluptatibus dolores exercitationem? Facilis
                debitis aspernatur amet nisi?
                </p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>
    {{-- end of information card --}}

    {{-- bagan pengalaman --}}
    <div class="container mx-auto md:px-20 my-10">
        <div>
          <h3 class="text-2xl font-semibold text-center text-white">Pengalaman</h3>
          <h2 class="mb-10 text-3xl font-bold text-center text-[#FED059]">Kerja</h2>
        </div>
        <ol class="border-l border-neutral-300 dark:border-neutral-500">
        <!--First item-->
        <li>
            <div class="flex-start flex items-center pt-3">
            <div
                class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
            <p class="text-sm text-neutral-500 dark:text-neutral-300">
                01.07.2021
            </p>
            </div>
            <div class="mb-6 ml-4 mt-2">
            <h4 class="mb-1.5 text-xl font-semibold text-white">Title of section 1</h4>
            <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                scelerisque diam non nisi semper, et elementum lorem ornare.
                Maecenas placerat facilisis mollis. Duis sagittis ligula in
                sodales vehicula.
            </p>
            </div>
        </li>

        <!--Second item-->
        <li>
            <div class="flex-start flex items-center pt-2">
            <div
                class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
            <p class="text-sm text-neutral-500 dark:text-neutral-300">
                13.09.2021
            </p>
            </div>
            <div class="mb-6 ml-4 mt-2">
            <h4 class="mb-1.5 text-xl font-semibold text-white">Title of section 2</h4>
            <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                Libero expedita explicabo eius fugiat quia aspernatur autem
                laudantium error architecto recusandae natus sapiente sit nam
                eaque, consectetur porro molestiae ipsam an deleniti.
            </p>
            </div>
        </li>

        <!--Third item-->
        <li>
            <div class="flex-start flex items-center pt-2">
            <div
                class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300 dark:bg-neutral-500"></div>
            <p class="text-sm text-neutral-500 dark:text-neutral-300">
                25.11.2021
            </p>
            </div>
            <div class="ml-4 mt-2 pb-5">
            <h4 class="mb-1.5 text-xl font-semibold text-white">Title of section 3</h4>
            <p class="mb-3 text-neutral-500 dark:text-neutral-300">
                Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit
                natus! Eum corporis illum nihil officiis tempore. Excepturi illo
                natus libero sit doloremque, laborum molestias rerum pariatur quam
                ipsam necessitatibus incidunt, explicabo.
            </p>
            </div>
        </li>
        </ol>
    </div>
    {{-- akhir bagan pengalaman --}}

    {{-- bagan kontak saya --}}
    <div class="my-0 border-2 border-transparent border-t-[#FED059] bg-[#1C1D39]">
    <div class="container mx-auto md:px-20">
    <!-- Section: Design Block -->
    <section class="py-10 text-white">
        <div class="flex flex-wrap">
        <div class="mb-10 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
            <h2 class="mb-6 text-3xl font-bold">Contact us</h2>
            <p class="mb-6 text-white dark:text-neutral-300">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laudantium, modi accusantium ipsum corporis quia asperiores
            dolorem nisi corrupti eveniet dolores ad maiores repellendus enim
            autem omnis fugiat perspiciatis? Ad, veritatis.
            </p>
            <p class="mb-2 text-white dark:text-neutral-300">
            New York, 94126, United States
            </p>
            <p class="mb-2 text-white dark:text-neutral-300">
            + 01 234 567 89
            </p>
            <p class="mb-2 text-white dark:text-neutral-300">
            info@gmail.com
            </p>
        </div>
        <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:mb-0 md:w-6/12 md:px-3 lg:px-6">
            <form>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="text"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleInput90" placeholder="Name" />
                <label
                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                for="exampleInput90">Name
                </label>
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="email"
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleInput91" placeholder="Email address" />
                <label
                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                for="exampleInput91">Email address
                </label>
            </div>
            <div class="relative mb-6" data-te-input-wrapper-init>
                <textarea
                class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                id="exampleFormControlTextarea1" rows="3" placeholder="Your message"></textarea>
                <label for="exampleFormControlTextarea1"
                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Message</label>
            </div>
            <div class="mb-6 inline-block min-h-[1.5rem] justify-center pl-[1.5rem] md:flex">
                <input
                class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                type="checkbox" value="" id="exampleCheck96" checked />
                <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="exampleCheck96">
                Send me a copy of this message
                </label>
            </div>
            <button type="button" data-te-ripple-init data-te-ripple-color="light"
                class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Send
            </button>
            </form>
        </div>
        </div>
    </section>
    <!-- Section: Design Block -->
    </div>
    </div>

    {{-- bagian footer --}}
    <!--Footer container-->
    <footer class="bg-neutral-900 text-center text-[white]">
      <div class="container px-6 pt-6">
        <div class="mb-6 flex justify-center">
          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                fill-rule="evenodd"
                clip-rule="evenodd" />
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
            </svg>
          </a>

          <a
            href="#!"
            type="button"
            class="m-1 h-9 w-9 rounded-full border-2 border-white uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
            data-te-ripple-init
            data-te-ripple-color="light">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-auto h-full w-4"
              fill="currentColor"
              viewBox="0 0 24 24">
              <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
            </svg>
          </a>
        </div>
      </div>

      <!--Copyright section-->
      <div
        class="p-4 text-center"
        style="background-color: rgba(0, 0, 0, 0.2)">
        © 2023 Copyright:
        <a class="text-whitehite" href="https://kaptenbiu.com/"
          >KaptenBiu</a
        >
      </div>
    </footer>
    {{-- end bagian footer --}}
    @vite('resources/js/app.js')
</body>
</html>
