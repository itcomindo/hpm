<?php

/**
 * Get images gallery
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_gallery_images_inc()
{
    $upload_dir = wp_upload_dir();
    $doc_path = $upload_dir['basedir'] . '/doc';
    $doc_url = $upload_dir['baseurl'] . '/doc';

    $files = glob($doc_path . '/*.webp');
    $urls = [];

    if ($files) {
        echo '<div class="gal-wr">';
        shuffle($files); // Acak urutan file
        $selected_files = array_slice($files, 0, 20);
        $count = 0;
        foreach ($selected_files as $file) {
            $count++;
            $file_name = basename($file);
            $urls[] = $doc_url . '/' . $file_name;
            echo '<div class="gal"><a data-lightbox="roadtrip" data-title="Photo Dokumentasi PT. HPM ' . $count . '" href="' . $doc_url . '/' . $file_name . '" title="Photo Dokumentasi PT. HPM ' . $count . '"><img class="find-this gal-img" src="' . $doc_url . '/' . $file_name . '" alt="Photo Dokumentasi PT. HPM ' . $count . '" title="Photo Dokumentasi PT. HPM ' . $count . '"></a></div>';
        }
        echo '</div>';
    }

    return $urls;
}
