<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');


?>

<div id="mmcta">
    <h2><?php echo mm_get_website_data()['nama-perusahaan']; ?></h2>
    <span class="text-small"><?php echo mm_get_website_data()['alamat'] ?></span>
    <span><?php echo mm_get_website_data()['phone'] ?></span>
    <ul class="list-no-style mmcta-list">
        <li><a class="the-btn wa-bg" href="#"><i class="fab fa-whatsapp"></i></a></li>
        <li><a class="the-btn call-bg" href="#"><i class="fas fa-phone"></i></a></li>
    </ul>
</div>