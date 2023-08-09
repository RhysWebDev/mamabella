{{--
  Title: Article featured
  Description: featured article hero
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

<section data-{{ $block['id'] }}
    class="{{ $block['classes'] }} pt-[2rem] w-full max-w-[1520px] mx-auto bg-white px-[1rem] md:px-[0]"
    id="article-featured">

    <div class="article-featured__wrapper flex flex-col md:flex-row container max-w-[1260px] mx-auto">
        <div class="border-left-radius article-featured__img min-w-[40%]">
            <img class="min-h-[485px] object-cover" src="{{ get_field('featured_article_image') }}">
        </div>

        <div
            class="border-bottom-right-radius article-featured__content-wrap min-h-[485px] flex flex-col align-center justify-center">
            <h4 class="small-pink-title">{{ get_field('post_tag') }}</h4>
            <h2 class="article-featured__title font-primary text-[40px] font-medium text-primary mb-[1.5rem]">
                {{ get_field('featured_article_title') }}</h2>
            <a class="btn btn--primary w-fit" href="{{ get_field('button_link') }}" tabindex="0">Read</a>
        </div>

    </div>
</section>
