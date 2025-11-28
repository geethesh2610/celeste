<x-layout>

    @php
        $headings = [
            'residential' => 'Residential Plots',
            'commercial' => 'Commercial Plots',
            'industrial-projects' => 'Industrial Projects',
            'offplan-projects' => 'Offplan Projects',
        ];
    @endphp

    {{-- Plots Section Start --}}
    <section data-no-glass-active class="relative bg-[#1E2E48] has-background">
        <div class="pt-[40.465vw] md:pt-[12.558vw] 3xl:pt-[11.930vw] px-[4.651vw] md:px-[2.894vw] 3xl:px-[2.749vw] pb-[11.628vw] md:pb-[8.449vw] 3xl:pb-[8.027vw]">
            <h1 class="font-uncut font-medium text-white text60px-mobile text160px-desktop -tracking-[0.140vw] md:-tracking-[0.637vw] 3xl:-tracking-[0.605vw]">
                {{ $headings[$slug] ?? 'Plots' }}
            </h1>

        </div>
    </section>
    {{-- Plots Section End --}}

    {{-- Listing Section Start --}}
    <section class="realtive">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] py-[20.930vw] md:py-[8.681vw] 3xl:py-[8.247vw] relative">
            <img src="{{ secure_asset('assets/images/home/celeste-color-logo.png') }}" class="absolute w-[13.953vw] md:w-[8.565vw] 3xl:w-[8.137vw] right-[4.302vw] md:right-[2.315vw] 3xl:right-[2.199vw] top-[8.140vw] md:top-[6.944vw] 3xl:top-[6.597vw]" alt="">

            <div class="relative">
                <div data-animate="" class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.894vw] 3xl:mb-[2.749vw] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                    <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                    <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">{{ $headings[$slug] ?? 'Plots' }}</p>
                </div>
                <h2 data-animate-heading="" class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                    <span class="inline-block will-change-transform">Explore Prime Land</span>
                    <span class="inline-block will-change-transform">Opportunities Across UAE</span>
                </h2>

                <p class="font-satoshi font-medium text-[#3E3E3E] text25px-mobile text22px-desktop leading-[1.40] w-full md:w-[41.088vw] 3xl:w-[39.034vw] mt-[5.581vw] md:mt-[2.315vw] 3xl:mt-[2.199vw]">Our curated listings feature well-located plots suited for residential, commercial, industrial, and mixed-use development.</p>
            </div>


            <div class="mt-[13.953vw] md:mt-[6.944vw] 3xl:mt-[6.597vw] grid gap-cols-1 md:grid-cols-3 gap-[4vw] md:gap-[1.736vw] 3xl:gap-[1.649vw]">
                @forelse ($plots as $plot)
                    <div class="bg-[#ECE9E5] p-[2.791vw] md:p-[0.694vw] 3xl:p-[0.660vw]">

                        {{-- IMAGE --}}
                        <div class="aspect-[2.1/1]">
                            <img src="{{ $plot->getFirstMediaUrl('featured_image') }}" class="size-full object-cover" alt="{{ $plot->title }}">
                        </div>

                        <div class="flex pt-[2.791vw] md:pt-[0.694vw] 3xl:pt-[0.660vw]">

                            {{-- LEFT SECTION --}}
                            <div class="w-[65.74%] border-r border-[#6B6B6B] border-dashed">
                                <div class="relative px-[4.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[3.488vw] md:py-[1.620vw] 3xl:py-[1.539vw]">

                                    {{-- TITLE --}}
                                    <p class="font-satoshi text20px-mobile text28px-desktop text-black font-bold">
                                        {{ $plot->title }}
                                    </p>

                                    {{-- PRICE --}}
                                    @if (!empty($plot->price))
                                        <p class="font-satoshi text16px-mobile text20px-desktop leading-[1.45] text-[#595959] font-medium mt-[2.093vw] md:mt-[0.521vw] 3xl:mt-[0.495vw]">
                                            From
                                            <span class="text-[#15A1D2] font-bold">
                                                {{ $plot->price }}
                                            </span>
                                        </p>
                                    @endif

                                    {{-- EXPLORE BUTTON --}}
                                    <a href="{{ route('plots.details', ['categorySlug' => $plot->category, 'plotSlug' => $plot->slug]) }}" class="bg-[#ECE9E5] w-max mt-[8.372vw] md:mt-[3.472vw] 3xl:mt-[3.299vw] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[5.581vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] px-[4.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] group duration-300 hover:bg-[#1D1D1D]">
                                        <p class="font-satoshi font-medium text20px-desktop text-[#1D1D1D] leading-[1.3] duration-300 group-hover:text-white">
                                            Explore
                                        </p>

                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] w-[3.721vw] md:w-[0.926vw] 3xl:w-[0.880vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" stroke="currentColor" stroke-width="0.4" fill="currentColor"></path>
                                        </svg>

                                    </a>
                                </div>
                            </div>

                            {{-- RIGHT SECTION --}}
                            <div class="w-[34.26%]">
                                <div class="flex flex-col pl-[2.791vw] md:pl-[0.694vw] 3xl:pl-[0.660vw] py-[3.488vw] md:py-[1.620vw] 3xl:py-[1.539vw]">

                                    @if (!empty($plot->plot_size))
                                        {{-- PLOT SIZE --}}
                                        <div class="relative pb-[5.581vw] md:pb-[1.389vw] 3xl:pb-[1.319vw] border-b border-[#6B6B6B] border-dashed">
                                            <p class="font-satoshi text16px-desktop font-bold leading-[1.125]">Plot size</p>
                                            <p class="text-[#595959] font-satoshi font-medium text22px-desktop leading-[1.31] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                                                {{ $plot->plot_size }}
                                            </p>
                                        </div>
                                    @endif

                                    @if (!empty($plot->zoning))
                                        {{-- ZONING --}}
                                        <div class="relative pt-[5.581vw] md:pt-[1.389vw] 3xl:pt-[1.319vw]">
                                            <p class="font-satoshi text16px-desktop font-bold leading-[1.125]">Zoning</p>
                                            <p class="text-[#595959] font-satoshi font-medium text22px-desktop leading-[1.31] mt-[2.326vw] md:mt-[0.579vw] 3xl:mt-[0.550vw]">
                                                {{ strtoupper($plot->zoning) }}
                                            </p>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    {{-- EMPTY STATE --}}
                    <div class="col-span-3 text-center py-[10vw] md:py-[4vw]">
                        <p class="font-satoshi text28px-desktop text-[#4A4A4A] font-medium">
                            No plots available in this category.
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>
    {{-- Listing Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[4.651vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}
</x-layout>
