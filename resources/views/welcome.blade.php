<x-layout>

    {{-- Landing Section Start --}}
    <section data-no-glass-active class="hero-section min-h-[110vh] relative md:min-h-[40vh] lg:h-[105vh] has-background flex overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ secure_asset('assets/images/home/hero-background.png') }}" class="object-cover h-full w-full object-center md:object-[100%_20%]" alt="">
        </div>
        <div class="flex h-full w-full px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pb-[11.628vw] md:pb-[2.894vw] 3xl:pb-[2.749vw] pt-[24.884vw] md:pt-[9vw] 3xl:pt-[8.895vw] z-1">
            <div class="flex justify-between flex-1 h-full w-full">
                <div class="flex flex-col justify-between h-full">
                    <h1 class="hero-heading relative z-0 hidden md:flex flex-col font-uncut font-medium text56px-mobile text120px-desktop text-white leading-[.975] md:-tracking-[0.347vw] 3xl:-tracking-[0.330vw]">
                        <span class="inline-block">20 Years of Shaping</span>
                        <span class="inline-block">UAE’s Future</span>
                    </h1>
                    <h1 class="hero-heading relative z-0 md:hidden flex flex-col font-uncut font-medium text56px-mobile text120px-desktop text-white leading-[.975] -tracking-[0.651vw] md:-tracking-[0.347vw] 3xl:-tracking-[0.330vw]">
                        <span class="inline-block">20 Years of</span>
                        <span class="inline-block">Shaping UAE’s</span>
                        <span class="inline-block">Future</span>
                    </h1>

                    <div class="invisible hero-offerings relative z-2 flex flex-col gap-[3.256vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] w-full md:w-[30.787vw] 3xl:w-[29.248vw] mt-[111.628vw] md:mt-[8.681vw] 3xl:mt-[8.247vw]">
                        <div class="flex items-center gap-[1.628vw] md:gap-[0.405vw] 3xl:gap-[0.385vw]">
                            <img src="{{ secure_asset('assets/images/home/celeste-white-logo.png') }}" class="h-auto w-[4.186vw] md:w-[1.678vw] 3xl:w-[1.594vw]" alt="">
                            <p class="font-uncut font-semibold text-white text20px-mobile text26px-desktop leading-[1.15]">Our Offerings</p>
                        </div>
                        <p class="font-satoshi text-white font-medium leading-[1.46] md:leading-[1.4] text15px-mobile text22px-desktop -tracking-[0.051vw] md:-tracking-[0.013vw] 3xl:-tracking-[0.012vw]">With interest rates as low as 9.50% for bridge financing and 6.50% for 30 year loans, we offer solutions tailored to your investment financing needs.</p>
                    </div>
                </div>
                <div class="h-full pointer-events-none absolute flex justify-end items-start md:justify-start md:items-start bottom-0 right-[4.651vw] md:right-0 md:relative z-0 pt-[80vw] md:pt-[10.153vw] 3xl:pt-[9.545vw] w-full md:w-auto">
                    <div class="hero-white-card  bg-[#FFFFFF] w-[61.395vw] md:w-[22.454vw] 3xl:w-[21.331vw] h-[66.977vw] md:h-[23.843vw] 3xl:h-[22.650vw] p-[3.488vw] md:p-[1.389vw] 3xl:p-[1.319vw] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw]">
                        <div class="flex justify-end">
                            <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="w-[10.930vw] md:w-[3.588vw] 3xl:w-[3.409vw] h-auto" alt="">
                        </div>
                        <div class="mt-[12.326vw] md:mt-[3.067vw] 3xl:mt-[2.914vw]">
                            <p class="font-satoshi font-bold md:font-semibold text-[#1F1F1F] text26px-mobile text26px-desktop -tracking-[0.060vw] md:-tracking-[0.015vw] 3xl:-tracking-[0.014vw]">Streamlined Progress</p>
                            <p class="font-satoshi text15px-mobile text20px-desktop font-medium text-[#646464] leading-[1.3] -tracking-[0.093vw] md:-tracking-[0.023vw] 3xl:-tracking-[0.022vw] pt-[4.651vw] md:pt-[1.157vw] 3xl:pt-[1.100vw]">Our services are designed to simplify complex decisions and empower informed investments.</p>
                        </div>
                    </div>
                </div>


                <img src="{{ secure_asset('assets/images/home/hero-background-layer.png') }}" class="hidden md:block absolute bottom-0 w-full md:w-screen h-[73.3%] md:h-auto left-0 z-1 object-[49%_50%] translate-y-[10vw] md:translate-y-[4.745vw] 3xl:translate-y-[4.508vw] pointer-events-none object-cover" alt="">
            </div>
        </div>
    </section>
    {{-- Landing Section End --}}

    {{-- About Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[13.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[23.256vw] md:pb-[5.787vw] 3xl:pb-[5.498vw] relative">
            <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="absolute w-[13.953vw] md:w-[8.565vw] 3xl:w-[8.137vw] right-[4.651vw] md:right-[2.315vw] 3xl:right-[2.199vw] top-[5.581vw] md:top-[3.472vw] 3xl:top-[3.299vw]" alt="">
            {{-- About content --}}
            <div class="relative">
                <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">About</p>
                </div>
                <h2 data-animate-heading class="hidden md:flex flex-col font-uncut font-medium text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Built on Vision.</span>
                    <span class="inline-block will-change-transform">Strengthened by Experience.</span>
                </h2>
                <h2 data-animate-heading class="md:hidden flex flex-col font-uncut font-medium text40px-mobile leading-[1.175] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Built on Vision.</span>
                    <span class="inline-block will-change-transform">Strengthened by </span>
                    <span class="inline-block will-change-transform">Experience.</span>
                </h2>

                <p class="font-satoshi font-medium text-[#3E3E3E] text15px-mobile text22px-desktop leading-[1.40] w-full md:w-[41.088vw] 3xl:w-[39.034vw] mt-[5.581vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">Since our inception, To Do Dubai has stood at the forefront of land transactions in the UAE. Our deep market understanding, trusted network, and strategic foresight have enabled us to facilitate landmark deals that contribute to Dubai’s evolving skyline.</p>

                <div class="mt-[13.023vw] md:mt-[4.051vw] 3xl:mt-[3.848vw] w-max">
                    <a href="{{ route('about') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[4.651vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[2.326vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                        <p class="font-satoshi font-medium text16px-mobile text20px-desktop md:leading-none leading-relaxed text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">About us</p>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- About image --}}
            <div class="relative pointer-events-none flex justify-end md:-mt-[10.706vw] 3xl:-mt-[10.171vw] translate-x-[4.651vw] md:translate-x-[2.315vw] 3xl:translate-x-[2.199vw]">
                <img src="{{ secure_asset('assets/images/home/about-image.png') }}" class="w-full md:w-[76.620vw] 3xl:w-[72.789vw] h-auto hidden md:block" alt="">
                <img src="{{ secure_asset('assets/images/home/about-image-mobile.png') }}" class="w-full h-[57.907vw] object-cover md:hidden" alt="">
            </div>

            {{-- About grid --}}
            <div class="grid grid-cols-2 md:grid-cols-3 gap-[2.326vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] -mt-[15.116vw] md:-mt-[18.519vw] 3xl:-mt-[17.593vw] about-card-container">
                {{-- First column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] about-card-column-1">
                    {{-- First card --}}
                    <div class="bg-[#648EC0] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max flex flex-col justify-between aspect-square md:aspect-auto">
                        <svg width="269" height="160" viewBox="0 0 269 160" fill="none" class="absolute z-0 top-[9.302vw] md:top-[7.986vw] 3xl:top-[7.587vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[24.366vw] md:w-[15.567vw] 3xl:w-[14.789vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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
                        <div class="p-[3.953vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop leading-[1.14] md:leading-none text-white font-bold"><span>64</span>k+</p>
                        </div>
                        <div class="border-t border-white border-dashed py-[3.023vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-[5vw] md:mt-[9.664vw] 3xl:mt-[9.181vw] z-1">
                            <p class="font-satoshi font-bold text14px-mobile text20px-desktop text-white">Happy customers</p>
                        </div>
                    </div>

                    {{-- Second card --}}
                    <div class="bg-[#D4B28F] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max flex flex-col justify-between aspect-square md:aspect-auto">
                        <svg width="226" height="248" viewBox="0 0 226 248" fill="none" class="absolute z-0 top-[9.302vw] md:top-[4.051vw] 3xl:top-[3.848vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[20.173vw] md:w-[13.079vw] 3xl:w-[12.425vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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

                        <div class=" p-[3.953vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop leading-[1.14] md:leading-none text-[#1D1D1D] font-bold"><span>02</span></p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[3.023vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] z-1">
                            <p class="font-satoshi font-bold text14px-mobile text20px-desktop text-[#1D1D1D]">We sell properties in 2 countries</p>
                        </div>
                    </div>
                </div>

                {{-- Second column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] md:pt-[7.986vw] 3xl:pt-[7.587vw] about-card-column-2">
                    {{-- Third card --}}
                    <div class="bg-[#E4E1DC] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max flex flex-col justify-between aspect-square md:aspect-auto">
                        <svg width="233" height="178" viewBox="0 0 233 178" fill="none" class="absolute z-0 top-[9.302vw] md:top-[6.539vw] 3xl:top-[6.212vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[20.173vw] md:w-[13.484vw] 3xl:w-[12.810vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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

                        <div class=" p-[3.953vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop leading-[1.14] md:leading-none text-[#1D1D1D] font-bold"><span>20</span>+</p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[3.023vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] z-1">
                            <p class="font-satoshi font-bold text14px-mobile text20px-desktop text-[#1D1D1D]">Years of experience in the real estate industry</p>
                        </div>
                    </div>

                    {{-- Fourth card --}}
                    <div class="bg-[#B0D2ED] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max flex flex-col justify-between aspect-square md:aspect-auto">
                        <svg width="270" height="150" viewBox="0 0 270 150" fill="none" class="absolute z-0 top-[9.302vw] md:top-[7.350vw] 3xl:top-[6.982vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[23.814vw] md:w-[15.589vw] 3xl:w-[14.810vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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


                        <div class=" p-[3.953vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop leading-[1.14] md:leading-none text-[#1D1D1D] font-bold"><span>100</span>+</p>
                        </div>
                        <div class="border-t border-[#6B6B6B] border-dashed py-[3.023vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] z-1">
                            <p class="font-satoshi font-bold text14px-mobile text20px-desktop text-[#1D1D1D]">Residential properties sold</p>
                        </div>
                    </div>
                </div>

                {{-- Third column --}}
                <div class="flex flex-col gap-[4.419vw] md:gap-[1.100vw] 3xl:gap-[1.045vw] md:pt-[calc(7.986vw*2)] 3xl:pt-[calc(7.587vw*2)] about-card-column-3">
                    {{-- First card --}}
                    <div class="bg-[#263957] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] relative h-max flex flex-col justify-between aspect-square md:aspect-auto">
                        <svg width="244" height="174" viewBox="0 0 244 174" fill="none" class="absolute z-0 top-[9.302vw] md:top-[7.176vw] 3xl:top-[6.817vw] right-[11.860vw] md:right-[2.951vw] 3xl:right-[2.804vw] w-[23.814vw] md:w-[14.064vw] 3xl:w-[13.361vw] h-auto" xmlns="http://www.w3.org/2000/svg">
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

                        <div class=" p-[3.953vw] md:p-[1.157vw] 3xl:p-[1.100vw] pb-0! relative z-1">
                            <p class="font-satoshi text60px-mobile text160px-desktop leading-[1.14] md:leading-none text-white font-bold"><span>400</span>+</p>
                        </div>
                        <div class="border-t border-white border-dashed py-[3.023vw] md:py-[1.273vw] 3xl:py-[1.209vw] px-[5.349vw] md:px-[1.331vw] 3xl:px-[1.264vw] mt-0 md:mt-[9.664vw] 3xl:mt-[9.181vw] z-1">
                            <p class="font-satoshi font-bold text14px-mobile text20px-desktop text-white">Commercial and industrial projects sold</p>
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
        <div class="pl-[4.651vw] md:pl-[6.192vw] 3xl:pl-[5.883vw] pr-[4.651vw] md:pr-[3.819vw] 3xl:pr-[3.628vw] pt-[20.256vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[15.674vw] md:pb-[6.887vw] 3xl:pb-[6.542vw]">
            <div class="relative">
                <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[11.628vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Our Expertise</p>
                </div>
                <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Specialists</span>
                    <span class="inline-block will-change-transform">in Land Sales</span>
                </h2>
            </div>

            <div class="mt-[11.628vw] md:mt-[5.266vw] 3xl:mt-[5.003vw] px-0 md:px-[3.935vw] 3xl:px-[3.738vw]">
                @php
                    $plots = [
                        [
                            'number' => '01',
                            'title' => 'Residential Plots',
                            'description' => 'Curated residential land in high-growth zones, selected to offer strong appreciation and long-term value. We guide you with clear insights so you can invest with confidence.',
                            'image' => secure_asset('assets/images/home/expertise-1.png'),
                            'route' => 'plots.index',
                            'slug' => 'residential',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Commercial Plots',
                            'description' => 'Strategic commercial and industrial land opportunities backed by research, valuation, and market intelligence to support high-impact developments.',
                            'image' => secure_asset('assets/images/home/expertise-2.png'),
                            'route' => 'plots.index',
                            'slug' => 'commercial',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Industrial and Logistic Projects',
                            'description' => 'High-value industrial and logistics land across the UAE, selected for strong infrastructure access and long-term commercial potential.',
                            'image' => secure_asset('assets/images/home/expertise-3.png'),
                            'route' => 'plots.index',
                            'slug' => 'industrial-projects',
                        ],
                        [
                            'number' => '04',
                            'title' => 'Offplan Projects',
                            'description' => 'A curated portfolio of offplan communities and developments across the UAE, offering early-stage access to high-growth investment zones.',
                            'image' => secure_asset('assets/images/home/offplan.jpg'),
                            'route' => 'plots.index',
                            'slug' => 'offplan-projects',
                        ],
                    ];

                @endphp
                <div class="flex flex-col">
                    @foreach ($plots as $key => $plot)
                        {{-- Card --}}
                        <div class="relative">
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-full" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                            </div>

                            <div class="flex flex-col-reverse md:flex-row gap-[6.977vw] md:gap-[10.243vw] 3xl:gap-[9.731vw] px-0 md:px-[1.505vw] 3xl:px-[1.429vw] py-[9.302vw] md:py-[2.315vw] 3xl:py-[2.199vw]">
                                <div class="flex gap-[13.953vw] md:gap-[3.472vw] 3xl:gap-[3.299vw] flex-1 pt-[1.860vw] md:pt-[0.463vw] 3xl:pt-[0.440vw]">
                                    <p class="font-satoshi font-medium text40px-desktop text-[#00A7E1] hidden md:block">{{ $plot['number'] }}</p>

                                    <div class="flex flex-col">
                                        <p class="font-uncut font-medium text28px-mobile text48px-desktop text-[#000000] md:w-auto w-[70%]">{{ $plot['title'] }}
                                            <sup class="font-satoshi font-bold text14px-mobile text-[#00A7E1] md:hidden -translate-y-[1vw] inline-block">{{ $plot['number'] }}</sup>
                                        </p>
                                        <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#3E3E3E] leading-[1.4] mt-[4.651vw] md:mt-[1.620vw] 3xl:mt-[1.539vw]">{{ $plot['description'] }}</p>

                                        <div class="mt-[9.302vw] md:mt-[3.009vw] 3xl:mt-[2.859vw] w-max">
                                            <a href="{{ route($plot['route'], $plot['slug']) }}" class="bg-white border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[5.581vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] px-[4.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] group duration-300 transition-colors hover:bg-[#1D1D1D]">
                                                <p class="font-satoshi font-medium text20px-desktop text-[#1D1D1D] leading-[1.3] duration-300 transition-colors group-hover:text-white">Explore</p>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.721vw] md:w-[0.926vw] 3xl:w-[0.880vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="relative w-full md:w-[24.537vw] 3xl:w-[23.310vw]">
                                    <img src="{{ $plot['image'] }}" class="w-full h-full object-cover aspect-[1.35/1]" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach

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

    {{-- Developers Section Start --}}
    <section class="relative">
        <div class="pl-[4.651vw] md:pl-[6.192vw] 3xl:pl-[5.883vw] py-[23.256vw] md:py-[9.259vw] 3xl:py-[8.796vw] pr-[4.651vw] md:pr-[4.051vw] 3xl:pr-[3.848vw]">
            <div class="flex flex-col md:flex-row gap-[10.465vw] md:gap-[7.465vw] 3xl:gap-[7.092vw]">
                <div class="w-full md:w-[24.421vw] 3xl:w-[23.200vw]">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Developers</p>
                    </div>
                    <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Featured </span>
                        <span class="inline-block will-change-transform">Developers</span>
                    </h2>
                </div>

                @php
                    $developers = ['damac.png', 'emiratess.png', 'nakheel.png', 'emaar.png', 'mag.png', 'omniyat.png'];
                @endphp
                <div class="flex-1 grid grid-cols-3 gap-[3.953vw] md:gap-[2.488vw] 3xl:gap-[2.364vw]">
                    @foreach ($developers as $dev)
                        <div class="aspect-square bg-[#F2EEE8] flex items-center justify-center">
                            <img src="{{ secure_asset('assets/images/home/' . $dev) }}" class="size-full" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Developers Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    @if ($blogs->isNotEmpty())
        {{-- Blogs Section Start --}}
        <section class="relative">
            <div class="px-[4.651vw] md:px-[6.192vw] 3xl:px-[5.883vw] pt-[23.256vw] md:pt-[9.259vw] 3xl:pt-[8.796vw] pb-[23.256vw] md:pb-[4.630vw] 3xl:pb-[4.398vw] flex flex-col md:flex-row gap-[13.023vw] md:gap-[9.259vw] 3xl:gap-[8.796vw]">
                <div class="relative w-[75.349vw] md:w-[18.750vw] 3xl:w-[17.813vw] h-max">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Our Blogs</p>
                    </div>
                    <h2 data-animate-heading class="hidden md:flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Featured</span>
                        <span class="inline-block will-change-transform">blogs</span>
                    </h2>
                    <h2 data-animate-heading class=" md:hidden flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Featured blogs</span>
                    </h2>

                    <div class="mt-[9.302vw] md:mt-[4.051vw] 3xl:mt-[3.848vw] w-max">
                        <a href="{{ route('blogs.index') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                            <p class="font-satoshi font-medium text16px-mobile text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">See All Blogs</p>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.266vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="relative flex-1 flex flex-col pt-0 md:pt-[3.472vw] 3xl:pt-[3.299vw]">
                    @foreach ($blogs as $key => $blog)
                        {{-- Blog Card --}}
                        <div class="relative">
                            <div class="custom-border overflow-hidden w-full will-change-transform">
                                <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                            </div>
                            <div class="py-[9.302vw] md:py-[2.315vw] 3xl:py-[2.199vw] flex">
                                <div class="flex flex-col md:flex-row md:items-end gap-[6.977vw] md:gap-[2.778vw] 3xl:gap-[2.639vw]">
                                    <div class="w-full md:w-[16.609vw] 3xl:w-[15.778vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw] overflow-hidden aspect-[1.30/1]">
                                        <div class="w-full h-full">
                                            <img src="{{ $blog->getFirstMediaUrl('featured_image') }}" class="w-full h-full object-cover object-top" alt="">
                                        </div>
                                    </div>
                                    <div class="flex-1 flex flex-col md:w-[33.738vw] 3xl:w-[32.052vw]">
                                        {{-- <div class="flex items-center gap-[3.256vw] md:gap-[0.810vw] 3xl:gap-[0.770vw]">
                                        <p class="font-satoshi font-medium text-[#3E3E3E] text14px-mobile text18px-desktop leading-[1.72]">12 Sept, 2025</p>
                                        <span class="rounded-full bg-[#00A7E1] size-[1.860vw] md:size-[0.463vw] 3xl:size-[0.440vw]"></span>
                                        <p class="font-satoshi font-medium text-[#3E3E3E] text14px-mobile text18px-desktop leading-[1.72]">4 min read</p>
                                    </div> --}}

                                        <p class="font-uncut text24px-mobile text32px-desktop font-medium leading-tight text-[#000000] mt-[4.186vw] md:mt-[1.042vw] 3xl:mt-[0.990vw] -translate-x-[0.074vw] md:-translate-x-[0.019vw] 3xl:-translate-x-[0.018vw]">{{ $blog->title }}</p>

                                        <a href="{{ route('blogs.details', $blog->slug) }}" class="relative flex items-center gap-[1.860vw] md:gap-[0.463vw] 3xl:gap-[0.440vw] pb-[1.628vw] md:pb-[0.405vw] 3xl:pb-[0.385vw] border-b-2 border-[#181818] w-max group mt-[8.372vw] md:mt-[2.083vw] 3xl:mt-[1.979vw]">
                                            <p class="text-[#181818] font-satoshi font-medium text18px-mobile text18px-desktop leading-[1.44]">Read Article</p>
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
        {{-- Blogs Section End --}}
    @endif

    {{-- Investor Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.083vw] 3xl:px-[1.979vw] pt-0 md:pt-[4.630vw] 3xl:pt-[4.398vw] pb-[28.140vw] md:pb-[7.002vw] 3xl:pb-[6.652vw]">
            <div class="grid md:grid-cols-2 gap-[4.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                <div class="relative rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] py-[5.581vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.083vw] 3xl:mb-[1.979vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Investors</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Invest with Celeste</span>
                        </h2>

                        <p class="text-[#3E3E3E] font-satoshi text15px-mobile text22px-desktop font-medium leading-[1.4] mt-[3.721vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">We believe that every successful transaction begins with trust.
                            Our clients rely on us for clarity, due diligence, and unwavering commitment to value creation.</p>

                        <div class="mt-[9.302vw] md:mt-[18.808vw] 3xl:mt-[17.867vw] w-max">
                            <a href="{{ route('contact') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                                <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">Contact Us</p>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="size-[9.070vw] md:size-[12.500vw] 3xl:size-[11.875vw] absolute right-[4.651vw] md:right-[3.472vw] 3xl:right-[3.299vw] bottom-[4.651vw] md:bottom-[3.472vw] 3xl:bottom-[3.299vw]" alt="">
                </div>
                <div class="relative rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] p-[13.953vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden md:aspect-auto aspect-square">
                    <img data-speed=".75" src="{{ secure_asset('assets/images/home/partner-with-us.png') }}" class="absolute z-0 top-0 left-0 w-full h-[120%] object-cover hidden md:block" alt="">
                    <img src="{{ secure_asset('assets/images/home/partner-with-us.png') }}" class="absolute z-0 top-0 left-0 w-full h-[120%] object-cover md:hidden" alt="">
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

    {{-- FAQS Section Start --}}
    <section class="relative">
        <div class="pl-[4.651vw] md:pl-[6.192vw] 3xl:pl-[5.883vw] py-[23.256vw] md:py-[9.259vw] 3xl:py-[8.796vw] pr-[4.651vw] md:pr-[4.051vw] 3xl:pr-[3.848vw]">
            <div class="flex flex-col md:flex-row gap-[9.302vw] md:gap-[7.465vw] 3xl:gap-[7.092vw]">
                <div class="w-full md:w-[24.421vw] 3xl:w-[23.200vw]">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Faqs</p>
                    </div>
                    <h2 data-animate-heading class="hidden md:flex flex-col font-uncut font-medium text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Frequently</span>
                        <span class="inline-block will-change-transform">Asked</span>
                        <span class="inline-block will-change-transform">Questions</span>
                    </h2>
                    <h2 data-animate-heading class="md:hidden flex flex-col font-uncut font-medium text40px-mobile leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Frequently Asked</span>
                        <span class="inline-block will-change-transform">Questions</span>
                    </h2>
                </div>

                @php
                    $faqs = [
                        [
                            'question' => 'Who can buy land or plots in the UAE?',
                            'answer' => 'Both UAE nationals and expatriates can purchase land in designated freehold areas. Foreign buyers can own plots in approved freehold or leasehold zones depending on the emirate.',
                        ],
                        [
                            'question' => 'Do I need to be a UAE resident to buy a plot?',
                            'answer' => 'No. Non-residents and international investors can buy plots in freehold areas without requiring a UAE residency visa.',
                        ],
                        [
                            'question' => 'What are the legal checks before buying a plot in Dubai?',
                            'answer' => 'You must verify title ownership, zoning approvals, permitted land usage, RERA registration, and ensure the plot is free of disputes. Celeste handles all due-diligence steps for you.',
                        ],
                        [
                            'question' => 'Can companies or investors purchase large land parcels?',
                            'answer' => 'Yes. Both individuals and corporate entities—including foreign companies—can acquire large development plots in approved zones, subject to compliance with UAE property laws.',
                        ],
                        [
                            'question' => 'Does Celeste assist through the full land acquisition process?',
                            'answer' => 'Absolutely. From land identification and market analysis to legal verification, negotiations, and transfer at the Dubai Land Department, Celeste manages the process end-to-end.',
                        ],
                    ];

                @endphp
                <div class="flex-1">
                    <div x-data="{
                        activeAccordion: '',
                        setActiveAccordion(id) {
                            this.activeAccordion = (this.activeAccordion == id) ? '' : id
                        }
                    }" class="relative w-full mx-auto overflow-hidden font-normal flex flex-col gap-[4.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                        @foreach ($faqs as $key => $faq)
                            <div x-data="{ id: $id('accordion') }" class="group bg-[#F8F6F3] rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] cursor-pointer!">
                                <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-[4.186vw] md:p-[2.199vw] 3xl:p-[2.089vw] text-left cursor-pointer!">
                                    <span class="flex gap-[9.767vw] md:gap-[2.431vw] 3xl:gap-[2.309vw] w-[75%]">
                                        <span class="text-[#00A7E1] font-satoshi text18px-desktop font-bold hidden md:block">0{{ $key + 1 }}</span>
                                        <span class="text-black font-uncut font-medium text20px-mobile text32px-desktop leading-tight text-left">{{ $faq['question'] }}</span>
                                    </span>
                                    <span class="w-[20%] flex justify-end">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" :class="{ 'rotate-180': activeAccordion == id }" class="duration-200 ease-out h-auto w-[3.823vw] md:w-[1.736vw] 3xl:w-[1.649vw]" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.7224 21.8578L24.5098 21.844L22.2054 21.6969L22.0183 21.6851V4.82091L2.19929 24.6399L0.282371 22.723L20.1007 2.90468H3.23786L3.22612 2.71755L3.07903 0.413234L3.06522 0.200549H24.5229L24.7224 0.199859V21.8578Z" fill="#00A7E1" stroke="#00A7E1" stroke-width="0.4" />
                                        </svg>
                                    </span>
                                </button>
                                <div x-show="activeAccordion==id" x-collapse x-cloak>
                                    <div class="p-[4.186vw] md:p-[2.199vw] 3xl:p-[2.089vw] pt-0!">
                                        <p class="text-[#3E3E3E] font-satoshi font-medium text22px-desktop leading-[1.45] pl-0 md:pl-[3.762vw] 3xl:pl-[3.573vw] md:w-[80%]">{{ $faq['answer'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQS Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}



</x-layout>
