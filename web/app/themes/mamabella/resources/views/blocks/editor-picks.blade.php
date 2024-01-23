{{--
  Title: Editor Picks
  Description: Editor Picks
  Category: formatting
  Icon: edit
  Keywords: Editor Picks
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}

<div class="bg-gradient w-full pt-[2rem] ">
    <section>
        @if (get_field('show_quicklinks'))
            @include('blocks.quicklinks')
        @endif
    </section>

    <section
        class="container mx-auto mt-[2rem] flex flex-row gap-[2em] items-start mobile-cols flex flex-col md:flex-row">

        <div class="flex posts flex-wrap mt-8 md:mt-[4rem] justify-center lg:justify-between main-panel">
            @php
                $otherPosts = get_posts([
                    'cat' => '-1',
                    'post_type' => 'post',
                    'posts_per_page' => 6, // Retrieve six products
                ]);
            @endphp

            @if ($otherPosts)
                @foreach ($otherPosts as $otherPost)
                    @php
                        $title = get_the_title($otherPost);
                        $permalink = get_permalink($otherPost);
                        $thumbnail = get_the_post_thumbnail($otherPost, 'full');
                        $category = get_the_category($otherPost)[0]->name;
                    @endphp

                    <div
                        class="w-full max-w-[374px] post__wrap sm:w-1/2 md:w-1/3 lg:w-1/3 xl:w-1/3 p-4 height-available">
                        <div class="relative">
                            <div class="mb-0 relative post__image-wrap">
                                <a class="w-full post__image" href="{{ $permalink }}">
                                    {!! $thumbnail !!}
                                </a>
                                @if ($category)
                                    <div class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                                        {{ $category }}
                                    </div>
                                @endif
                            </div>

                            <div class="post__content-wrap p-[2.4rem] pr-[2.8rem]">
                                <a href="{{ $permalink }}">
                                    <h3 class="uppercase post__title text-xl font-semibold mb-3">{!! $title !!}
                                    </h3>
                                </a>
                                <a href="{{ $permalink }}"
                                    class="btn btn--primary post__button mt-2 inline-block">Read</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="flex flex-col sidebar-panel sm:w-full mx-auto">
            @if (get_field('show_sidebar'))
                @include('blocks.advertisement-sidebar')
            @endif
        </div>
    </section>

</div>
