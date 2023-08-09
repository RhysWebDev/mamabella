{{--
  Title: Post grid with filter
  Description: Post grid with filter
  Category: formatting
  Icon: superhero
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section data-{{ $block['id'] }} class="{{ $block['classes'] }} w-full max-w-[1520px] py-[4rem] mx-auto bg-white "
    id="post_grid">

    <div
        class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1260px] mx-auto gap-y-[2rem] justify-items-center">
        @php
            // Assuming the ACF field name is 'post_type_selection'
            $postTypeSelection = get_field('post_category');
            
            $queryArgs = [
                'posts_per_page' => 8,
                'meta_key' => '_thumbnail_id',
            ];
            
            // Modify the query based on the selection
            if ($postTypeSelection === 'Reviews') {
                $queryArgs['post_type'] = 'review'; // Assuming the custom post type name for Reviews is 'reviews'
            } elseif ($postTypeSelection === 'Deals') {
                $queryArgs['post_type'] = 'deals'; // Assuming the custom post type name for Deals is 'deals'
            } elseif ($postTypeSelection === 'How to') {
                $queryArgs['post_type'] = 'how-to';
            } else {
                $queryArgs['post_type'] = 'post';
            }
            
            $otherPosts = get_posts($queryArgs);
        @endphp

        @foreach ($otherPosts as $index => $otherPost)
            @php
                $title = get_the_title($otherPost);
                $permalink = get_permalink($otherPost);
                $thumbnail = get_the_post_thumbnail($otherPost, 'full');
                $category = get_the_category($otherPost)[0]->name;
            @endphp

            @if ($index == 2)
                <div
                    class="max-w-[374px] post__wrap sm:mx-auto mx-auto product_filter bg-cover post-grid-with-filter__filter-box rounded-[10px]">
                    <h2 class="text-[30px] font-primary text-primary text-center leading-[30px] pt-[1rem]">Find Your
                        <br />
                        <strong>New
                            Favourite</strong>
                    </h2>
                    <div class="my-4 filter__content text-center mt-0">
                        Simply tell us what you're looking for and we'll suggest the best, tried & tested products.
                    </div>
                    <div
                        class="filter__row flex flex-col lg:flex-row gap-x-8 justify-center top_row self-center flex items-center flex-wrap">
                        {!! do_shortcode('[facetwp facet="categories"]') !!}
                        {!! do_shortcode('[facetwp facet="skin_hair_types"]') !!}
                        {!! do_shortcode('[facetwp facet="price"]') !!}
                    </div>
                    <div
                        class="filter__row flex flex-col lg:flex-row gap-x-8 justify-center bottom_row self-center flex items-center flex-wrap">
                        {!! do_shortcode('[facetwp facet="type"]') !!}
                        {!! do_shortcode('[facetwp facet="finish"]') !!}
                        {!! do_shortcode('[facetwp submit="/listings/" label="Submit"]') !!}
                    </div>
                    <div class="hidden">
                        {!! do_shortcode('[facetwp template="products"]') !!}
                    </div>
                </div>
            @endif

            <div class="max-w-[374px] post__wrap sm:mx-auto w-full">
                <div class="relative">
                    <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                        <a class="w-full post__image" href="{{ $permalink }}">
                            {!! $thumbnail !!}
                        </a>
                        <div class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                            {{ $category }}
                        </div>
                    </div>

                    <div class="post__content-wrap p-[2.4rem] pr-[2.8rem]">
                        <h3
                            class="uppercase post__title text-xl font-semibold mb-3 @if ($postTypeSelection === 'Reviews') min-h-fit  @else min-h-[84px] @endif ">
                            {{ $title }}
                        </h3>
                        <a href="{{ $permalink }}" class="btn btn--primary post__button mt-2 inline-block">READ</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
