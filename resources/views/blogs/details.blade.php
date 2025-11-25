<x-layout>

    <section class="relative">
        <div class="px-[4.651vw] md:px-[5.208vw] 3xl:px-[4.948vw] py-[25.860vw] md:py-[10.417vw] 3xl:py-[9.896vw]">
            <div class="w-full md:w-[58.479vw] 3xl:w-[55.555vw] mx-auto">
                <a href="{{ route('blogs.index') }}" class="text-[#737373] hover:text-black transition-colors text18px-desktop leading-[1.6] font-satoshi font-medium">
                    &lt; Go Back To Blogs Listing </a>

                <h1 class="mt-[9.302vw] md:mt-[2.315vw] 3xl:mt-[2.199vw] text-[#2C2C2C] font-uncut text40px-mobile text80px-desktop leading-[1.2] font-medium -tracking-[0.558vw] md:-tracking-[0.139vw] 3xl:-tracking-[0.132vw]">
                    {{ $blog->title }}
                </h1>

                <div class="border-t-3 border-[#E7E7E7] my-[6.163vw] md:my-[2.778vw] 3xl:my-[2.639vw]"></div>

                <div class="relative">
                    <div class="flex items-center justify-between">
                        <p class="text-[#000000] font-satoshi text26px-desktop font-bold">Written by <span>{{ $blog->author->name }}</span></p>
                        <button class="flex items-center border-2 border-[#DBDBDB] rounded-full gap-[3.256vw] md:gap-[0.810vw] 3xl:gap-[0.770vw] py-[2.791vw] md:py-[0.694vw] 3xl:py-[0.660vw] px-[3.721vw] md:px-[0.926vw] 3xl:px-[0.880vw] cursor-pointer hover:bg-[#DBDBDB] transition-all">
                            <p class="font-satoshi text16px-mobile text18px-desktop leading-[1.44] font-bold">Share</p>
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" class="w-[6.741vw] md:w-[1.678vw] 3xl:w-[1.594vw] h-auto" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.4941 0C22.4989 6.33944e-05 28.9883 6.48935 28.9883 14.4941C28.9882 22.4989 22.4989 28.9882 14.4941 28.9883C6.48935 28.9883 6.33985e-05 22.4989 0 14.4941C0 6.48931 6.48931 0 14.4941 0ZM13.6475 7.33496C13.6196 7.34763 13.5957 7.3688 13.5791 7.39453C13.5626 7.42021 13.5538 7.44994 13.5537 7.48047V9.10352C13.5537 9.1957 13.5939 9.28455 13.6641 9.34668L18.7197 13.7334H7.43457C7.34661 13.7337 7.27441 13.8055 7.27441 13.8936V15.0957C7.27441 15.1837 7.34661 15.2556 7.43457 15.2559H18.7197L13.6641 19.6436C13.5939 19.7037 13.5537 19.7915 13.5537 19.8857V21.5088C13.5537 21.6451 13.7141 21.7191 13.8184 21.6289L21.4834 14.9775C21.5527 14.9174 21.6084 14.8432 21.6465 14.7598C21.6846 14.6764 21.705 14.5858 21.7051 14.4941C21.7051 14.4023 21.6846 14.311 21.6465 14.2275C21.6084 14.1441 21.5527 14.0698 21.4834 14.0098L13.8184 7.36035C13.7953 7.34027 13.7666 7.32668 13.7363 7.32227C13.7062 7.31788 13.6752 7.32243 13.6475 7.33496Z" fill="#00A7E1" />
                            </svg>
                        </button>
                    </div>

                    <div class="mt-[8.953vw] md:mt-[3.472vw] 3xl:mt-[3.299vw]">
                        <img src="{{ $blog->getFirstMediaUrl('featured_image') }}" class="aspect-[2.16/1.3] md:aspect-[2.16/1] w-full h-full object-cover" alt="">
                    </div>

                    <div class="mt-[10.442vw] md:mt-[4.340vw] 3xl:mt-[4.123vw]">
                        <p class="text-[#2C2C2C] font-uncut font-medium text20px-mobile text42px-desktop leading-tight">{{ $blog->excerpt }}</p>

                        <div class="mt-[6.698vw] md:mt-[2.662vw] 3xl:mt-[2.529vw]">
                            <div
                                class="relative prose max-w-full
                            prose-p:md:text-[1.505vw] prose-p:3xl:text-[1.429vw] prose-p:leading-[1.34] prose-p:text-[#3E3E3E] prose-p:-tracking-[0.060vw] prose-p:md:-tracking-[0.015vw] prose-p:3xl:-tracking-[0.014vw]
                            prose-headings:font-uncut prose-headings:text-[#2C2C2C] prose-headings:font-medium md:prose-headings:text-[2.315vw] 3xl:prose-headings:text-[2.199vw] prose-headings:leading-tight prose-headings:-tracking-[0.186vw] prose-headings:md:-tracking-[0.046vw] prose-headings:3xl:-tracking-[0.044vw]
                            prose-ul:list-disc prose-ul:pl-[4.186vw] prose-ul:md:pl-[1.042vw] prose-ul:3xl:pl-[0.990vw]
                            prose-li:mb-[1.395vw] prose-li:md:mb-[0.347vw] prose-li:3xl:mb-[0.330vw] prose-li:text-[#3E3E3E] prose-li:md:text-[1.505vw] prose-li:3xl:text-[1.429vw] prose-li:font-satoshi prose-li:leading-normal prose-li:-tracking-[0.060vw] prose-li:md:-tracking-[0.015vw] prose-li:3xl:-tracking-[0.014vw]
                            prose-a:text-[#00A7E1] prose-a:underline hover:prose-a:no-underline hover:prose-a:text-[#007EA9] transition-colors prose-img:mx-auto">
                                {!! $blog->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
