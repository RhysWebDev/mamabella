{{--
  Title: Jumpto
  Description: Quicklinks in a horizontal scrolling 
  Category: formatting
  Icon: links
  Keywords: advertisement Sidebar
  Mode: edit
  Align: none
  PostTypes: page post how-to deals review favourite
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}

<section class="w-full quicklinks mt-[1rem] mb-[2rem]">
    <div class="slider-container-quicklinks flex flex-row items-center ">
        <button
            class="slide-arrow slide-left bg-darkPink px-[1rem] py-[2rem] text-white text-center rounded-tl-[10px] rounded-bl-[10px]"><i
                class="fas fa-chevron-left"></i></button>
        @if (have_rows('quick_links'))
            <div
                class="slider max-w-[657px] justify-between flex md:w-full border-[#B33558] border-[1px] py-[2rem] px-[2rem] max-h-[88px]">
                <a href="#" class="slider-item justify-between pr-[1rem] font-bold min-w-[140px] uppercase">Jump
                    to:</a>
                <div class="slider-items flex-row flex overflow-x-scroll ">
                    <div class="slider-inner uppercase pl-[1rem] flex-row flex ">
                        @while (have_rows('quick_links'))
                            @php(the_row())
                            <a href="{{ get_sub_field('link_url') }}"
                                class="slider-item mr-[5rem] justify-between min-w-[fit-content]">{{ get_sub_field('link_text') }}</a>
                        @endwhile
                    </div>
                </div>
            </div>
        @endif
        <button
            class="slide-arrow slide-right bg-darkPink px-[1rem] py-[2rem] text-white text-center rounded-tr-[10px] rounded-br-[10px]"><i
                class="fas fa-chevron-right"></i></button>
    </div>
</section>