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
        
        <section>
            <!-- Container -->
            <div class="mx-auto w-full max-w-7xl px-5 py-16 md:px-10 md:py-20">
            <!-- Component -->
            <div class="grid items-center gap-8 sm:gap-20 md:grid-cols-2">
                <div class="max-w-2xl">
                <h2 class="mb-4 text-3xl font-bold md:text-5xl md:leading-snug">
                    Saad Growth
                </h2>
                <p class="mb-6 max-w-lg text-sm text-gray-500 sm:text-base md:mb-12">
                    Lorem ipsum delor
                </p>
                <!-- Form -->
                <form name="email-form" method="get" class="flex relative w-full max-w-lg border border-solid border-black p-1 focus-within:outline focus-within:outline-2">
                    <input type="text" class="flex-1 h-9 w-auto bg-white px-3 py-6 text-sm text-black focus:outline-none" placeholder="Enter your name" required="" />
                    <input type="email" class="flex-1 h-9 w-auto bg-white px-3 py-6 text-sm text-black focus:outline-none" placeholder="Enter your email" required="" />
                    <input type="submit" value="Subscribe" class="relative w-auto cursor-pointer bg-black px-6 py-2 text-center font-semibold text-white" />
                </form>
                </div>
                <div>
                <img src="https://firebasestorage.googleapis.com/v0/b/flowspark-1f3e0.appspot.com/o/Tailspark%20Images%2FPlaceholder%20Image.svg?alt=media&token=375a1ea3-a8b6-4d63-b975-aac8d0174074" alt="" class="mx-auto inline-block h-full w-full max-w-xl" />
                </div>
            </div>
            </div>
        </section>
   
    </body>
</html>
