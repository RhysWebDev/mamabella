<div class="checklist-box">
    <div class="checklist__box">
        <div class="checklist__header bg-primary text-center py-[2rem] rounded-t-[10px]">
            <h2 class="text-[30px] font-primary text-white font-bold">Tips & Tricks</h2>
        </div>
        <div class="checklist__items bg-[#F6F9FB]">
            <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem]">
                @include('partials.svgcheck')
                <p class="font-secondary text-primary">Trim to Size</p>
            </div>
            <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem] bg-white">
                @include('partials.svgcheck')
                <p class="font-secondary text-primary">Apply glue and wait 30 secs</p>
            </div>
            <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem]">
                @include('partials.svgcheck')
                <p class="font-secondary text-primary">Use tweezers</p>
            </div>
            <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem]  bg-white">
                @include('partials.svgcheck')
                <p class="font-secondary text-primary">Keep eyes open</p>
            </div>
        </div>
    </div>
</div>


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
                    <div class="bg-white shadow rounded-xl ">
                        <div class="flex flex-row">
                            <div class="w-2/5 flex items-center ">
                                <div class="product__image">
                                    {!! get_the_post_thumbnail($product->ID, 'full', ['class' => 'w-full']) !!}
                                </div>
                            </div>
                            <div class="w-3/5 p-4 flex flex-col justify-center">
                                <h3 class="text-lg font-bold">{{ $product->post_title }}</h3>
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
