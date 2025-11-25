<header x-data="{ mobile: false }" class="fixed w-full top-0 left-0 z-10 transition-colors duration-300 header">
    <div class="px-[4.651vw] md:px-[1.852vw] 3xl:px-[1.759vw] py-[5.581vw] md:py-[1.389vw] 3xl:py-[1.319vw]">
        <div class="flex items-center justify-between relative z-1">
            <a href="{{ route('index') }}">
                <img src="{{ secure_asset('assets/images/header/logo.png') }}" data-logo-dark="{{ secure_asset('assets/images/header/logo.png') }}" data-logo-light="{{ secure_asset('assets/images/header/logo-color.png') }}" class="w-[35.581vw] md:w-[14.063vw] 3xl:w-[13.359vw] h-auto transition-all duration-300 header-logo" alt="">
            </a>

            @php
                $menuItems = [
                    ['label' => 'Home', 'route' => 'index'],
                    [
                        'label' => 'Company',
                        'route' => '',
                        'dropdown' => [['label' => 'About', 'route' => 'about'], ['label' => 'Blogs', 'route' => 'blogs.index']],
                    ],

                    ['label' => 'Residential Plots', 'route' => 'plots.index', 'slug' => 'residential'],
                    ['label' => 'Commercial Plots', 'route' => 'plots.index', 'slug' => 'commercial'],
                    ['label' => 'Industrial Projects', 'route' => 'plots.index', 'slug' => 'industrial-projects'],
                    ['label' => 'Offplan Projects', 'route' => 'plots.index', 'slug' => 'offplan-projects'],

                    [
                        'label' => 'Services',
                        'route' => 'services.index',
                        'dropdown' => [['label' => 'Residential Services', 'route' => 'services.residential'], ['label' => 'Commercial Service', 'route' => 'services.commercial'], ['label' => 'Industrial & Logistics Services', 'route' => 'services.industrial-logistics']],
                    ],

                    ['label' => 'Contact', 'route' => 'contact'],
                ];
            @endphp


            <nav class="relative bg-[#E4E4E424] rounded-[1.860vw] md:rounded-[0.463vw] 3xl:rounded-[0.440vw] header-nav hidden md:block">
                <ul class="flex items-center font-satoshi text-white font-medium text18px-desktop header-links">
                    @foreach ($menuItems as $item)
                        <li class="nav-item relative py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] px-[5.581vw] md:px-[1.389vw] 3xl:px-[1.319vw] group">
                            @if (isset($item['dropdown']))
                                <a href="{{ $item['route'] ? route($item['route'], $item['slug'] ?? null) : '#' }}" class="flex items-center gap-[1.860vw] md:gap-[0.463vw] 3xl:gap-[0.440vw] leading-[1.55]">
                                    <span>{{ $item['label'] }}</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" class="w-[2.791vw] md:w-[0.694vw] 3xl:w-[0.660vw] h-auto text-inherit" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.55087 11.3469L1.56399 11.1336L1.62959 10.1164L1.64133 9.92928L1.82846 9.92859L8.92508 9.92928L0.283045 1.28725L1.28777 0.282521L9.92911 8.92386L9.92842 1.82863L9.92911 1.64149L10.1162 1.62975L11.1334 1.56415L11.3468 1.55103V11.3469H1.55087Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                    </svg>
                                </a>
                                {{-- Dropdown Menu --}}
                                <ul class="absolute right-0 top-full pt-2 hidden group-hover:block">
                                    <div class="bg-[#E4E4E4] max-w-[58.140vw] md:max-w-[14.468vw] 3xl:max-w-[13.744vw] min-w-[46.512vw] md:min-w-[11.574vw] 3xl:min-w-[10.995vw] w-full rounded-md shadow-lg overflow-hidden py-[1.395vw] md:py-[0.347vw] 3xl:py-[0.330vw]">
                                        @foreach ($item['dropdown'] as $dropdownItem)
                                            <li>
                                                <a href="{{ route($dropdownItem['route']) }}" class="block text-black! px-[4.651vw] md:px-[1.157vw] 3xl:px-[1.100vw] py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw]">
                                                    {{ $dropdownItem['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @else
                                <a href="{{ route($item['route'], $item['slug'] ?? null) }}" class="leading-[1.55]">{{ $item['label'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>

            {{-- Mobile toggle button --}}
            <button type="button" @click="mobile=!mobile" class="mobile-togglebar border border-[#FFFFFF] text-white rounded-[1.395vw] md:hidden flex items-center gap-[1.860vw] px-[3.256vw] py-[2.674vw]">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" class="h-auto w-[4.186vw]" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H18L16 2H0V0ZM0 5H18L16 7H0V5ZM0 10H18L16 12H0V10Z" fill="currentColor" />
                </svg>
                <p class="text16px-mobile font-satoshi font-medium">Menu</p>
            </button>
        </div>
        <div x-show="mobile" x-cloak x-transition class=" w-full relative z-1">
            <div x-data="{
                activeAccordion: '',
                setActiveAccordion(id) {
                    this.activeAccordion = (this.activeAccordion == id) ? '' : id
                }
            }" class="pt-[9.302vw]">
                <div class="bg-white rounded-[2.326vw] px-[4.651vw]">
                    <div class="flex flex-col divide-y divide-[#A4A4A4] divide-dashed">
                        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-[4.651vw] text-left">
                                <span class="text20px-mobile text-black font-satoshi font-medium">Company</span>
                                <svg width="14" height="14" viewBox="0 0 14 14" :class="{ 'rotate-180': activeAccordion == id }" fill="none" class="w-[3vw] h-auto duration-200 ease-out" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="#00A7E1" stroke="#00A7E1" stroke-width="0.4" />
                                </svg>
                            </button>
                            <div x-show="activeAccordion==id" x-collapse x-cloak>
                                <div class="p-4 pt-0 flex flex-col divide-y divide-[#A4A4A4] divide-dashed text18px-desktop font-satoshi font-medium">
                                    <a @click="mobile=false" href="{{ route('about') }}" class="pb-[3vw]">About</a>
                                    <a @click="mobile=false" href="{{ route('blogs.index') }}" class="pt-[3vw]">Blogs</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('plots.index', 'residential') }}" @click="mobile=false" class="text20px-mobile text-black font-satoshi font-medium py-[4.651vw]">Residential Plots</a>
                        <a href="{{ route('plots.index', 'commercial') }}" @click="mobile=false" class="text20px-mobile text-black font-satoshi font-medium py-[4.651vw]">Commercial Plots</a>
                        <a href="{{ route('plots.index', 'industrial-projects') }}" @click="mobile=false" class="text20px-mobile text-black font-satoshi font-medium py-[4.651vw]">Industrial Projects</a>
                        <a href="{{ route('plots.index', 'offplan-projects') }}" @click="mobile=false" class="text20px-mobile text-black font-satoshi font-medium py-[4.651vw]">Offplan Projects</a>
                        <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full py-[4.651vw] text-left">
                                <span class="text20px-mobile text-black font-satoshi font-medium">Services</span>
                                <svg width="14" height="14" viewBox="0 0 14 14" :class="{ 'rotate-180': activeAccordion == id }" fill="none" class="w-[3vw] h-auto duration-200 ease-out" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z" fill="#00A7E1" stroke="#00A7E1" stroke-width="0.4" />
                                </svg>
                            </button>
                            <div x-show="activeAccordion==id" x-collapse x-cloak>
                                <div class="p-4 pt-0 flex flex-col divide-y divide-[#A4A4A4] divide-dashed text18px-desktop font-satoshi font-medium">
                                    <a href="{{ route('services.index') }}" @click="mobile=false" class="pb-[3vw]">Services</a>
                                    <a href="{{ route('services.residential') }}" @click="mobile=false" class="py-[3vw]">Residential Services</a>
                                    <a href="{{ route('services.commercial') }}" @click="mobile=false" class="py-[3vw]">Commercial Services</a>
                                    <a href="{{ route('services.industrial-logistics') }}" @click="mobile=false" class="pt-[3vw]">Industrial and Logisctic Services</a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" @click="mobile=false" class="text20px-mobile text-black font-satoshi font-medium py-[4.651vw]">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div x-show="mobile" class="fixed bg-black/40 inset-0 z-0 h-screen w-screen"></div> --}}
    </div>


</header>
