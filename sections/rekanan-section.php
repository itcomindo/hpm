<?php

/**
 * Rekanan Section
 *
 * @package MasmonsTheme
 * @author Budi Haryono <mail.budiharyono@gmail.com>
 * @since 019
 */

defined('ABSPATH') || exit;

function mm_ambil_gambar_rekanan()
{
    $dir = WP_CONTENT_DIR . '/uploads/rekanan/*.webp';
    $files = glob($dir);

    // Mengacak file dan membatasi jumlah file yang akan diproses menjadi 10
    shuffle($files);
    $files = array_slice($files, 0, 10);

    $output = '';

    if (!empty($files)) {
        $x = 0;
        foreach ($files as $file) {
            $x++;
            $file_url = content_url('/uploads/rekanan/' . basename($file));
            $output .= '<li class="rekanan-item">';
            $output .= '<div class="xxx">';
            $output .= '<img class="find-this" src="' . esc_url($file_url) . '" alt="client perusahaan outsourcing PT. HPM ' . $x . '" title="client perusahaan outsourcing PT. HPM ke ' . $x . '">';
            $output .= '</div>';
            $output .= '</li>';
        }
    }

    return $output;
}


// Untuk menampilkan gambar-gambar tersebut, Anda bisa memanggil:.
// echo mm_ambil_gambar_rekanan();.


?>

<div id="rekanan" class="section higher">
    <div class="container">
        <div id="rekanan-wr">
            <div id="rekanan-top">
                <h3 class="hero-head section-head section-head-medium with-border-bottom color-accent-2 about-head">Trusted By</h3>
                <span class="lw75-mw100">Ideas, creativity and the workmanship of <?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?> have been entrusted by:</span>
            </div>
            <ul id="rekanan-item-wr" class="list-no-style rekanan-list">
                <?php echo mm_ambil_gambar_rekanan(); ?>
            </ul>
        </div>
    </div>
</div>