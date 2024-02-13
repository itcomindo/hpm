<?php

/**
 * Functions and definitions
 */

defined('ABSPATH') or die('No script kiddies please!');

//disable gutenberg
add_filter('use_block_editor_for_post', '__return_false', 10);


//add theme support
// add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

function mm_get_theme_version()
{
    $theme = wp_get_theme();
    return $theme->get('Version');
}



//inclding files required
require_once get_template_directory() . '/assets/assets.php';
require_once get_template_directory() . '/inc/inc.php';
require_once get_template_directory() . '/options/options.php';
require_once get_template_directory() . '/plugins/plugins.php';
require_once get_template_directory() . '/queries/queries.php';
