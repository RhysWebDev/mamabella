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
    
        $breadcrumbs[] = [
            'url' => get_permalink($post),
            'text' => get_the_title($post),
        ];
    }
    
    // Taxonomy archive
    if (is_tax() || is_category() || is_tag()) {
        $term = get_queried_object();
        $taxonomy = $term->taxonomy;
    
        $ancestors = get_ancestors($term->term_id, $taxonomy);
    
        if (!empty($ancestors)) {
            $ancestors = array_reverse($ancestors);
    
            foreach ($ancestors as $ancestor) {
                $ancestor_term = get_term($ancestor, $taxonomy);
    
                $breadcrumbs[] = [
                    'url' => get_term_link($ancestor_term),
                    'text' => $ancestor_term->name,
                ];
            }
        }
    
        $breadcrumbs[] = [
            'url' => get_term_link($term),
            'text' => $term->name,
        ];
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
    <ul id="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            <li>
                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['text'] }}</a>
            </li>
        @endforeach
    </ul>
@endif
