<div class="flex posts flex-wrap mt-8 md:mt-[4rem] justify-center lg:justify-between main-panel">
    <div class="w-full max-w-[374px] post__wrap sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 height-available">
        <div class="relative">
            <div class="mb-0 relative post__image-wrap">
                <a class="w-full post__image" href="{{ the_permalink() }}">
                    {{ the_post_thumbnail('') }}
                </a>
                @if (the_category(''))
                    <div class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                        {{ the_category('') }}
                    </div>
                @endif
            </div>

            <div class="post__content-wrap p-[2.4rem] pr-[2.8rem]">
                <h3 class="uppercase post__title text-xl font-semibold mb-3">{!! the_title() !!}
                </h3>
                <a href="{{ the_permalink() }}" class="btn btn--primary post__button mt-2 inline-block">Read</a>
            </div>
        </div>
    </div>
</div>
