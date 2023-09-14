{{--
  Title: Product Grid with Filter
  Description: Product Grid with Filter
  Category: formatting
  Icon: edit
  Keywords: Product Grid with Filter
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}


<section data-{{ $block['id'] }} class="{{ $block['classes'] }}">

    <div class="w-full">
        <div class="max-w-[1520px] mx-auto bg-white">

            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1520px] mx-auto gap-y-[2rem] py-[3rem] justify-items-center bg-[#EEF3F7] px-[4rem]">
                @php
                    $products = get_posts([
                        'post_type' => 'product',
                        'posts_per_page' => 3,
                        'order' => 'ASC',
                        'tax_query' => [
                            [
                                'taxonomy' => 'category',
                                'field' => 'slug',
                                'terms' => 'products', // Replace with the correct category slug
                            ],
                        ],
                    ]);
                @endphp

                @foreach ($products as $product => $otherPost)
                    @php
                        $title = get_the_title($otherPost);
                        $permalink = get_permalink($otherPost);
                        $content = apply_filters('the_content', $otherPost->post_content);
                        $thumbnail = get_the_post_thumbnail($otherPost, 'full');
                        $category = get_the_category($otherPost)[0]->name;
                        $price = get_field('price', $otherPost->ID);
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
                                <h3 class="uppercase post__title text-xl font-semibold mb-3 min-h-fit">
                                    {{ $title }}

                                </h3>
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
                                        {{ $price }}</span></a>
                                <div class="content">
                                    {!! $content !!}
                                </div>
                                <a href="{{ $permalink }}"
                                    class="btn btn--primary post__button mt-2 inline-block">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="max-w-[1520px] mx-auto">
                <div class="py-[4rem] pb-[1rem] px-[4rem]">
                    <h5 class="text-[30px] font-primary text-center">More options that meet your needs</h5>
                </div>

                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1520px] mx-auto gap-y-[2rem] py-[3rem] justify-items-center px-[4rem]">
                    @php
                        $products = get_posts([
                            'post_type' => 'product',
                            'posts_per_page' => 3,
                            'order' => 'ASC',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => 'products', // Replace with the correct category slug
                                ],
                            ],
                        ]);
                    @endphp

                    @foreach ($products as $product => $otherPost)
                        @php
                            $title = get_the_title($otherPost);
                            $permalink = get_permalink($otherPost);
                            $content = apply_filters('the_content', $otherPost->post_content);
                            $thumbnail = get_the_post_thumbnail($otherPost, 'full');
                            $category = get_the_category($otherPost)[0]->name;
                            $price = get_field('price', $otherPost->ID);
                        @endphp


                        <div class="max-w-[374px] post__wrap sm:mx-auto">
                            <div class="relative">
                                <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                                    <a class="w-full post__image" href="{{ $permalink }}">
                                        {!! $thumbnail !!}
                                    </a>
                                    <div
                                        class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                                        {{ $category }}
                                    </div>
                                </div>

                                <div class="post__content-wrap p-[2.4rem] pr-[2.8rem] bg-white flex flex-col">
                                    <h3 class="uppercase post__title text-xl font-semibold mb-3">
                                        {{ $title }}

                                    </h3>
                                    <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem] mb-[1rem]"
                                        href="{{ $permalink }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1rem]" width="20"
                                            height="20" viewBox="0 0 20 20">
                                            <g id="Group_2004" data-name="Group 2004"
                                                transform="translate(-502.738 -7457.566)">
                                                <circle id="Ellipse_99" data-name="Ellipse 99" cx="10"
                                                    cy="10" r="10"
                                                    transform="translate(502.738 7457.566)" fill="#b33558" />
                                                <path id="Icon_awesome-shopping-cart"
                                                    data-name="Icon awesome-shopping-cart"
                                                    d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                                    transform="translate(506.9 7463.176)" fill="#fff" />
                                            </g>
                                        </svg>
                                        <span class="underline text-[#79839C] font-medium">Buy Now from
                                            {{ $price }}</span></a>
                                    <div class="content">
                                        {!! $content !!}
                                    </div>
                                    <a href="{{ $permalink }}"
                                        class="btn btn--primary post__button mt-2 inline-block">Learn More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
