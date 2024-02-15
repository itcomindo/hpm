<?php

/**
 * Home Latest Post Template
 */

defined('ABSPATH') or die('No script kiddies please!');


?>
<section id="the-home" class="section medium">
    <div class="container">
        <div id="the-home-wr">


            <?php

            $home_args = array(
                'post_type' => 'post',
                'posts_per_page' => 15,
                'order' => 'DESC',
                'orderby' => 'date'
            );

            $home_query = new WP_Query($home_args);

            if ($home_query->have_posts()) {
                while ($home_query->have_posts()) {
                    $home_query->the_post();
                    $title = get_the_title();
                    $permalink = get_the_permalink();
            ?>
                    <div class="th">
                        <div class="thtop">
                            <a href="<?php echo esc_html($permalink); ?>" title="<?php echo esc_html($title); ?>">
                                <img class="find-this" src="<?php echo mm_get_featured_image(); ?>" alt="<?php echo esc_html($title); ?>" title="<?php echo esc_html($title); ?>">
                            </a>
                        </div>
                        <div class="thbot">
                            <h3 class="section-head section-head-small th-title">
                                <a href="<?php echo esc_html($permalink); ?>" title="<?php echo esc_html($title); ?>" rel="bookmark"><?php echo esc_html($title); ?></a>
                            </h3>
                        </div>
                    </div>
            <?php
                }
            }

            ?>

        </div>
    </div>
</section>