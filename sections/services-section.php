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
                <span class="lw75-mw100">Menyediakan tenaga kerja siap kerja yang siap ditempatkan dan ditugaskan diseluruh wilayah di Indonesia. Bidang-bidang kerja yang kami layani antaralain adalah:</span>
            </div>
            <!-- service bottom -->
            <div id="service-bot">

                <?php
                mm_get_service_page_query();
                ?>



                <div class="service-bot-inner">


                    <span>Kami pastikan para staff: good attitude, jujur, terdidik, terlatih, berdedikasi, loyal dan dapat di andalkan.</span>

                    <a href="//wa.me/<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" class="service-btn the-btn bigger borad-7 shadow-m hover-to-top wa-bg"><i class="fab fa-whatsapp"></i> Chat Dengan Kami</a>


                </div>




            </div>
        </div>
    </div>
</section>