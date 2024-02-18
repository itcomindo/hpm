<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');


?>

<div id="mmcta">
    <h2 class="head small"><?php echo mm_get_website_data()['nama-perusahaan']; ?></h2>
    <span class="text-small"><?php echo mm_get_website_data()['alamat'] ?></span>
    <span><?php echo mm_get_website_data()['phone'] ?></span>
    <ul class="list-no-style mmcta-list">
        <li>
            <a class="the-btn wa-bg" href="//wa.me/<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" title="Nomor Whatsapp" rel="noopener" target="_blank">
                <i class="fab fa-whatsapp"></i> Chat
            </a>
        </li>

        <li>
            <a class="the-btn call-bg" href="tel:+<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" title="Nomor Telepon" rel="noopener" target="_blank">
                <i class="fab fa-whatsapp"></i> Call
            </a>
        </li>


    </ul>
</div>