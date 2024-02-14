<?php

/**
 * Service Page Query
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_get_service_page_query()
{
    //create args to get the page that has page template of services

    if (is_page_template('service-page.php')) {
        $page_id = get_the_ID();
        $args = array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'service-page.php',
            'order' => 'ASC',
            'post__not_in' => array($page_id)
        );
    } else {
        $args = array(
            'post_type' => 'page',
            'meta_key' => '_wp_page_template',
            'meta_value' => 'service-page.php',
            'order' => 'ASC',
        );
    }

    return $args;
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
