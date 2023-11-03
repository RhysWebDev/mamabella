{{--
  Title: Featured Image Block
  Description: Displays a standalone featured image
  Category:  custom-layouts
  Icon: format-image
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<img id="{{ get_field('id') }}" class="w-full mx-auto px-[2rem] mb-[2rem]" src="{{ get_field('featured_image') }}">
