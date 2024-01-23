{{--
  Title: Facet Filter
  Description: Facet Filter
  Category: formatting
  Icon: product
  Keywords: Product filter
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}



<section data-{{ $block['id'] }}
    class="{{ $block['classes'] }} w-full facetwp-template max-w-[1520px] py-[4rem] mx-auto bg-[#EEF4F8]" id="post_grid">

    <div
        class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 mx-auto gap-y-[2rem] justify-items-center max-w-[1240px]">
        @php
            $facetResultsArgs = [
                // 'post_type' => ['deals', 'duplicate', 'how-to', 'product', 'review'],
                'post_type' => ['product'],
                'category_name' => 'best-match,best-budget,best-luxury',
                'posts_per_page' => 3,
                'facetwp' => true,
            ];

            $facetResults = new WP_Query($facetResultsArgs);
            $excludedPosts = [];

        @endphp


        @if ($facetResults->have_posts())
            @while ($facetResults->have_posts())
                @php
                    $facetResults->the_post();
                    $excludedPosts[] = get_the_ID();
                    $title = get_the_title();
                    $permalink = get_permalink();
                    $thumbnail = get_the_post_thumbnail(null, 'medium'); // 'medium' is the image size, you can change it
                    $categories = get_the_category();
                    $content = wp_trim_words(get_the_content(), 15, '...');
                    $category = $categories ? esc_html($categories[0]->name) : ''; // get the first category
                    // $price = get_field('price', $facetResults->the_post('ID'));
                @endphp
                <div class="max-w-[374px] post__wrap sm:mx-auto">
                    <div class="relative">
                        <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                            <a class="w-full post__image" href="{{ $permalink }}">
                                {!! $thumbnail !!}
                            </a>
                            <div class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                                {{ $category }}
                            </div>
                        </div>

                        <div class="post__content-wrap p-[2.4rem] pr-[2.8rem] bg-white flex flex-col">
                            <a href="{{ $permalink }}">
                                <h3 class="uppercase post__title text-xl font-semibold mb-3 min-h-fit">
                                    {{ $title }}

                                </h3>
                            </a>
                            {{-- @if ($price)
                                <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem] mb-[1rem]"
                                    href="{{ $permalink }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1rem]" width="20"
                                        height="20" viewBox="0 0 20 20">
                                        <g id="Group_2004" data-name="Group 2004"
                                            transform="translate(-502.738 -7457.566)">
                                            <circle id="Ellipse_99" data-name="Ellipse 99" cx="10" cy="10"
                                                r="10" transform="translate(502.738 7457.566)" fill="#b33558" />
                                            <path id="Icon_awesome-shopping-cart" data-name="Icon awesome-shopping-cart"
                                                d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                                transform="translate(506.9 7463.176)" fill="#fff" />
                                        </g>
                                    </svg>
                                    <span class="underline text-[#79839C] font-medium">Buy Now from
                                    </span></a>
                            @endif --}}
                            <div class="content">
                                {!! $content !!}
                            </div>
                            <a href="{{ $permalink }}" class="btn btn--primary post__button mt-2 inline-block">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            @endwhile
        @else
            <div class="message">
                <h4> Sorry no posts were found. Please try again </h4>
            </div>
        @endif

    </div>

</section>


<section class="max-w-[1520px] mx-auto ">

    <div class="py-[4rem] pb-[1rem] px-[4rem]">
        <h5 class="text-[30px] font-primary text-center mb-[2rem]">More options that meet your needs</h5>
    </div>

    <div class="facet-template-goes-here">
        <div
            class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 mx-auto gap-y-[2rem] justify-items-center max-w-[1240px]">
            @php
                $otherResultArgs = [
                    // 'post_type' => ['deals', 'duplicate', 'how-to', 'product', 'review'],
                    'post_type' => ['product'],
                    'posts_per_page' => 6,
                    'post__not_in' => $excludedPosts, // Exclude the top 3 posts
                    'facetwp' => true,
                ];
                $moreResults = new WP_Query($otherResultArgs);
            @endphp

            @if ($moreResults->have_posts())
                @while ($moreResults->have_posts())
                    @php
                        $moreResults->the_post();
                        $title = get_the_title();
                        $permalink = get_permalink();
                        $thumbnail = get_the_post_thumbnail(null, 'medium'); // 'medium' is the image size, you can change it
                        $categories = get_the_category();
                        $content = wp_trim_words(get_the_content(), 15, '...');
                        $category = $categories ? esc_html($categories[0]->name) : ''; // get the first category
                    @endphp

                    <div class="max-w-[374px] post__wrap sm:mx-auto">
                        <div class="relative">
                            <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                                <a class="w-full post__image" href="{{ $permalink }}">
                                    {!! $thumbnail !!}
                                </a>
                                <div class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                                    {{ $category }}
                                </div>
                            </div>

                            <div class="post__content-wrap p-[2.4rem] pr-[2.8rem] bg-white flex flex-col">
                                <a href="{{ $permalink }}">
                                    <h3 class="uppercase post__title text-xl font-semibold mb-3">
                                        {{ $title }}

                                    </h3>
                                </a>
                                <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem] mb-[1rem]"
                                    href="{{ $permalink }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1rem]" width="20"
                                        height="20" viewBox="0 0 20 20">
                                        <g id="Group_2004" data-name="Group 2004"
                                            transform="translate(-502.738 -7457.566)">
                                            <circle id="Ellipse_99" data-name="Ellipse 99" cx="10" cy="10"
                                                r="10" transform="translate(502.738 7457.566)" fill="#b33558" />
                                            <path id="Icon_awesome-shopping-cart" data-name="Icon awesome-shopping-cart"
                                                d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                                transform="translate(506.9 7463.176)" fill="#fff" />
                                        </g>
                                    </svg>
                                    <span class="underline text-[#79839C] font-medium">Buy Now from
                                        {{ get_field('price') }}</span></a>
                                <div class="content">
                                    {!! $content !!}
                                </div>
                                <a href="{{ $permalink }}"
                                    class="btn btn--primary post__button mt-2 inline-block">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endwhile
            @endif
        </div>
    </div>
</section>
