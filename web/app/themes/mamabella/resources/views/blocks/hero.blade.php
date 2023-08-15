{{--
  Title: Hero
  Description: Hero section
  Category: formatting
  Icon: superhero
  Keywords: hero
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}


<section data-{{ $block['id'] }} class="flex items-center hero bg-cover bg-center h-[85vh]"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="container mx-auto px-4 py-32 gap-5">
        <h1 class="font-medium text-white mb-4 hero__title title-lg">{!! get_field('title') !!}</h1>
        <div class="mt-6 hero__subtitle text-white mb-8 subtitle">{!! get_field('content') !!}</div>
        <div class="flex flex-row justify-space-between">
            <a href="{{ get_field('button_link') }}" class="btn btn--secondary">{{ get_field('button') }}</a>
        </div>
    </div>
</section>
