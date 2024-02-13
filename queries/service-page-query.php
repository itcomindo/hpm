<?php

/**
 * Service Page Query
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_service_page_query()
{
    //create args to get the page that has page template of services
    $args = array(
        'post_type' => 'page',
        'meta_key' => '_wp_page_template',
        'meta_value' => 'service-page.php',
        'order' => 'ASC',
    );
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


            $link = get_the_permalink();
?>
            <li class="srv hover-to-top">
                <i class="fab fa-whatsapp"></i>
                <h3 class="section-head section-head-small"><?php echo esc_html($title); ?></h3>
                <span class="text-small"><?php echo esc_html($description); ?>.</span>
                <a href="<?php echo esc_html($link); ?>" class="the-btn big" title="<?php echo esc_html($title); ?>">Lihat Penawaran</a>
            </li>
    <?php
        }
        echo '</ul>';
    } else {
        mm_service_page_dummy();
    }
}



function mm_service_page_dummy()
{
    ?>
    <ul class="list-no-style srv-list">
        <?php
        for ($i = 0; $i < 6; $i++) {
        ?>
            <li class="srv hover-to-top">
                <i class="fab fa-whatsapp"></i>
                <h3 class="section-head section-head-small">Outsourcing Security</h3>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus.</span>
                <a href="#" class="the-btn big">Lihat Penawaran</a>
            </li>
        <?php
        }
        ?>
    </ul>
<?php
}
