<?php

/**
 * Content Section
 */

defined('ABSPATH') or die('No script kiddies please!');

if (is_single()) {
    $title = get_the_title();
} elseif (is_tag()) {
    $title = single_tag_title('', false);
}

?>

<section id="sh" class="section high">
    <div class="container">
        <div id="sh-wr">
            <h1 id="content-title" class="section-head section-head-medium">
                <?php echo $title; ?>
            </h1>

            <?php
            the_excerpt();
            ?>

        </div>
    </div>
</section>

<section id="the-sing" class="section high">
    <div class="container">
        <div id="the-sing-wr">

            <div id="the-content">
                <?php the_content(); ?>
            </div>


        </div>
    </div>
</section>