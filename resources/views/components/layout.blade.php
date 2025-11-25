<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @stack('style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased leading-none">
    <x-header />
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </div>

    @stack('script')
</body>

</html>
