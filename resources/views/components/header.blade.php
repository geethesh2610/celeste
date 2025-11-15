<header class="fixed w-full top-0 left-0 z-10 transition-colors duration-300 header glass-nav">
    <div class="px-[7.442vw] md:px-[1.852vw] 3xl:px-[1.759vw] py-[5.581vw] md:py-[1.389vw] 3xl:py-[1.319vw]">
        <div class="flex items-center justify-between">
            <a href="{{ route('index') }}">
                <img src="{{ secure_asset('assets/images/header/logo.png') }}" data-logo-dark="{{ secure_asset('assets/images/header/logo.png') }}" data-logo-light="{{ secure_asset('assets/images/header/logo-color.png') }}" class="w-[56.512vw] md:w-[14.063vw] 3xl:w-[13.359vw] h-auto transition-all duration-300 header-logo" alt="">
            </a>

            @php
                $menuItems = [
                    ['label' => 'Home', 'route' => 'index'],
                    ['label' => 'About', 'route' => 'index'],
                    ['label' => 'Residential Plots', 'route' => 'index'],
                    ['label' => 'Commercial Plots', 'route' => 'index'],
                    ['label' => 'Industrial Projects', 'route' => 'index'],
                    ['label' => 'Offplan Projects', 'route' => 'index'],
                    [
                        'label' => 'Services',
                        'dropdown' => [['label' => 'Consulting', 'route' => 'index'], ['label' => 'Construction', 'route' => 'index'], ['label' => 'Property Management', 'route' => 'index']],
                    ],
                    ['label' => 'Contact', 'route' => 'index'],
                ];
            @endphp

            <nav class="relative bg-[#E4E4E424] rounded-[1.860vw] md:rounded-[0.463vw] 3xl:rounded-[0.440vw] header-nav">
                <ul class="flex items-center font-satoshi text-white font-medium text18px-desktop header-links">
                    @foreach ($menuItems as $item)
                        <li class="nav-item relative py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] px-[5.581vw] md:px-[1.389vw] 3xl:px-[1.319vw] group">
                            @if (isset($item['dropdown']))
                                <a href="#" class="flex items-center gap-[1.860vw] md:gap-[0.463vw] 3xl:gap-[0.440vw] leading-[1.55]">
                                    <span>{{ $item['label'] }}</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" class="w-[2.791vw] md:w-[0.694vw] 3xl:w-[0.660vw] h-auto text-inherit" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.55087 11.3469L1.56399 11.1336L1.62959 10.1164L1.64133 9.92928L1.82846 9.92859L8.92508 9.92928L0.283045 1.28725L1.28777 0.282521L9.92911 8.92386L9.92842 1.82863L9.92911 1.64149L10.1162 1.62975L11.1334 1.56415L11.3468 1.55103V11.3469H1.55087Z" fill="currentColor" stroke="currentColor" stroke-width="0.4" />
                                    </svg>
                                </a>
                                {{-- Dropdown Menu --}}
                                <ul class="absolute left-0 top-full pt-2 hidden group-hover:block">
                                    <div class="bg-[#E4E4E4] text-black rounded-md shadow-lg">
                                        @foreach ($item['dropdown'] as $dropdownItem)
                                            <li>
                                                <a href="{{ route($dropdownItem['route']) }}" class="block px-4 py-2 hover:bg-gray-200">
                                                    {{ $dropdownItem['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </div>
                                </ul>
                            @else
                                <a href="{{ route($item['route']) }}" class="leading-[1.55]">{{ $item['label'] }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>


        </div>
    </div>


</header>
