<x-layout>
    @push('style')
        <style>
            #mainImage {
                transition: opacity 0.3s ease-in-out;
            }
        </style>
    @endpush

    {{-- Details Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[5.787vw] 3xl:px-[5.498vw] pt-[25.581vw] md:pt-[12.037vw] 3xl:pt-[11.435vw] pb-[20.884vw] md:pb-[8.681vw] 3xl:pb-[8.247vw]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[6.977vw] md:gap-[4.861vw] 3xl:gap-[4.618vw]">
                <div class="md:hidden flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] font-satoshi text18px-desktop font-medium text-[#737373] leading-[1.61]">
                    <p>Plots</p>
                    <span>></span>
                    <a href="{{ route('plots.index', $plot->category) }}" class="capitalize hover:underline">{{ $plot->category }}</a>
                    <span>></span>
                    <p class="font-bold text-[#1E2E48]">{{ $plot->title }}</p>
                </div>
                <div class="relative flex flex-col gap-[3.721vw] md:gap-[0.926vw] 3xl:gap-[0.880vw]">
                    {{-- Main Featured Image --}}
                    <div class="w-full aspect-[1.16/1] overflow-hidden">
                        <img id="mainImage" src="{{ $featuredImage ?: ($galleryImages->first() ? $galleryImages->first()->getUrl() : '') }}" alt="{{ $plot->title }}" class="w-full h-full object-cover">
                    </div>

                    {{-- Thumbnail Gallery --}}
                    @if ($galleryImages->count() || $featuredImage)
                        <div class="grid grid-cols-4 gap-[3.721vw] md:gap-[0.926vw] 3xl:gap-[0.880vw]">
                            {{-- Featured Image Thumbnail --}}
                            @if ($featuredImage)
                                <img src="{{ $featuredImage }}" alt="{{ $plot->title }}" class="w-full h-full object-cover aspect-[1.16/1] cursor-pointer hover:opacity-75 transition-opacity" onclick="changeMainImage('{{ $featuredImage }}')">
                            @endif

                            {{-- Gallery Thumbnails --}}
                            @foreach ($galleryImages as $image)
                                <img src="{{ $image->getUrl() }}" alt="{{ $plot->title }}" class="w-full h-full object-cover aspect-[1.16/1] cursor-pointer hover:opacity-75 transition-opacity" onclick="changeMainImage('{{ $image->getUrl() }}')">
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="relative">
                    <div class="hidden md:flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] font-satoshi text18px-desktop font-medium text-[#737373] leading-[1.61]">
                        <p>Plots</p>
                        <span>></span>
                        <a href="{{ route('plots.index', $plot->category) }}" class="capitalize hover:underline">{{ $plot->category }}</a>
                        <span>></span>
                        <p class="font-bold text-[#1E2E48]">{{ $plot->title }}</p>
                    </div>

                    <div class="mt-0 md:mt-[2.315vw] 3xl:mt-[2.199vw]">
                        <h1 class="font-uncut text-black font-medium leading-[1.06] text40px-mobile text56px-desktop">{{ $plot->title }}</h1>

                        <div class="flex gap-[3.721vw] md:gap-[0.926vw] 3xl:gap-[0.880vw] pb-[8.488vw] md:pb-[3.356vw] 3xl:pb-[3.189vw]">
                            <div class="mt-[8.953vw] md:mt-[3.472vw] 3xl:mt-[3.299vw] flex items-center gap-[23.256vw] md:gap-[5.787vw] 3xl:gap-[5.498vw]">
                                <div class="flex gap-[3.721vw] md:gap-[0.926vw] 3xl:gap-[0.880vw]">
                                    <svg width="51" height="51" viewBox="0 0 51 51" fill="none" class="w-[9.860vw] md:w-[2.951vw] 3xl:w-[2.804vw] h-auto shrink-0" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M45.5342 36.6864V14.3136C46.7771 13.9951 47.9135 13.3534 48.8281 12.4537C49.7428 11.554 50.403 10.4282 50.7419 9.19076C51.0807 7.95331 51.0861 6.64824 50.7574 5.40805C50.4287 4.16786 49.7777 3.03673 48.8705 2.12951C47.9633 1.22229 46.8321 0.571292 45.5919 0.242618C44.3518 -0.0860559 43.0467 -0.0807004 41.8092 0.258141C40.5718 0.596982 39.446 1.25724 38.5463 2.17188C37.6466 3.08651 37.0049 4.22295 36.6864 5.46579H14.3136C13.9951 4.22295 13.3534 3.08651 12.4537 2.17188C11.554 1.25724 10.4282 0.596982 9.19076 0.258141C7.95331 -0.0807004 6.64824 -0.0860559 5.40805 0.242618C4.16786 0.571292 3.03673 1.22229 2.12951 2.12951C1.22229 3.03673 0.571292 4.16786 0.242618 5.40805C-0.0860559 6.64824 -0.0807004 7.95331 0.258141 9.19076C0.596982 10.4282 1.25724 11.554 2.17188 12.4537C3.08651 13.3534 4.22295 13.9951 5.46579 14.3136V36.6864C4.22295 37.0049 3.08651 37.6466 2.17188 38.5463C1.25724 39.446 0.596982 40.5718 0.258141 41.8092C-0.0807004 43.0467 -0.0860559 44.3518 0.242618 45.5919C0.571292 46.8321 1.22229 47.9633 2.12951 48.8705C3.03673 49.7777 4.16786 50.4287 5.40805 50.7574C6.64824 51.0861 7.95331 51.0807 9.19076 50.7419C10.4282 50.403 11.554 49.7428 12.4537 48.8281C13.3534 47.9135 13.9951 46.7771 14.3136 45.5342H36.6864C37.0049 46.7771 37.6466 47.9135 38.5463 48.8281C39.446 49.7428 40.5718 50.403 41.8092 50.7419C43.0467 51.0807 44.3518 51.0861 45.5919 50.7574C46.8321 50.4287 47.9633 49.7777 48.8705 48.8705C49.7777 47.9633 50.4287 46.8321 50.7574 45.5919C51.0861 44.3518 51.0807 43.0467 50.7419 41.8092C50.403 40.5718 49.7428 39.446 48.8281 38.5463C47.9135 37.6466 46.7771 37.0049 45.5342 36.6864ZM43.7129 3.6445C44.4334 3.6445 45.1376 3.85813 45.7366 4.25838C46.3357 4.65864 46.8025 5.22753 47.0782 5.89312C47.3539 6.55872 47.4261 7.29112 47.2855 7.99771C47.145 8.70431 46.798 9.35335 46.2886 9.86278C45.7792 10.3722 45.1301 10.7191 44.4235 10.8597C43.717 11.0002 42.9846 10.9281 42.319 10.6524C41.6534 10.3767 41.0845 9.90981 40.6842 9.31079C40.284 8.71177 40.0703 8.00752 40.0703 7.28708C40.0703 6.32101 40.4541 5.3945 41.1372 4.71139C41.8203 4.02827 42.7468 3.6445 43.7129 3.6445ZM3.6445 7.28708C3.6445 6.56665 3.85813 5.86239 4.25838 5.26337C4.65864 4.66435 5.22753 4.19747 5.89312 3.92177C6.55872 3.64607 7.29112 3.57394 7.99771 3.71449C8.70431 3.85504 9.35335 4.20196 9.86278 4.71139C10.3722 5.22081 10.7191 5.86986 10.8597 6.57645C11.0002 7.28304 10.9281 8.01544 10.6524 8.68104C10.3767 9.34663 9.90981 9.91553 9.31079 10.3158C8.71177 10.716 8.00752 10.9297 7.28708 10.9297C6.32101 10.9297 5.3945 10.5459 4.71139 9.86278C4.02827 9.17966 3.6445 8.25315 3.6445 7.28708ZM7.28708 47.3555C6.56665 47.3555 5.86239 47.1419 5.26337 46.7416C4.66435 46.3414 4.19747 45.7725 3.92177 45.1069C3.64607 44.4413 3.57394 43.7089 3.71449 43.0023C3.85504 42.2957 4.20196 41.6466 4.71139 41.1372C5.22081 40.6278 5.86986 40.2809 6.57645 40.1403C7.28304 39.9998 8.01544 40.0719 8.68104 40.3476C9.34663 40.6233 9.91553 41.0902 10.3158 41.6892C10.716 42.2882 10.9297 42.9925 10.9297 43.7129C10.9297 44.679 10.5459 45.6055 9.86278 46.2886C9.17966 46.9717 8.25315 47.3555 7.28708 47.3555ZM36.6864 41.8916H14.3136C13.9863 40.6399 13.3316 39.498 12.4168 38.5832C11.502 37.6684 10.36 37.0137 9.10837 36.6864V14.3136C10.36 13.9863 11.502 13.3316 12.4168 12.4168C13.3316 11.502 13.9863 10.36 14.3136 9.10837H36.6864C37.0137 10.36 37.6684 11.502 38.5832 12.4168C39.498 13.3316 40.6399 13.9863 41.8916 14.3136V36.6864C40.6391 37.0119 39.4962 37.666 38.5811 38.5811C37.666 39.4962 37.0119 40.6391 36.6864 41.8916ZM43.7129 47.3555C42.9925 47.3555 42.2882 47.1419 41.6892 46.7416C41.0902 46.3414 40.6233 45.7725 40.3476 45.1069C40.0719 44.4413 39.9998 43.7089 40.1403 43.0023C40.2809 42.2957 40.6278 41.6466 41.1372 41.1372C41.6466 40.6278 42.2957 40.2809 43.0023 40.1403C43.7089 39.9998 44.4413 40.0719 45.1069 40.3476C45.7725 40.6233 46.3414 41.0902 46.7416 41.6892C47.1419 42.2882 47.3555 42.9925 47.3555 43.7129C47.3541 44.6785 46.9698 45.6042 46.287 46.287C45.6042 46.9698 44.6785 47.3541 43.7129 47.3555Z"
                                            fill="black" />
                                    </svg>
                                    <div class="flex flex-col">
                                        <p class="font-satoshi text15px-mobile text16px-desktop font-bold leading-[1.125]">Plot size</p>
                                        <p class="text-[#595959] font-satoshi font-medium text22px-desktop leading-[1.31] mt-[1.395vw] md:mt-[0.347vw] 3xl:mt-[0.330vw]">
                                            {{ $plot->plot_size }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-[3.721vw] md:gap-[0.926vw] 3xl:gap-[0.880vw] ">
                                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" class="w-[9.163vw] md:w-[2.778vw] 3xl:w-[2.639vw] h-auto shrink-0" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.59961 49.6H49.5996M6.93294 49.6V12.2667L28.2663 1.60001V49.6M44.2663 49.6V22.9333L28.2663 12.2667M17.5996 17.6V17.6267M17.5996 25.6V25.6267M17.5996 33.6V33.6267M17.5996 41.6V41.6267" stroke="black" stroke-width="3.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                    <div class="flex flex-col">
                                        <p class="font-satoshi text15px-mobile text16px-desktop font-bold leading-[1.125]">Zoning</p>
                                        <p class="text-[#595959] font-satoshi font-medium text22px-desktop leading-[1.31] mt-[1.395vw] md:mt-[0.347vw] 3xl:mt-[0.330vw]">
                                            {{ strtoupper($plot->zoning) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="custom-border overflow-hidden w-full will-change-transform">
                            <div class="border-t-2 border-transparent w-full" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
                        </div>

                        {{-- Key features --}}
                        <div class="pt-[8.163vw] md:pt-[2.778vw] 3xl:pt-[2.639vw]">
                            <div class="flex flex-col relative">
                                <p class="text-[#15A1D2] font-satoshi text20px-desktop font-bold leading-[1.45]">Key features</p>
                                <div class="mt-[4.651vw] md:mt-[1.157vw] 3xl:mt-[1.100vw] flex flex-wrap gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                                    @foreach ($plot->features_tag as $tags)
                                        <div class="bg-[#EEEEEE] rounded-full font-satoshi font-medium text14px-mobile text16px-desktop leading-[1.81] px-[4.186vw] md:px-[1.042vw] 3xl:px-[0.990vw] py-[1vw] md:py-[0.116vw] 3xl:py-[0.110vw]">{{ $tags }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        @php
                            $phone = '971569988333';
                            $message = 'Hi, I want to enquire about the property: ' . $plot->title;
                        @endphp
                        <div class="mt-[14.465vw] md:mt-[7.581vw] 3xl:mt-[7.202vw] flex flex-col md:flex-row gap-[2.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                            <a href="https://wa.me/{{ $phone }}?text={{ urlencode($message) }}" target="_blank" class="bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center justify-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[23.256vw] md:px-[5.787vw] 3xl:px-[5.498vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-white">
                                <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">Enquire Now</p>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                </svg>
                            </a>
                            <a href="#" class="bg-[#FFFFFF] md:w-max border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center justify-center gap-[5.581vw] md:gap-[1.389vw] 3xl:gap-[1.319vw] px-[11.628vw] md:px-[2.894vw] 3xl:px-[2.749vw] py-[4.884vw] md:py-[0.694vw] 3xl:py-[0.660vw] group duration-300 hover:bg-[#1D1D1D]">
                                <p class="font-satoshi font-medium text20px-desktop text-[#1D1D1D] leading-[1.3] duration-300 group-hover:text-white">Share</p>
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" class="text-[#00A7E1] w-[3.721vw] md:w-[0.926vw] 3xl:w-[0.880vw] duration-300 group-hover:rotate-45" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" stroke="currentColor" stroke-width="0.4" fill="currentColor"></path>
                                </svg>

                            </a>
                        </div>

                        {{-- Description --}}
                        <div class="mt-[10.256vw] md:mt-[5.787vw] 3xl:mt-[5.498vw]">
                            <p class="font-satoshi font-bold text-black text24px-mobile text26px-desktop">Description</p>
                            <div class="mt-[4.651vw] md:mt-[1.157vw] 3xl:mt-[1.100vw] text-[#595959] font-satoshi font-medium text15px-mobile text22px-desktop leading-[1.4] -tracking-[0.102vw] md:-tracking-[0.025vw] 3xl:-tracking-[0.024vw] md:w-[95%]">
                                {!! $plot->description !!}
                            </div>
                        </div>

                        {{-- Property Detail --}}
                        <div class="mt-[10.605vw] md:mt-[4.630vw] 3xl:mt-[4.398vw]">
                            <p class="font-satoshi font-bold text-black text24px-mobile text26px-desktop">Property Detail</p>
                            <div class="mt-[4.651vw] md:mt-[1.157vw] 3xl:mt-[1.100vw] text-[#595959] font-satoshi font-medium text15px-mobile text22px-desktop leading-[1.4] -tracking-[0.102vw] md:-tracking-[0.025vw] 3xl:-tracking-[0.024vw] md:w-[95%]">
                                {!! $plot->property_detail !!}
                            </div>
                        </div>

                        {{-- Location --}}
                        <div class="mt-[10.605vw] md:mt-[4.630vw] 3xl:mt-[4.398vw]">
                            <p class="font-satoshi font-bold text-black text24px-mobile text26px-desktop">Location</p>
                            <div class="mt-[4.651vw] md:mt-[1.157vw] 3xl:mt-[1.100vw] text-[#595959] font-satoshi font-medium text15px-mobile text22px-desktop leading-[1.4] -tracking-[0.102vw] md:-tracking-[0.025vw] 3xl:-tracking-[0.024vw] md:w-[95%]">
                                {!! $plot->location !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- Details Section End --}}

    {{-- Investor Section Start --}}
    <section class="relative">
        <div class="px-[4.651vw] md:px-[2.083vw] 3xl:px-[1.979vw] pb-[28.140vw] md:pb-[7.002vw] 3xl:pb-[6.652vw]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[4.651vw] md:gap-[1.157vw] 3xl:gap-[1.100vw]">
                <div class="relative rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] pt-[9vw] p-[4.651vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <div class="relative">
                        <div data-animate class="flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw] mb-[4.651vw] md:mb-[2.083vw] 3xl:mb-[1.979vw]">
                            <span class="rounded-full bg-[#00A7E1] size-[2.791vw] md:size-[0.694vw] 3xl:size-[0.660vw]"></span>
                            <p class="uppercase font-satoshi text-[#1D1D1D] font-bold text14px-mobile text18px-desktop">Connect with us</p>
                        </div>
                        <h2 data-animate-heading class="flex flex-col font-uncut font-medium text40px-mobile text72px-desktop leading-[1.08] -tracking-[0.326vw] md:-tracking-[0.081vw] 3xl:-tracking-[0.077vw]">
                            <span class="inline-block will-change-transform">Get Free Consultation</span>
                        </h2>

                        <div class="mt-[17.442vw] md:mt-[4.340vw] 3xl:mt-[4.123vw]">
                            <livewire:contact-form />
                        </div>
                    </div>
                </div>

                <div class="relative aspect-square md:aspect-auto rounded-[2.326vw] md:rounded-[0.579vw] 3xl:rounded-[0.550vw] bg-[#F2EEE8] p-[13.953vw] md:p-[3.472vw] 3xl:p-[3.299vw] overflow-hidden">
                    <img src="{{ secure_asset('assets/images/plots/form.png') }}" class="absolute z-0 inset-0 object-cover" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Investor Section End --}}

    {{-- Dashed Border Start --}}
    <div class="px-[7.674vw] md:px-[1.910vw] 3xl:px-[1.814vw]">
        <div class="custom-border overflow-hidden w-full will-change-transform">
            <div class="border-t-2 border-transparent w-[98vw]" style="border-image: repeating-linear-gradient(to right, #ccc 0, #ccc 10px, transparent 10px, transparent 15px);border-image-slice: 1;"></div>
        </div>
    </div>
    {{-- Dashed Border End --}}

    @push('script')
        <script>
            function changeMainImage(imageUrl) {
                const mainImage = document.getElementById('mainImage');
                mainImage.src = imageUrl;

                // Optional: Add a smooth fade effect
                mainImage.style.opacity = '0';
                setTimeout(() => {
                    mainImage.style.opacity = '1';
                }, 50);
            }
        </script>
    @endpush
</x-layout>
