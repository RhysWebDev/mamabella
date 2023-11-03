{{--
  Title: Product Listing Block
  Description: Displays a list of products with their details
  Category: custom-layouts
  Icon: cart
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__products pt-[3rem] px-[2rem]" id="{{ get_field('id') }}">
    <div class="decorated-title__products pt-[3rem] px-[2rem]">
        @if (have_rows('products'))
            @while (have_rows('products'))
                @php(the_row())
                <div class="decorated-title__product-wrapper py-[2rem]">
                    <div class="grid grid-cols-12">
                        <div class="col col-span-4 flex-col">
                            <img src="{{ get_sub_field('product_image') }}">
                        </div>
                        <div class="col col-span-8 flex-col ">
                            <h3
                                class="text-[20px] font-secondary text-[primary] font-bold text-primary pb-[2rem] uppercase">
                                {{ get_sub_field('product_title') }}
                            </h3>
                            @if (have_rows('product_info'))
                                @while (have_rows('product_info'))
                                    @php(the_row())
                                    <div class="grid grid-cols-12">
                                        <div class="col col-span-4 flex-col">
                                            <i class="fas fa-shopping-cart"></i>
                                            <a class="underline text-secondary font-secondary text-[17px]"
                                                href="{{ get_sub_field('link_url') }}">
                                                {{ get_sub_field('link_text') }}
                                            </a>
                                        </div>
                                        <div class="col col-span-8 flex flex-end justify-end">
                                            <p class="font-secondary text-[20px] text-primary">
                                                {!! get_sub_field('price') !!}</p>
                                        </div>
                                    </div>
                                @endwhile
                            @endif
                        </div>
                    </div>
                </div>
            @endwhile
        @endif
    </div>
</div>
