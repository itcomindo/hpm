<?php

/**
 * Default Page Template
 */

defined('ABSPATH') or die('No script kiddies please!');

?>
<section id="the-page" class="section high">
    <div class="container">
        <div id="the-page-wr">
            <h1><?php echo get_the_title(); ?></h1>
            <div id="the-content">
                <?php
                the_content();
                ?>
            </div>
        </div>
    </div>
</section>