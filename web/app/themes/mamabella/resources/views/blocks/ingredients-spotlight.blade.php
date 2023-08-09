{{--
  Title: Ingredient Spotlight
  Description: Ingredient Spotlight
  Category: formatting
  Icon: search
  Keywords: product grid, grid, search
  Mode: edit
  Align: none
  PostTypes: page post
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: false
  EnqueueStyle: styles/style.scss
  EnqueueScript: scripts/script.js
  EnqueueAssets: path/to/asset
--}}


<section data-{{ $block['id'] }} class=" container boxed mx-auto max-w-[1520px] mx-auto bg-white">

    <div data-{{ $block['id'] }}
        class="flex items-center hero bg-cover bg-center container boxed mx-auto max-w-[1520px] mx-auto">
        <div class="max-w-[1270px] mx-auto gap-5 w-full py-[4rem] flex flex-row">
            <div class="flex flex-col">
                @include('partials.breadcrumbs')
                <div class="flex flex-row gap-x-[2rem] mt-[2rem]">
                    <img src="https://mamabella.dashdev.uk/app/uploads/2023/08/dipper.png">
                    <h1 class="text-primary font-primary font-medium text-[50px]"> {!! get_the_title() !!} </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="alphabet-filter bg-darkPink">
        @php
            $alphabetArray = range('a', 'z');
        @endphp
        <div class="max-w-[1130px] mx-auto py-[1.5rem]" id="a-z">
            @foreach ($alphabetArray as $letter)
                <a class="text-white uppercase text-[30px] font-secondary tracking-widest" href="#{{ $letter }}">
                    {{ $letter }} </a>
            @endforeach
        </div>

    </div>

    <div class="featured-article-ingredients mt-8 mb-8 container mx-auto max-w-[1270px] flex flex-col md:flex-row">


        <div class="filter_box bg-[#FEF1F1] max-w-[390px] md:min-w-[390px] min-h-[460px] rounded-[10px] p-[3rem]">
            <h2 class="font-primary text-primary text-[30px] text-center">Filter</h2>
        </div>


        <div class="featured-article-inner flex flex-col lg:flex-row-reverse w-full">
            <div class="flex flex-col lg:flex-row">
                <div
                    class="bg-cover bg-darkPink bg-center featured-article-ingredients__left justify-center flex flex-col items-center rounded-br-[70px] md:min-w-[447px]">
                    <svg class="featured-article-ingredients__badge" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="93.522" height="93.457"
                        viewBox="0 0 93.522 93.457">
                        <defs>
                            <clipPath id="a">
                                <rect width="93.522" height="93.457" fill="none" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#a)">
                            <path
                                d="M74.288,305.439l.55.692-.6,1.121-1.185-.091-2.844-1.523-.733-.936.6-1.121.881.074,3.08-5.753c1.323-2.47,3.506-3.267,5.814-2.031l2,1.07c2.308,1.236,2.928,3.554,1.614,6.008L80.382,308.7l.55.692-.6,1.121-1.185-.091L76.3,308.9l-.733-.936.6-1.121.881.074.835-1.56-2.763-1.479Zm6.035-4.631c.679-1.268.521-1.833-.5-2.381-1.089-.583-1.616-.3-2.26.9l-1.366,2.551,2.763,1.479Z"
                                transform="translate(-51.865 -220.447)" fill="#ee8076" />
                            <path
                                d="M152.929,325.968l1.067.561-.1,1.268-1.12.4-2.28-.171-1.09-.988-1.328-4.24-.809-.061-.219,2.923.783.41-.1,1.268-1.12.4-3.18-.238-1.049-.559.095-1.268.835-.289.665-8.879-.783-.41.095-1.269,1.3-.383,5.5.412c2.684.2,4.275,1.411,4.081,4l-.066.883a3.032,3.032,0,0,1-2.313,2.988Zm-4.219-5.122c1.158.087,1.605-.212,1.691-1.352l.073-.974c.085-1.14-.321-1.392-1.479-1.479l-1.287-.1-.285,3.805Z"
                                transform="translate(-106.3 -234.737)" fill="#ee8076" />
                            <path
                                d="M204.608,308.753c-.334.107-.387.182-.345.614l.219,2.2-1.58.506-.86-2.687c-.545-1.7-.266-2.1,1.174-2.563l6.936-2.22c1.44-.461,1.9-.3,2.444,1.405l.86,2.687-1.58.506-1.1-1.914c-.217-.376-.3-.406-.638-.3l-.966.309,2.653,8.288,1.066.065.388,1.212-.89.788-3.424,1.1-1.182-.125L207.4,317.4l.83-.672-2.652-8.288Z"
                                transform="translate(-150.636 -227.226)" fill="#ee8076" />
                            <path
                                d="M262.969,295.035l-.6,1.025-2.963,2.132-1.163.246-.743-1.032.582-.9-5.158-7.168-1.034.267-.743-1.033.6-1.024,2.963-2.132,1.163-.246.743,1.033-.582.9,5.157,7.168,1.034-.267Z"
                                transform="translate(-187.487 -212.891)" fill="#ee8076" />
                            <path
                                d="M285.619,256.844c-2.237-1.687-2.825-4-.706-6.811a5.913,5.913,0,0,1,2.26-1.712c.155-.206.108-.45-.16-.767l.8-1.06,3.43,2.585-1.032,1.369c-1.566-.465-2.418-.253-3.117.674-.743.986-.557,1.566.533,2.387l3.96,2.985c1.045.788,1.775.738,2.619-.381a3.711,3.711,0,0,0,.561-3.224.63.63,0,0,1,1.188-.351,4.671,4.671,0,0,1-.279,5.607c-2.019,2.679-4.5,2.883-6.742,1.2Z"
                                transform="translate(-211.713 -184.014)" fill="#ee8076" />
                            <path
                                d="M309.682,210.762l.086,1.065,8.337,2.492.776-2.6-2.536-1.816.386-1.289,4.027,1.2.718,1.138-2.148,7.189-.824,1.081-1.219-.364-.1-.878-8.532-2.55-.568.677-1.219-.364-.148-1.179.924-3.091.824-1.082Z"
                                transform="translate(-228.972 -155.738)" fill="#ee8076" />
                            <path
                                d="M320.733,150.707l-1.041-.352-.062-.883.982-.494,2.078-.146,1.041.352.062.883-.982.494.117,1.673,3.274-.229-.247-3.531-2.093-.593-.094-1.342,3.292-.231,1.073.812.557,7.945-.389,1.3-1.269.089-.406-.785-8.883.622-.293.834-1.269.089-.567-1.235-.6-8.552,4.212-.3.09,1.287-1.911.688.245,3.494,3.2-.224Z"
                                transform="translate(-235.168 -109.224)" fill="#ee8076" />
                            <path
                                d="M12.164,196.5l.175-.866,1.245-.262.693.965.665,3.157-.245,1.163-1.245.263-.51-.722-7.378,1.555c-2.363.5-3.62-.368-3.95-1.937L.292,193.538l4.311-.909.285,1.353-1.979.982.563,2.67c.1.469.483.6.934.5l2.688-.567-.338-1.605-1.08-.206-.182-.866.9-.624,2.038-.43,1.08.206.182.866-.9.624.338,1.605Z"
                                transform="translate(-0.218 -143.803)" fill="#fff" />
                            <path
                                d="M5.967,144.877,5,144.348l.094-.88,1.053-.313,2.071.222.963.529-.094.88-1.053.314-.179,1.668,3.262.35L11.5,143.6l-1.956-.951.144-1.338,3.281.352.914.988-.849,7.918-.612,1.214-1.265-.136-.262-.844-8.853-.949-.435.769-1.265-.136L0,149.169l.914-8.523,4.2.45-.138,1.283-2,.342L2.6,146.2l3.189.342Z"
                                transform="translate(0 -104.997)" fill="#fff" />
                            <path
                                d="M25.088,95.62l.674-.571,1.139.566L26.847,96.8l-1.435,2.889-.913.761-1.139-.566.047-.882-5.845-2.9c-2.51-1.246-3.373-3.4-2.209-5.748l1.008-2.031c1.164-2.345,3.463-3.035,5.956-1.8l5.845,2.9.674-.571,1.139.566-.055,1.188L28.488,93.5l-.913.761L26.435,93.7l.047-.882L24.9,92.026,23.5,94.833Zm-4.814-5.89c-1.288-.64-1.848-.465-2.365.575-.549,1.106-.251,1.625.971,2.232l2.592,1.287,1.394-2.807Z"
                                transform="translate(-11.081 -64.142)" fill="#fff" />
                            <path
                                d="M45.24,43.267c-.253.242-.269.333-.043.7l1.154,1.879-1.2,1.145L43.2,44.952c-1.233-1.3-1.156-1.776-.061-2.818l5.273-5.022c1.095-1.042,1.579-1.1,2.812.2l1.945,2.042-1.2,1.144L50.15,39.254c-.359-.243-.451-.233-.7.009l-.735.7,6,6.3.988-.406.877.921-.457,1.1-2.6,2.479-1.118.4-.877-.921.454-.967-6-6.3Z"
                                transform="translate(-31.579 -27.124)" fill="#fff" />
                            <path
                                d="M94.5,10.038,94,8.869l.761-.847,2.966-1.269,1.188.013.5,1.17-.608.641,2.567,6c1.1,2.576.377,4.771-2,5.786l-1.949.834c-2.373,1.015-4.553.043-5.648-2.516l-2.567-6-.883,0-.5-1.169.811-.869,2.966-1.269,1.138.034.5,1.17-.557.619,2.727,6.373c.566,1.322,1.139,1.538,2.055,1.146.966-.413,1.126-1.023.589-2.277l-2.727-6.372Z"
                                transform="translate(-65.571 -5.041)" fill="#fff" />
                            <path
                                d="M161.007,10.739l1.123.437.048,1.271-1.069.52-2.285.086-1.194-.859-1.795-4.065-.811.031.11,2.929.824.32.048,1.271-1.069.52-3.187.12-1.1-.438L150.6,11.61l.8-.381-.335-8.9-.824-.319L150.19.741l1.253-.527,5.508-.207c2.69-.1,4.407.923,4.5,3.52l.033.884a3.032,3.032,0,0,1-1.963,3.228ZM156.24,6.122c1.161-.044,1.572-.391,1.529-1.533l-.036-.976c-.043-1.142-.475-1.347-1.635-1.3l-1.29.048.143,3.813Z"
                                transform="translate(-112.121 0)" fill="#fff" />
                            <path
                                d="M206.357,10.315l.7-.843.845.262.105,1.094-.616,1.99-.7.844-.846-.262-.105-1.094-1.6-.5-.97,3.135,3.382,1.046,1.309-1.737,1.286.4-.976,3.153-1.145.707-7.609-2.354-1.073-.834.376-1.215.879-.095,2.632-8.507-.672-.574.376-1.215,1.357-.082,8.19,2.534L210.232,10.2,209,9.821l.049-2.03L205.7,6.755l-.948,3.064Z"
                                transform="translate(-148.068 -2.713)" fill="#fff" />
                            <path
                                d="M252.058,33.5l-2.482,3.323c-1.676,2.245-4.024,2.585-6.181.975l-4.623-3.453L238.04,33.2l.761-1.019.86.2,5.327-7.134-.441-.766.761-1.019,1.306.377,4.623,3.453c2.157,1.611,2.486,3.973.82,6.2m-9.27,1.014,1.093.816c.93.7,1.491.653,2.351-.5l2.934-3.929c.86-1.152.774-1.745-.156-2.44l-1.093-.816Z"
                                transform="translate(-177.704 -17.517)" fill="#fff" />
                            <path
                                d="M38.225,252.692a7.07,7.07,0,0,1-1,.576c-2.029.888-4.035,1.173-5.86-.463-.554-.5-1.042-1.065-1.594-1.636.2.431.406.788.544,1.17.65,1.8.822,3.583-.59,5.117a12.512,12.512,0,0,1-2.135,1.9c.031.036.063.072.093.11a13.391,13.391,0,0,1,1.78-.822,4.5,4.5,0,0,1,4.96.782c.562.514,1.087,1.067,1.615,1.589-.158-.352-.348-.715-.489-1.1-.691-1.879-.807-3.715.688-5.283a14.5,14.5,0,0,1,2.038-1.831c-.017-.036-.032-.073-.048-.11"
                                transform="translate(-20.595 -187.505)" fill="#ee8076" />
                            <path
                                d="M298.811,88a7.045,7.045,0,0,1-1,.576c-2.029.888-4.035,1.173-5.86-.463-.554-.5-1.042-1.065-1.594-1.636.2.431.406.788.544,1.17.65,1.8.822,3.583-.59,5.117a12.515,12.515,0,0,1-2.135,1.9c.031.036.063.072.092.11a13.394,13.394,0,0,1,1.78-.822,4.5,4.5,0,0,1,4.96.782c.562.514,1.087,1.067,1.615,1.589-.158-.352-.348-.715-.489-1.1-.691-1.879-.807-3.715.688-5.283a14.5,14.5,0,0,1,2.038-1.831c-.017-.036-.032-.073-.048-.11"
                                transform="translate(-215.13 -64.561)" fill="#ee8076" />
                        </g>
                    </svg>
                    <div class="p-8 flex flex-col w-full featured-article-ingredients__content gap-y-[1rem]">
                        <div class="featured-article-ingredients__inner">
                            <h2
                                class="text-[30px] text-white font-primary max-w-[339px] pt-[5rem] featured-article-ingredients__title">
                                {!! get_field('featured_article_title') !!}</h2>
                            <a href="{{ get_field('featured_article_link') }}"
                                class="mt-4 inline-block btn btn--secondary">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-[374px]">
                <img src="{{ get_field('featured_article_image') }}" alt="Featured Image"
                    class="w-full h-full object-cover rounded-tl-[70px]">
            </div>
        </div>
    </div>


    <div
        class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8 md:mt-0 max-w-[1260px] mx-auto gap-y-[2rem] justify-items-center pb-[4rem]">
        @php
            // Assuming the ACF field name is 'post_type_selection'
            $postTypeSelection = get_field('post_category');
            
            $queryArgs = [
                'posts_per_page' => 8,
                'meta_key' => '_thumbnail_id',
            ];
            
            // Modify the query based on the selection
            if ($postTypeSelection === 'Reviews') {
                $queryArgs['post_type'] = 'review'; // Assuming the custom post type name for Reviews is 'reviews'
            } elseif ($postTypeSelection === 'Deals') {
                $queryArgs['post_type'] = 'deals'; // Assuming the custom post type name for Deals is 'deals'
            } elseif ($postTypeSelection === 'How to') {
                $queryArgs['post_type'] = 'how-to';
            } else {
                $queryArgs['post_type'] = 'post';
            }
            
            $otherPosts = get_posts($queryArgs);
        @endphp

        @foreach ($otherPosts as $index => $otherPost)
            @php
                $title = get_the_title($otherPost);
                $permalink = get_permalink($otherPost);
                $thumbnail = get_the_post_thumbnail($otherPost, 'full');
                $category = get_the_category($otherPost)[0]->name;
            @endphp

            <div class="max-w-[374px] post__wrap sm:mx-auto w-full">
                <div class="relative">
                    <div class="mb-0 relative post__image-wrap post-grid-with-filter__img">
                        <a class="w-full post__image" href="{{ $permalink }}">
                            {!! $thumbnail !!}
                        </a>
                        <div
                            class="post__category-ingredients absolute bottom-0 left-0 text-white px-2 py-1 uppercase font-secondary text-[18px]">
                            {{ $category }}
                        </div>
                    </div>

                    <div class="post__content-wrap-ingredients p-[2.4rem] pr-[2.8rem]">
                        <h3
                            class="uppercase post__title text-xl font-semibold mb-3 @if ($postTypeSelection === 'Reviews') min-h-fit  @else min-h-[84px] @endif ">
                            {{ $title }}
                        </h3>
                        <a href="{{ $permalink }}" class="btn btn--primary post__button mt-2 inline-block">READ</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
