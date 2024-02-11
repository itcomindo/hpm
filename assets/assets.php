<?php

/**
 * Assets
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_loads_style_and_scripts()
{

    //load necessary style
    $theme_version = mm_get_theme_version();
    // call normalize.css from cdn
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1', 'all');

    //font awesome from cdn
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');

    //get style.css from theme directory
    wp_enqueue_style('mm-style', get_stylesheet_uri(), array(), $theme_version, 'all');



    //load necessary scripts
    //dereigster jquery
    wp_deregister_script('jquery');

    //register jquery from cdn
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

    //call global.js from assets/js
    wp_enqueue_script('mm-global', get_template_directory_uri() . '/assets/js/global.js', array('jquery'), $theme_version, true);



    if (is_front_page()) {

        //call front-page.css from assets/css
        wp_enqueue_style('mm-frontpage-css', get_template_directory_uri() . '/assets/css/front-page.css', array(), $theme_version, 'all');


        //call slick.css from cdn
        wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0', 'all');


        //call slick.js from cdn
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.9.0', true);

        //call front-page.js from assets/js
        wp_enqueue_script('mm-frontpage-js', get_template_directory_uri() . '/assets/js/front-page.js', array('jquery'), $theme_version, true);
    }
}
add_action('wp_enqueue_scripts', 'mm_loads_style_and_scripts');
