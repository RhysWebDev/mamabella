{{--
  Title: Decorated Title
  Description: decorated title
  Category: formatting
  Icon: pencil
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

<div class="decorated-title-wrap relative">
    <div class="decorated-title__wrapper-main">
        @if (have_rows('decorated_title_layout'))
            @while (have_rows('decorated_title_layout'))
                @php(the_row())

                @if (get_row_layout() == 'title_with_simple_text_layout')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <h2
                            class="bg-secondary text-center text-white font-primary text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</h2>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem] pb-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>
                @endif

                @if (get_row_layout() == 'title_with_video_or_image_and_text')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <h2
                            class="bg-secondary text-center text-white font-primary text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</h2>
                    </div>

                    <div class="grid grid-cols-2 content-wrapper px-[2rem] pb-[2rem]">

                        @if (get_sub_field('show_video_or_image'))
                            <div class="video_source-wrapper">
                                <video width="100%" controls src=" {{ get_sub_field('video_source') }}">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                            <div class="image_source-wrapper">
                                <img src="{{ get_sub_field('image_source') }}">
                            </div>
                        @endif

                        <div class="decorated-title__content content-wrapper px-[2rem]">
                            {!! get_sub_field('content') !!}
                        </div>
                    </div>
                @endif

                @if (get_row_layout() == 'title_with_featured_image')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <h2
                            class="bg-secondary text-center text-white font-primary text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</h2>
                    </div>

                    <img class="w-full mx-auto px-[2rem] mb-[2rem]" src="{{ get_sub_field('featured_image') }}">

                    <div class="content-wrapper px-[2rem] pb-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>


                    @if (get_sub_field('show_product_box'))
                        <div
                            class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
                            <div class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                                <h3 class="font-secondary text-[20px] font-bold text-white uppercase py-[1rem]">
                                    {{ get_sub_field('box_title') }} </h3>
                            </div>
                            <div class="product-box__products py-[1rem]">
                                @if (have_rows('box_products'))
                                    @while (have_rows('box_products'))
                                        @php(the_row())

                                        <div class="products-item flex flex-row px-[2rem] justify-between py-[1rem]">
                                            <div class="products-item__wrap">
                                                <a href=" {{ get_sub_field('product_link') }} ">
                                                    <i
                                                        class="pr-[1rem] fas fa-shopping-cart"></i>{{ get_sub_field('product_title') }}
                                                </a>
                                            </div>
                                            <div class="products-item__wrap">
                                                <a href=" {{ get_sub_field('product_link') }} ">
                                                    {{ get_sub_field('product_price') }}
                                                </a>
                                            </div>
                                        </div>
                                    @endwhile
                                @endif
                            </div>
                        </div>
                    @endif
                @endif

                {{-- @if (get_row_layout() == 'title_with_products_listing')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <h2
                            class="bg-secondary text-center text-white font-primary text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}
                        </h2>
                    </div>

                    @if (have_rows('products'))
                        @while (have_rows('products'))
                            @php
                                the_row();
                                
                                $link1 = get_sub_field('product_link_1');
                                $link2 = get_sub_field('product_link_2');
                                
                                $price1 = get_sub_field('product_price_1');
                                $price2 = get_sub_field('product_price_2');
                            @endphp
                            <div class="products-item flex flex-row">
                                <div class="product_image_left">
                                    <img src="{{ get_sub_field('product_image') }}">
                                </div>
                                <div class="product_info_right flex flex-col">
                                    <h3 class="font-secondary text-primary text-[20px]">
                                        {{ get_sub_field('product_title') }}
                                    </h3>

                                    @if (is_array($link1))
                                        <div class="products-item flex flex-row px-[2rem] justify-between py-[1rem]">
                                            <div class="products-item__wrap">
                                                <a href="{{ $link1['url'] ?? '#' }}">
                                                    <i
                                                        class="pr-[1rem] fas fa-shopping-cart"></i>{{ $link1['title'] ?? 'Product' }}
                                                </a>
                                            </div>
                                            <div class="products-item__wrap">
                                                <a href="{{ $link1['url'] ?? '#' }}">
                                                    {{ $price1 }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                    @if (is_array($link2))
                                        <div class="products-item flex flex-row px-[2rem] justify-between py-[1rem]">
                                            <div class="products-item__wrap">
                                                <a href="{{ $link2['url'] ?? '#' }}">
                                                    <i
                                                        class="pr-[1rem] fas fa-shopping-cart"></i>{{ $link2['title'] ?? 'Product' }}
                                                </a>
                                            </div>
                                            <div class="products-item__wrap">
                                                <a href="{{ $link2['url'] ?? '#' }}">
                                                    {{ $price2 }}
                                                </a>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>
                        @endwhile
                    @endif
                @endif --}}


            @endwhile
        @endif
    </div>
</div>
