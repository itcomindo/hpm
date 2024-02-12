<?php

/**
 * Front Page
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();


get_template_part('sections/hero-section');
get_template_part('sections/rekanan-section');
get_template_part('sections/about-section');
get_template_part('sections/services-section');
get_template_part('sections/testimonial-section');

?>


<section class="section">
    <div class="container">
        <div class="test">
        </div>
    </div>
</section>


<?php


get_footer();
