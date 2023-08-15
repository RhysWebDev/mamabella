{{--
  Title: About contact
  Description: two columns half and half for about us and contact
  Category: formatting
  Icon: edit
  Keywords: advertisement Sidebar
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
--}}

<section data-{{ $block['id'] }} class="{{ $block['classes'] }} half-column__section container mx-auto mt-[4rem]">
    <div class="half-column__content align-middle">
        <div class="flex flex-col md:flex-row items-center gap-x-[2rem]">
            <div class="half-column__image-container sm:w-full md:w-full lg:w-1/2 bg-cover py-[4rem] px-[3rem] self-stretch flex flex-col justify-center relative rounded-[10px]"
                style="background-image: url({{ get_field('background_image_left') }});">
                <h2
                    class="featured_title text-[40px] md:text-[80px] text-center text-primary font-primary font-bold text-shadow-custom title__stars">
                    {{ get_field('title') }}
                </h2>
                <h5
                    class="text-[20px] text-center font-bold text-primary font-secondary uppercase pb-[2rem] leading-wide">
                    {{ get_field('subtitle') }}
                </h5>
                <div
                    class="half-columns__content mb-[1.5rem] text-[17px] text-primary font-secondary text-center px-[4rem]">
                    {{ get_field('content') }}
                </div>
                <div class="grid grid-cols-2 px-[3rem] ">
                    <div class="sign_off flex flex-col justify-center align-items-center">
                        <h5
                            class="text-[50px] text-primary font-accent title__stars text-primary font-bold font-primary font--signoff leading-[1] text-center">
                            {{ get_field('sign_off') }} <br /> xo </h5>
                    </div>
                    <div class="image">
                        <img class="block mx-auto" src="{{ get_field('image') }}">
                    </div>
                </div>
                <h2 class="text-[40px] font-bold font-primary text-primary text-center mb-[2rem]">
                    {{ get_field('column_title') }}
                </h2>
                <img class="absolute left w-full bar-spacer pt-[2rem] mt-[8rem]"
                    src="https://mamabella.dashdev.uk/app/uploads/2023/08/Group-2003.png">
                <div class="team_wrapper pt-[1.5rem] mt-[4rem] md:mt-[2rem]">
                    @if (have_rows('team_members'))
                        @while (have_rows('team_members'))
                            @php the_row() @endphp
                            <div
                                class="team_member py-[1.5rem] px-[1rem] mt-[1rem] grid grid-cols-3 mb-[1rem] bg-white border-2 border-secondary rounded-md flex justify-center">
                                <div class="team_member--image block mx-auto self-center col-span-1 ">
                                    <img class="self-center	" src="{{ get_sub_field('photo') }}">
                                </div>
                                <div class="team_member__content col-span-2">
                                    <h4 class="text-[17px] text-primary font-semibold">{{ get_sub_field('name') }}
                                    </h4>
                                    <div
                                        class="title text-[14px] font-secondary font-semibold text-secondary text-primary">
                                        {{ get_sub_field('title') }} </div>
                                    <div class="text-[14px] font-secondary"> {{ get_sub_field('bio') }} </div>
                                </div>
                            </div>
                        @endwhile
                    @endif
                </div>
            </div>
            <div class="half-column__text-container relative sm:w-full md:w-full lg:w-1/2 mt-6 md:mt-0 bg-cover self-stretch bg-active rounded-[10px]"
                style="background-image: url({{ get_field('background_image_right') }});">
                <div class="contact__top-section bg-[#3D4D63] px-[3rem] py-[4rem] rounded-[10px]">
                    <h2 class="text-[50px] text-white font-primary"> {{ get_field('contact_title') }} </h2>
                    <div class="text-white text-[17px] font-secondary"> {{ get_field('contact_content') }} </div>
                </div>

                <div class="contact__tabs bg-active">
                    <div class="tabs flex mb-4">
                        <button data-tab="tab1"
                            class="tab active px-4 py-2 text-white bg-primary">{{ get_field('tab_title') }}</button>
                        <button data-tab="tab2"
                            class="tab px-4 py-2 text-primary bg-gray-200">{{ get_field('tab_title_2') }}</button>
                        <button data-tab="tab3"
                            class="tab px-4 py-2 text-primary bg-gray-200">{{ get_field('tab_title_3') }}</button>
                    </div>
                    <div class="px-[3rem] py-[2rem]">
                        <div data-content="tab1" class="tab-content">
                            <!-- Tab 1 Content -->
                            <div class="text-white font-secondary text-[18px] pb-[2rem]">{!! get_field('tab_content') !!}</div>
                            <div class="form-wrapper">
                                {!! do_shortcode('[acfe_form ID="434"]') !!}
                            </div>
                        </div>
                        <div data-content="tab2" class="tab-content hidden">
                            <!-- Tab 2 Content -->
                            <div class="text-white font-secondary text-[18px] pb-[2rem]">{!! get_field('tab_content_2') !!}</div>
                            <div class="form-wrapper">
                                {!! do_shortcode('[acfe_form ID="434"]') !!}
                            </div>
                        </div>
                        <div data-content="tab3" class="tab-content hidden">
                            <!-- Tab 3 Content -->
                            <div class="text-white font-secondary text-[18px] pb-[2rem]">{!! get_field('tab_content_3') !!}</div>
                            <div class="form-wrapper">
                                {!! do_shortcode('[acfe_form ID="434"]') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact__footer flex flex-row py-[4rem] px-[3rem] justify-between">
                    <div class="connect">
                        <span class="text-[20px] text-white font-secondary font-bold tracking-wide">CONNECT</span>
                    </div>
                    <div class="socials flex space-x-4">
                        <a href="https://www.instagram.com/your_username" target="_blank"
                            class="text-secondary hover:text-primary">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://www.facebook.com/your_username" target="_blank"
                            class="text-secondary hover:text-primary">
                            <i class="fab fa-facebook-f fa-lg"></i>
                        </a>
                        <a href="https://twitter.com/your_username" target="_blank"
                            class="text-secondary hover:text-primary">
                            <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a href="https://www.tiktok.com/@your_username" target="_blank"
                            class="text-secondary hover:text-primary">
                            <i class="fab fa-tiktok fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
