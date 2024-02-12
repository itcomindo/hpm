<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');

get_template_part('template-parts/topbar-template');
?>

<header id="header" class="section">
    <div class="container h100">
        <div id="header-wr" class="h100">
            <!-- header left -->
            <div id="header-left" class="h100">
                <a class="header-logo-wr" href="/">
                    <img class="find-this" src="<?php echo mm_get_website_data()['logo-webp']; ?>" alt="<?php echo mm_get_website_data()['nama-perusahaan']; ?>" title="<?php echo mm_get_website_data()['nama-perusahaan']; ?>">
                </a>
            </div>

            <!-- header right -->
            <div id="header-right" class="h100">

                <!-- header menu -->
                <?php
                mm_get_header_menu();
                ?>

                <div class="header-menu-trigger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>