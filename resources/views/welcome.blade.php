<x-layout>

    {{-- Landing Section Start --}}
    <section data-no-glass-active class="hero-section relative lg:h-[105vh] has-background flex overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ secure_asset('assets/images/home/hero-background.png') }}" class="object-cover h-full w-full object-[100%_20%]" alt="">
        </div>
        <div class="flex h-full w-full px-[9.302vw] md:px-[2.315vw] 3xl:px-[2.199vw] pb-[11.628vw] md:pb-[2.894vw] 3xl:pb-[2.749vw] pt-[39.767vw] md:pt-[9vw] 3xl:pt-[8.895vw] z-1">
            <div class="flex justify-between flex-1 h-full w-full">
                <div class="flex flex-col justify-between h-full">
                    <h1 class="hero-heading relative z-0 flex flex-col font-uncut font-medium text120px-desktop text-white leading-[.975] md:-tracking-[0.347vw] 3xl:-tracking-[0.330vw]">
                        <span class="inline-block">20 Years of Shaping</span>
                        <span class="inline-block">Dubai's Landscape</span>
                    </h1>

                    <div class="hero-offerings relative z-2 flex flex-col gap-[5.581vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] w-[123.721vw] md:w-[30.787vw] 3xl:w-[29.248vw]">
                        <div class="flex items-center gap-[1.628vw] md:gap-[0.405vw] 3xl:gap-[0.385vw]">
                            <img src="{{ secure_asset('assets/images/home/celeste-white-logo.png') }}" class="h-auto w-[6.744vw] md:w-[1.678vw] 3xl:w-[1.594vw]" alt="">
                            <p class="font-uncut font-semibold text-white text26px-desktop leading-[1.15]">Our Offerings</p>
                        </div>
                        <p class="font-satoshi text-white font-medium leading-[1.4] text22px-desktop -tracking-[0.051vw] md:-tracking-[0.013vw] 3xl:-tracking-[0.012vw]">With interest rates as low as 9.50% for bridge financing and 6.50% for 30 year loans, we offer solutions tailored to your investment financing needs.</p>
                    </div>
                </div>
                <div class="h-full relative z-0 pt-[48.837vw] md:pt-[12.153vw] 3xl:pt-[11.545vw]">
                    <div class="hero-white-card bg-[#FFFFFF] w-[90.233vw] md:w-[22.454vw] 3xl:w-[21.331vw] h-[95.814vw] md:h-[23.843vw] 3xl:h-[22.650vw] p-[5.581vw] md:p-[1.389vw] 3xl:p-[1.319vw] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw]">
                        <div class="flex justify-end">
                            <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="w-[14.419vw] md:w-[3.588vw] 3xl:w-[3.409vw] h-auto" alt="">
                        </div>
                        <div class="mt-[12.326vw] md:mt-[3.067vw] 3xl:mt-[2.914vw]">
                            <p class="font-satoshi font-semibold text-[#1F1F1F] text26px-desktop -tracking-[0.060vw] md:-tracking-[0.015vw] 3xl:-tracking-[0.014vw]">Streamlined Progress</p>
                            <p class="font-satoshi text20px-desktop font-medium text-[#646464] leading-[1.3] -tracking-[0.093vw] md:-tracking-[0.023vw] 3xl:-tracking-[0.022vw] pt-[4.651vw] md:pt-[1.157vw] 3xl:pt-[1.100vw]">Our services are designed to simplify complex decisions and empower informed investments.</p>
                        </div>
                    </div>
                </div>


                <img src="{{ secure_asset('assets/images/home/hero-background-layer.png') }}" class="absolute bottom-0 w-screen h-auto left-0 z-1 translate-y-[19.070vw] md:translate-y-[4.745vw] 3xl:translate-y-[4.508vw] pointer-events-none" alt="">
            </div>
        </div>
    </section>
    {{-- Landing Section End --}}

    {{-- About Section Start --}}
    <section class="relative">
        <div class="px-[9.302vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[13.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[30.233vw] md:pb-[7.523vw] 3xl:pb-[7.147vw] relative">
            <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="absolute right-[9.302vw] md:right-[2.315vw] 3xl:right-[2.199vw] top-[13.953vw] md:top-[3.472vw] 3xl:top-[3.299vw]" alt="">
            {{-- About content --}}
            <div class="relative">
                <div class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[11.628vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text18px-desktop">About</p>
                </div>
                <h2 class="flex flex-col font-uncut font-medium text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block">Built on Vision.</span>
                    <span class="inline-block">Strengthened by Experience.</span>
                </h2>

                <p class="font-satoshi font-medium text-[#3E3E3E] text22px-desktop leading-[1.40] w-[165.116vw] md:w-[41.088vw] 3xl:w-[39.034vw] mt-[9.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">Since our inception, To Do Dubai has stood at the forefront of land transactions in the UAE. Our deep market understanding, trusted network, and strategic foresight have enabled us to facilitate landmark deals that contribute to Dubai’s evolving skyline.</p>

                <div class="mt-[16.279vw] md:mt-[4.051vw] 3xl:mt-[3.848vw] w-max">
                    <a href="#" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                        <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">About us</p>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- About image --}}
            <div class="relative flex justify-end md:-mt-[10.706vw] 3xl:-mt-[10.171vw] translate-x-[9.302vw] md:translate-x-[2.315vw] 3xl:translate-x-[2.199vw]">
                <img src="{{ secure_asset('assets/images/home/about-image.png') }}" class="w-[307.907vw] md:w-[76.620vw] 3xl:w-[72.789vw] h-auto" alt="">
            </div>

            {{-- About grid --}}
            <div class="grid grid-cols-3 gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] -mt-[65.116vw] md:-mt-[18.519vw] 3xl:-mt-[17.593vw] about-card-container">
                {{-- First column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] about-card-column-1">
                    {{-- First card --}}
                    <div class="bg-[#648EC0] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="269" height="160" viewBox="0 0 269 160" fill="none" class="absolute z-0 top-[32.093vw] md:top-[7.986vw] 3xl:top-[7.587vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[62.558vw] md:w-[15.567vw] 3xl:w-[14.789vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_695)">
                                <path d="M69.6117 120.571H110.59L90.1027 159.185H45.9528L0 79.5926L45.9528 0H135.207L181.16 79.5926H135.207L112.863 40.8908H68.2973L45.9528 79.5926L69.6117 120.571Z" fill="#5D87B7" />
                                <path d="M199.388 38.6165L158.41 38.6165L178.897 0.00226568L223.047 0.00226954L269 79.5949L223.047 159.187L133.793 159.187L87.8399 79.5949L133.793 79.5949L156.137 118.297L200.703 118.297L223.047 79.5949L199.388 38.6165Z" fill="#5D87B7" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_695" x="0" y="0" width="269" height="159.188" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_695">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>
                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text160px-desktop text-white font-bold"><span>64</span>k+</p>
                        </div>
                        <div class="border-t border-white border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[38.837vw] md:mt-[9.664vw] 3xl:mt-[9.181vw]">
                            <p class="font-satoshi font-bold text20px-desktop text-white">Happy customers</p>
                        </div>
                    </div>

                    {{-- Second card --}}
                    <div class="bg-[#D4B28F] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="226" height="248" viewBox="0 0 226 248" fill="none" class="absolute z-0 top-[16.279vw] md:top-[4.051vw] 3xl:top-[3.848vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[52.558vw] md:w-[13.079vw] 3xl:w-[12.425vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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

                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text160px-desktop text-[#1D1D1D] font-bold"><span>02</span></p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[38.837vw] md:mt-[9.664vw] 3xl:mt-[9.181vw]">
                            <p class="font-satoshi font-bold text20px-desktop text-[#1D1D1D]">We sell properties in 2 localities</p>
                        </div>
                    </div>
                </div>

                {{-- Second column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] pt-[32.093vw] md:pt-[7.986vw] 3xl:pt-[7.587vw] about-card-column-2">
                    {{-- Third card --}}
                    <div class="bg-[#E4E1DC] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="233" height="178" viewBox="0 0 233 178" fill="none" class="absolute z-0 top-[26.279vw] md:top-[6.539vw] 3xl:top-[6.212vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[54.186vw] md:w-[13.484vw] 3xl:w-[12.810vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_n_733_641)">
                                <path d="M78.5481 88.8605L52.896 133.292H2.95218e-05L25.6529 88.8605L0.000732422 44.4297H52.896L78.5481 88.8605Z" fill="#D7D1C8" />
                                <path d="M233.001 88.8605L207.349 133.292H154.453L180.106 88.8605L154.454 44.4297H207.349L233.001 88.8605Z" fill="#D7D1C8" />
                                <path d="M156.573 133.305H52.8983L27.5085 177.281H131.183L156.573 133.305Z" fill="#D7D1C8" />
                                <path d="M27.5066 0H131.181L156.571 43.9763H52.8964L27.5066 0Z" fill="#D7D1C8" />
                            </g>
                            <defs>
                                <filter id="filter0_n_733_641" x="0" y="0" width="233.001" height="177.281" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                    <feMerge result="effect1_noise_733_641">
                                        <feMergeNode in="shape" />
                                        <feMergeNode in="color1" />
                                    </feMerge>
                                </filter>
                            </defs>
                        </svg>

                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text160px-desktop text-[#1D1D1D] font-bold"><span>20</span>+</p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[38.837vw] md:mt-[9.664vw] 3xl:mt-[9.181vw]">
                            <p class="font-satoshi font-bold text20px-desktop text-[#1D1D1D]">Years of experience in the real estate industry</p>
                        </div>
                    </div>

                    {{-- Fourth card --}}
                    <div class="bg-[#B0D2ED] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="270" height="150" viewBox="0 0 270 150" fill="none" class="absolute z-0 top-[29.535vw] md:top-[7.350vw] 3xl:top-[6.982vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[62.647vw] md:w-[15.589vw] 3xl:w-[14.810vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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


                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text160px-desktop text-[#1D1D1D] font-bold"><span>100</span>+</p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[38.837vw] md:mt-[9.664vw] 3xl:mt-[9.181vw]">
                            <p class="font-satoshi font-bold text20px-desktop text-[#1D1D1D]">Residential properties sold</p>
                        </div>
                    </div>
                </div>

                {{-- Third column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] pt-[calc(32.093vw*2)] md:pt-[calc(7.986vw*2)] 3xl:pt-[calc(7.587vw*2)] about-card-column-3">
                    {{-- First card --}}
                    <div class="bg-[#263957] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max">
                        <svg width="244" height="174" viewBox="0 0 244 174" fill="none" class="absolute z-0 top-[28.837vw] md:top-[7.176vw] 3xl:top-[6.817vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[56.518vw] md:w-[14.064vw] 3xl:w-[13.361vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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

                        <div class=" p-[4.651vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text160px-desktop text-white font-bold"><span>400</span>+</p>
                        </div>
                        <div class="border-t border-white border-dashed py-[5.116vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[38.837vw] md:mt-[9.664vw] 3xl:mt-[9.181vw]">
                            <p class="font-satoshi font-bold text20px-desktop text-white">Happy customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- About Section End --}}

</x-layout>
