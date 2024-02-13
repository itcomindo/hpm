<?php

/**
 * Template Name: Service
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

$perusahaan = mm_get_website_data()['nama-perusahaan'];


?>
<section id="sh" class="section default high">
    <div class="container h100">
        <div id="sh-wr" class="h100">
            <h1 id="content-title" class="section-head section-head-medium">
                <?php echo get_the_title(); ?>
            </h1>

            <span class="sh-desc">
                <?php echo esc_html($perusahaan); ?> menyediakan layanan outsourcing terlengkap di Indonesia. Kami siap membantu Anda dalam mencari tenaga kerja outsourcing yang profesional, legal dan resmi. Penawaran kami <b><?php echo get_the_title(); ?></b> atau hubungi nomor telepon <?php echo mm_get_website_data()['phone']; ?>
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



                <div class="other-service">
                    <h3 class="section-head section-head-medium">Penawaran Jasa Outsourcing Kami Lainnya:</h3>
                    <?php
                    mm_get_service_page_query();
                    ?>
                </div>




            </div>


        </div>
    </div>
</section>




<?php

get_footer();
