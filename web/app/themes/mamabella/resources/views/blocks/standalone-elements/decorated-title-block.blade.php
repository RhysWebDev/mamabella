{{--
  Title: Decorated Title Block
  Description: standalone decorated title
  Category: custom-layouts
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}


<div class="decorated-title title-wrapper w-full mx-auto" id="{{ get_field('link_id') }}">
    @if (get_field('title'))
        <h2
            class="bg-secondary text-center text-white font-primary text-[24px] md:text-[30px] px-[2rem] w-[fit-content] mx-auto relative z-3">

            {!! get_field('title') !!}

        </h2>
    @else
        <div class="h-[45px]"></div>
    @endif

</div>
