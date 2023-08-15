{{--
  Title: Resource Banner
  Description: Resource banner
  Category: formatting
  Icon: filter
  Keywords: Grid
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}


<section
    class="grid_banner bg-cover bg-center mx-auto container rounded content-center py-10 rounded-xl px-10 mt-[3rem] flex justify-end"
    style="background-image: url('{{ get_field('background_image') }}');">
    <img src="https://mamabella.dashdev.uk/app/uploads/2023/08/Group-2004.png">
    <div class="resource-banner__right-col pl-[3rem] py-[3rem]">
        <div class="resource-banner__content">
            <h4 class="font-secondary font-bold text-[18px] text-primary uppercase">{{ get_field('subtitle') }}</h4>
            <h1 class="font-primary font-bold text-[40px] text-primary max-w-[330px]"> {{ get_field('title') }}</h1>
            <a href="{{ get_field('button_link') }}" class="btn btn--primary post__button mt-2 inline-block">Download</a>
        </div>
    </div>
</section>
