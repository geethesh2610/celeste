<footer class="relative">
    <div class="bg-linear-to-b from-[#FFFFFF] to-[#D2E5F5] absolute w-full bottom-0 h-[85%]"></div>
    <div class="relative pt-[9.302vw] md:pt-[2.315vw] 3xl:pt-[2.199vw] z-1">
        <div class="flex flex-col md:flex-row md:justify-between px-[4.651vw] md:px-[1.736vw] 3xl:px-[1.649vw]">
            <a href="{{ route('index') }}">
                <img src="{{ secure_asset('assets/images/header/logo-color.png') }}" class="w-[44.651vw] md:w-[11.111vw] 3xl:w-[10.556vw] h-auto" alt="">
            </a>

            <div class="grid grid-cols-2 md:flex gap-[11.628vw] md:gap-[4.167vw] 3xl:gap-[3.958vw] mt-[14.884vw] md:mt-0">
                <div class="flex flex-col">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text20px-desktop text20px-mobile">Links</p>

                    <ul class="mt-[5.581vw] md:mt-[1.389vw] 3xl:mt-[1.319vw] space-y-[2.326vw] md:space-y-[0.579vw] 3xl:space-y-[0.550vw]">
                        <li><a href="{{ route('about') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">About us</a></li>
                        <li><a href="{{ route('blogs.index') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Blogs</a></li>
                        <li><a href="{{ route('contact') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Contact</a></li>
                        <li><a href="{{ route('services.index') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Services</a></li>
                        <li><a href="#" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Privacy policy</a></li>
                        <li><a href="#" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Terms and Conditions</a></li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text20px-desktop text20px-mobile">Plots</p>

                    <ul class="mt-[5.581vw] md:mt-[1.389vw] 3xl:mt-[1.319vw] space-y-[2.326vw] md:space-y-[0.579vw] 3xl:space-y-[0.550vw]">
                        <li>
                            <a href="{{ route('plots.index', 'residential') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                                <div class="flex items-center justify-center bg-[#263957] size-[8.372vw] md:size-[2.083vw] 3xl:size-[1.979vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw]">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" class="w-[4.773vw] md:w-[1.188vw] 3xl:w-[1.128vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.53674e-06 3.82031H9.14396L11.3833 7.47923H2.23935L9.53674e-06 3.82031Z" fill="white" />
                                        <path d="M20.5244 0H11.3804L9.14111 3.65891H18.2851L20.5244 0Z" fill="white" />
                                        <path d="M9.53674e-06 10.9766H9.14396L11.3833 14.6355H2.23935L9.53674e-06 10.9766Z" fill="white" />
                                        <path d="M20.5244 7.15625H11.3804L9.14111 10.8152H18.2851L20.5244 7.15625Z" fill="white" />
                                    </svg>

                                </div>
                                Residential
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('plots.index', 'commercial') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                                <div class="flex items-center justify-center bg-[#5F87B6] size-[8.372vw] md:size-[2.083vw] 3xl:size-[1.979vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw]">
                                    <svg width="12" height="22" viewBox="0 0 12 22" fill="none" class="w-[2.746vw] md:w-[0.683vw] 3xl:w-[0.649vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.94209 3.03897L8.94209 -0.000154714L11.8059 1.51928L11.8059 4.79361L5.90296 8.20166L4.715e-05 4.79361L3.03268 3.13645L5.90296 4.79361L8.94209 3.03897Z" fill="white" />
                                        <path d="M8.94209 9.62491L8.94209 6.58578L11.8059 8.10521L11.8059 11.3795L5.90296 14.7876L4.715e-05 11.3795L3.03268 9.72239L5.90296 11.3795L8.94209 9.62491Z" fill="white" />
                                        <path d="M8.94209 16.039L8.94209 12.9998L11.8059 14.5193L11.8059 17.7936L5.90296 21.2017L4.715e-05 17.7936L3.03268 16.1365L5.90296 17.7936L8.94209 16.039Z" fill="white" />
                                    </svg>
                                </div>
                                Commercial
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('plots.index', 'industrial-projects') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                                <div class="flex items-center justify-center bg-[#C3A484] size-[8.372vw] md:size-[2.083vw] 3xl:size-[1.979vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw]">
                                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" class="w-[3.610vw] md:w-[0.898vw] 3xl:w-[0.853vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 4.54688V13.476L3.73399 11.2031V6.81975L7.63034 4.54688L3.73399 2.11166L0 4.54688Z" fill="white" />
                                        <path d="M15.2826 4.46456L7.54971 0L7.65107 4.37017L11.4472 6.56186L11.4674 11.0726L15.5245 8.9159L15.2826 4.46456Z" fill="white" />
                                        <path d="M7.51247 17.8264L15.2453 13.3618L11.41 11.2645L7.61383 13.4562L3.6973 11.2183L3.53651 15.8103L7.51247 17.8264Z" fill="white" />
                                    </svg>
                                </div>
                                Industrial
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('plots.index', 'offplan-projects') }}" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw]">
                                <div class="flex items-center justify-center bg-[#263957] size-[8.372vw] md:size-[2.083vw] 3xl:size-[1.979vw] rounded-[0.930vw] md:rounded-[0.231vw] 3xl:rounded-[0.220vw]">
                                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none" class="w-[4.773vw] md:w-[1.188vw] 3xl:w-[1.128vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.53674e-06 3.82031H9.14396L11.3833 7.47923H2.23935L9.53674e-06 3.82031Z" fill="white" />
                                        <path d="M20.5244 0H11.3804L9.14111 3.65891H18.2851L20.5244 0Z" fill="white" />
                                        <path d="M9.53674e-06 10.9766H9.14396L11.3833 14.6355H2.23935L9.53674e-06 10.9766Z" fill="white" />
                                        <path d="M20.5244 7.15625H11.3804L9.14111 10.8152H18.2851L20.5244 7.15625Z" fill="white" />
                                    </svg>

                                </div>
                                Offplan projects
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col col-span-2 md:col-span-1">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text20px-desktop text20px-mobile">Contact</p>

                    <ul class="mt-[5.581vw] md:mt-[1.389vw] 3xl:mt-[1.319vw] space-y-[2.326vw] md:space-y-[0.579vw] 3xl:space-y-[0.550vw]">
                        <li>
                            <a href="https://maps.app.goo.gl/1ys38eMiZhUxRVo47" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33]">Celeste International Properties LLC<br>
                                Office No:53
                                Oasis Mall, Sheikh Zayed Road, Al Quoz 1, Dubai.UAE
                            </a>
                        </li>

                        <li class="mt-[3.023vw] md:mt-[0.752vw] 3xl:mt-[0.715vw]">
                            <a href="tel:++971 569988333" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[3.256vw] md:gap-[0.810vw] 3xl:gap-[0.770vw]">
                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" class="w-[4.419vw] md:w-[1.100vw] 3xl:w-[1.045vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.1384 12.9567L14.4519 12.65C14.136 12.6129 13.8158 12.6478 13.5153 12.7523C13.2149 12.8567 12.942 13.0278 12.7173 13.2529L10.7711 15.199C7.76876 13.6716 5.32833 11.2312 3.80097 8.22883L5.75769 6.2721C6.21249 5.8173 6.43461 5.18268 6.36057 4.53749L6.05384 1.87211C5.9941 1.35606 5.74655 0.880025 5.35837 0.534764C4.9702 0.189502 4.46855 -0.000846227 3.94905 2.82822e-06H2.11925C0.924071 2.82822e-06 -0.0701525 0.994231 0.00388538 2.18942C0.564458 11.2221 7.78844 18.4355 16.8105 18.9961C18.0057 19.0702 18.9999 18.0759 18.9999 16.8807V15.0509C19.0105 13.9827 18.2066 13.0836 17.1384 12.9567Z" fill="black" />
                                </svg>
                                <p>+971 569988333</p>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:mail@celesterealties.com" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop leading-[1.33] flex items-center gap-[2.558vw] md:gap-[0.637vw] 3xl:gap-[0.605vw]">
                                <svg width="22" height="17" viewBox="0 0 22 17" fill="none" class="w-[5.116vw] md:w-[1.273vw] 3xl:w-[1.209vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.97511 17C1.41207 17 0.942333 16.813 0.565889 16.439C0.189445 16.065 0.000814815 15.5979 0 15.0377V1.96229C0 1.4029 0.18863 0.936214 0.565889 0.562214C0.943148 0.188214 1.41248 0.000809524 1.97389 0H20.0261C20.5883 0 21.0577 0.187404 21.4341 0.562214C21.8106 0.937023 21.9992 1.40371 22 1.96229V15.0389C22 15.5975 21.8114 16.0642 21.4341 16.439C21.0569 16.8138 20.5875 17.0008 20.0261 17H1.97511ZM11 8.64086L20.7778 2.28893L20.4013 1.21429L11 7.28571L1.59867 1.21429L1.22222 2.28893L11 8.64086Z" fill="black" />
                                </svg>
                                <p>mail@celesterealties.com</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center md:items-start flex-row md:flex-col col-span-2 md:col-span-1 gap-[4.884vw] md:gap-0">
                    <p class="font-satoshi font-medium text-[#3E3E3E] text20px-mobile text20px-desktop">Follow</p>

                    <ul class="mt-0 md:mt-[1.389vw] 3xl:mt-[1.319vw] flex items-center space-x-[3.023vw] md:space-x-[0.752vw] 3xl:space-x-[0.715vw]">
                        {{-- Instagram --}}
                        <li>
                            <a href="#" class="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" class="w-[6.266vw] md:w-[1.559vw] 3xl:w-[1.481vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.77392 0C4.24296 -1.12889e-07 2.77468 0.608017 1.69193 1.69036C0.609169 2.7727 0.000587924 4.24075 0 5.7717V21.1688C0 22.7002 0.608322 24.1688 1.69114 25.2516C2.77396 26.3344 4.24258 26.9427 5.77392 26.9427H21.171C22.702 26.9421 24.17 26.3336 25.2524 25.2508C26.3347 24.1681 26.9427 22.6998 26.9427 21.1688V5.7717C26.9421 4.24113 26.3339 2.77342 25.2516 1.69114C24.1693 0.608864 22.7016 0.000587664 21.171 0H5.77392ZM22.8318 5.78057C22.8318 6.22162 22.6566 6.64461 22.3447 6.95649C22.0329 7.26836 21.6099 7.44357 21.1688 7.44357C20.7278 7.44357 20.3048 7.26836 19.9929 6.95649C19.681 6.64461 19.5058 6.22162 19.5058 5.78057C19.5058 5.33952 19.681 4.91653 19.9929 4.60466C20.3048 4.29278 20.7278 4.11758 21.1688 4.11758C21.6099 4.11758 22.0329 4.29278 22.3447 4.60466C22.6566 4.91653 22.8318 5.33952 22.8318 5.78057ZM13.4747 8.85822C12.2515 8.85822 11.0784 9.34413 10.2135 10.2091C9.34857 11.074 8.86265 12.2471 8.86265 13.4703C8.86265 14.6934 9.34857 15.8665 10.2135 16.7315C11.0784 17.5964 12.2515 18.0823 13.4747 18.0823C14.6979 18.0823 15.871 17.5964 16.7359 16.7315C17.6008 15.8665 18.0867 14.6934 18.0867 13.4703C18.0867 12.2471 17.6008 11.074 16.7359 10.2091C15.871 9.34413 14.6979 8.85822 13.4747 8.85822ZM6.64311 13.4703C6.64311 11.659 7.36263 9.92192 8.64339 8.64117C9.92414 7.36041 11.6612 6.64089 13.4725 6.64089C15.2837 6.64089 17.0208 7.36041 18.3016 8.64117C19.5823 9.92192 20.3018 11.659 20.3018 13.4703C20.3018 15.2815 19.5823 17.0186 18.3016 18.2994C17.0208 19.5801 15.2837 20.2996 13.4725 20.2996C11.6612 20.2996 9.92414 19.5801 8.64339 18.2994C7.36263 17.0186 6.64311 15.2815 6.64311 13.4703Z"
                                        fill="#00A7E1" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" class="w-[6.266vw] md:w-[1.559vw] 3xl:w-[1.481vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.9491 0C24.7431 0 25.5045 0.3154 26.0659 0.876816C26.6273 1.43823 26.9427 2.19968 26.9427 2.99364V23.9491C26.9427 24.7431 26.6273 25.5045 26.0659 26.0659C25.5045 26.6273 24.7431 26.9427 23.9491 26.9427H2.99364C2.19968 26.9427 1.43823 26.6273 0.876816 26.0659C0.3154 25.5045 0 24.7431 0 23.9491V2.99364C0 2.19968 0.3154 1.43823 0.876816 0.876816C1.43823 0.3154 2.19968 0 2.99364 0H23.9491ZM23.2007 23.2007V15.2676C23.2007 13.9734 22.6866 12.7322 21.7715 11.8171C20.8564 10.902 19.6152 10.3879 18.3211 10.3879C17.0488 10.3879 15.5669 11.1663 14.8484 12.3338V10.6723H10.6723V23.2007H14.8484V15.8214C14.8484 14.6688 15.7765 13.7258 16.929 13.7258C17.4848 13.7258 18.0178 13.9466 18.4108 14.3396C18.8038 14.7326 19.0246 15.2656 19.0246 15.8214V23.2007H23.2007ZM5.80766 8.32231C6.47458 8.32231 7.1142 8.05738 7.58579 7.58579C8.05738 7.1142 8.32231 6.47458 8.32231 5.80766C8.32231 4.41562 7.1997 3.27803 5.80766 3.27803C5.13676 3.27803 4.49334 3.54455 4.01894 4.01894C3.54455 4.49334 3.27803 5.13676 3.27803 5.80766C3.27803 7.1997 4.41562 8.32231 5.80766 8.32231ZM7.88824 23.2007V10.6723H3.74205V23.2007H7.88824Z" fill="#00A7E1" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" class="w-[6.266vw] md:w-[1.559vw] 3xl:w-[1.481vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M25.4609 0H1.48185C1.08884 0 0.711925 0.156123 0.434024 0.434024C0.156123 0.711925 0 1.08884 0 1.48185V25.4609C0 25.8539 0.156123 26.2308 0.434024 26.5087C0.711925 26.7866 1.08884 26.9427 1.48185 26.9427H14.3874V16.5024H10.8849V12.461H14.3874V9.42996C14.3149 8.71834 14.3989 7.99947 14.6336 7.32376C14.8682 6.64805 15.2479 6.03187 15.746 5.51843C16.244 5.00499 16.8483 4.60672 17.5166 4.35157C18.1848 4.09642 18.9008 3.99056 19.6143 4.04141C20.6628 4.03417 21.7109 4.08815 22.7531 4.20307V7.84034H20.6112C18.9138 7.84034 18.5905 8.64862 18.5905 9.82063V12.4206H22.6319L22.1065 16.462H18.5905V26.9427H25.4609C25.6555 26.9427 25.8482 26.9044 26.028 26.8299C26.2078 26.7555 26.3711 26.6463 26.5087 26.5087C26.6463 26.3711 26.7555 26.2078 26.8299 26.028C26.9044 25.8482 26.9427 25.6555 26.9427 25.4609V1.48185C26.9427 1.28725 26.9044 1.09456 26.8299 0.914771C26.7555 0.734985 26.6463 0.571627 26.5087 0.434024C26.3711 0.296422 26.2078 0.187269 26.028 0.112799C25.8482 0.0383293 25.6555 0 25.4609 0Z" fill="#00A7E1" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none" class="w-[6.266vw] md:w-[1.559vw] 3xl:w-[1.481vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.89868 0C3.59947 0 2.35347 0.516109 1.43479 1.43479C0.516109 2.35347 0 3.59947 0 4.89868V22.0441C0 23.3433 0.516109 24.5893 1.43479 25.5079C2.35347 26.4266 3.59947 26.9427 4.89868 26.9427H22.0441C23.3433 26.9427 24.5893 26.4266 25.5079 25.5079C26.4266 24.5893 26.9427 23.3433 26.9427 22.0441V4.89868C26.9427 3.59947 26.4266 2.35347 25.5079 1.43479C24.5893 0.516109 23.3433 0 22.0441 0H4.89868ZM4.48964 4.28634C4.35558 4.33617 4.235 4.41661 4.13752 4.52126C4.04003 4.62591 3.96833 4.75188 3.92813 4.88914C3.88793 5.02639 3.88034 5.17114 3.90596 5.31185C3.93158 5.45256 3.9897 5.58534 4.0757 5.69961L10.951 14.8234L3.70708 22.5939L3.65319 22.6564H6.16009L12.0752 16.3138L16.6212 22.349C16.7267 22.4887 16.8699 22.5953 17.0339 22.6564H22.4494C22.5833 22.6063 22.7036 22.5257 22.8008 22.4209C22.898 22.3161 22.9695 22.1901 23.0094 22.0529C23.0494 21.9157 23.0568 21.771 23.031 21.6304C23.0052 21.4899 22.947 21.3572 22.8609 21.2431L15.9856 12.1193L23.2895 4.28634H20.779L14.8638 10.6301L10.3154 4.59496C10.2101 4.45481 10.0669 4.34772 9.90268 4.28634H4.48964ZM17.814 20.8782L6.65118 6.06457H9.12379L20.2854 20.8769L17.814 20.8782Z" fill="#00A7E1" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="flex flex-col-reverse md:flex-row md:items-end md:justify-between md:pr-[1.736vw] 3xl:pr-[1.649vw] md:-mt-[1.447vw] 3xl:-mt-[1.374vw]">
            <img src="{{ secure_asset('assets/images/footer/footer-buildings.png') }}" class="w-[100%] md:w-[44.271vw] 3xl:w-[42.057vw] h-auto" alt="">
            <div class="flex items-center gap-[18.140vw] md:gap-[4.514vw] 3xl:gap-[4.288vw] py-[3.721vw] md:py-[0.926vw] 3xl:py-[0.880vw] px-[4.651vw] md:px-0 3xl:px-0">
                {{-- <a href="#" class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop hidden md:block">Privacy policy</a> --}}
                <p class="text-[#737373] font-satoshi font-medium text15px-mobile text18px-desktop">© {{ now()->year }} Celeste Properties. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
