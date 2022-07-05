<?php

/*------------------------------
ADD STYLESHEETS AND JS FILES
------------------------------*/

function custom_theme_scripts()
{
    // BOOTSTRAP CSS
    wp_enqueue_style('bs_style', get_stylesheet_directory_uri() . '/css/bootstrap.css');

    // MAIN STYLE CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

    // BOOTSTRAP JS
    wp_enqueue_script('bs_js', get_stylesheet_directory_uri() . '/js/bootstrap.js');

    // MAIN JS
    wp_enqueue_script('bs_js', get_stylesheet_directory_uri() . '/js/scripts.js');

}
