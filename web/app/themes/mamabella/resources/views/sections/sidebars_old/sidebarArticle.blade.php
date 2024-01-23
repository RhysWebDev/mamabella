<div class="checklist-box">
    <div class="checklist__box">
        <div class="checklist__header bg-primary text-center py-[2rem] rounded-t-[10px]">
            <h2 class="text-[30px] font-primary text-white font-bold">Tips & Tricks</h2>
        </div>
        @if (have_rows('quick_links'))
            <div class="checklist__items bg-[#F6F9FB]">
                @while (have_rows('quick_links'))
                    @php(the_row())
                    <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem]">
                        @include('partials.svgcheck')
                        <p class="font-secondary text-primary">{{ get_sub_field(checklist_item) }}</p>
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</div>


<a class="button btn btn--outline" data-tab="{{ get_sub_field('quick_link_cat') }}"
    href="{{ get_sub_field('quick_link_cat') }}">
    {{ get_sub_field('quick_link') }}
</a>


<div class="mt-[2rem] flex flex-col min-h-[333px] w-full bg-[#D4D7DF] p-[5rem] items-center justify-center">
    <span class="text-[20px] font-bold font-secondary text-primary"> AD SPACE </span>
</div>

<div class="related_posts">

    @php
        $products = get_posts([
            'post_type' => 'how-to',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ]);
    @endphp

    <div class="mt-8">
        <div class="p-4 ">
            <h2 class="text-[30px] font-primary font-bold text-primary text-center mb-[2rem]">Related Articles</h2>

            <div class="product_sidebar--inner grid grid-cols-1 gap-4 items-center justify-center">
                @foreach ($products as $product)
                    <div class="bg-white shadow-lg rounded-md ">
                        <div class="flex flex-row">
                            <div class="w-2/5 flex items-center ">
                                <div class="product__image">
                                    {!! get_the_post_thumbnail($product->ID, 'full', ['class' => 'w-full']) !!}
                                </div>
                            </div>
                            <div class="w-3/5 p-4 flex flex-col justify-center">
                                <h3 class="font-bold text-[14px] font-secondary uppercase text-primary">
                                    {{ $product->post_title }}</h3>
                                <span class="block font-semibold text-gray-700 mt-2">{{ get_field('price') }}</span>
                                <p class="text-sm mt-2">{{ $product->post_excerpt }}</p>
                                <!-- Additional product details can be added here -->
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
