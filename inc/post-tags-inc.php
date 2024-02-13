<?php

/**
 * Post Tags
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_post_tags()
{
    $post_tags = get_the_tags();
    if ($post_tags) {
        echo '<div class="tags-title">';
        echo '<ul class="list-no-style tags-list">';
        foreach ($post_tags as $tag) {
            echo '<li><a href="' . esc_url(get_tag_link($tag->term_id)) . '" title="' . esc_html($tag->name) . '">' . esc_html($tag->name) . '</a></li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
