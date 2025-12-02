<x-layout>

    @push('style')
        <style>
            .noise-bg {
                position: relative;
            }

            .noise-bg::after {
                content: "";
                position: absolute;
                inset: 0;
                background: #000;
                opacity: 0.12;
                pointer-events: none;
                mix-blend-mode: normal;
                filter: url(#noiseFilter);
            }
        </style>
    @endpush

    {{-- Services Section Start --}}
    <section data-no-glass-active class="relative h-screen md:h-[40vh] lg:h-screen has-background overflow-hidden">
        <img data-speed="0.5" src="{{ secure_asset('assets/images/services/landing.png') }}" class="w-full h-full object-cover object-bottom z-1" alt="">
        <div class="absolute inset-0 flex items-end pb-[12vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw]">
            <h1 class="font-uncut font-medium text-white text56px-mobile text160px-desktop md:leading-[.9375]">Land Advisory<br>Services</h1>
        </div>
    </section>
    {{-- Services Section End --}}

    {{-- What We Offer Section Start --}}
    <section class="relative">
        <div class="py-[20.884vw] md:py-[8.681vw] 3xl:py-[8.247vw] px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw]">
            <div class="flex flex-col md:flex-row md:items-end gap-[7.767vw] md:gap-[7.407vw] 3xl:gap-[7.037vw]">
                <div class="w-full md:w-[50.68%]">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">What We Offer</p>
                    </div>
                    <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Explore our industrial &</span>
                        <span class="inline-block will-change-transform">logistical services </span>
                    </h2>
                </div>
                <div class="w-full md:w-[49.32%]">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text22px-desktop leading-[1.40] md:w-[41.088vw] 3xl:w-[39.034vw]">At Celeste, we offer a comprehensive range of expertly designed land services, ensuring clients receive intelligent guidance, clear execution, and strategic value at every stage of their land-related ventures.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- What We Offer Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- Key Offereings Section Start --}}
    <section x-data="{ keyOfferings: 0 }" class="relative">
        <div class="py-[20.884vw] md:py-[8.681vw] 3xl:py-[8.247vw] px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw]">
            @php
                $landServices = [
                    [
                        'title' => 'Land Mapping',
                        'content' => ['Precision parcel and cadastral mapping using GIS, drones, DGPS, and traditional survey methods.', 'Geo-referenced maps with updated boundaries, ownership details, and terrain analysis—ideal for planning and due diligence.'],
                    ],

                    [
                        'title' => 'Land Advisory & Feasibility Studies',
                        'content' => ['In-depth market research, land-use assessment, and financial modelling to identify and evaluate viable land parcels.', 'Advisory on title verification, regulatory compliance, zoning, and development potential.'],
                    ],

                    [
                        'title' => 'Identification, Evaluation & Acquisition of Land',
                        'content' => ['Thorough territory scanning and site shortlisting based on client objectives.', 'Support in negotiations, due diligence, transaction structuring, and acquisition oversight.'],
                    ],

                    [
                        'title' => 'Joint Venture (JV) & Joint Development Agreements (JDA)',
                        'content' => ['Strategic structuring and execution of land-based JVs/JDAs to pool resources, capabilities, and risk.', 'Oversight on governance, equity distribution, development milestones, and exit mechanisms.'],
                    ],

                    [
                        'title' => 'Outright Sale & Lease Transactions',
                        'content' => ['Direct facilitation of large-scale land sales, supported by valuation assistance, marketing strategy, documentation, and closing coordination.', 'Lease advisory and execution for long-term, strategic control over assets.'],
                    ],

                    [
                        'title' => 'Profit-Share & Revenue-Sharing Models',
                        'content' => ['Structuring performance-linked deals where Celeste advises or co-develops projects in return for profit participation.', 'Transparent modelling and reporting to safeguard interests of all stakeholders.'],
                    ],
                ];
            @endphp
            <div class="flex flex-col md:flex-row gap-[10.465vw] md:gap-[2.604vw] 3xl:gap-[2.474vw]">
                <div class="w-full md:w-[25.29%]">
                    <div class="mt-auto">
                        <p class="font-medium text-black font-uncut text24px-mobile text32px-desktop leading-tight">Our Key Offerings</p>
                        <div class="mt-[6.512vw] md:mt-[1.620vw] 3xl:mt-[1.539vw]">
                            <div class="flex flex-wrap gap-[3vw] md:gap-0 md:grid">
                                @foreach ($landServices as $index => $service)
                                    <button type="button" @click="keyOfferings = {{ $index }}" aria-label="{{ $service['title'] }} button" class="group text22px-desktop hidden md:flex items-center gap-[1vw] justify-between border-dashed border-b font-satoshi py-[4.651vw] md:py-[1.157vw] 3xl:py-[1.100vw] pr-[1.25vw] font-medium leading-tight -tracking-[0.01vw] text-[#595959] hover:text-[#1E2E48] duration-500 bg-white z-2 active-tab cursor-pointer" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px); border-image-slice: 1;">
                                        <p class="text-left w-[85%]">{{ $service['title'] }}</p>

                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" :class="keyOfferings === {{ $index }} ? 'opacity-100' : 'opacity-0'" class="w-[3.721vw] md:w-[0.926vw] 3xl:w-[0.880vw] h-auto shrink-0 text-inherit opacity-0 duration-500 group-hover:opacity-100" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.6789 12.0643L13.4662 12.0505L12.2239 11.9711L12.0368 11.9593V3.00585L1.44677 13.5959L0.283222 12.4323L10.8739 1.84161H2.10692L1.91979 1.8423L1.90736 1.65448L1.82864 0.412898L1.81483 0.200213L2.0282 0.199523H13.6789V12.0643Z" fill="#00A7E1" stroke="#00A7E1" stroke-width="0.4" />
                                        </svg>
                                    </button>

                                    <button type="button" @click="keyOfferings = {{ $index }}" class="md:hidden" aria-label="{{ $service['title'] }} button">
                                        <p class="text-left text16px-mobile font-satoshi rounded-full py-[2vw] px-[4vw] leading-[1.3] font-medium" :class="keyOfferings === {{ $index }} ? 'bg-[#000000] text-[#ECE9E5]' : 'bg-[#ECE9E5] text-black'">{{ $service['title'] }}</p>
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:w-[74.71%] bg-[#F8F6F3]">
                    <div class="p-[4.651vw] md:p-[3.009vw] 3xl:p-[2.859vw] relative h-full">
                        @foreach ($landServices as $index => $service)
                            <div x-cloak x-show="keyOfferings === {{ $index }}" class="flex flex-col md:flex-row h-full">
                                <div class="md:w-[36.63%] pr-[15.116vw] md:pr-[3.762vw] 3xl:pr-[3.573vw] md:border-r" style="border-image: repeating-linear-gradient(to bottom, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px); border-image-slice: 1;">
                                    <p class="text56px-desktop text24px-mobile font-medium text-black leading-[1.06] font-uncut">{{ $service['title'] }}</p>
                                </div>
                                <div class="md:w-[63.37%] pl-[3.25vw] md:pl-[3.762vw] 3xl:pl-[3.573vw] md:mt-0 mt-[6vw]">
                                    <ul class="text-[#595959] text15px-mobile text22px-desktop font-satoshi font-medium leading-[1.4] list-disc space-y-[5.581vw] md:space-y-[1.389vw]">
                                        @foreach ($service['content'] as $items)
                                            <li>{{ $items }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Key Offereings Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- What We Offer Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[13.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[23.256vw] md:pb-[5.787vw] 3xl:pb-[5.498vw] relative">
            {{-- Offer content --}}
            <div class="relative">
                <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[11.628vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">What We Offer</p>
                </div>
                <h2 data-animate-heading class="hidden md:flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Why choose celeste for </span>
                    <span class="inline-block will-change-transform">land services?</span>
                </h2>
                <h2 data-animate-heading class="md:hidden flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Why choose celeste</span>
                    <span class="inline-block will-change-transform"> for land services?</span>
                </h2>
            </div>

            {{-- Offer image --}}
            <div class="relative flex justify-end md:-mt-[10.706vw] 3xl:-mt-[10.171vw] translate-x-[4.651vw] md:translate-x-[2.315vw] 3xl:translate-x-[2.199vw]">
                <img src="{{ secure_asset('assets/images/home/about-image.png') }}" class="w-[307.907vw] md:w-[76.620vw] 3xl:w-[72.789vw] h-auto" alt="">
            </div>

            {{-- Offer grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[3.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] -mt-[25.116vw] md:-mt-[18.519vw] 3xl:-mt-[17.593vw] about-card-container">
                {{-- First column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] about-card-column-1">
                    {{-- First card --}}
                    <div class="bg-[#F4F9FF] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="109" height="65" viewBox="0 0 109 65" fill="none" class="hidden md:block w-[15.223vw] md:w-[6.277vw] 3xl:w-[5.963vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_2496)">
                                <path d="M28.0688 48.6166H44.5921L36.3312 64.1866H18.5291L0 32.0933L18.5291 0H54.5182L73.0473 32.0933H54.5182L45.5085 16.488H27.5388L18.5291 32.0933L28.0688 48.6166Z" fill="#2578D1" />
                                <path d="M80.3921 15.5709L63.8689 15.5709L72.1298 0.000912351L89.9319 0.000913907L108.461 32.0942L89.9319 64.1875L53.9427 64.1875L35.4136 32.0942L53.9427 32.0942L62.9524 47.6995L80.9221 47.6995L89.9319 32.0942L80.3921 15.5709Z" fill="#2578D1" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_2496" x="0" y="0" width="108.461" height="64.1875" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_2496">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>

                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Geospatial Expertise</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">Integrated geospatial & advisory capacity, from mapping to monetization.</p>
                        </div>
                    </div>

                    {{-- Second card --}}
                    <div class="bg-[#FFF2F0] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="81" height="94" viewBox="0 0 81 94" fill="none" class="hidden md:block w-[18.837vw] md:w-[4.688vw] 3xl:w-[4.453vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 23.9736V71.061L19.4812 59.0751V35.9595L39.8095 23.9736L19.4812 11.1316L0 23.9736Z" fill="#866059" />
                            <path d="M79.7376 23.5437L39.3933 0L39.9221 23.0459L59.7275 34.6038L59.8329 58.3911L81 47.0177L79.7376 23.5437Z" fill="#866059" />
                            <path d="M39.1963 94L79.5407 70.4563L59.5306 59.3962L39.7252 70.9541L19.2916 59.1526L18.4527 83.368L39.1963 94Z" fill="#866059" />
                        </svg>


                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Comprehensive Due Diligence</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">Robust due diligence, comprehensive title review and feasibility checks to minimize risk.</p>
                        </div>
                    </div>

                    <div class="md:hidden bg-[#FAFFF2] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="96" height="69" viewBox="0 0 96 69" fill="none" class="hidden md:block w-[22.267vw] md:w-[5.541vw] 3xl:w-[5.264vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_2509)">
                                <path d="M-0.000118256 17.8086H42.6479L53.0923 34.874H10.4443L-0.000118256 17.8086Z" fill="#7D8D62" />
                                <path d="M95.7472 0H53.0992L42.6548 17.0654H85.3028L95.7472 0Z" fill="#7D8D62" />
                                <path d="M-0.000118256 51.1953H42.6479L53.0923 68.2607H10.4443L-0.000118256 51.1953Z" fill="#7D8D62" />
                                <path d="M95.7472 33.3867H53.0992L42.6548 50.4521H85.3028L95.7472 33.3867Z" fill="#7D8D62" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_2509" x="0" y="0" width="95.7471" height="68.2607" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_2509">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>



                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Strategic Structuring</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">Strategic transaction structuring, curated for JVs, outright sales, and profit-sharing tailored to client objectives.</p>
                        </div>
                    </div>
                </div>

                {{-- Second column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] md:pt-[7.986vw] 3xl:pt-[7.587vw] about-card-column-2">
                    {{-- Third card --}}
                    <div class="bg-[#FDFCFA] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="98" height="75" viewBox="0 0 98 75" fill="none" class="hidden md:block w-[22.705vw] md:w-[5.650vw] 3xl:w-[5.367vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_2504)">
                                <path d="M32.9121 37.2338L22.1638 55.851H0.000193764L10.7488 37.2338L0.000488281 18.6172H22.1638L32.9121 37.2338Z" fill="#263957" />
                                <path d="M97.6308 37.2338L86.8825 55.851H64.7189L75.4676 37.2338L64.7192 18.6172H86.8825L97.6308 37.2338Z" fill="#263957" />
                                <path d="M65.6023 55.8555H22.1623L11.5239 74.2817H54.964L65.6023 55.8555Z" fill="#263957" />
                                <path d="M11.5236 0H54.9637L65.6021 18.4262H22.162L11.5236 0Z" fill="#263957" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_2504" x="0" y="0" width="97.6309" height="74.2817" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_2504">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>

                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Precision Through Technology</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">Technology-enabled precision, leveraging GIS, DGPS, drone tech, and analytical tools for actionable insights.</p>
                        </div>
                    </div>

                    {{-- Fourth card --}}
                    <div class="bg-[#FFFBEC] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="119" height="66" viewBox="0 0 119 66" fill="none" class="hidden md:block w-[27.564vw] md:w-[6.859vw] 3xl:w-[6.516vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_2514)">
                                <path d="M16.9902 16.0099L0.000145514 16.0099L8.49447 4.36349e-06L26.7995 5.96377e-06L45.8521 33L26.7995 66L17.5352 49.0462L26.7995 33L16.9902 16.0099Z" fill="#AE9D64" />
                                <path d="M53.7949 16.0099L36.8048 16.0099L45.2992 4.36349e-06L63.6042 5.96377e-06L82.6567 33L63.6042 66L54.3399 49.0462L63.6042 33L53.7949 16.0099Z" fill="#AE9D64" />
                                <path d="M89.6621 16.0099L72.672 16.0099L81.1663 4.36349e-06L99.4714 5.96377e-06L118.524 33L99.4714 66L90.2071 49.0462L99.4714 33L89.6621 16.0099Z" fill="#AE9D64" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_2514" x="0" y="0" width="118.524" height="66" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_2514">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>


                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Seamless Execution</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">End-to-end execution, from sourcing to closure, including ongoing asset compliance and governance.</p>
                        </div>
                    </div>
                </div>

                {{-- Third column --}}
                <div class="hidden md:flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] md:pt-[calc(7.986vw*2)] 3xl:pt-[calc(7.587vw*2)] about-card-column-3">
                    {{-- First card --}}
                    <div class="bg-[#FAFFF2] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max aspect-[1.2/.75] md:aspect-[1.33/1] relative noise-bg overflow-hidden">
                        <svg width="96" height="69" viewBox="0 0 96 69" fill="none" class="hidden md:block w-[22.267vw] md:w-[5.541vw] 3xl:w-[5.264vw] h-auto absolute bottom-[5.233vw] md:bottom-[1.302vw] 3xl:bottom-[1.237vw] right-[5.233vw] md:right-[1.302vw] 3xl:right-[1.237vw]" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_2509)">
                                <path d="M-0.000118256 17.8086H42.6479L53.0923 34.874H10.4443L-0.000118256 17.8086Z" fill="#7D8D62" />
                                <path d="M95.7472 0H53.0992L42.6548 17.0654H85.3028L95.7472 0Z" fill="#7D8D62" />
                                <path d="M-0.000118256 51.1953H42.6479L53.0923 68.2607H10.4443L-0.000118256 51.1953Z" fill="#7D8D62" />
                                <path d="M95.7472 33.3867H53.0992L42.6548 50.4521H85.3028L95.7472 33.3867Z" fill="#7D8D62" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_2509" x="0" y="0" width="95.7471" height="68.2607" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_2509">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>



                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] border-b border-[#315075] border-dashed relative z-1">
                            <p class="text26px-desktop font-satoshi font-bold text-black text20px-mobile leading-[1.2]">Strategic Structuring</p>
                        </div>
                        <div class="px-[4.651vw] md:px-[2.199vw] 3xl:px-[2.089vw] py-[6.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] relative z-1">
                            <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] md:leading-[1.4]">Strategic transaction structuring, curated for JVs, outright sales, and profit-sharing tailored to client objectives.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg width="0" height="0">
            <filter id="noiseFilter">
                <feTurbulence type="fractalNoise" baseFrequency="0.5" numOctaves="1" stitchTiles="stitch" />
            </filter>
        </svg>
    </section>
    {{-- What We Offer Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- Our Expertise Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[6.192vw] 3xl:px-[5.883vw] pt-[20.209vw] md:pt-[9.259vw] 3xl:pt-[8.796vw] pb-[18.605vw] md:pb-[4.630vw] 3xl:pb-[4.398vw] flex flex-col md:flex-row gap-[8.209vw] md:gap-[9.259vw] 3xl:gap-[8.796vw]">
            <div class="relative w-full md:w-[75.349vw] md:w-[18.750vw] 3xl:w-[17.813vw] h-max">
                <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Our Expertise</p>
                </div>
                <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Our</span>
                    <span class="inline-block will-change-transform">Services</span>
                </h2>
            </div>
            @php
                $plots = [
                    [
                        'label' => 'Residential Plots',
                        'route' => 'plots.index',
                        'slug' => 'residential',
                        'title' => 'Residential Plots Info',
                        'excerpt' => 'Integrated geospatial & advisory capacity, from mapping to monetization.',
                        'image' => secure_asset('assets/images/home/expertise-1.png'),
                    ],
                    [
                        'label' => 'Commercial Plots',
                        'route' => 'plots.index',
                        'slug' => 'commercial',
                        'title' => 'Commercial Plots Info',
                        'excerpt' => 'Integrated geospatial & advisory capacity, from mapping to monetization.',
                        'image' => secure_asset('assets/images/home/expertise-2.png'),
                    ],
                    [
                        'label' => 'Industrial Projects',
                        'route' => 'plots.index',
                        'slug' => 'industrial-projects',
                        'title' => 'Industrial & Logistic Plots Info',
                        'excerpt' => 'Integrated geospatial & advisory capacity, from mapping to monetization.',
                        'image' => secure_asset('assets/images/home/expertise-3.png'),
                    ],
                    [
                        'label' => 'Offplan Projects',
                        'route' => 'plots.index',
                        'slug' => 'offplan-projects',
                        'title' => 'OffPlan Projects Info',
                        'excerpt' => 'Integrated geospatial & advisory capacity, from mapping to monetization.',
                        'image' => secure_asset('assets/images/home/offplan.jpg'),
                    ],
                ];
            @endphp



            <div class="relative flex-1 flex flex-col">
                @foreach ($plots as $index => $item)
                    <div class="relative">

                        {{-- Top border only after first item --}}
                        @if ($index != 0)
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px); border-image-slice: 1;">
                                </div>
                            </div>
                        @endif

                        <div class="py-[9.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] flex">
                            <div class="flex flex-col md:flex-row md:items-end gap-[6.163vw] md:gap-[2.778vw] 3xl:gap-[2.639vw] w-full">

                                <div class="w-full md:w-[16.609vw] 3xl:w-[15.778vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] overflow-hidden aspect-[1.30/1]">
                                    <img src="{{ $item['image'] }}" class="w-full h-full object-cover" alt="{{ $item['title'] }}">
                                </div>

                                <div class="flex-1 flex flex-col w-full md:w-[33.738vw] 3xl:w-[32.052vw]">

                                    <p class="font-uncut text24px-mobile text32px-desktop font-medium leading-tight text-[#000000]">
                                        {{ $item['title'] }}
                                    </p>

                                    <p class="font-satoshi font-medium text-[#3E3E3E] text22px-desktop leading-[1.4] mt-[2.791vw] md:mt-[0.694vw] 3xl:mt-[0.660vw]">
                                        {{ $item['excerpt'] }}
                                    </p>

                                    <a href="{{ route($item['route'], $item['slug']) }}" class="relative flex items-center gap-[1.860vw] md:gap-[0.463vw] 3xl:gap-[0.440vw] pb-[1.628vw] md:pb-[0.405vw] 3xl:pb-[0.385vw] border-b-2 border-[#181818] w-max group mt-[6.372vw] md:mt-[2.083vw] 3xl:mt-[1.979vw]">
                                        <p class="text-[#181818] font-satoshi font-medium text18px-desktop leading-[1.44]">
                                            See Plots
                                        </p>

                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="group-hover:rotate-45 duration-300" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.6788 12.0645L13.4661 12.0507L12.2238 11.9713L12.0367 11.9596V3.0061L1.44665 13.5961L0.2831 12.4326L10.8738 1.84186H2.1068L1.91967 1.84255L1.90724 1.65472L1.82851 0.413142L1.8147 0.200457L2.02808 0.199767H13.6788V12.0645Z" fill="#00A7E1" stroke="#00A7E1" stroke-width="0.4" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Our Expertise Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    {{-- Partner Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[13.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[27.907vw] md:pb-[6.944vw] 3xl:pb-[6.597vw]">
            <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-[9.302vw] md:gap-[2.315vw] 3xl:gap-[2.199vw]">
                <div class="w-full md:w-[57.813vw] 3xl:w-[54.922vw]">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Our Expertise</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Why partner with Celeste?</span>
                        </h2>
                    </div>
                    @php
                        $partnerReasons = [
                            [
                                'number' => '01',
                                'title' => 'Industry-Leading Insight',
                                'description' => 'We utilize market intelligence and analytical tools-mirroring global real estate leaders-for data-driven decision-making.',
                            ],
                            [
                                'number' => '02',
                                'title' => 'End-to-End Excellence',
                                'description' => 'Whether leasing, development, or investments, our integrated approach covers all essential touchpoints.',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Client-Centric Delivery',
                                'description' => 'Our services start with your objectives-be it expansion, consolidation, or new facility roll-out.',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Operational Efficiency',
                                'description' => 'From optimized layouts to streamlined administration, we enhance space utilization and cost performance.',
                            ],
                        ];
                    @endphp


                    <div class="mt-[12.907vw] md:mt-[6.944vw] 3xl:mt-[6.597vw]">

                        @foreach ($partnerReasons as $index => $item)
                            <div class="relative">
                                <div class="custom-border overflow-hidden w-full will-change-transform">
                                    <div class="border-t border-transparent w-full" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px); border-image-slice: 1;">
                                    </div>
                                </div>

                                <div class="py-[8.233vw] md:py-[2.546vw] 3xl:py-[2.419vw]  flex gap-[6.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw] px-[4.651vw] md:px-[1.157vw] 3xl:px-[1.100vw]">

                                    <p class="text-[#6C858E] font-satoshi font-medium text16px-mobile text26px-desktop mt-[1vw] md:mt-0">
                                        {{ $item['number'] }}
                                    </p>

                                    <div class="flex flex-col">
                                        <p class="font-satoshi font-bold text24px-mobile text26px-desktop text-[#000000]">
                                            {{ $item['title'] }}
                                        </p>

                                        <p class="font-satoshi font-medium text14px-mobile text22px-desktop text-[#595959] leading-[1.4] pt-[4.047vw] md:pt-[1.505vw] 3xl:pt-[1.429vw] md:w-[90%]">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="w-full md:w-[36.458vw] 3xl:w-[34.635vw]">
                    <img src="{{ secure_asset('assets/images/services/pertner.png') }}" class="w-full h-full object-cover" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Partner Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

</x-layout>
