{{--
  Title: Half Columns
  Description: Half Columns
  Category: formatting
  Icon: cart
  Keywords: Half columns
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true

--}}

<section class="half-column__section container mx-auto mt-[4rem]">
    <div class="half-column__content align-middle">
        <div class="flex flex-wrap items-center">
            <div class="half-column__image-container w-full lg:w-1/2 bg-cover py-[4rem] px-[3rem] self-stretch flex flex-col justify-center"
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
            </div>
            <div class="half-column__text-container relative p-6 md:p-[8rem] md:py-[4rem] w-full lg:w-1/2 mt-6 md:mt-0 bg-cover self-stretch"
                style="background-image: url({{ get_field('background_image_right') }});">
                <h2 class="text-[40px] font-bold font-primary text-primary text-center mb-[2rem]">
                    {{ get_field('column_title') }}
                </h2>
                <img class="absolute left w-full bar-spacer"
                    src="https://mamabella.dashdev.uk/app/uploads/2023/07/Group-2003.png">
                <div class="team_wrapper pt-[1.5rem]">
                    @if (have_rows('team_members'))
                        @while (have_rows('team_members'))
                            @php the_row() @endphp
                            <div
                                class="team_member py-[1.5rem] px-[1rem] mt-[3rem] grid grid-cols-3 mb-[1rem] bg-white border-2 border-secondary rounded-md flex justify-center">
                                <div class="team_member--image block mx-auto self-center col-span-1 ">
                                    <img class="self-center	" src="{{ get_sub_field('photo') }}">
                                </div>
                                <div class="team_member__content col-span-2">
                                    <h4 class="text-[17px] text-primary font-semibold">{{ get_sub_field('name') }} </h4>
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
        </div>
    </div>
</section>
