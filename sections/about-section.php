<?php

/**
 * About Section
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<section id="about" class="section higher">
    <div class="sd-top-1">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M649.97 0L550.03 0 599.91 54.12 649.97 0z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div id="about-wr">
            <!-- about left -->
            <div id="ab-left">
                <span class="text-medium"><?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?></span>
                <h2 class="head small">Solusi Pengadaan Tenaga Kerja</h2>
                <span>Dengan secara konsisten kami terus berinovasi dan meningkatkan mutu layanan perusahaan termasuk mengupgrade skill dan knowledge para staff yang bertugas di perusahaan Anda.</span>
                <a href="//wa.me/<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" class="the-btn hover-to-top ab-btn big borad-5 shadow-s wa-bg"><i class="fab fa-whatsapp"></i> Layanan Konsultasi</a>
            </div>


            <!-- about right -->
            <div id="ab-right">
                <div id="ab-right-top">
                    <h3 class="head small">Why Us</h3>
                    <span>Hingga hari ini <?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?> telah:</span>
                </div>
                <div id="ab-content">
                    <ul class="list-no-style ab-list">
                        <li class="borad-10 hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Berpengalaman</span>
                                <span class="list-num head small"><?php echo esc_html(mm_get_website_data()['experience']); ?></span>
                                <span class="list-text">Tahun</span>
                            </div>
                        </li>
                        <li class="borad-10 hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Melayani</span>
                                <span class="list-num head small">34</span>
                                <span class="list-text">Provinsi</span>
                            </div>
                        </li>
                        <li class="borad-10 hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Mengelola</span>
                                <span class="list-num head small"><?php echo esc_html(mm_get_website_data()['jumlah-staff']); ?></span>
                                <span class="list-text">Lebih Staff Aktif</span>
                            </div>
                        </li>
                        <li class="borad-10 hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Dipercaya</span>
                                <span class="list-num head small"><?php echo esc_html(mm_get_website_data()['jumlah-customer']); ?></span>
                                <span class="list-text">Lebih Perusahaan</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>