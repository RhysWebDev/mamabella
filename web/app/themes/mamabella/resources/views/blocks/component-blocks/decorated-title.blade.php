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
--}}

<div class="decorated-title-wrap relative">

    <div class="decorated-title__wrapper-main">

        @if (have_rows('decorated_title_layout'))
            @while (have_rows('decorated_title_layout'))
                @php(the_row())

                @if (get_row_layout() == 'title_with_simple_text_layout')
                    <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem] pb-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>
                @endif

                @if (get_row_layout() == 'title_with_video_or_image_and_text')
                    <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 content-wrapper px-[2rem] pb-[2rem]">

                        @if (get_sub_field('show_video_or_image'))
                            <div class="video_source-wrapper">
                                <video width="100%" controls src=" {{ get_sub_field('video_source') }}">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                            <div class="image_source-wrapper">
                                <img class="w-full" src="{{ get_sub_field('image_source') }}">
                            </div>
                        @endif

                        <div class="decorated-title__content content-wrapper px-[2rem]">
                            {!! get_sub_field('content') !!}
                        </div>
                    </div>
                @endif

                @if (get_row_layout() == 'title_with_featured_image')
                    @if (get_sub_field('title'))
                        <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                            <{{ get_field('heading') ?: 'h2' }}
                                class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                                {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                        </div>
                    @endif

                    <img class="w-full mx-auto px-[2rem] mb-[2rem]" src="{{ get_sub_field('featured_image') }}">

                    <div class="content-wrapper px-[2rem] pb-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>


                    @if (get_sub_field('show_product_box'))
                        <div
                            class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
                            <div class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                                <h3
                                    class="font-secondary text-[16px] md:text-[20px] font-bold text-white uppercase py-[1rem]">
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

                    @if (get_sub_field('enable_in_this_article'))
                        <div class="decorated-title__in-this-article px-[2rem]">
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.121" height="18.121"
                                    viewBox="0 0 18.121 18.121">
                                    <line id="Line_49" data-name="Line 49" y1="16" x2="16"
                                        transform="translate(1.061 1.061)" fill="none" stroke="#b33558"
                                        stroke-width="3" />
                                </svg>
                                <h4 class="pl-[1rem] mb-[1.5rem] text-[20px] text-primary font-secondary font-bold">In
                                    this article
                                </h4>
                            </div>
                            {!! get_sub_field('in_this_article') !!}
                        </div>
                    @endif
                @endif

                @if (get_row_layout() == 'title_with_products_listing')
                    <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__products pt-[1rem] px-[2rem]">
                        @if (have_rows('products'))
                            @while (have_rows('products'))
                                @php(the_row())
                                <div class="decorated-title__product-wrapper py-[2rem]">
                                    <div class="grid grid-cols-12 gap-x-[2rem]">
                                        <div class="col col-span-4 flex-col">
                                            <img src="{{ get_sub_field('product_image') }}">
                                        </div>
                                        <div class="col col-span-8 flex-col ">
                                            <h3
                                                class="text-[20px] font-secondary text-[primary] font-bold text-primary pb-[2rem] uppercase">
                                                {{ get_sub_field('product_title') }}
                                            </h3>
                                            @if (have_rows('product_info'))
                                                @while (have_rows('product_info'))
                                                    @php(the_row())
                                                    <div class="grid grid-cols-12">
                                                        <div class="col col-span-8 flex-col">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <a class="underline text-secondary font-secondary text-[17px]"
                                                                href="{{ get_sub_field('link_url') }}">
                                                                {{ get_sub_field('link_text') }}
                                                            </a>
                                                            <div>{{ get_sub_field('product_information') }} </div>
                                                        </div>
                                                        <div class="col col-span-4 flex flex-end justify-end">
                                                            <p class="font-secondary text-[20px] text-primary">
                                                                {!! get_sub_field('price') !!}</p>
                                                        </div>
                                                    </div>
                                                @endwhile
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endwhile
                        @endif
                    </div>
                @endif

                @if (get_row_layout() == 'title_text_with_article_footer')
                    <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem] pb-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>

                    @if (get_sub_field('show_author_box'))
                        <div
                            class="decorated-title__article-footer grid grid-cols-12 p-[1rem] items-center border-[8px] border-secondary">
                            <div class="col-2 col-span-2">
                                <img class="w-auto max-h-[147px]" src="{{ get_sub_field('author_image') }}">
                            </div>
                            <div class="col-9 col-span-9">
                                <h3 class="text-secondary font-secondary text-[20px] mb-[0.5rem]">
                                    {{ get_sub_field('author_name') }}
                                </h3>
                                <div class="text-[14px] font-secondary text-primary pr-[2rem]">{!! get_sub_field('author_text') !!}
                                </div>
                            </div>
                        </div>

                        <div class="decorated-title__notice font-bold pt-[3rem]">
                            This site contains affiliate links to recommended products. We may receive a commission for
                            purchases made through these links. We will not recommend anything we don't believe in and
                            we are not paid by brands to include specific products unless explicitly stated.
                        </div>
                    @endif
                @endif

                @if (get_row_layout() == 'title_with_review')
                    <div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_sub_field('link_id') }}">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>

                    <div class="decorated-title__review-box-wrap p-[2rem] relative">
                        <div
                            class="decorated-title__review-box p-[2rem] border-[2px] border-[#B33558] font-primary text-[30px] justify-center align-center">
                            {{ get_sub_field('review_text') }}
                        </div>
                    </div>
                @endif

                @if (get_row_layout() == 'title_with_dupe')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>

                    <div class="decorated-title__review-box-wrap p-[2rem] relative">
                        <div class="decorated-title__dupe w-full">
                            @php($dupePost = get_sub_field('dupe_product'))

                            @if ($dupePost)
                                <div class="grid grid-cols-1 dupe-banner__grid">
                                    <a href="{{ get_permalink($dupePost->ID) }}">
                                        <div class="dupe-banner__product flex flex-col">
                                            <div class="dupe-banner__image w-full">
                                                {!! get_the_post_thumbnail($dupePost->ID, 'full') !!}
                                            </div>
                                            <div
                                                class="decorated-title__content-dupe w-full bg-white py-[1rem] px-[2rem] text-primary">
                                                <div
                                                    class="dupe-banner__badge mb-[0.5rem] font-bold text-[14px] px-[2rem] font-secondary uppercase">
                                                    SAVE {{ get_field('savings', $dupePost->ID) }}
                                                </div>
                                                <h4
                                                    class="dupe-banner__product-title font-secondary font-semibold mt-[1rem] text-primary text-[14px] uppercase">
                                                    {{ esc_html($dupePost->post_title) }}
                                                    <div
                                                        class="dupe-banner__description text-[14px] text-primary font-light font-secondary normal-case">
                                                        {!! get_field('description', $dupePost->ID) !!}
                                                    </div>
                                                    <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem]"
                                                        href="{{ get_permalink($dupePost->ID) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1rem]"
                                                            width="20" height="20" viewBox="0 0 20 20">
                                                            <g id="Group_2004" data-name="Group 2004"
                                                                transform="translate(-502.738 -7457.566)">
                                                                <circle id="Ellipse_99" data-name="Ellipse 99"
                                                                    cx="10" cy="10" r="10"
                                                                    transform="translate(502.738 7457.566)"
                                                                    fill="#b33558" />
                                                                <path id="Icon_awesome-shopping-cart"
                                                                    data-name="Icon awesome-shopping-cart"
                                                                    d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                                                    transform="translate(506.9 7463.176)"
                                                                    fill="#fff" />
                                                            </g>
                                                        </svg>
                                                        <span class="underline text-[#79839C] font-medium">Buy Now from
                                                            {{ get_field('price', $dupePost->ID) }}</span></a>

                                                    <a class="btn btn--primary post__button mt-2 inline-block font-secondary text-primary font-secondary uppercase text-[14px] font-medium mt-[1rem]"
                                                        href="{{ get_permalink($dupePost->ID) }}">Learn More</a>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if (get_row_layout() === 'title_with_competition')
                    <div class="decorated-title title-wrapper w-full mx-auto">
                        <{{ get_field('heading') ?: 'h2' }}
                            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                            {!! get_sub_field('title') !!}</{{ get_field('heading') }}>
                    </div>

                    <div class="decorated-title__content content-wrapper px-[2rem]">
                        {!! get_sub_field('content') !!}
                    </div>

                    <div class=" decorated-title__title-with-box max-w-[690px] mx-auto">
                        <div class="verdict-box__product mt-[3rem]">
                            <div
                                class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
                                <div
                                    class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                                    <h3
                                        class="font-secondary text-[16px] md:text-[20px] text-center font-bold text-white uppercase py-[1rem]">
                                        {{ get_sub_field('competition_title') }}</h3>
                                </div>

                                <div class="bold-font mb-[2rem] text-[20px] font-bold p-[2rem] pb-[0px] mb-[0px]">
                                    {!! get_sub_field('competition_content') !!}
                                </div>

                                <div class="decorated-title__competition-form p-[2rem] pt-[0px]">
                                    {!! get_sub_field('comeptition_form') !!}
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

                @if (get_row_layout() === 'title_with_box')
                    <div class="decorated-title__competition max-w-[690px] mx-auto">
                        <div class="verdict-box__product mt-[3rem]">
                            <div
                                class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
                                <div
                                    class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                                    <{{ get_field('heading') ?: 'h2' }}
                                        class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">
                                        {!! get_sub_field('box_title') !!}</{{ get_field('heading') }}>
                                </div>

                                <div class="mb-[2rem] text-[20px] font-bold p-[2rem] pb-[0px] mb-[0px]">
                                    {!! get_sub_field('box_content') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (get_row_layout() == 'seperator')
                    <hr class="pt-[1rem] wp-block-separator has-alpha-channel-opacity">
                @endif

            @endwhile
        @endif

    </div>
</div>
