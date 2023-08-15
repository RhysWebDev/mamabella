{{--
  Title: Stat Banner 
  Description: Stat banner, 7 columns
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


<section class="grid_banner bg-cover bg-center mx-auto container rounded content-center py-10 rounded-xl px-10 mt-[3rem]"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="grid grid-flow-col auto-col-max gap-[3rem] grid-mobile">
        @if (have_rows('stat'))
            @while (have_rows('stat'))
                @php(the_row())
                <div class="flex flex-col lg:flex-row gap-[4rem] items-center">
                    <div class="stat-banner__stats flex flex-col justify-center">
                        <span
                            class="stat-banner__counter font-primary text-[28px] md:text-[40px] font-bold text-primary">
                            {{ get_sub_field('stat_counter') }}
                        </span>

                        <span class="stat-banner__title text-[17px] text-primary">
                            {{ get_sub_field('stat_title') }}
                        </span>
                    </div>

                    @if (get_sub_field('stat_icon'))
                        <div class="stat-banner__icon">
                            <img src="{{ get_sub_field('stat_icon') }}">
                        </div>
                    @endif
                </div>
            @endwhile
        @endif
    </div>
</section>
