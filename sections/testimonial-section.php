<?php

/**
 * Testimonial Section
 */

defined('ABSPATH') or die('No script kiddies please!');




?>


<section id="testi" class="section higher">
    <div class="container">
        <div id="testi-wr">
            <?php
            mm_get_dummy_testimonial();
            ?>
        </div>
    </div>
</section>



<?php

function mm_get_dummy_testimonial()
{
    echo '<div class="testi-list">';
    for ($i = 0; $i < 7; $i++) {

?>
        <div class="testi">
            <span class="testi-name">PT. Martapa Hutagaol INC</span>
            <blockquote class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, incidunt totam quis ipsa, qui dolor itaque voluptatum.</blockquote>
        </div>
<?php
    }
    echo '</ul>';
}
