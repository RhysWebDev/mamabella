{{--
  Title: Content Block
  Description: Displays standalone content
  Category: custom-layouts
  Icon: edit
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__content content-wrapper px-[2rem] pb-[2rem]" id="{{ get_field('id') }}">

    @if (get_field('addBoxToContent'))
        <div class="flex @if (get_field('move_box_to_other_side')) flex-row-reverse @else flex-row @endif">
            <div class="boxed-content border-[2px] border-secondary p-[2rem]">
                {{ get_field('boxed_content') }}
            </div>
            <div class="wrapped-content">
                {!! get_field('content') !!}
            </div>
        </div>
    @else
        @if (get_field('content'))
            {!! get_field('content') !!}
        @endif
    @endif

</div>
