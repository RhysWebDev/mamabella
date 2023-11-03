{{--
  Title: Media Block
  Description: Displays either an image or a video
  Category: custom-layouts
  Icon: format-image
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

@if (get_field('show_video_or_image'))
    <div class="video_source-wrapper max-w-[690px] mx-auto w-full" id="{{ get_field('id') }}">
        <video width="100%" controls src="{{ get_field('video_source') }}">
            Your browser does not support the video tag.
        </video>
    </div>
@else
    <div class="image_source-wrapper">
        <img class="w-full" src="{{ get_field('image_source') }}" id="{{ get_field('id') }}">
    </div>
@endif
