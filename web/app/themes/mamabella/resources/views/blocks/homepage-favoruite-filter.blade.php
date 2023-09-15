{{--
  Title: Homepage Filter
  Description: Homepage Filter
  Category: formatting
  Icon: filter
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}


<section
    class="bg-cover bg-center mx-auto container rounded content-center py-10 rounded-xl px-10 @if (is_page(451)) py-[4rem] px-[4rem]  max-w-[1520px] mx-auto @endif"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="text-black">
        @if (is_page(451))
            @include('partials.breadcrumbs')
        @endif
    </div>
    <div class="flex flex-wrap  @if (is_page(451)) flex-col @endif">
        <div class="w-full @if (is_page(451)) w-full @else lg:w-1/4 @endif ">
            <h2 class="text-[35px] font-primary text-primary ">{!! get_field('title') !!}</h2>
            <div class="my-4 filter__content @if (is_page(451)) text-[20px] font-secondary @endif">
                {!! get_field('content') !!}
            </div>
        </div>
        <div class="w-full px-[3rem] @if (is_page(451)) w-full @else lg:w-3/4 @endif">
            <div
                class="filter__row grid grid-cols-1 md:grid-cols-3 gap-x-8 @if (is_page(451)) justify-start @else justify-end @endif top_row self-center flex items-center flex-wrap">
                {!! do_shortcode('[facetwp facet="skin_type"]') !!}
                {!! do_shortcode('[facetwp facet="toner"]') !!}
                {!! do_shortcode('[facetwp facet="price"]') !!}
            </div>
            <div
                class="filter__row grid grid-cols-1 md:grid-cols-3 flex gap-x-8 @if (is_page(451)) justify-start @else justify-end @endif bottom_row self-center flex items-center flex-wrap @if (is_page(451)) w-full @endif">
                {!! do_shortcode('[facetwp facet="skintypes"]') !!}
                {!! do_shortcode('[facetwp facet="finish"]') !!}
                {!! do_shortcode('[facetwp submit="/find-your-favourite/" label="Submit"]') !!}
            </div>
            <div class="hidden">
                {!! do_shortcode('[facetwp template="products"]') !!}
            </div>
        </div>
    </div>
</section>

@if (is_page(451))
    <style>
        .fwp-submit {
            background: #26364b;
            color: #fff;
            height: 50px;
            margin-bottom: 40px;
        }
    </style>
@endif
