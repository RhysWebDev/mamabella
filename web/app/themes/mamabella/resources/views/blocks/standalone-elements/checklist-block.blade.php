{{--
  Title: Checklist Block
  Description: Checklist block for the sidebar
  Category: custom-layouts
  Icon: align-center
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}


<div class="checklist__box">
    <div class="checklist__header bg-primary text-center py-[2rem] rounded-t-[10px]">
        <h2 class="text-[30px] font-primary text-white font-bold">Tips & Tricks</h2>
    </div>
    <div class="checklist__items bg-[#F6F9FB]">

        @if (get_field('how-to-checklist'))
            @while (has_rows('how-to-checklist'))
                @php(the_row())
                <div class="checklist__item flex flex-row min-h-[70px] leading-[70px] items-center px-[2rem]">
                    @include('partials.svgcheck')
                    <p class="font-secondary text-primary">{{ get_sub_field('checklist_item') }}</p>
                </div>
            @endwhile
        @endif

    </div>
</div>
