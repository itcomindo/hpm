<?php

/**
 * Template Name: Gallery
 */

defined('ABSPATH') or die('No script kiddies please!');
get_header();
?>

<section id="the-gal" class="section high">
    <div class="container">
        <div id="gal-head-wr">
            <h1 id="gal-head" class="head medium">Galeri</h1>
            <span>Photo dokumentasi kegiatan dan aktivitas dari <?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?>.</span>
        </div>
        <div id="the-gal-wr">
            <?php
            mm_get_gallery_images_inc();
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
