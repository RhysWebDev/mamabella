{{--
  Title: Related Posts for sidebar
  Description: Related Posts for sidebar
  Category: custom-layouts
  Icon: align-center
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="related_posts">
    @php
        $products = get_posts([
            'post_type' => get_field('post_type'),
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
