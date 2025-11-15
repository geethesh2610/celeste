<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased leading-none">
    <svg class="fixed w-0 h-0" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <filter id="glass-filter" color-interpolation-filters="sRGB">
                <feImage id="displacement-map" x="0" y="0" width="100%" height="100%" result="map"></feImage>

                <!-- Reduced scale values for subtler effect -->
                <feDisplacementMap in="SourceGraphic" in2="map" id="redchannel" xChannelSelector="R" yChannelSelector="B" scale="-40" result="dispRed" />
                <feColorMatrix in="dispRed" type="matrix" values="1 0 0 0 0, 0 0 0 0 0, 0 0 0 0 0, 0 0 0 1 0" result="red" />

                <feDisplacementMap in="SourceGraphic" in2="map" id="greenchannel" xChannelSelector="R" yChannelSelector="B" scale="-35" result="dispGreen" />
                <feColorMatrix in="dispGreen" type="matrix" values="0 0 0 0 0, 0 1 0 0 0, 0 0 0 0 0, 0 0 0 1 0" result="green" />

                <feDisplacementMap in="SourceGraphic" in2="map" id="bluechannel" xChannelSelector="R" yChannelSelector="B" scale="-30" result="dispBlue" />
                <feColorMatrix in="dispBlue" type="matrix" values="0 0 0 0 0, 0 0 0 0 0, 0 0 1 0 0, 0 0 0 1 0" result="blue" />

                <feBlend in="red" in2="green" mode="screen" result="rg" />
                <feBlend in="rg" in2="blue" mode="screen" result="output" />
                <feGaussianBlur in="output" stdDeviation="0.1" />
            </filter>
        </defs>
    </svg>
    <x-header />
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                {{ $slot }}
            </main>

            <x-footer />
        </div>
    </div>
</body>

</html>
