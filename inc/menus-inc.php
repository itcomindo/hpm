<?php

/**
 * Menus Include
 */

defined('ABSPATH') or die('No script kiddies please!');

// Register Menus
function mm_register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        )
    );
}
add_action('init', 'mm_register_menus');


// get header menu
function mm_get_header_menu()
{
    wp_nav_menu(
        array(
            //location
            'theme_location' => 'header-menu',
            //container
            'container' => 'nav',
            'container_id' => 'header-nav',
            'container_class' => 'h100',
            //menu
            'menu_class' => 'list-no-style horizontal-list header-menu-list h100',

        )
    );
}


// get footer menu
function mm_get_footer_menu()
{
    wp_nav_menu(
        array(
            //location
            'theme_location' => 'footer-menu',
            //container
            'container' => 'nav',
            'container_id' => 'footer-nav',
            'container_class' => 'h100',
            //menu
            'menu_class' => 'list-no-style vertical-menu footer-menu-list h100',

        )
    );
}
