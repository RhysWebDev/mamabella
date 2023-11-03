<article class="max-w-[374px] md:min-w-[374px] w-full">
    <div class=" post__wrap sm:mx-auto w-full">
        <div class="relative">
            <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                <a class="w-full post__image md:min-w-[374px]" href="{{ the_permalink() }}">
                    {{ the_post_thumbnail('') }}
                </a>
            </div>
            <div class="post__content-wrap p-[2.4rem] pr-[2.8rem]">
                <h3 class="uppercase post__title text-xl font-semibold mb-3 min-h-[84px]">
                    {{ $title }}
                </h3>
                <a href="{{ $permalink }}" class="btn btn--primary post__button mt-2 inline-block">READ</a>
            </div>
        </div>
    </div>
</article>
