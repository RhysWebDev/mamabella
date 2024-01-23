{{--
  Title: In This Article Block
  Description: Displays a section highlighting contents of the article
  Category: custom-layouts
  Icon: editor-ul
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true

--}}

<div class="decorated-title__in-this-article px-[2rem] mb-[2rem]" id="{{ get_field('id') }}">
    <div class="flex flex-row mt-[1.5rem]">
        <svg xmlns="http://www.w3.org/2000/svg" width="18.121" height="18.121" viewBox="0 0 18.121 18.121">
            <line id="Line_49" data-name="Line 49" y1="16" x2="16" transform="translate(1.061 1.061)"
                fill="none" stroke="#b33558" stroke-width="3" />
        </svg>
        <h4 class="pl-[1rem] mb-[1.5rem] text-[20px] text-primary font-secondary font-bold">In this article</h4>
    </div>

    @if (have_rows('in_this_article'))
        <ol class="decorated-title__in-this-article-article-list">
            @while (have_rows('in_this_article'))
                @php(the_row())
                <li><a href=" {{ get_sub_field('link') }} "> {{ get_sub_field('link_text') }} </a></li>
            @endwhile
        </ol>
    @endif
</div>
