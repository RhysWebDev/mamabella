{{--
  Title: Dupe Product Block
  Description: Displays a section for dupe products
  Category: custom-layouts
  Icon: cart
  Mode: edit
  Align: none
  SupportsAlign: left right
  SupportsMode: true
  SupportsMultiple: true
--}}

<div class="decorated-title__dupe w-full mb-[3rem] max-w-[690px] mx-auto w-full" id="{{ get_field('id') }}">
    @php($dupePost = get_field('dupe_product'))
    @if ($dupePost)
        <div class="grid grid-cols-1 dupe-banner__grid">
            <a href="{{ get_permalink($dupePost->ID) }}">
                <div class="dupe-banner__product flex flex-col">
                    <div class="dupe-banner__image w-full">
                        {!! get_the_post_thumbnail($dupePost->ID, 'full') !!}
                    </div>
                    <div class="decorated-title__content-dupe w-full bg-white py-[1rem] px-[2rem] text-primary">
                        <div
                            class="dupe-banner__badge mb-[0.5rem] font-bold text-[14px] px-[2rem] font-secondary uppercase">
                            SAVE {{ get_field('savings', $dupePost->ID) }}
                        </div>
                        <h4
                            class="dupe-banner__product-title font-secondary font-semibold mt-[1rem] text-primary text-[14px] uppercase">
                            {{ esc_html($dupePost->post_title) }}
                        </h4>
                        <div
                            class="dupe-banner__description text-[14px] text-primary font-light font-secondary normal-case">
                            {!! get_field('description', $dupePost->ID) !!}
                        </div>
                        <a class="text-primary font-secondary uppercase text-[14px] font-medium flex flex-row mt-[1rem]"
                            href="{{ get_permalink($dupePost->ID) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-[1rem]" width="20" height="20"
                                viewBox="0 0 20 20">
                                <g id="Group_2004" data-name="Group 2004" transform="translate(-502.738 -7457.566)">
                                    <circle id="Ellipse_99" data-name="Ellipse 99" cx="10" cy="10"
                                        r="10" transform="translate(502.738 7457.566)" fill="#b33558" />
                                    <path id="Icon_awesome-shopping-cart" data-name="Icon awesome-shopping-cart"
                                        d="M9.466,5.4l.847-3.728a.43.43,0,0,0-.419-.526H2.854l-.164-.8A.43.43,0,0,0,2.268,0H.43A.43.43,0,0,0,0,.43V.717a.43.43,0,0,0,.43.43H1.683L2.942,7.3a1,1,0,1,0,1.2.154H7.9a1,1,0,1,0,1.14-.187l.1-.435a.43.43,0,0,0-.419-.526H3.91l-.117-.574H9.047A.43.43,0,0,0,9.466,5.4Z"
                                        transform="translate(506.9 7463.176)" fill="#fff" />
                                </g>
                            </svg>
                            <span class="underline text-[#79839C] font-medium">Buy Now for
                                {{ get_field('price', $dupePost->ID) }}</span>
                        </a>
                        <a class="btn btn--primary post__button mt-2 inline-block font-secondary text-primary font-secondary uppercase text-[14px] font-medium mt-[1rem]"
                            href="{{ get_permalink($dupePost->ID) }}">Learn More</a>
                    </div>
                </div>
            </a>
        </div>
    @endif
</div>
