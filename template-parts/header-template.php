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
                <h2><a class="h100" href="/">PT. HPM Group</a></h2>
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