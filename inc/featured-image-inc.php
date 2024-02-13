<?php

/**
 * Featured Image
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_featured_image()
{
    $upload_dir = wp_upload_dir();
    $doc_path = $upload_dir['basedir'] . '/doc';
    $doc_url = $upload_dir['baseurl'] . '/doc';

    $files = glob($doc_path . '/*.webp');

    if ($files) {
        $random_file = $files[array_rand($files)];
        $file_name = basename($random_file);
        return $doc_url . '/' . $file_name;
    }

    return '';
}
