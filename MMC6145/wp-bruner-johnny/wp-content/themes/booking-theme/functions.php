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
