<?php

/**
 * Hero Section
 */

defined('ABSPATH') or die('No script kiddies please!');


?>


<section id="hero" class="section default">
    <div class="container h100">
        <div id="hero-wr" class="h100">
            <!-- hero left -->
            <h1 id="hero-head" class="text-medium">Perusahaan Outsourcing Terlengkap</h1>
            <span id="hero-desc" class="section-head section-head-medium">Solusi penyedia ketenagakerjaan profesional, legal dan resmi di Indonesia.</span>
            <span>Inovatif dan dedikatif memberikan pelayanan tenaga kerja outosourcing terbaik Siap bertugas keseluruh Indonesia.</span>
            <a class="the-btn hover-to-top bigger hero-btn" href="#services">Our Services</a>
        </div>


        <div id="hero-data">
            <div class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <span>Outsourcing Terlengkap & Terpercaya</span>
            <ul class="list-no-style hero-data-list">
                <li><?php echo mm_get_website_data()['experience']; ?> Tahun</li>
                <li><?php echo mm_get_website_data()['jumlah-customer']; ?> Customer</li>
                <li><?php echo mm_get_website_data()['jumlah-staff']; ?> Staff</li>
                <li>34 Provinsi</li>
            </ul>
        </div>



    </div>
</section>