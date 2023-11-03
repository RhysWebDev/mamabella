{{--
  Title: Review Box Block
  Description: Displays a standalone review box
  Category: custom-layouts
  Icon: star-filled
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__review-box-wrap p-[2rem] relative" id="{{ get_field('id') }}">
    <div
        class="decorated-title__review-box p-[2rem] border-[2px] border-[#B33558] font-primary text-[30px] justify-center align-center">
        {{ get_field('review_text') }}
    </div>
</div>
