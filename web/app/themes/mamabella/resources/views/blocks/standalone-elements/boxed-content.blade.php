{{--
  Title: Box Content Block
  Description: Displays a standalone box with content
  Category: custom-layouts
  Icon: align-center
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__competition max-w-[690px] mx-auto w-full" id="{{ get_field('id') }}">
    <div class="verdict-box__product mt-[3rem]">
        <div class="product_box border-[2px] border-secondary rounded-tl-[10px] rounded-tr-[10px] mb-[3rem]">
            <div class="box_title-wrapper bg-secondary px-[2rem] rounded-tl-[8px] rounded-tr-[8px]">
                <h3
                    class="font-secondary text-[16px] md:text-[20px] text-center font-bold text-white uppercase py-[1rem]">
                    {{ get_field('box_title') }}
                </h3>
            </div>
            <div class="mb-[2rem] text-[20px] font-bold p-[2rem] pb-[0px] mb-[0px]">
                {!! get_field('box_content') !!}
            </div>
        </div>
    </div>
</div>
