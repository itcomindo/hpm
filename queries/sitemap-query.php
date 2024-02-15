<?php

/**
 * Sitemap Query
 */

defined('ABSPATH') or die('No script kiddies please!');




/**
 *  Post Sitemap Query
 * Get all posts
 */
function mm_get_post_sitemap_query()
{
    $post_sitemap_args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_parent' => 0
    );
    $posts_sitemap = new WP_Query($post_sitemap_args);
    return $posts_sitemap;
}


/**
 *  Page Sitemap Query
 * Get all pages
 */
function mm_get_page_sitemap_query()
{
    $page_sitemap_args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'post_parent' => 0
    );
    $page_sitemap = new WP_Query($page_sitemap_args);
    return $page_sitemap;
}

/**
 * Tag Sitemap Query
 * Get all tags
 */
function mm_get_tag_sitemap_query()
{
    $tag_sitemap_args = array(
        'taxonomy' => 'post_tag',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => true
    );
    $tag_sitemap = get_terms($tag_sitemap_args);
    return $tag_sitemap;
}
