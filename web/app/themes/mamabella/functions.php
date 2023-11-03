<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });



/*
|--------------------------------------------------------------------------
| Register New block file
|--------------------------------------------------------------------------
|
| Register new file for blocks
|
*/


    add_filter('sage-acf-gutenberg-blocks-templates', function ($folders) { 
        $folders[] = 'views/blocks/component-blocks'; // Adds your folder
        $folders[] = 'views/blocks/standalone-elements'; 
        return $folders;
    });


    add_filter( 'facetwp_is_main_query', function( $bool, $query ) {
        return ( true === $query->get( 'facetwp' ) ) ? true : $bool;
    }, 10, 2 );



    add_filter( 'block_categories_all' , function( $categories ) {

        // Adding a new category.
        $categories[] = array(
            'slug'  => 'custom-layouts',
            'title' => 'Standalone Layouts'
        );
    
        return $categories;
    } );


/*
|--------------------------------------------------------------------------
| Endpoint for posts
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Search function
|--------------------------------------------------------------------------
*/
  // Modify the JOIN clause to include term relationships and taxonomy tables
add_filter('posts_join', function ($join, $query) {
    global $wpdb;

    if ($query->is_search()) {
        $join .= " LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id";
        $join .= " LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
        $join .= " LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id";
    }

    return $join;
}, 10, 2);

// Modify the WHERE clause to search in terms (categories, tags, etc.)
add_filter('posts_where', function ($where, $query) {
    global $wpdb;

    if ($query->is_search()) {
        $search_term = $wpdb->esc_like($query->get('s')); // Escape the search term for use in a LIKE expression
        $where .= $wpdb->prepare(" OR t.name LIKE %s", '%' . $search_term . '%'); // Prepare the SQL using placeholders
    }

    return $where;
}, 10, 2);

// Adjust the main search query using pre_get_posts
add_action('pre_get_posts', function ($query) {
    if ($query->is_search() && $query->is_main_query()) {
        // Set the post type (change as needed)
        $query->set('post_type', 'post');
        
        // Optionally, add more filters here if needed
    }
});


//  Custom styling

add_action('admin_head', 'admin_editor_styles');

function admin_editor_styles () {
  echo '<style>
  .editor-styles-wrapper {
    padding: 40px !important;
    background: #f5f5f5;
  }
  
  </style>';
}