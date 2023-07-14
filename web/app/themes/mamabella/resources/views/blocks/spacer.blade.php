{{--
  Title: Spacer
  Description: Spacer
  Category: formatting
  Icon: edit
  Keywords: spacer
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<x-spacer class="w-full" size="small" title="{!! get_field('spacer_title') !!}" subtitle="{!! get_field('spacer_subtitle') !!}" />
