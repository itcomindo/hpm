<?php

/**
 * Plugins
 */

defined('ABSPATH') or die('No script kiddies please!');

require_once get_template_directory() . '/plugins/local-business-plugin.php';
require_once get_template_directory() . '/plugins/shortcode-plugin.php';
require_once get_template_directory() . '/plugins/seo-plugin.php';
require_once get_template_directory() . '/plugins/tracking-plugin.php';
require_once get_template_directory() . '/plugins/new-time-zone-plugin.php';
require_once get_template_directory() . '/plugins/loker-schema-plugin.php';


/**
 * Remove FEED
 */
function mm_disable_feeds()
{
    if (is_feed()) {
        // Redirect ke halaman post tertentu
        if (is_single()) {
            wp_redirect(get_permalink(), 301);
            exit;
        }

        // Redirect ke halaman tag tertentu
        if (is_tag()) {
            wp_redirect(get_tag_link(get_query_var('tag_id')), 301);
            exit;
        }

        // Redirect ke home untuk feed lainnya
        wp_redirect(home_url(), 301);
        exit;
    }
}

add_action('do_feed', 'mm_disable_feeds', 1);
add_action('do_feed_rdf', 'mm_disable_feeds', 1);
add_action('do_feed_rss', 'mm_disable_feeds', 1);
add_action('do_feed_rss2', 'mm_disable_feeds', 1);
add_action('do_feed_atom', 'mm_disable_feeds', 1);
add_action('do_feed_rss2_comments', 'mm_disable_feeds', 1);
add_action('do_feed_atom_comments', 'mm_disable_feeds', 1);
