<article
    @php(post_class('h-entry, bg-[#F6F9FB]'))>

    <div class="article__wrap max-w-[1520px] boxed mx-auto bg-white ">
      <div class="article__header max-w-[1118px] mx-auto pt-[3rem] px-[2rem] md:px-[0rem]">
        @include('partials.breadcrumbs')
        <h1 class="text-[50px] font-primary text-primary mb-[2rem]"> {{ the_title() }} </h1>
        <div class="article__info flex mb-[2rem] justify-between">
          <div class="left-side-intro flex-row flex">
            <img class="mr-[1.5rem] max-w-[150px]" src="{{ get_field('author_image') }}">

            <div class="flex flex-col gap-y-[1rem] align-center">
              <div class="flex-row flex gap-x-[5px] hearts">
              @for ($i = 0; $i < get_field('rating'); $i++) 
              <svg xmlns="http://www.w3.org/2000/svg" width="22.191" height="23" viewBox="0 0 22.191 23">
                <path id="Icon_ionic-ios-heart" data-name="Icon ionic-ios-heart" d="M19.591,3.937h-.053a5.979,5.979,0,0,0-5.068,2.99A5.979,5.979,0,0,0,9.4,3.937H9.349a6.284,6.284,0,0,0-5.974,6.5,14.707,14.707,0,0,0,2.55,7.63,46.236,46.236,0,0,0,8.546,8.872,46.236,46.236,0,0,0,8.546-8.872,14.707,14.707,0,0,0,2.55-7.63A6.284,6.284,0,0,0,19.591,3.937Z" transform="translate(-3.375 -3.938)" fill="#b33558"/>
              </svg>
              @endfor
              </div>
              <div class="flex flex-row gap-x-[1rem] items-center">
                  <div class="text-secondary font-secondary">{{ get_the_author_meta('display_name') }} </div>
                  <div> | </div>
                  <div class="text-primary font-secondary">Updated: {{ get_the_modified_date() }} </div>
              </div>
            </div>
        </div>

        @php ($current_url = url()->current())
        
    <div class="social-share flex flex-row gap-x-[10px]">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $current_url }}" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
            <g id="Group_2006" data-name="Group 2006" transform="translate(-1362 -495)">
                <circle id="Ellipse_37" data-name="Ellipse 37" cx="17" cy="17" r="17"
                    transform="translate(1362 495)" fill="#3b5897" />
                <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                    d="M10.618,10.125l.5-3.258H7.992V4.753a1.629,1.629,0,0,1,1.837-1.76H11.25V.22A17.329,17.329,0,0,0,8.728,0C6.153,0,4.471,1.56,4.471,4.385V6.867H1.609v3.258H4.471V18H7.992V10.125Z"
                    transform="translate(1371.186 503)" fill="#fff" />
            </g>
        </svg>
    </a>
    <a href="https://twitter.com/share?url={{ $current_url }}&text=Check%20this%20out!" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
            <g id="Group_2005" data-name="Group 2005" transform="translate(-1404 -495)">
                <circle id="Ellipse_38" data-name="Ellipse 38" cx="17" cy="17" r="17"
                    transform="translate(1404 495)" fill="#74b4ff" />
                <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter"
                    d="M16.15,7.024c.011.16.011.32.011.48A10.424,10.424,0,0,1,5.665,18,10.425,10.425,0,0,1,0,16.344a7.632,7.632,0,0,0,.891.046,7.388,7.388,0,0,0,4.58-1.576,3.7,3.7,0,0,1-3.449-2.558,4.652,4.652,0,0,0,.7.057,3.9,3.9,0,0,0,.971-.126A3.69,3.69,0,0,1,.731,8.566V8.52A3.715,3.715,0,0,0,2.4,8.989,3.695,3.695,0,0,1,1.256,4.055a10.486,10.486,0,0,0,7.607,3.86,4.165,4.165,0,0,1-.091-.845,3.693,3.693,0,0,1,6.385-2.524A7.263,7.263,0,0,0,17.5,3.655a3.679,3.679,0,0,1-1.622,2.033A7.4,7.4,0,0,0,18,5.117a7.93,7.93,0,0,1-1.85,1.907Z"
                    transform="translate(1412 501.31)" fill="#fff" />
            </g>
        </svg>
    </a>
    <a href="https://pinterest.com/pin/create/button/?url={{ $current_url }}&media=[IMAGE_URL]&description=Check%20this%20out!"
        target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
            <g id="Group_2004" data-name="Group 2004" transform="translate(-1446 -495)">
                <circle id="Ellipse_39" data-name="Ellipse 39" cx="17" cy="17" r="17"
                    transform="translate(1446 495)" fill="#bd081d" />
                <path id="Icon_awesome-pinterest-p" data-name="Icon awesome-pinterest-p"
                    d="M7.172.457C3.565.457,0,2.862,0,6.754c0,2.475,1.392,3.881,2.236,3.881.348,0,.548-.97.548-1.245,0-.327-.833-1.023-.833-2.384a4.751,4.751,0,0,1,4.936-4.83c2.394,0,4.166,1.361,4.166,3.86,0,1.867-.749,5.368-3.175,5.368a1.561,1.561,0,0,1-1.624-1.54c0-1.329.928-2.616.928-3.987,0-2.327-3.3-1.905-3.3.907a4.13,4.13,0,0,0,.338,1.782c-.485,2.088-1.477,5.2-1.477,7.351,0,.664.095,1.318.158,1.983.12.134.06.12.243.053,1.772-2.426,1.709-2.9,2.51-6.075a2.851,2.851,0,0,0,2.436,1.266c3.734,0,5.411-3.639,5.411-6.919C13.5,2.735,10.484.457,7.172.457Z"
                    transform="translate(1456.25 502.77)" fill="#fff" />
            </g>
        </svg>
    </a>
    <a href="mailto:?subject=Check this out!&body=Take a look at this: {{ $current_url }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
            <g id="Group_2003" data-name="Group 2003" transform="translate(-1488 -495)">
                <circle id="Ellipse_40" data-name="Ellipse 40" cx="17" cy="17" r="17"
                    transform="translate(1488 495)" fill="#3d4d63" />
                <path id="Icon_awesome-envelope" data-name="Icon awesome-envelope"
                    d="M17.659,8.958A.212.212,0,0,1,18,9.123v7.189A1.688,1.688,0,0,1,16.313,18H1.688A1.688,1.688,0,0,1,0,16.313V9.127a.21.21,0,0,1,.341-.165c.788.612,1.832,1.389,5.418,3.994C6.5,13.5,7.752,14.636,9,14.629c1.255.011,2.531-1.153,3.245-1.673C15.831,10.35,16.871,9.57,17.659,8.958ZM9,13.5c.816.014,1.99-1.027,2.58-1.455,4.665-3.386,5.02-3.681,6.1-4.525A.841.841,0,0,0,18,6.855V6.187A1.688,1.688,0,0,0,16.313,4.5H1.688A1.688,1.688,0,0,0,0,6.187v.668a.846.846,0,0,0,.323.664c1.076.84,1.431,1.139,6.1,4.525C7.01,12.473,8.184,13.514,9,13.5Z"
                    transform="translate(1496 500.75)" fill="#fff" />
            </g>
        </svg>
    </a>

    </div>
    </div>

    <img class="w-full object-cover max-h-[511px]" src="{{ get_the_post_thumbnail_url() }}">
    <span class="text-[14px] font-primary">{{ get_field('image_credit') }}
        </div>

        <div class="mx-auto max-w-[1118px]">
            <div class="article__wrapper flex flex-col lg:flex-row w-full">
                <div class="e-content flex flex-col pt-[3rem] pr-[1rem] relative">
                    {!! the_content() !!}
                </div>

                <div class="checklist-box">
                    <div
                        class="post-specific-sidebar md:pl-[1rem] article__sidebar flex flex-col md:max-w-[336px] md:min-w-[336px] pt-[3rem]">
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
</article>
<footer>
    {!! wp_link_pages([
        'echo' => 0,
        'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
        'after' => '</p></nav>',
    ]) !!}
</footer>
