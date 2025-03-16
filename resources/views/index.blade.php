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

    <header>
      <!-- Hero Container -->
      <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-8 md:py-20">
        <!-- Component -->
        <div class="grid items-center justify-items-start gap-8 sm:gap-16 md:grid-cols-2">
          <!-- Hero Content -->
          <div class="flex flex-col">
            <!-- Hero Title -->
            <h1 class="mb-4 text-4xl font-bold md:text-6xl md:leading-tight">
              The Website You Want Without The Dev Time.
            </h1>
            <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-xl md:mb-10 lg:mb-12">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit ut
              aliquam, purus sit amet luctus venenatis, lectus
            </p>
            <!-- Form -->
            <form name="email-form" method="get" class="flex items-center p-1 relative rounded-md border border-solid border-black mb-5 w-full max-w-xl md:mb-6 lg:mb-4 lg:max-w-md  focus-within:outline focus-within:outline-2">
              <input type="email" class="flex-1 h-9 w-full px-3 text-sm text-black placeholder:text-black focus:outline-none" placeholder="Enter your email" required="" />
              <input type="submit" value="Subscribe" class="relative w-auto cursor-pointer rounded-md bg-black px-6 py-2 text-center font-semibold text-white" />
            </form>
            <!-- Hero Info -->
            <div class="grid w-full max-w-2xl grid-flow-row grid-cols-3 gap-4">
              <div>
                <h3 class="text-2xl font-bold md:text-3xl">10K+</h3>
                <p class="text-sm text-gray-500">Customers</p>
              </div>
              <div>
                <h3 class="text-2xl font-bold md:text-3xl">200K+</h3>
                <p class="text-sm text-gray-500">Emails</p>
              </div>
              <div>
                <h3 class="text-2xl font-bold md:text-3xl">500+</h3>
                <p class="text-sm text-gray-500">Projects</p>
              </div>
            </div>
          </div>
          <!-- Hero Image -->
          <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="inline-block h-full w-full max-w-2xl" />
        </div>
      </div>
    </header>
    </body>
</html>
