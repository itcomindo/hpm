<?php

/**
 * Services Section
 */

defined('ABSPATH') or die('No script kiddies please!');


?>




<section id="services" class="section higher has-divider">
    <?php echo mm_get_shape_divider()['sd-top-tilt-1']; ?>
    <div class="container">
        <div class="services-wr">
            <!-- service top -->
            <div id="service-top">
                <h2 class="section-head section-head-big">Services</h2>
                <span class="lw75-mw100">Menyediakan tenaga kerja siap kerja yang siap ditempatkan dan ditugaskan diseluruh wilayah di Indonesia. Bidang-bidang kerja yang kami layani antaralain adalah:</span>
            </div>
            <!-- service bottom -->
            <div id="service-bot">
                <?php
                $args = mm_get_service_page_query();
                $sq = new WP_Query($args);
                if ($sq->have_posts()) {

                    echo '<ul class="list-no-style srv-list">';

                    while ($sq->have_posts()) {
                        $sq->the_post();
                        if (get_field('short_title')) {
                            $title = get_field('short_title');
                        } else {
                            $title = get_the_title();
                        }
                        $penawaran = get_field('penawaran_service');
                        $description = mm_get_website_data()['nama-perusahaan'] . ' menyediakan layanan ' . $title . ' (' . $penawaran . ' ) Layanan ini tersedia diseluruh Indonesia';

                        $serv_image = get_field('image_service');
                        if ($serv_image) {
                            $serv_image = $serv_image;
                        } else {
                            $serv_image = get_template_directory_uri() . '/assets/images/pt-hpm-(1).jpg';
                        }

                        $link = get_the_permalink();

                        if (is_page_template('service-page.php')) {
                ?>
                            <li>
                                <div class="other-head-wr">
                                    <h3 class="section-head section-head-small other-head"><?php echo esc_html($title); ?></h3>
                                </div>
                                <div class="other-content-wr">
                                    <span class="other-content"><?php echo $description; ?></span>
                                    <a href="<?php echo esc_html($link); ?>" class="the-btn big" title="<?php echo esc_html($title); ?>">Lihat Penawaran</a>
                                </div>
                            </li>
                        <?php
                        } else {
                            $icon = '<i class="fab fa-whatsapp"></i>';
                        ?>
                            <li class="srv hover-to-top">
                                <!-- <i class="fab fa-whatsapp"></i> -->
                                <div class="srv-img-wr">
                                    <a href="<?php echo esc_html($link); ?>" title="<?php echo esc_html($title); ?>">
                                        <img class="find-this" src="<?php echo $serv_image; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
                                    </a>
                                </div>
                                <h3 class="section-head section-head-small">
                                    <a href="<?php echo esc_html($link); ?>" title="<?php echo esc_html($title); ?>">
                                        <?php echo esc_html($title); ?>
                                    </a>
                                </h3>
                                <span class="text-small"><?php echo esc_html($description); ?>.</span>
                                <a href="<?php echo esc_html($link); ?>" class="the-btn big" title="<?php echo esc_html($title); ?>">Lihat Penawaran</a>
                            </li>
                <?php
                        }
                    }
                    echo '</ul>';
                } else {
                    mm_service_page_dummy();
                }
                ?>



                <div class="service-bot-inner">


                    <span>Kami pastikan para staff: good attitude, jujur, terdidik, terlatih, berdedikasi, loyal dan dapat di andalkan.</span>

                    <a href="//wa.me/<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" class="service-btn the-btn bigger borad-7 shadow-m hover-to-top wa-bg"><i class="fab fa-whatsapp"></i> Chat Dengan Kami</a>


                </div>




            </div>
        </div>
    </div>
</section>