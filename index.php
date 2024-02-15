<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

//what this current page is? front page or not
if (is_home()) {
    get_template_part('template-parts/home-latest-post-template');
} elseif (is_front_page()) {
    get_template_part('template-parts/front-page-template');
} elseif (is_page()) {
    get_template_part('template-parts/default-page-tempate');
} else {
    echo 'This is not a front page or a page';
}

get_footer();
