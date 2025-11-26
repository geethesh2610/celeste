<form wire:submit.prevent="submit">
    <div class="space-y-[11.163vw] md:space-y-[2.778vw] 3xl:space-y-[2.639vw]">
        <x-honeypot livewire-model="extraFields"/>
        <!-- Name Input -->
        <div class="relative">
            <input type="text" placeholder="Name" wire:model="name"
                   class="w-full text20px-desktop text-[#3E3E3E] border-b-2 border-dashed border-[#737373] bg-transparent pb-[2.791vw] md:pb-[0.694vw] 3xl:pb-[0.660vw] outline-none focus:border-[#000000] focus:border-solid placeholder:text-[#3E3E3E] transition-colors">
        </div>

        <!-- Phone Number Input -->
        <div class="relative">
            <div
                class="flex items-center gap-3 border-b-2 border-dashed border-[#737373] pb-[2.791vw] md:pb-[0.694vw] 3xl:pb-[0.660vw] focus-within:border-[#000000] focus-within:border-solid transition-colors">
                <svg width="36" height="18" viewBox="0 0 36 18" fill="none"
                     class="w-[8.372vw] md:w-[2.083vw] 3xl:w-[1.979vw] h-auto" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="36" height="18" fill="url(#pattern0_733_2801)"/>
                    <defs>
                        <pattern id="pattern0_733_2801" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_733_2801" transform="scale(0.0030303 0.00606061)"/>
                        </pattern>
                        <image id="image0_733_2801" width="330" height="165" preserveAspectRatio="none"
                               xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUoAAAClCAIAAAC1LiOxAAAAAXNSR0IArs4c6QAAAERlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAA6ABAAMAAAABAAEAAKACAAQAAAABAAABSqADAAQAAAABAAAApQAAAAB7G2OnAAAEgklEQVR4Ae3VsU0DARQEUYyQIHQlLsASxRDSARmF4ILcijsgBCTkInbeycE5nNk/usP1eHroPZfz8+X80uNG3DLw2MJFy0DJgLxLa2ONGZB3bHC4JQPyLq2NNWZA3rHB4ZYMyLu0NtaYAXnHBodbMiDv0tpYYwbkHRscbsmAvEtrY40ZkHdscLglA/IurY01ZkDescHhlgzIu7Q21pgBeccGh1syIO/S2lhjBuQdGxxuyYC8S2tjjRmQd2xwuCUD8i6tjTVmQN6xweGWDMi7tDbWmAF5xwaHWzIg79LaWGMG5B0bHG7JgLxLa2ONGZB3bHC4JQPyLq2NNWZA3rHB4ZYMyLu0NtaYAXnHBodbMiDv0tpYYwbkHRscbsmAvEtrY40ZkHdscLglA/IurY01ZkDescHhlgzIu7Q21pgBeccGh1syIO/S2lhjBuQdGxxuyYC8S2tjjRmQd2xwuCUD8i6tjTVmQN6xweGWDMi7tDbWmAF5xwaHWzIg79LaWGMG5B0bHG7JgLxLa2ONGZB3bHC4JQPyLq2NNWZA3rHB4ZYMyLu0NtaYgacY7z/u5+vb18d7kx11x4Cvd2drpDkD8s5NDrhjQN6drZHmDMg7NzngjgF5d7ZGmjMg79zkgDsG5N3ZGmnOgLxzkwPuGJB3Z2ukOQPyzk0OuGNA3p2tkeYMyDs3OeCOAXl3tkaaMyDv3OSAOwbk3dkaac6AvHOTA+4YkHdna6Q5A/LOTQ64Y0Dena2R5gzIOzc54I4BeXe2RpozIO/c5IA7BuTd2RppzoC8c5MD7hiQd2drpDkD8s5NDrhjQN6drZHmDMg7NzngjgF5d7ZGmjMg79zkgDsG5N3ZGmnOgLxzkwPuGJB3Z2ukOQPyzk0OuGNA3p2tkeYMyDs3OeCOAXl3tkaaMyDv3OSAOwbk3dkaac6AvHOTA+4YkHdna6Q5A/LOTQ64Y0Dena2R5gzIOzc54I4BeXe2RpozIO/c5IA7BuTd2RppzoC8c5MD7hiQd2drpDkD8s5NDrhjQN6drZHmDMg7NzngjgF5d7ZGmjMg79zkgDsGDtfjqUN7J718335/979eGJg04Os9OSsoBv4MyNsdMDBrQN6z0wJjQN5ugIFZA/KenRYYA/J2AwzMGpD37LTAGJC3G2Bg1oC8Z6cFxoC83QADswbkPTstMAbk7QYYmDUg79lpgTEgbzfAwKwBec9OC4wBebsBBmYNyHt2WmAMyNsNMDBrQN6z0wJjQN5ugIFZA/KenRYYA/J2AwzMGpD37LTAGJC3G2Bg1oC8Z6cFxoC83QADswbkPTstMAbk7QYYmDUg79lpgTEgbzfAwKwBec9OC4wBebsBBmYNyHt2WmAMyNsNMDBrQN6z0wJjQN5ugIFZA/KenRYYA/J2AwzMGpD37LTAGJC3G2Bg1oC8Z6cFxoC83QADswbkPTstMAbk7QYYmDUg79lpgTEgbzfAwKwBec9OC4wBebsBBmYNyHt2WmAMyNsNMDBrQN6z0wJjQN5ugIFZA/KenRYYA/J2AwzMGvgBPAkMpQk34yoAAAAASUVORK5CYII="/>
                    </defs>
                </svg>

                <input type="tel" wire:model="phone"
                       class="flex-1 text20px-desktop text-[#3E3E3E] bg-transparent outline-none placeholder:text-[#3E3E3E]"
                       placeholder="Phone number">
            </div>
        </div>

        <!-- Email Input -->
        <div class="relative">
            <input type="email" wire:model="email" placeholder="Email address"
                   class="w-full text20px-desktop text-[#3E3E3E] border-b-2 border-dashed border-[#737373] bg-transparent pb-[2.791vw] md:pb-[0.694vw] 3xl:pb-[0.660vw] outline-none focus:border-[#000000] focus:border-solid placeholder:text-[#3E3E3E] transition-colors">
        </div>

        <!-- Message Input -->
        <div class="relative">
            <input type="text" wire:model="message" placeholder="Your message"
                   class="w-full text20px-desktop text-[#3E3E3E] border-b-2 border-dashed border-[#737373] bg-transparent pb-[2.791vw] md:pb-[0.694vw] 3xl:pb-[0.660vw] outline-none focus:border-[#000000] focus:border-solid placeholder:text-[#3E3E3E] transition-colors">
        </div>

        <div>
            @if (session()->has('message'))
                <div class="text-green-600">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="mt-[12.791vw] md:mt-[5.671vw] 3xl:mt-[5.388vw]">
            <button type="submit"
                    class="w-max bg-[#1D1D1D] border border-[#1D1D1D] rounded-[1.395vw] md:rounded-[0.347vw] 3xl:rounded-[0.330vw] flex items-center gap-[2.791vw] md:gap-[0.694vw] 3xl:gap-[0.660vw] px-[6.977vw] md:px-[1.736vw] 3xl:px-[1.649vw] py-[4.884vw] md:py-[1.215vw] 3xl:py-[1.155vw] group duration-300 transition-colors hover:bg-[#F2EEE8]">
                <p class="font-satoshi font-medium text20px-desktop text-white duration-300 transition-colors group-hover:text-[#1D1D1D]">
                    Submit Message</p>
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                     class="text-[#00A7E1] h-auto w-[3.766vw] md:w-[0.937vw] 3xl:w-[0.890vw] duration-300 group-hover:rotate-45"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6787 12.0643L13.466 12.0505L12.2238 11.9711L12.0366 11.9593V3.00585L1.44659 13.5959L0.283039 12.4323L10.8738 1.84161H2.10674L1.9196 1.8423L1.90717 1.65448L1.82845 0.412898L1.81464 0.200213L2.02802 0.199523H13.6787V12.0643Z"
                        fill="currentColor" stroke="currentColor" stroke-width="0.4"/>
                </svg>
            </button>
        </div>
    </div>
</form>
