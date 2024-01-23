@extends('layouts.app')

<div class="article__wrap max-w-[1520px] boxed mx-auto bg-white ">
    @section('content')
        <section
            class="flex relative z-[10] items-center bg-primary hero bg-cover bg-center container boxed mx-auto max-w-[1520px] px-[1.5rem] lg:px-[0px] mx-auto"
            style="background-image: url('/app/uploads/2023/07/herobg.png');">
            <div class="max-w-[1180px] mx-auto gap-5 w-full py-[4rem] flex flex-row">
                <div class="flex flex-col">
                    @include('partials.breadcrumbs')
                    <h1 class="text-white font-primary font-medium text-[50px]"> {{ the_archive_title() }} </h1>
                </div>
            </div>
        </section>

        <div class="mx-auto max-w-[1260px]">
            <div class="article__wrapper flex flex-col lg:flex-row w-full py-[4rem]">
                <div
                    class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1520px] mx-auto gap-y-[2rem] py-[3rem] justify-items-center gap-x-[2rem]">
                    @php
                        $category = get_queried_object();
                        $custom_query_args = [
                            'post_type' => ['post', 'how-to', 'product', 'duplicate', 'deals', 'review'],
                            'category_name' => $category->slug, // Or 'cat' => $category->term_id
                            'posts_per_page' => -1,
                        ];
                        $custom_query = new WP_Query($custom_query_args);
                    @endphp
                    @if ($custom_query->have_posts())
                        @while ($custom_query->have_posts())
                            @php($custom_query->the_post())

                            <div class="max-w-[374px] post__wrap sm:mx-auto">
                                <div class="relative">
                                    <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                                        <a class="w-full post__image" href="{!! get_permalink() !!}">
                                            {!! get_the_post_thumbnail(null, 'large') !!}
                                        </a>
                                        <div
                                            class="post__category absolute bottom-0 left-0 text-accent px-2 py-1 uppercase">
                                            {{ get_post_type() }}
                                        </div>
                                    </div>

                                    <div class="post__content-wrap p-[2.4rem] pr-[2.8rem] bg-white flex flex-col">
                                        <a href="{{ get_permalink() }}">
                                            <h3 class="uppercase post__title text-xl font-semibold mb-3 min-h-fit">
                                                {{ get_the_title() }}
                                            </h3>
                                        </a>
                                        <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem] mb-[1rem]"
                                            href="{{ get_permalink() }}">
                                            <!-- SVG and other elements... -->
                                            <span class="underline text-[#79839C] font-medium">Buy Now from
                                                {{ get_field('price') }}</span></a>
                                        <div class="content">
                                            {!! get_the_excerpt() !!}
                                        </div>
                                        <a href="{{ get_permalink() }}"
                                            class="btn btn--primary post__button mt-2 inline-block">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
        </div>
    @endsection
</div>
