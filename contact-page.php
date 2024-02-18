<?php

/**
 * Template Name: Contact
 */

defined('ABSPATH') or die('No script kiddies please!');

get_header();

?>

<section id="contact" class="section high">
    <div class="container">
        <div id="contact-wr">
            <div id="contact-left">
                <h1 class="head medium"><?php the_title(); ?></h1>

                <div id="ca-wr">
                    <ul class="list-no-style ca-list">
                        <!-- alamat -->
                        <li><i class="fab fa-whatsapp"></i> <?php echo mm_get_website_data()['alamat']; ?></li>
                        <!-- telepon -->
                        <li><i class="fas fa-phone"></i> <?php echo mm_get_website_data()['phone']; ?></li>
                        <!-- email -->
                        <li><i class="fas fa-envelope"></i> <?php echo mm_get_website_data()['email']; ?></li>
                    </ul>
                </div>

                <?php
                get_template_part('components/whatsapp-form-component');
                ?>




            </div>
            <div id="contact-right">
                <?php
                if (!mm_is_devmode()) {
                    get_template_part('inc/map-inc');
                }
                ?>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
