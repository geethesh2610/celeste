<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @metadata

    @stack('style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased leading-none">
    <x-header />
    <div class="fixed z-30 bottom-[4vw] right-[4vw] md:bottom-[2vw] md:right-[2vw] rounded-full aspect-square flex items-center justify-center shadow-xl">
        <a aria-label="whatsapp" target="_blank" href="https://wa.me/+971569988333?text=Hi"><img class="aspect-square h-[8vw] md:h-[2.5vw] hover:scale-110 duration-300 transition-all" src="{{ secure_asset('assets/images/whatsapp.png') }}" alt="Website Image"></a>
    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </div>

    @stack('script')
    @livewireScripts

</body>

</html>
