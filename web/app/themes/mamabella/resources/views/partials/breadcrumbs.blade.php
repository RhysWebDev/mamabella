@php
    $breadcrumbs = [];
    
    // Home link
    $breadcrumbs[] = [
        'url' => home_url('/'),
        'text' => __('Home', 'sage'),
    ];
    
    // Single post or page
    if (is_singular()) {
        $post = get_queried_object();
        $post_type = get_post_type_object($post->post_type);
    
        // Get post ancestors
        $ancestors = get_post_ancestors($post->ID);
    
        if (!empty($ancestors)) {
            $ancestors = array_reverse($ancestors);
    
            foreach ($ancestors as $ancestor) {
                $breadcrumbs[] = [
                    'url' => get_permalink($ancestor),
                    'text' => get_the_title($ancestor),
                ];
            }
        }
    
        // Add post type to breadcrumbs (excluding 'post' and 'page')
        if ($post_type && !in_array($post_type->name, ['post', 'page'])) {
            $breadcrumbs[] = [
                'url' => get_post_type_archive_link($post_type->name),
                'text' => $post_type->labels->singular_name,
            ];
        }
    }
    
    // Custom post type archive
    if (is_post_type_archive()) {
        $breadcrumbs[] = [
            'url' => get_post_type_archive_link(get_post_type()),
            'text' => post_type_archive_title('', false),
        ];
    }
@endphp

@if (!empty($breadcrumbs))
    <div id="breadcrumb" class="flex flex-row gap-x-[0.5rem]">
        @foreach ($breadcrumbs as $breadcrumb)
            <div>
                <a class=" @if (is_page(451) || is_page(474)) text-primary @elseif(is_singular()) text-[#C9CDD3] text-[17px] @else text-white @endif"
                    href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['text'] !!}</a>
            </div>
        @endforeach
    </div>
@endif
