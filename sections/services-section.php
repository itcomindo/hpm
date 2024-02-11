<?php

/**
 * Services Section
 */

defined('ABSPATH') or die('No script kiddies please!');


?>



<section id="services" class="section higher">
    <div class="container">
        <div class="services-wr">
            <!-- service top -->
            <div id="service-top">
                <h2 class="section-head section-head-big">Services</h2>
                <span class="lw75-mw100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, iure? Doloribus ipsum tenetur nulla sapiente modi quos eum perspiciatis dolore cumque quis. Vero consequuntur saepe exercitationem necessitatibus sunt at in.</span>
            </div>
            <!-- service bottom -->
            <div id="service-bot">
                <ul class="list-no-style srv-list">
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                    ?>
                        <li class="srv hover-to-top">
                            <i class="fab fa-whatsapp"></i>
                            <h3 class="section-head section-head-smallest">Outsourcing Security</h3>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus.</span>
                            <a href="#" class="the-btn big">Learn More</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>