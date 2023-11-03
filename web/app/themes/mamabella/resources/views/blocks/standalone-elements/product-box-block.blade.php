{{--
  Title: Product Box Block
  Description: Displays a product box with products and their details
  Category: custom-layouts
  Icon: cart
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem] mt-[3rem] max-w-[690px] mx-auto w-full"
    id="{{ get_field('id') }}">
    <div class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
        <h3 class="font-secondary text-[16px] md:text-[20px] font-bold text-white uppercase py-[1rem]">
            {{ get_field('box_title') }}
        </h3>
    </div>
    <div class="product-box__products py-[1rem]">
        @if (have_rows('box_products'))
            @while (have_rows('box_products'))
                @php(the_row())

                <div class="products-item flex flex-row px-[2rem] justify-between py-[1rem]">
                    <div class="products-item__wrap">
                        <a href="{{ get_sub_field('product_link') }}">
                            <i class="pr-[1rem] fas fa-shopping-cart"></i>{{ get_sub_field('product_title') }}
                        </a>
                    </div>
                    <div class="products-item__wrap">
                        <a href="{{ get_sub_field('product_link') }}">
                            {{ get_sub_field('product_price') }}
                        </a>
                    </div>
                </div>
            @endwhile
        @endif
    </div>
</div>
