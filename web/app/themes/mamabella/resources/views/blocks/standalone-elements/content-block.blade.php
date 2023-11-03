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
    @if (get_field('content'))
        {!! get_field('content') !!}
    @endif
</div>
