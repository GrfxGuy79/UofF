<?php

/*------------------------------
ADD STYLESHEETS
------------------------------*/
function custom_theme_styles()
{
    // BOOTSTRAP CSS
    wp_enqueue_style('bs-style', get_stylesheet_directory_uri() . '/css/bootstrap.css');

    // MAIN STYLE CSS
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
// ADD FUNCTIONALITY TO SITE
add_action('wp_enqueue_scripts', 'custom_theme_styles');

/*------------------------------
ADD JS FILES
------------------------------*/
function custom_theme_scripts()
{
    // BOOTSTRAP JS
    wp_enqueue_script('bs-js', get_stylesheet_directory_uri() . '/js/bootstrap.js', array(), false, true);

    // MAIN JS
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/scripts.js', array(), false, true);

}
// ADD FUNCTIONALITY TO SITE
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*------------------------------
ADD FEATURED IMAGES TO SITE
------------------------------*/
add_theme_support('post-thumbnails');

/*------------------------------
ADD CUSTOM HEADER IMAGE
------------------------------*/
$custom_image_header = array(
    'width' => 520,
    'height' => 150,
    'uploads' => true,
);
// ADD FUNCTIONALITY TO SITE
add_theme_support('custom-header', $custom_image_header);

/*------------------------------
THEME MENUS
------------------------------*/
function my_menus()
{
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
        'footer-left' => __('Left Footer Menu'),
        'footer-middle' => __('Middle Footer Menu'),
        'footer-right' => __('Right Footer Menu'),
    ));
}
// ADD FUNCTIONALITY TO SITE
add_action('init', 'my_menus');

/*------------------------------
PAGINATION LINKS
------------------------------*/
function jbThemePagination()
{
    global $wp_query;

    $big = 999999999;
    $translated = __('Page', 'mytextdomain');

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), 'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')), 'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">' . $translated . '</span>',
    ));
}
