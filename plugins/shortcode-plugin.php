<?php

/**
 * Shortcode Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_phone_shortcode()
{
    $phone = mm_get_website_data()['phone'];
    return $phone;
}
add_shortcode('phone', 'mm_phone_shortcode');



function mm_biker_shortcode()
{
    $bidang_kerja = get_field('bidang_kerja');
    return $bidang_kerja;
}
add_shortcode('biker', 'mm_biker_shortcode');


function mm_pretelan_shortcode()
{
    $pretelan = get_field('pretelan');
    return $pretelan;
}
add_shortcode('pretel', 'mm_pretelan_shortcode');
