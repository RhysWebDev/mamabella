{{--
  Title: Dupe Banner
  Description: Banner showing duplicates for sale
  Category: formatting
  Icon: cart
  Keywords: Editor Picks
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}



<section
    class="bg-cover bg-center mx-auto container rounded content-center mt-[3rem] py-10 rounded-xl px-10 dupe-banner bg-light-blue items-center"
    style="background-image: url('{{ get_field('background_image') }}');">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/4 px-[4rem] flex flex-col justify-center">
            <h2 class="text-[40px] font-primary text-primary title__stars font-semibold">{!! get_field('title') !!}</h2>
            <div class="my-4 filter__content text-[17px] font-secondary">
                {!! get_field('content') !!}
            </div>
            <div class="flex flex-col mb-[2rem]">
                <a href="{{ get_field('makeup') }}"
                    class="btn btn--primary post__button mt-2 inline-block text-center">Makeup</a>
                <a href="{{ get_field('skincare') }}"
                    class="btn btn--outline post__button mt-2 inline-block">Skincare</a>
            </div>

            <span class="dupe-banner__viewall text-[17px] mt-[3rem] text-primary font-secondary">You can see all our
                dupes <span class="underline">here</span>
            </span>
        </div>
        <div class="w-full lg:w-3/4 pt-[3rem] lg:pt-[0px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 dupe-banner__grid gap-[2rem]">
                @if (have_rows('dupe'))
                    @while (have_rows('dupe'))
                        @php(the_row())
                        <div class="dupe-banner__product flex flex-col md:flex-row">
                            <div class="dupe-banner__image w-full md:w-1/2">
                                <img class="h-full w-full" src="{{ get_sub_field('dupe_image') }}">
                            </div>
                            <div class="dupe-banner__content w-full md:w-1/2 bg-white py-[1rem] px-[2rem] text-primary">
                                <div class="dupe-banner__badge mb-[0.5rem] font-bold font-secondary uppercase">
                                    {{ get_sub_field('savings') }}
                                </div>
                                <h4
                                    class="dupe-banner__product-title font-secondary font-semibold mt-[1rem] text-primary text-[14px] uppercase">
                                    {{ get_sub_field('title') }}</h4>
                                <div
                                    class="dupe-banner__description text-[14px] text-primary font-light font-secondary pt-[1rem]">
                                    {{ get_sub_field('desription') }}
                                    {{-- Get the link field value --}}
                                    <div
                                        class="dupe-banner__buywrap mt-[1rem] font-secondary text-primary font-secondary uppercase text-[14px]">
                                        @php($link = get_sub_field('buy_now_button'))
                                    </div>
                                    {{-- Check if the link field has a value --}}
                                    @if ($link)
                                        {{-- Retrieve the subfield values --}}
                                        @php($url = $link['url'])
                                        @php($title = $link['title'])
                                        @php($target = $link['target'])

                                        {{-- Output the subfield values within an <a> tag --}}
                                        <a class="flex flex-row font-secondary text-primary font-secondary uppercase text-[14px] font-medium"
                                            href="{{ $url }}" target="{{ $target }}"><svg
                                                class="mr-[1rem]" xmlns="http://www.w3.org/2000/svg" width="20"
                                                height="20" viewBox="0 0 20 20">
                                                <g id="Group_2004" data-name="Group 2004"
                                                    transform="translate(-502.738 -7457.566)">
                                                    <circle id="Ellipse_99" data-name="Ellipse 99" cx="10"
                                                        cy="10" r="10"
                                                        transform="translate(502.738 7457.566)" fill="#b33558" />
                                                    <path id="Icon_awesome-shopping-cart"
                                                        data-name="Icon awesome-shopping-cart"
                                                        d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                                        transform="translate(506.9 7463.176)" fill="#fff" />
                                                </g>
                                            </svg>
                                            {{ $title }}</a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    @endwhile
                @endif
            </div>
        </div>
    </div>
</section>
