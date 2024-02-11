<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<div id="tb" class="section">
    <div class="container h100">
        <div id="tb-wr" class="h100">
            <div id="tb-left">
                <span><?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?></span>
            </div>
            <div id="tb-right">
                <a href="tel:+<?php echo mm_get_website_data()['phone-url']; ?>" title="nomor telepon <?php echo mm_get_website_data()['nama-perusahaan']; ?> "><i class="fas fa-phone"></i> <?php echo mm_get_website_data()['phone']; ?></a>
            </div>
        </div>
    </div>
</div>