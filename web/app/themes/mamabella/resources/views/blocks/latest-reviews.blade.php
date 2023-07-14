{{--
  Title: Latest Reviews
  Description: 2-column carousel with background image
  Category: formatting
  Icon: star-filled
  Keywords: reviews, carousel
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

@php
    $background_image = get_field('background_image');
    
    $reviews = new WP_Query([
        'post_type' => 'review',
        'posts_per_page' => -1,
    ]);
    
@endphp

<section class="text-center latest-reviews py-[3rem]"
    style="background-image: url({{ $background_image }}); background-size: cover;">
    <h2 class="text-[40px] text-secondary font-primary text-bold pt-[4rem] font-bold">Latest Reviews</h2>
    <div class="slick-nav-location text-center w-fit mx-auto flex flex-row gap-[2rem]">
        <div class="review-carousel-prev">
            <svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" width="27.664" height="25.584"
                viewBox="0 0 27.664 25.584">
                <path id="Path_1439" data-name="Path 1439"
                    d="M31.824,33.1,22.776,20.308l-1.56,1.04,2.392,8.112L4.16,32.58v1.04l19.448,3.12-2.392,8.112,1.56,1.04Z"
                    transform="translate(31.824 45.892) rotate(180)" fill="#fff" opacity="0.21" />
            </svg>
        </div>
        <div class="review-carousel-next">
            <svg class="nav-arrow" xmlns="http://www.w3.org/2000/svg" width="27.664" height="25.584"
                viewBox="0 0 27.664 25.584">
                <path id="Path_1440" data-name="Path 1440"
                    d="M31.824,33.1,22.776,20.308l-1.56,1.04,2.392,8.112L4.16,32.58v1.04l19.448,3.12-2.392,8.112,1.56,1.04Z"
                    transform="translate(-4.16 -20.308)" fill="#fff" />
            </svg>
        </div>
    </div>
    <div class="latest-reviews-carousel container mx-auto p-[3rem]">
        @if ($reviews->have_posts())
            @while ($reviews->have_posts())
                @php $reviews->the_post(); @endphp
                @php
                    $post_id = get_the_ID();
                    $thumbnail = get_the_post_thumbnail_url();
                    $permalink = get_permalink();
                    $title = get_the_title();
                    $tagline = get_field('tagline', $post_id);
                    $description = get_field('description');
                @endphp
                <div>
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="latest-reviews__image">
                            <img src="{{ $thumbnail }}" alt="{{ $title }}" class="slide-thumbnail">
                        </div>
                        <div
                            class="latest-reviews__content bg-white shadow justify-center text-left py-[2rem] px-[2rem] flex flex-col">
                            <h3 class="slide-title text-[25px] font-bold font-secondary text-primary">
                                {{ $title }}
                            </h3>
                            <p class="slide-tagline font-secondary text-primary font-medium text-[18px] underline">
                                {{ get_field('tagline', $post_id) }}</p>
                            <div
                                class="slide-description text-[17px] font-normal text-primary font-secondary my-[1rem]">
                                {{ get_field('description', $post_id) }}</div>
                            <a class="btn btn--primary w-fit" href="{{ $permalink }}" class="slide-link">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endwhile
        @endif
    </div>

</section>
