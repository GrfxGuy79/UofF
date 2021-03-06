<?php

/*------------------------------
ADD STYLESHEETS AND JS FILES
------------------------------*/

function custom_theme_scripts()
{
    // BOOTSTRAP CSS
    wp_enqueue_style('bs-style', get_stylesheet_directory_uri() . '/css/bootstrap.css');

    // MAIN STYLE CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // BOOTSTRAP JS
    wp_enqueue_script('bs-js', get_stylesheet_directory_uri() . '/js/bootstrap.js');

    // MAIN JS
    wp_enqueue_script('bs-js', get_stylesheet_directory_uri() . '/js/scripts.js');

}
// ADD FUNCTION TO SITE
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
// ADD FUNCTION TO SITE
add_theme_support('custom-header', $custom_image_header);

/*------------------------------
POST DATA INFORMATION
------------------------------*/
function post_data()
{
    $archive_year = get_the_date('Y');
    $archive_month = get_the_date('m');
    $archive_day = get_the_date('d');
    ?>
<p>Written by:
    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php echo get_the_author(); ?></a>
    | Published on:
    <a
        href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a>
</p>
<?php

}

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
// ADD FUNCTION TO SITE
add_action('init', 'my_menus');

/*------------------------------
PAGINATION
------------------------------*/
function themePagination()
{
    global $wp_query;

    $big = 9999999999;
    $translated = __('Page', 'mytextdomain');

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">' . $translated . '</span>',
    ));
}

/*------------------------------
CREATING WIDGETS
------------------------------*/
function blank_widgets_init()
{
    register_sidebar(array(
        'name' => ('Sidebar Widget'),
        'id' => 'sidebar-widget',
        'description' => 'Area in sidebar for content',
        'before_widget' => '<div class="sidebar-widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => ('Right Footer Widget'),
        'id' => 'right-footer-widget',
        'description' => 'Area in right footer for content',
        'before_widget' => '<div class="right-footer-widget-container">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'blank_widgets_init');