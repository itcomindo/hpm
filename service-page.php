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
                <?php echo esc_html($perusahaan); ?> perusahaan outsourcing terlengkap di Indonesia. Kami siap bantu meyalurkan tenaga kerja terlatih, terdidik, profesional dan bisa andalkan. Penawaran kami <b><?php echo get_the_title(); ?></b> atau hubungi nomor telepon <?php echo mm_get_website_data()['phone']; ?>
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


                <h2 class="section-head section-head-small">
                    <?php echo esc_html(get_the_title()); ?>
                </h2>



                <?php the_content(); ?>



                <div class="other-service">
                    <h3 class="section-head section-head-small">Penawaran Jasa Outsourcing Kami Lainnya:</h3>
                    <ul class="list-no-style srv-list">
                        <?php
                        $args = mm_get_service_page_query();
                        $sm = new WP_Query($args);
                        if ($sm->have_posts()) {
                            while ($sm->have_posts()) {
                                $sm->the_post();
                                if (get_field('short_title')) {
                                    $title = get_field('short_title');
                                } else {
                                    $title = get_the_title();
                                }
                                $penawaran = get_field('penawaran_service');
                                $description = mm_get_website_data()['nama-perusahaan'] . ' menyediakan layanan ' . $title . ' (' . $penawaran . ' ) Layanan ini tersedia diseluruh Indonesia';

                                $link = get_the_permalink();
                        ?>
                                <li>
                                    <h3 class="other-head section-head"><?php echo esc_html($title); ?></h3>
                                    <span><?php echo esc_html($description); ?></span>

                                    <a class="the-btn" href="<?php echo get_the_permalink(); ?>" title="<?php echo esc_html($title); ?>">Lihat Penawaran</a>
                                </li>

                        <?php
                            }
                        } else {
                            echo 'no services found';
                        }
                        ?>
                    </ul>
                </div>




            </div>


        </div>
    </div>
</section>




<?php

get_footer();
