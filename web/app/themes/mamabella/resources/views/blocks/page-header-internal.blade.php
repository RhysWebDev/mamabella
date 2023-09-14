{{--
  Title: Page Header Internal
  Description: Page Header Internal
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


<section data-{{ $block['id'] }}
    class="flex relative z-[10] items-center bg-primary hero bg-cover bg-center container boxed mx-auto max-w-[1520px] mx-auto"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="max-w-[1180px] mx-auto gap-5 w-full py-[4rem] flex flex-row">
        <div class="flex flex-col">
            @include('partials.breadcrumbs')
            <h1 class="text-white font-primary font-medium text-[50px]"> {{ get_the_title() }} </h1>
        </div>
        {{-- <div class="flex flex-row">
            Filter
            Sort
        </div> --}}
    </div>
</section>
