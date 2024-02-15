<?php

/**
 * Template Name: Sitemap
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();


?>

<section id="the-sitemap" class="section medium">
    <div class="container">
        <div id="the-sitemap-wr">
            <div class="sitemap-head-wr">
                <h1 class="section-head section-head-medium">Sitemap</h1>
            </div>

            <!-- sitemap for post start -->
            <div class="tsm">
                <h2 class="section-head section-head-medium">Post Sitemap</h2>
                <ul class="list-no-style sitemap-list">
                    <?php
                    $post_sitemap = mm_get_post_sitemap_query();
                    if ($post_sitemap->have_posts()) :
                        while ($post_sitemap->have_posts()) : $post_sitemap->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <!-- sitemap for post end -->

            <!-- sitemap for page start -->
            <div class="tsm">
                <h3 class="section-head section-head-medium">Post Sitemap</h3>
                <ul class="list-no-style sitemap-list">
                    <?php
                    $page_sitemap = mm_get_page_sitemap_query();
                    if ($page_sitemap->have_posts()) :
                        while ($page_sitemap->have_posts()) : $page_sitemap->the_post();
                    ?>
                            <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <!-- sitemap for page end -->

            <!-- sitemap for tag start -->
            <div class="tsm">
                <h3 class="section-head section-head-medium">Tag Sitemap</h3>
                <ul class="list-no-style sitemap-list">
                    <?php
                    $tag_sitemap = mm_get_tag_sitemap_query();
                    if ($tag_sitemap) :
                        foreach ($tag_sitemap as $tag) :
                    ?>
                            <li><a href="<?php echo get_tag_link($tag->term_id); ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name; ?></a></li>
                    <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>





        </div>
    </div>
</section>


<?php




get_footer();
