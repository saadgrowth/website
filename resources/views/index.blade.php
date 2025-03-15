<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Saad Growth</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased">

    <header class="z-30 w-full px-2 py-4 bg-white sm:px-4">
      <div class="flex items-center justify-between mx-auto max-w-7xl">
        <a href="/" title="Kutty Home Page" class="flex items-center">
          <span class="sr-only">SaadGrowth</span>
        </a>
        <div class="flex items-center space-x-1">
          <div class="hidden space-x-1 md:inline-flex">
            <a href="#" class="btn btn-sm btn-link">Features</a>
            <a href="#" class="btn btn-sm btn-link">Sign in</a>
          </div>
          <a href="#" class="btn btn-sm btn-primary">Get Started</a>
          <div class="inline-flex md:hidden" x-data="{ open: false }">
            <button class="flex-none px-2 btn btn-link btn-sm" @click="open = true">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
                class="w-5 h-5"
              >
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
              </svg>
              <span class="sr-only">Open Menu</span>
            </button>
            <div class="absolute top-0 left-0 right-0 z-50 flex flex-col p-2 pb-4 m-2 space-y-3 bg-white rounded shadow" x-show.transition="open" @click.away="open = false" x-cloak>
              <button class="self-end flex-none px-2 ml-2 btn btn-link btn-icon" @click="open = false">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
                <span class="sr-only">Close Menu</span>
              </button>
              <a href="#" class="w-full btn btn-link">Features</a>
              <a href="#" class="w-full btn btn-link">Sign in</a>
            </div>
          </div>
        </div>
      </div>
    </header>

<!-- Remove the div below -->
<div class="py-32 bg-gray-400"></div>
        <section class="px-4 py-24 mx-auto max-w-7xl">
            <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
              <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                Saad<span class="block w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-purple-500 lg:inline">Growth</span>
              </h1>
              <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a class="inline-flex items-center justify-center w-full mb-2 btn btn-primary btn-lg sm:w-auto sm:mb-0" href="#">
                  Get Started
                  <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </a>
                <a class="inline-flex items-center justify-center w-full mb-2 btn btn-light btn-lg sm:w-auto sm:mb-0" href="#">
                  Book a Demoss
                  <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path
                      fill-rule="evenodd"
                      d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </div>
            </div>
            <div class="w-full mx-auto mt-20 text-center md:w-10/12">
              <img src="/hero.jpg" alt="Hellonext feedback boards software screenshot" class="w-full rounded-lg shadow-2xl" />
            </div>
          </section>   
    </body>
</html>
