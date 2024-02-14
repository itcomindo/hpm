<?php

/**
 * Service Page List Component
 */

defined('ABSPATH') or die('No script kiddies please!');
?>
<nav id="services-nav">
    <ul class="list-no-style vertical-menu">
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
        ?>
                <li>
                    <a href="<?php echo get_the_permalink(); ?>"><?php echo esc_html($title); ?></a>
                </li>

        <?php
            }
        } else {
            echo 'no services found';
        }
        ?>
    </ul>
</nav>