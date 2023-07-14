<header class="header header_shadow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/egk2ikd.css">


    <div class="container mx-auto">
        <div class="flex justify-between items-center text-white py-4 px-8">
            <div class="w-1/4 hidden sm:block">
                <?php get_search_form(); ?>
            </div>
            <div class="w-full sm:w-1/4 flex justify-center">
                <img src="{{ get_field('site_logo', 'options') }}">
            </div>
            <div class="w-1/4 flex justify-between hidden sm:block">
                <ul class="w-3/4 flex justify-between header__links gap-x-3">
                    @if (have_rows('header_links', 'options'))
                        @while (have_rows('header_links', 'options'))
                            @php(the_row())
                            <li>
                                <a href="{{ get_sub_field('link') }}" class="flex flex-col  items-center space-y-2">
                                    <img src="{{ get_sub_field('icon') }}" class="w-6 h-6 header__icon" alt="Icon">
                                    <span class="text-black header__icon-text">{{ get_sub_field('text') }}</span>
                                </a>
                            </li>
                        @endwhile
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <hr />
    <div class="container mx-auto">
        <div class="nav_wrap py-[2rem]">
            @include('partials.navigation')
        </div>
    </div>

    <style>
        /* Hide elements on mobile */
        @media (max-width: 767px) {

            .w-1/4,
            .header__links {
                display: none;
            }
        }
    </style>
</header>
