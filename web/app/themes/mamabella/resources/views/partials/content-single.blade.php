<article
    @php(post_class('h-entry, bg-[#F6F9FB]'))>

    <div class="article__wrap max-w-[1520px] boxed mx-auto bg-white ">
      <div class="article__header max-w-[1118px] mx-auto pt-[3rem] px-[2rem]">
        @include('partials.breadcrumbs')
        <h1 class="text-[50px] font-primary text-primary mb-[2rem]"> {{ the_title() }} </h1>
        <div class="article__info flex-row flex mb-[2rem]">
          <img class="mr-[1.5rem] max-w-[150px]" src="{{ get_field('author_image') }}">
          <div class="flex flex-row gap-x-[2rem] items-center">
            <div class="text-secondary font-secondary">{{ get_the_author_meta('display_name') }} </div>
            <div> | </div>
            <div class="text-primary font-secondary">Updated: {{ get_the_modified_date() }} </div>
            
          </div>
        </div>

        <img class="w-full object-cover max-h-[511px]" src="{{ get_the_post_thumbnail_url() }}">
        <span class="text-[14px] font-primary">{{ get_field('image_credit') }}
      </div>

      <div class="mx-auto max-w-[1118px]">
      <div class="article__wrapper  flex flex-col md:flex-row w-full">
          <div class="e-content flex flex-col pt-[3rem] pr-[1rem]">
            {!! the_content() !!}
          </div>

      

<div class="checklist-box ">
      <div class="post-specific-sidebar md:pl-[1rem] article__sidebar flex flex-col md:min-w-[336px] pt-[3rem]">
          @if (is_singular('how-to'))
              @include('sections.sidebarHowto')
          @elseif (is_singular('product'))
              @include('sections.sidebarProduct')
          @elseif (is_singular('review'))
              @include('sections.sidebarReviews')
          @elseif (is_singular('favourite'))
              @include('sections.sidebarFavourites')
          @elseif (is_singular('deals'))
              @include('sections.sidebarDeals')
          @else
              @include('sections.sidebar')
          @endif
    </div>
    </div>
    </div>
    </div>

    <footer>
        {!! wp_link_pages([
            'echo' => 0,
            'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
            'after' => '</p></nav>',
        ]) !!}
    </footer>

    @php(comments_template())
</article>
