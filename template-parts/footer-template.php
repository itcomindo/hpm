<?php

/**
 * Footer Template
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<footer id="foo" class="section higher">
    <div class="container">
        <div id="foo-wr">
            <!-- foo top -->
            <div id="foo-top">
                <div id="foo-logo-wr">
                    <img class="find-this" src="<?php echo mm_get_website_data()['logo-webp']; ?>" alt="<?php echo mm_get_website_data()['nama-perusahaan']; ?>" title="<?php echo mm_get_website_data()['nama-perusahaan']; ?>">
                </div>
                <h2 class="head small"><?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?></h2>
                <span class="foo-alamat lw75-mw100"><?php echo esc_html(mm_get_website_data()['alamat']); ?></span>
                <span class="foo-phone"><i class="fas fa-phone"></i> <i class="fab fa-whatsapp"></i> <?php echo esc_html(mm_get_website_data()['phone']); ?></span>
            </div>


            <!-- foo bottom -->
            <div id="foo-bot">

                <div id="foo-left" class="foo-col">
                    <h3 class="head smaller foo-head with-square-box color-accent-1-lightness">About Us</h3>
                    <div class="foo-inner">
                        <p>PT. Husnan Putra Mandiri adalah perusahaan outsourcing resmi yang didirikan pada tahun <?php echo mm_get_website_data()['experience-start']; ?>. Hingga saat ini kami telah memiliki pengalaman lebih dari <?php echo esc_html(mm_get_website_data()['experience']); ?> tahun.</p>
                        <p>Kami menerima permintaan pengadaan tenaga kerja untuk berbagai macam bidang keseluruh Indonesia.</p>
                        <p>Kami sangat fokus pada eksptektasi para mitra kami: <span class="color-accent-1-lightness">menjalankan usaha yang efisien dan efektif dengan tetap mendapatkan hasil yang maksimal.</span></p>
                    </div>
                </div>
                <div id="foo-mid" class="foo-col">
                    <h3 class="head smaller foo-head with-square-box color-accent-1-lightness">Menu</h3>
                    <div class="foo-inner">
                        <?php
                        mm_get_footer_menu();
                        ?>
                    </div>
                </div>
                <div id="foo-right" class="foo-col">
                    <h3 class="head smaller foo-head with-square-box color-accent-1-lightness">Services</h3>
                    <div class="foo-inner">
                        <?php
                        get_template_part('components/service-page-list-component');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="cp" class="section">
    <div class="container h100">
        <div id="cp-wr" class="h100">
            <span>Developed by Ghifari</span>
        </div>
    </div>
</div>



<?php

get_template_part('components/whatsapp-box-component');
get_template_part('components/mobile-app-component');
