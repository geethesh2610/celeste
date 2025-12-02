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
    <section data-no-glass-active class="relative h-[60vh] md:h-[40vh] lg:h-screen has-background overflow-hidden">
        <img data-speed="0.5" src="{{ secure_asset('assets/images/services/commercial.jpeg') }}" class="hidden md:block w-full h-full object-cover object-bottom z-1" alt="">
        <img src="{{ secure_asset('assets/images/services/commercial.jpeg') }}" class="md:hidden w-full h-full object-cover object-bottom z-1" alt="">
        <div class="absolute inset-0 flex items-end pb-[12vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw]">
            <div class="flex flex-col gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                <div class="flex items-center gap-[1vw] font-satoshi font-medium text-[#EBEBEB] font-bold text15px-mobile text18px-desktop leading-[1.61]">
                    <p class="text-[#EBEBEB] transition text-white">Services</p>
                    <p>></p>
                    <p>Commercial Advisory Services</p>
                </div>
                <h1 class="font-uncut font-medium text56px-mobile  text-white text160px-desktop leading-[.9375] mt-[4.163vw] md:mt-[2.778vw] 3xl:mt-[2.639vw]">Commercial Advisory<br>Services</h1>
            </div>
        </div>
    </section>
    {{-- Services Section End --}}

    {{-- What We Offer Section Start --}}
    <section class="relative">
        <div class="py-[20.884vw] md:py-[8.681vw] 3xl:py-[8.247vw] px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw]">
            <div class="flex flex-col md:flex-row md:items-end gap-[7.767vw] md:gap-[7.407vw] 3xl:gap-[7.037vw]">
                <div class="md:w-[50.68%]">
                    <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                        <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                        <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">What We Offer</p>
                    </div>
                    <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                        <span class="inline-block will-change-transform">Explore our</span>
                        <span class="inline-block will-change-transform">Commercial advisory services </span>
                    </h2>

                    <div class="mt-[6.279vw] md:mt-[4.051vw] 3xl:mt-[3.848vw] w-max hidden md:block">
                        <a href="{{ route('plots.index', 'commercial') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                            <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">See Commercial Plots</p>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="md:w-[49.32%]">
                    <p class="font-satoshi font-medium text15px-mobile text-[#3E3E3E] text22px-desktop leading-[1.40] w-full md:w-[41.088vw] 3xl:w-[39.034vw]"> For institutional players, developers and strategic investors seeking high-impact land assets in Dubai, our commercial land offerings deliver premium zoning, strong infrastructure and long-term value. From retail malls to logistics hubs, hotel sites to master-planned mixed-use schemes — we cover the full spectrum of commercial land opportunities.</p>
                    <div class="mt-[9.279vw] md:mt-[4.051vw] 3xl:mt-[3.848vw] w-max md:hidden">
                        <a href="{{ route('plots.index', 'commercial') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                            <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">See Commercial Plots</p>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                            </svg>
                        </a>
                    </div>
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
                        'title' => 'Zoning & Permitted Use',
                        'content' => ['Commercial land has specific use-classes — making sure the plot supports your envisioned project is crucial.'],
                    ],

                    [
                        'title' => 'Infrastructure & Access',
                        'content' => ['Good road, rail, port, and utility connectivity supports project viability and long-term value.'],
                    ],

                    [
                        'title' => 'Market Demand & Exit Options',
                        'content' => ['Evaluate demand drivers (tourism, logistics, retail) and plan exit/monetisation strategies accordingly.'],
                    ],

                    [
                        'title' => 'Investment Scale & Timelines',
                        'content' => ['Commercial developments often involve larger CAPEX and longer timelines — we help align land + project strategy.'],
                    ],
                ];
            @endphp

            <div class="flex flex-col md:flex-row gap-[10.465vw] md:gap-[2.604vw] 3xl:gap-[2.474vw]">
                <div class="md:w-[25.29%]">
                    <div class="mt-auto">
                        <p class="font-medium text-black font-uncut text24px-mobile text32px-desktop leading-tight">What to Consider</p>
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

    {{-- Partner Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] pt-[13.953vw] md:pt-[3.472vw] 3xl:pt-[3.299vw] pb-[20.907vw] md:pb-[6.944vw] 3xl:pb-[6.597vw]">
            <div class="flex flex-col md:flex-row justify-between items-end gap-[9.302vw] md:gap-[2.315vw] 3xl:gap-[2.199vw]">
                <div class="w-dull md:w-[57.813vw] 3xl:w-[54.922vw]">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text18px-desktop">Our Expertise</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Why partner with Celeste?</span>
                        </h2>
                    </div>
                    @php
                        $partnerReasons = [
                            [
                                'number' => '01',
                                'title' => 'Commercial Access',
                                'description' => 'Direct access to major commercial land parcels across Dubai’s dynamic economic zones — hospitality clusters, industrial parks, logistics corridors, and prime development sites.',
                            ],
                            [
                                'number' => '02',
                                'title' => 'Strategic Advisory',
                                'description' => 'Insightful advisory combining market intelligence with regulatory clarity to help you capitalise on land suited for large-scale, commercial-use development.',
                            ],
                            [
                                'number' => '03',
                                'title' => 'Trusted Network',
                                'description' => 'Trusted network with institutional land-holders and developers giving you early-stage visibility and access to strategic parcels.',
                            ],
                            [
                                'number' => '04',
                                'title' => 'Streamlined Process',
                                'description' => 'Focused service model: commercial lands require meticulous due-diligence — we streamline the process for you, from select short-listing to acquisition support.',
                            ],
                        ];
                    @endphp


                    <div class="mt-[17.907vw] md:mt-[6.944vw] 3xl:mt-[6.597vw]">

                        @foreach ($partnerReasons as $index => $item)
                            <div class="relative">
                                <div class="custom-border overflow-hidden w-full will-change-transform">
                                    <div class="border-t border-transparent w-full" style="border-image: repeating-linear-gradient(to right, #A4A4A4 0, #A4A4A4 10px, transparent 10px, transparent 15px); border-image-slice: 1;">
                                    </div>
                                </div>

                                <div class="py-[8.233vw] md:py-[2.546vw] 3xl:py-[2.419vw] flex gap-[23.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw] px-0 md:px-[1.157vw] 3xl:px-[1.100vw]">

                                    <p class="text-[#6C858E] font-satoshi font-medium text26px-desktop hidden md:block">
                                        {{ $item['number'] }}
                                    </p>

                                    <div class="flex flex-col">
                                        <p class="font-satoshi font-bold text20px-mobile text26px-desktop text-[#000000]">
                                            {{ $item['title'] }}
                                        </p>

                                        <p class="font-satoshi font-medium text15px-mobile text22px-desktop text-[#595959] leading-[1.4] pt-[3.256vw] md:pt-[1.505vw] 3xl:pt-[1.429vw] md:w-[90%]">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <div class="w-full md:w-[36.458vw] 3xl:w-[34.635vw]">
                    <img src="{{ secure_asset('assets/images/services/commercial-down.png') }}" class="w-full h-auto object-cover" alt="">
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

    {{-- Investor Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.083vw] 3xl:px-[1.979vw] py-[28.140vw] md:py-[7.002vw] 3xl:py-[6.652vw]">
            <div class="grid md:grid-cols-2 gap-[4.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                <div class="relative rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] pt-[8vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.083vw] 3xl:mb-[1.979vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Connect with us</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Ready to get started?</span>
                        </h2>

                        <p class="text-[#3E3E3E] font-satoshi text22px-desktop font-medium leading-[1.4] mt-[6.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">We believe that every successful transaction begins with trust.
                            Our clients rely on us for clarity, due diligence, and unwavering commitment to value creation.</p>

                        <div class="mt-[10.581vw] md:mt-[18.808vw] 3xl:mt-[17.867vw] w-max">
                            <a href="{{ route('contact') }}" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                                <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">Contact Us</p>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="size-[10.465vw] md:size-[12.500vw] 3xl:size-[11.875vw] absolute right-[6.953vw] md:right-[3.472vw] 3xl:right-[3.299vw] bottom-[6.953vw] md:bottom-[3.472vw] 3xl:bottom-[3.299vw]" alt="">
                </div>
                <div class="relative aspect-square md:aspect-auto rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] p-[13.953vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <img data-speed=".75" src="{{ secure_asset('assets/images/plots/form.png') }}" class="hidden md:block absolute z-0 top-0 left-0 w-full h-[120%] object-cover" alt="">
                    <img src="{{ secure_asset('assets/images/plots/form.png') }}" class="md:hidden absolute z-0 top-0 left-0 w-full h-[120%] object-cover" alt="">
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
