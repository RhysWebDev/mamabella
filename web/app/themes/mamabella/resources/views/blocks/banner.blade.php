{{--
  Title: Banner
  Description: Banner with two columns
  Category: formatting
  Icon: filter
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}


<section class="bg-cover bg-center mx-auto container rounded content-center py-10 rounded-xl px-10 "
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="flex flex-wrap">
        <div class="w-full md:w-1/4">
            <h2 class="text-[35px] font-primary text-primary">{!! get_field('title') !!}</h2>
            <div class="my-4 filter__content">
                {!! get_field('content') !!}
            </div>
        </div>
        <div class="w-full md:w-3/4">
            <div class="filter__row flex flex-row gap-x-8 justify-end top_row">
                {!! do_shortcode('[facetwp facet="categories"]') !!}
                {!! do_shortcode('[facetwp facet="skin_hair_types"]') !!}
                {!! do_shortcode('[facetwp facet="price"]') !!}
            </div>
            <div class="filter__row flex flex-row gap-x-8 justify-end bottom_row">
                {!! do_shortcode('[facetwp facet="type"]') !!}
                {!! do_shortcode('[facetwp facet="finish"]') !!}
                {!! do_shortcode('[facetwp submit="/listings/" label="Submit"]') !!}
            </div>
            <div class="hidden">
                {!! do_shortcode('[facetwp template="products"]') !!}
            </div>
        </div>
    </div>
</section>
