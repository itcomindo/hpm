<?php

/**
 * Content Section
 */

defined('ABSPATH') or die('No script kiddies please!');

if (is_single()) {
    $title = get_the_title();
    $hero_description = get_field('biker');
    $kota = get_field('kota');
    $provinsi = get_field('provinsi');
    $phone = mm_get_website_data()['phone'];
    $perusahaan = mm_get_website_data()['nama-perusahaan'];
} elseif (is_tag()) {
    $post_id = get_the_ID();
    $title = single_tag_title('', false);
    $hero_description = get_field('biker', $post_id);
    $kota = get_field('kota', $post_id);
    $provinsi = get_field('provinsi', $post_id);
    $phone = mm_get_website_data()['phone'];
    $perusahaan = mm_get_website_data()['nama-perusahaan'];
}

?>

<section id="sh" class="section default high">
    <div class="container h100">
        <div id="sh-wr" class="h100">
            <h1 id="content-title" class="section-head section-head-medium">
                <?php echo $title; ?>
            </h1>

            <span class="sh-desc">
                <?php
                echo esc_html($perusahaan) . ' outsourcing ' . $kota . ' siap bertugas di ' . esc_html($kota) . ' ' . esc_html($provinsi) . '. Penawaran kami <b>' . esc_html($title) . '</b> atau hubungi nomor telepon ' . esc_html($phone);
                ?>

            </span>


        </div>
    </div>
</section>

<section id="the-sing" class="section high">
    <div class="container">
        <div id="the-sing-wr">

            <div id="the-content">
                <div class="fim-wr">
                    <img class="find-this" src="<?php echo mm_get_featured_image(); ?>" alt="<?php echo esc_html(get_the_title()); ?>" title="<?php echo esc_html(get_the_title()); ?>">
                </div>
                <?php the_content(); ?>
                <?php
                mm_get_post_tags();
                ?>
            </div>


        </div>
    </div>
</section>