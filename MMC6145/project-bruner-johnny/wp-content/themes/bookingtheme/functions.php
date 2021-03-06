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

    // FONTAWESOME
    wp_enqueue_script('fa-js', 'https://kit.fontawesome.com/1b30983403.js', array(), false, true);

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

/*------------------------------
POST DATA INFORMATION
------------------------------*/
function post_data()
{
    $archive_year = get_the_date('Y');
    $archive_month = get_the_date('m');
    $archive_day = get_the_date('d');
    ?>
<p class="post-info">Written by:
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php echo get_the_author(); ?></a>
    | Published on:
    <a
        href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a>
</p>
<?php
}