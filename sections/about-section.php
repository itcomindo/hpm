<?php

/**
 * About Section
 */

defined('ABSPATH') or die('No script kiddies please!');

?>

<section id="about" class="section higher">
    <div class="container">
        <div id="about-wr">
            <!-- about left -->
            <div id="ab-left">
                <span class="text-medium"><?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?></span>
                <h2 class="section-head section-head-medium">Solusi Pengadaan Tenaga Kerja</h2>
                <span>Dengan secara konsisten kami terus berinovasi dan meningkatkan mutu layanan perusahaan termasuk mengupgrade skill dan knowledge para staff yang bertugas perusahaan Anda.</span>
                <a href="tel:+<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" class="the-btn hover-to-top ab-btn big borad-5 shadow-s">Konsultasi</a>
            </div>


            <!-- about right -->
            <div id="ab-right">
                <div id="ab-right-top">
                    <h3 class="section-head section-head-small">Why Us</h3>
                    <span>Hingga hari ini <?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?> telah:</span>
                </div>
                <div id="ab-content">
                    <ul class="list-no-style ab-list">
                        <li class="borad-10 shadow-s hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Berpengalaman</span>
                                <span class="list-num section-head section-head-medium"><?php echo esc_html(mm_get_website_data()['experience']); ?></span>
                                <span class="list-text">Tahun</span>
                            </div>
                        </li>
                        <li class="borad-10 shadow-s hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Melayani</span>
                                <span class="list-num section-head section-head-medium">34</span>
                                <span class="list-text">Provinsi</span>
                            </div>
                        </li>
                        <li class="borad-10 shadow-s hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Mengelola</span>
                                <span class="list-num section-head section-head-medium">500</span>
                                <span class="list-text">Staff terlatih</span>
                            </div>
                        </li>
                        <li class="borad-10 shadow-s hover-to-top">
                            <div class="ab-top">
                                <span class="list-text">Dipercaya</span>
                                <span class="list-num section-head section-head-medium">300</span>
                                <span class="list-text">Perusahaan</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>