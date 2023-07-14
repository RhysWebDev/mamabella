{{--
  Title: Hero Internal
  Description: Internal Hero section
  Category: formatting
  Icon: superhero
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section data-{{ $block['id'] }} class="flex items-center bg-primary hero bg-cover bg-center container boxed mx-auto"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="max-w-[1180px] mx-auto gap-5 w-full  py-[4rem]">
        @include('partials.breadcrumbs')
        <h1 class="text-white font-primary font-medium text-[50px]"> {{ get_the_title() }} </h1>
    </div>
</section>
