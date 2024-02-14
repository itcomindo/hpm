<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');


if (is_home()) {
    echo 'Home';
} elseif (is_front_page()) {
    echo 'Front Page';
} elseif (is_single()) {
    echo 'single';
} elseif (is_page()) {
    echo 'page';
} elseif (is_tag()) {
    echo 'tag';
} elseif (is_category()) {
    echo 'category';
} elseif (is_404()) {
    echo '404';
} elseif (is_search()) {
    echo 'Search';
} elseif (is_author()) {
    echo 'Author';
}
