{{--
  Title: Product Sidebar 
  Description: Product Sidebar 
  Category: formatting
  Icon: products
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

@php
    $products = get_posts([
        'post_type' => 'product',
        'posts_per_page' => -1,
        'product_cat' => 'spotlight',
        'order' => 'ASC',
    ]);
@endphp

<div class="border border-gray-300 mt-8 bg-faded rounded-t-xl rounded-b-xl ">
    <div class="bg-accent text-white text-center py-2 rounded-t-xl ">
        <h2 class="font-primary text-[30px]">In The <span class="text-secondary">Spotlight</span></h2>
    </div>
    <div class="p-4 product_sidebar">
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
                            <span class="block font-semibold text-gray-700 mt-2">{!! wc_price(get_post_meta($product->ID, '_regular_price', true)) !!}</span>
                            <p class="text-sm mt-2">{{ $product->post_excerpt }}</p>
                            <!-- Additional product details can be added here -->
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-primary text-white text-center py-2 rounded-b-xl scrolldown">
        <h2 class="text-lg font-bold scrollToBottom"><i class="fas fa-chevron-down"></i></h2>
        <h2 class="text-lg font-bold scrollToTopButton" style="display: none;"><i class="fas fa-chevron-up"></i></h2>
    </div>
</div>
