<x-layout>

    {{-- Landing Section Start --}}
    <section data-no-glass-active class="relative h-[40vh] md:h-[40vh] lg:h-screen has-background overflow-hidden">
        <img data-speed="0.5" src="{{ secure_asset('assets/images/about/landing.png') }}" class="w-auto md:w-full h-full object-cover md:object-bottom z-1 hidden md:block" alt="">
        <img src="{{ secure_asset('assets/images/about/landing.png') }}" class="w-auto md:w-full h-full object-cover md:object-bottom z-1 md:hidden" alt="">
        <div class="absolute inset-0 flex items-end pb-[12vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw]">
            <h1 class="font-uncut font-medium text-white text56px-mobile text220px-desktop">About</h1>
        </div>
    </section>
    {{-- Landing Section End --}}

    {{-- About Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[1.563vw] 3xl:px-[1.484vw] pt-[20.884vw] md:pt-[8.681vw] 3xl:pt-[8.247vw] pb-[24.419vw] md:pb-[6.076vw] 3xl:pb-[5.773vw]">
            <div class="w-full md:w-[54.630vw] 3xl:w-[51.898vw] ml-auto">
                <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-0 md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text18px-desktop">Pride in Every Promise</p>
                </div>
                <h2 data-animate-heading class="hidden md:flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Two Decades of Land Real </span>
                    <span class="inline-block will-change-transform">Estate Expertise</span>
                </h2>
                <h2 data-animate-heading class="md:hidden flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Two Decades of Land</span>
                    <span class="inline-block will-change-transform">Real Estate Expertise</span>
                </h2>

                <div class=" w-full md:w-[41.088vw] 3xl:w-[39.034vw] mt-[9.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw] space-y-[4.186vw] md:space-y-[1.042vw] 3xl:space-y-[0.990vw]">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40]">Celeste is a global real estate company headquartered in Dubai, with a strategic operations hub in Bangalore, India. Our strength lies in one simple idea: every piece of land holds potential—our job is to unlock it.</p>
                    <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40]">From premium residential plots to expansive community developments and high-value industrial lands, we specialize in identifying and delivering assets that grow in value, stand the test of time, and build generational wealth.</p>
                    <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40]">Our team brings decades of experience across construction, land development, investment advisory, and large-scale project strategy—allowing us to guide clients with clarity, precision, and confidence in every decision.</p>
                </div>
            </div>

            {{-- Image --}}
            <img src="{{ secure_asset('assets/images/about/about-tower.png') }}" class="w-full md:w-[36.921vw] 3xl:w-[35.075vw] h-auto absolute top-[130.860vw] md:top-[10.417vw] 3xl:top-[9.896vw] left-0 md:-left-[1.563vw] 3xl:-left-[1.484vw] pointer-events-none" alt="">

            {{-- About grid --}}
            <div class="grid grid-cols-2 md:grid-cols-3 gap-[3.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] mt-[41.860vw] md:mt-[10.417vw] 3xl:mt-[9.896vw] about-card-container">
                {{-- First column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] about-card-column-1">
                    {{-- First card --}}
                    <div class="bg-[#D4B28F] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="226" height="248" viewBox="0 0 226 248" fill="none" class="absolute z-0 top-[10.279vw] md:top-[4.051vw] 3xl:top-[3.848vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[20.558vw] md:w-[13.079vw] 3xl:w-[12.425vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_690)">
                                <path d="M0 59.0726V175.099L48.5203 145.565V88.6067L99.1502 59.0726L48.5203 27.429L0 59.0726Z" fill="#C9A785" />
                                <path d="M198.596 58.0134L98.1136 -6.22076e-05L99.4307 56.7868L148.758 85.2661L149.021 143.88L201.74 115.855L198.596 58.0134Z" fill="#C9A785" />
                                <path d="M97.623 231.623L198.105 173.609L148.268 146.357L98.9401 174.836L48.0479 145.756L45.9586 205.425L97.623 231.623Z" fill="#C9A785" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_690" x="0" y="0" width="201.74" height="231.623" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                    <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="8530" />
                                    <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                                    <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                                        <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                                    </feComponentTransfer>
                                    <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                                    <feFlood flood-color="rgba(0, 0, 0, 0.12)" result="color1Flood" />
                                    <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                                    <feMerge result="effect1_noise_733_690">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>

                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-[10.698vw] md:pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop text-[#1D1D1D] font-bold"><span>02</span></p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] relative z-1">
                            <p class="font-satoshi font-bold text15px-mobile text20px-desktop text-[#1D1D1D]">We sell properties in 2 localities</p>
                        </div>
                    </div>
                </div>

                {{-- Second column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] pt-0 md:pt-[6.366vw] 3xl:pt-[6.047vw] about-card-column-2">
                    {{-- Third card --}}
                    <div class="bg-[#B0D2ED] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="270" height="150" viewBox="0 0 270 150" fill="none" class="absolute z-0 top-[14.535vw] md:top-[7.350vw] 3xl:top-[6.982vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[20.647vw] md:w-[15.589vw] 3xl:w-[14.810vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_706)">
                                <path d="M38.6139 36.3861L4.045e-05 36.3861L19.3053 7.83628e-06L60.9077 1.14733e-05L104.209 75L60.9076 150L39.8525 111.469L60.9077 75L38.6139 36.3861Z" fill="#A3C3DF" />
                                <path d="M122.262 36.3861L83.6485 36.3861L102.954 7.83628e-06L144.556 1.14733e-05L187.857 75L144.556 150L123.501 111.469L144.556 75L122.262 36.3861Z" fill="#A3C3DF" />
                                <path d="M203.786 36.3861L165.172 36.3861L184.477 7.83628e-06L226.08 1.14733e-05L269.381 75L226.08 150L205.024 111.469L226.08 75L203.786 36.3861Z" fill="#A3C3DF" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_706" x="6.10352e-05" y="0" width="269.381" height="150" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                    <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="8530" />
                                    <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                                    <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                                        <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                                    </feComponentTransfer>
                                    <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                                    <feFlood flood-color="rgba(0, 0, 0, 0.12)" result="color1Flood" />
                                    <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                                    <feMerge result="effect1_noise_733_706">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>


                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-[10.698vw] md:pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop text-[#1D1D1D] font-bold"><span>100</span>+</p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] relative z-1">
                            <p class="font-satoshi font-bold text15px-mobile text20px-desktop text-[#1D1D1D]">Residential properties sold</p>
                        </div>
                    </div>
                </div>

                {{-- Third column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] mt-0 md:-mt-[calc(7.986vw*0.5)] 3xl:-mt-[calc(7.587vw*0.5)] about-card-column-3">
                    {{-- First card --}}
                    <div class="bg-[#263957] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="244" height="174" viewBox="0 0 244 174" fill="none" class="absolute z-0 top-[8.837vw] md:top-[7.176vw] 3xl:top-[6.817vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[20.518vw] md:w-[14.064vw] 3xl:w-[13.361vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_700)">
                                <path d="M-6.10352e-05 45.2109H108.25L134.76 88.5266H26.5101L-6.10352e-05 45.2109Z" fill="#1F304C" />
                                <path d="M243.027 0H134.778L108.268 43.3157H216.517L243.027 0Z" fill="#1F304C" />
                                <path d="M-6.10352e-05 129.945H108.25L134.76 173.261H26.5101L-6.10352e-05 129.945Z" fill="#1F304C" />
                                <path d="M243.027 84.75H134.778L108.268 128.066H216.517L243.027 84.75Z" fill="#1F304C" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_700" x="0" y="0" width="243.027" height="173.261" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                    <feTurbulence type="fractalNoise" baseFrequency="1 1" stitchTiles="stitch" numOctaves="3" result="noise" seed="8530" />
                                    <feColorMatrix in="noise" type="luminanceToAlpha" result="alphaNoise" />
                                    <feComponentTransfer in="alphaNoise" result="coloredNoise1">
                                        <feFuncA type="discrete" tableValues="1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 " />
                                    </feComponentTransfer>
                                    <feComposite operator="in" in2="shape" in="coloredNoise1" result="noise1Clipped" />
                                    <feFlood flood-color="rgba(0, 0, 0, 0.12)" result="color1Flood" />
                                    <feComposite operator="in" in2="noise1Clipped" in="color1Flood" result="color1" />
                                    <feMerge result="effect1_noise_733_700">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>

                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-[10.698vw] md:pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop text-white font-bold"><span>400</span>+</p>
                        </div>
                        <div class="border-t border-white border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] relative z-1">
                            <p class="font-satoshi font-bold text15px-mobile text20px-desktop text-white">Happy customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- Expertise Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[15.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[20.907vw] md:pb-[6.944vw] 3xl:pb-[6.597vw]">
            <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-[2.302vw] md:gap-[2.315vw] 3xl:gap-[2.199vw]">
                <div class="w-full md:w-[57.813vw] 3xl:w-[54.922vw]">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Our Expertise</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Where Vision Meets </span>
                            <span class="inline-block will-change-transform">Verified Opportunity</span>
                        </h2>
                    </div>

                    <div class="mt-[12.907vw] md:mt-[6.944vw] 3xl:mt-[6.597vw]">

                        <div class="relative">
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                            </div>
                            <div class="py-[8.372vw] md:py-[2.546vw] 3xl:py-[2.419vw] flex gap-[23.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw] px-[4.651vw] md:px-[1.157vw] 3xl:px-[1.100vw]">
                                <p class="text-[#6C858E] font-satoshi font-medium text26px-desktop hidden md:block">01</p>
                                <div class="flex flex-col">
                                    <p class="font-satoshi text20px-mobile font-bold text26px-desktop text-[#000000]">Strategic Land Sourcing</p>
                                    <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#595959] leading-[1.4] pt-[3.256vw] md:pt-[1.505vw] 3xl:pt-[1.429vw] md:w-[90%]">We identify high-potential land across India and the UAE, backed by strong research and transparent evaluation.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                            </div>
                            <div class="py-[8.372vw] md:py-[2.546vw] 3xl:py-[2.419vw] flex gap-[23.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw] px-[4.651vw] md:px-[1.157vw] 3xl:px-[1.100vw]">
                                <p class="text-[#6C858E] font-satoshi font-medium text26px-desktop hidden md:block">02</p>
                                <div class="flex flex-col">
                                    <p class="font-satoshi text20px-mobile font-bold text26px-desktop text-[#000000]">Vision-Led Opportunities</p>
                                    <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#595959] leading-[1.4] pt-[3.256vw] md:pt-[1.505vw] 3xl:pt-[1.429vw] md:w-[90%]">From residential to industrial assets, we source promising land driven by insight and long-term value.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                            </div>
                            <div class="py-[8.372vw] md:py-[2.546vw] 3xl:py-[2.419vw] flex gap-[23.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw] px-[4.651vw] md:px-[1.157vw] 3xl:px-[1.100vw]">
                                <p class="text-[#6C858E] font-satoshi font-medium text26px-desktop hidden md:block">03</p>
                                <div class="flex flex-col">
                                    <p class="font-satoshi text20px-mobile font-bold text26px-desktop text-[#000000]">Research-Driven Acquisition</p>
                                    <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#595959] leading-[1.4] pt-[3.256vw] md:pt-[1.505vw] 3xl:pt-[1.429vw] md:w-[90%]">Every land opportunity we bring is vetted through deep market analysis, earning lasting investor trust.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="w-full md:w-[36.458vw] 3xl:w-[34.635vw]">
                    <div class="w-full overflow-hidden">
                        <img data-speed=".75" src="{{ secure_asset('assets/images/about/about-expertise.png') }}" class="w-full h-auto object-cover" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Expertise Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- Pride Section Start --}}
    <section class="relative">
        <div class="pt-[20.884vw] md:pt-[8.681vw] 3xl:pt-[8.247vw] px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pb-[20.930vw] md:pb-[5.208vw] 3xl:pb-[4.948vw]">
            <div class="grid md:grid-cols-2 gap-[8.651vw] md:gap-0">
                <div class="relative md:w-[80%]">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-0 md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Pride in Every Promise</p>
                    </div>
                    <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">A Legacy</span>
                        <span class="inline-block will-change-transform"> Built on Trust</span>
                    </h2>

                    <div class="mt-[9.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw] space-y-[2.186vw] md:space-y-[1.042vw] 3xl:space-y-[0.990vw]">
                        <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40]">From landmark projects in India to emerging hotspots in Dubai, our portfolio reflects one consistent truth: we deliver what we promise.</p>
                        <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40]">We don’t just sell land—we build confidence, security, and long-term value.</p>
                    </div>
                </div>
                <div class="flex items-end">
                    <div class="relative w-full">
                        <p class="text-[#3E3E3E] font-satoshi text20px-mobile text22px-desktop font-bold">Clients choose Celeste for:</p>

                        <div class="mt-[7.209vw] md:mt-[1.794vw] 3xl:mt-[1.704vw] border-y" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px);border-image-slice: 1;">
                            <div class="flex items-center gap-[5.116vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] px-[3vw] md:px-0 py-[3.256vw] md:py-[0.810vw] 3xl:py-[0.770vw]">
                                <span class="rounded-full bg-[#00A7E1] size-[1.628vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                                <p class="font-satoshi text-[#3E3E3E] font-medium text22px-desktop text15px-mobile leading-[1.72]">Verified and high-potential land opportunities</p>
                            </div>
                            <div class="flex items-center gap-[5.116vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] px-[3vw] md:px-0 py-[3.256vw] md:py-[0.810vw] 3xl:py-[0.770vw] border-t" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px);border-image-slice: 1;">
                                <span class="rounded-full bg-[#00A7E1] size-[1.628vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                                <p class="font-satoshi text-[#3E3E3E] font-medium text22px-desktop text15px-mobile leading-[1.72]">End-to-end advisory from acquisition to development</p>
                            </div>
                            <div class="flex items-center gap-[5.116vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] px-[3vw] md:px-0 py-[3.256vw] md:py-[0.810vw] 3xl:py-[0.770vw] border-t" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px);border-image-slice: 1;">
                                <span class="rounded-full bg-[#00A7E1] size-[1.628vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                                <p class="font-satoshi text-[#3E3E3E] font-medium text22px-desktop text15px-mobile leading-[1.72]">Strategic insights into future-ready growth zones</p>
                            </div>
                            <div class="flex items-center gap-[5.116vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] px-[3vw] md:px-0 py-[3.256vw] md:py-[0.810vw] 3xl:py-[0.770vw] border-t" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px);border-image-slice: 1;">
                                <span class="rounded-full bg-[#00A7E1] size-[1.628vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                                <p class="font-satoshi text-[#3E3E3E] font-medium text22px-desktop text15px-mobile leading-[1.72]">Transparent processes and investor-first decisions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Pride Section End --}}

    {{-- Investor Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.083vw] 3xl:px-[1.979vw] pt-[18.605vw] md:pt-[4.630vw] 3xl:pt-[4.398vw] pb-[28.140vw] md:pb-[7.002vw] 3xl:pb-[6.652vw]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[4.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                <div class="relative rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] pt-[8vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.083vw] 3xl:mb-[1.979vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text18px-desktop">Investors</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text70px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Your Next Opportunity Starts Here</span>
                        </h2>

                        <p class="text-[#3E3E3E] font-satoshi text15px-mobile text22px-desktop font-medium leading-[1.4] mt-[9.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">Whether you’re an investor looking for high-growth land assets, a developer searching for the perfect location, or an organization planning a large-scale project—Celeste is your trusted partner.<br><br>Explore opportunities. Unlock value. Build with confidence.</p>

                        <div class="mt-[43.256vw] md:mt-[10.764vw] 3xl:mt-[10.226vw] w-max">
                            <a href="{{ route('contact') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                                <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">Contact Us</p>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="w-[10vw] md:w-[7.813vw] 3xl:w-[7.422vw] h-auto absolute right-[4.651vw] md:right-[3.472vw] 3xl:right-[3.299vw] bottom-[4.651vw] md:bottom-[3.472vw] 3xl:bottom-[3.299vw]" alt="">
                </div>
                <div class="relative  aspect-square md:aspect-auto rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] p-[13.953vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <img data-speed=".75" src="{{ secure_asset('assets/images/about/ship.png') }}" class="absolute z-0 left-0 top-0 object-cover w-full h-[120%] hidden md:block" alt="">
                    <img src="{{ secure_asset('assets/images/about/ship.png') }}" class="absolute z-0 top-0 left-0 w-full h-[120%] object-cover md:hidden" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Investor Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

</x-layout>
