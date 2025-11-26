<x-layout>

    {{-- Plots Section Start --}}
    <section data-no-glass-active class="relative bg-[#1E2E48] has-background">
        <div class="pt-[40.465vw] md:pt-[12.558vw] 3xl:pt-[11.930vw] px-[4.651vw] md:px-[2.894vw] 3xl:px-[2.749vw] pb-[11.628vw] md:pb-[8.449vw] 3xl:pb-[8.027vw]">
            <h1 class="font-uncut font-medium text-white text60px-mobile text160px-desktop -tracking-[0.140vw] md:-tracking-[0.637vw] 3xl:-tracking-[0.605vw]">
                News & Events
            </h1>
        </div>
    </section>
    {{-- Plots Section End --}}

    {{-- Listing Section Start --}}
    <section class="realtive">
        <div class="px-[4.651vw] md:px-[2.315vw] 3xl:px-[2.199vw] py-[20.884vw] md:py-[8.681vw] 3xl:py-[8.247vw] relative">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[3.977vw] md:gap-[1.736vw] 3xl:gap-[1.649vw]">
                @forelse ($blogs as $plot)
                    <div class="bg-[#ECE9E5] p-[2.791vw] md:p-[0.694vw] 3xl:p-[0.660vw]">

                        {{-- IMAGE --}}
                        <div class="aspect-[2.1/1]">
                            <img src="{{ $plot->getFirstMediaUrl('featured_image') }}" class="size-full object-cover" alt="{{ $plot->title }}">
                        </div>

                        <div class="flex">

                            {{-- LEFT SECTION --}}
                            <div class="relative w-full">
                                <div class="relative px-[3.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[3.512vw] md:py-[1.620vw] 3xl:py-[1.539vw]">

                                    <div class="border-b pb-[6.977vw] md:pb-[1.736vw] 3xl:pb-[1.649vw] mt-[1vw] md:mt-0" style="border-image: repeating-linear-gradient(to right, #6B6B6B 0, #6B6B6B 10px, transparent 10px, transparent 15px);border-image-slice: 1;">
                                        {{-- TITLE --}}
                                        <p class="font-satoshi text20px-mobile text28px-desktop text-black font-bold leading-[1.14]">
                                            {{ $plot->title }}
                                        </p>
                                        {{-- PRICE --}}
                                        <div class="font-satoshi text15px-mobile text20px-desktop leading-[1.45] text-[#595959] font-medium mt-[3.186vw] md:mt-[1.042vw] 3xl:mt-[0.990vw] line-clamp-3">
                                            {{ $plot->excerpt }}
                                        </div>
                                    </div>

                                    <div class="flex justify-between items-center pt-[6.977vw] md:pt-[1.736vw] 3xl:pt-[1.649vw]">
                                        <p class="font-medium font-satoshi text16px-mobile text20px-desktop text-[#595959]">On <span class="text-[#15A1D2]">{{ \Carbon\Carbon::parse($plot->published_at)->format('d M, Y') }}</span></p>
                                        {{-- EXPLORE BUTTON --}}
                                        <a href="{{ route('blogs.details', $plot->slug) }}" class="bg-[#ECE9E5] w-max border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[5.581vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] px-[4.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] group duration-300 hover:bg-[#1D1D1D]">
                                            <p class="font-satoshi font-medium text20px-desktop text-[#1D1D1D] leading-[1.3] duration-300 group-hover:text-white">
                                                Read More
                                            </p>
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] w-[3.721vw] md:w-[0.926vw] 3xl:w-[0.880vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" stroke="currentColor" stroke-width="0.4" fill="currentColor"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    {{-- EMPTY STATE --}}
                    <div class="col-span-3 text-center py-[10vw] md:py-[4vw]">
                        <p class="font-satoshi text28px-desktop text-[#4A4A4A] font-medium">
                            No blogs available.
                        </p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>
    {{-- Listing Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[7.674vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}
</x-layout>
