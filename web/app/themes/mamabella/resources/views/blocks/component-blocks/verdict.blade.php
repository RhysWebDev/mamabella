{{--
  Title: Verdict
  Description: Verdict
  Category: formatting
  Icon: pencil
  Keywords: Review box
  Mode: edit
  Align: none
  PostTypes: page post how-to deals review favourite
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}


<section class="verdict verdict__box p-[2rem] border-[6px] border-secondary">
    <h2
        class="verdict__box-title font-primary text-[30px] text-primary relative bg-white uppercase top-[-65px] w-fit px-[2rem] mx-auto font-bold">
        {{ get_field('verdict_box_title') }} </h2>
    <div class="verdict__box-content text-primary text-[20px]">
        {!! get_field('verdict_content') !!}
    </div>
    <div class="flex flex-row gap-x-[15px]">
        <div class="verdict__box-pro column flex flex-col bg-[#FEF0F0] p-[1.5rem] rounded-lg">
            <strong class="text-[17px] font-bold text-primary mb-[0.5rem]"> {{ get_field('pro_title') }}</strong>
            <div class="verdict__box-pro-content">
                {!! get_field('pro_content') !!}
            </div>
        </div>
        <div class="verdict__box-cons column flex flex-col bg-[#DBDDE4] p-[1.5rem] rounded-lg">
            <strong class="text-[17px] font-bold text-primary mb-[0.5rem]"> {{ get_field('con_title') }}</strong>
            <div class="verdict__box-cons-content">
                {!! get_field('con_content') !!}
            </div>
        </div>
    </div>
    <div class="verdict-box__product mt-[3rem]">
        <div class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
            <div class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                <h3 class="font-secondary text-[16px] md:text-[20px] font-bold text-white uppercase py-[1rem]">
                    Where to buy</h3>
            </div>
            <div class="product-box__products py-[1rem]">
                @if (have_rows('box_products'))
                    @while (have_rows('box_products'))
                        @php(the_row())

                        <div class="products-item flex flex-row px-[2rem] justify-between py-[1rem]">
                            <div class="products-item__wrap">
                                <a href=" {{ get_sub_field('product_link') }} ">
                                    <i class="pr-[1rem] fas fa-shopping-cart"></i>{{ get_sub_field('product_title') }}
                                </a>
                            </div>
                            <div class="products-item__wrap">
                                <a href=" {{ get_sub_field('product_link') }} ">
                                    {{ get_sub_field('product_price') }}
                                </a>
                            </div>
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</section>

<div class="verdict__box-content mt-[2rem]">
    {!! get_field('verdict_content_conclusion') !!}
</div>
