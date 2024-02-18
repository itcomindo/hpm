<?php

/**
 * Category
 */
defined('ABSPATH') or die('No script kiddies please!');

get_header();

?>

<section id="the-cat" class="section high">
    <div class="container">
        <div id="the-cat-wr">
            <?php
            $args = ([
                'post_type' => 'post',
                'category_name' => get_query_var('category_name'),
                'posts_per_page' => 10,
                'orderby' => 'rand'
            ]);
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                echo '<div class="cat-wr">';
                while ($query->have_posts()) {
                    $query->the_post();
                    $permalink = get_the_permalink();
                    $title = get_the_title();
            ?>
                    <div class="cat">
                        <h3 class="head smaller font-secondary"><a href="<?php echo esc_html($permalink); ?>" title="<?php echo esc_html($title); ?>"><?php echo esc_html($title); ?></a></h3>
                    </div>

            <?php
                }
                echo '</div>';
            } else {
                echo 'beum ada informasi';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>



<?php




get_footer();
