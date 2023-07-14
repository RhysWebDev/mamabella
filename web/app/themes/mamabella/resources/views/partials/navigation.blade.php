@php
    use Log1x\Navi\Navi;
    $navigation = (new Navi())->build('primary_navigation');
@endphp

<nav class="nav-primary flex md:gap-x-5 2xl:gap-x-10 items-center im-simple relative">
    @if ($navigation->isNotEmpty())
        <div class="menu-items-wrapper flex justify-between w-full">
            @foreach ($navigation->toArray() as $item)
                <div
                    class="nav-link px-4 relative {{ $item->classes }} @if ($item->children) parent @endif {{ $item->active ? 'current-item' : '' }}">
                    <a href="{{ $item->url }}">
                        <i class="menu-icon"></i>{{-- Add your menu item icon here --}}
                        {{ $item->label }}
                    </a>
                </div>
                <div class="menu-separator ">
                    <svg id="Group_1996" data-name="Group 1996" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="23.485" height="21.833"
                        viewBox="0 0 23.485 21.833">
                        <defs>
                            <clipPath id="clip-path">
                                <rect id="Rectangle_251" data-name="Rectangle 251" width="23.485" height="21.833"
                                    fill="#f9c8c9" />
                            </clipPath>
                        </defs>
                        <g id="Group_96" data-name="Group 96" clip-path="url(#clip-path)">
                            <path id="Path_116" data-name="Path 116"
                                d="M23.485,10.842a13.228,13.228,0,0,1-2.163-.088c-4.1-.617-7.557-2.165-8.817-6.575-.382-1.337-.587-2.725-.892-4.178-.109.883-.144,1.653-.306,2.394-.766,3.5-2.271,6.493-6.035,7.514A23.442,23.442,0,0,1,0,10.785c.014.088.027.176.037.266a25.023,25.023,0,0,1,3.638.473c3.492.713,6.083,2.578,7.075,6.183.378,1.373.657,2.774.973,4.126.1-.714.162-1.48.32-2.224.779-3.664,2.426-6.687,6.356-7.68a27.161,27.161,0,0,1,5.052-.867c.009-.074.021-.148.033-.221"
                                fill="#f9c8c9" />
                        </g>
                    </svg>

                </div>{{-- Add a div for the menu separator/icon --}}
            @endforeach
        </div>
        @foreach ($navigation->toArray() as $item)
            @if ($item->children)
                <div
                    class="submenu submenu_lvl_1 pl-8 2lg:pl-6 h-auto 2lg:absolute 2lg:bg-primary-dark 2lg:text-white w-max z-40 2lg:shadow-xl p-4 2lg:p-6 overflow-visible">
                    <div class="flex flex-col gap-y-4 im-simple">
                        @foreach ($item->children as $child)
                            @if ($loop->index === 0)
                                <div
                                    class="nav-link im-base {{ $child->classes }} @if ($item->children) has-submenu parent @endif {{ $child->active ? 'current-item' : '' }}">
                                    <a href="{{ $child->url }}">
                                        <i class="submenu-icon"></i>{{-- Add your submenu item icon here --}}
                                        {{ $child->label }}
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        @endforeach
    @endif
</nav>
