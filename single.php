<?php

/**
 * Single Post
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();


if (has_category('services')) {
    get_template_part('sections/content-section');
} else {
    get_template_part('sections/blog-section');
}

get_footer();
