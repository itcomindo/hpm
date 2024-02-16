<?php

/**
 * Testimonial Section
 */

defined('ABSPATH') or die('No script kiddies please!');




?>


<div id="testi" class="section higher has-divider">
    <?php echo mm_get_shape_divider()['sd-top-tilt-1']; ?>
    <div class="container">
        <div id="testi-top">
            <h3 class="section-head section-head-big" id="testi-section-head">Testimonial</h3>
            <span class="lw75-mw100">
                Apa kata mereka tentang <?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?>
            </span>
        </div>
        <div id="testi-wr">
            <?php
            mm_get_testimonial();
            ?>
        </div>
    </div>
</div>



<?php

function mm_get_dummy_testimonial()
{
    echo '<div class="testi-list">';
    $c = 0;
    for ($i = 0; $i < 7; $i++) {
        $c++;
        if ($c = 3) {
?>
            <div class="testi">
                <span class="testi-name">PT. Martapa Hutagaol INC</span>
                <blockquote class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, incidunt totam quis ipsa, qui dolor itaque voluptatum. Lorem ipsum, dolor sit amet consectetur adipisicing elit.</blockquote>
            </div>
        <?php
        } else {
        ?>
            <div class="testi">
                <span class="testi-name">PT. Martapa Hutagaol INC</span>
                <blockquote class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, incidunt totam quis ipsa, qui dolor itaque voluptatum.</blockquote>
            </div>
        <?php
        }
    }
    echo '</div>';
}



function mm_get_testimonial()
{
    $testis = carbon_get_theme_option('testi');
    if ($testis) {
        echo '<div class="testi-list">';
        foreach ($testis as $testi) {
            $testi_name = $testi['testi_name'];
            $testi_content = $testi['testi_content'];
            //count characters on $testi_content trim to 60 characters
            $testi_content = substr($testi_content, 0, 80) . '...';



        ?>
            <div class="testi">
                <span class="testi-name"><?php echo esc_html($testi_name); ?></span>
                <blockquote class="testi-content"><?php echo esc_html($testi_content); ?></blockquote>
            </div>
<?php
        }
        echo '</div>';
    } else {
        mm_get_dummy_testimonial();
    }
}
