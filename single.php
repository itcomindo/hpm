<?php

/**
 * Single Post
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();


if (has_category('services')) {
    get_template_part('template-parts/service-single-template');
} elseif (has_category('loker')) {
    get_template_part('template-parts/loker-single-template');
} elseif (has_category('pelatihan')) {
    get_template_part('template-parts/pelatihan-single-template');
} else {
    get_template_part('sections/blog-section');
}

get_footer();
