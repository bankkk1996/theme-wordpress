<?php


function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// Adds dynamic Title Tag Support
function THNic_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
	    'flex-height' => true,
	    'flex-width'  => true,
	) );
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
	add_theme_support('html5', array('search-form'));
	add_post_type_support( 'page', 'excerpt' );
	add_post_type_support( 'post', 'excerpt' );

}

add_action('after_setup_theme', 'THNic_theme_support');



function THNic_menus(){
    $locations = array(
        'primary' => 'Primary Menu',
        'second' => 'Second Menu'
    );
    register_nav_menus($locations);
}

add_action('init', 'THNic_menus');

function theme_widgets_init() {
    register_sidebar(array(
        'name'          => 'Home Page Top Widget',
        'id'            => 'home_page_top_widget',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'theme_widgets_init');



function THNic_register_scripts(){
    wp_enqueue_script('THNic-js', get_template_directory_uri() . "/main.js",array(),'5.0.2',true);
    wp_enqueue_script('THNic-Bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",array(),'5.0.2',true);
}
add_action('wp_enqueue_scripts', 'THNic_register_scripts');


function THNic_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('THNic-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('THNic-awesome',  "https://use.fontawesome.com/releases/v5.14.0/css/all.css", array(), $version, 'all');
    wp_enqueue_style('THNic-bootstrap',  "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'THNic_register_styles');

function posts_link_attributes() {
  return 'class="page-link"';
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');



function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav ><ul class="pagination">' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li >…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf( '<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></nav>' . "\n";

}

function wp_example_excerpt_length() {
    return 15;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length');

function wp_example_excerpt_length_th($length) {
    return 100;
}
add_filter( 'excerpt_length', 'wp_example_excerpt_length_th');
function replaceCategoryName ($title) {

   $title =  single_cat_title( '', false );
   return $title;
}
add_filter( 'get_the_archive_title', 'replaceCategoryName');
?>
