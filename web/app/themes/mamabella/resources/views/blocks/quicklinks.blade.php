{{--
  Title: Quick Links
  Description: Quick Links
  Category: formatting
  Icon: edit
  Keywords: Quick Links
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}

<section class="container mx-auto mt-[5rem] max-w-[1280px]">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
        @if (have_rows('quick_links'))
            @while (have_rows('quick_links'))
                @php(the_row())
                <a class="button btn btn--outline" data-tab="{{ get_sub_field('quick_link_cat') }}"
                    href="{{ get_sub_field('quick_link_cat') }}">
                    {{ get_sub_field('quick_link') }}
                </a>
            @endwhile
        @endif
    </div>
</section>
