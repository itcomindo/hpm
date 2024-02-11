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
                <h2 class="section-head section-head-small"><?php echo esc_html(mm_get_website_data()['nama-perusahaan']); ?></h2>
                <span class="foo-alamat lw75-mw100"><?php echo esc_html(mm_get_website_data()['alamat']); ?></span>
                <span class="foo-phone"><i class="fas fa-phone"></i> <i class="fab fa-whatsapp"></i> <?php echo esc_html(mm_get_website_data()['phone']); ?></span>
            </div>


            <!-- foo bottom -->
            <div id="foo-bot">

                <div id="foo-left" class="foo-col">
                    <h3 class="foo-head with-square-box color-accent-2">Footer Head</h3>
                    <div class="foo-inner">
                        <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed reprehenderit at, rem deleniti animi assumenda nam aspernatur quibusdam ullam nobis voluptatum cum facere voluptas sapiente quos molestiae fugit enim explicabo!</span>
                    </div>
                </div>
                <div id="foo-mid" class="foo-col">
                    <h3 class="foo-head with-square-box color-accent-2">Footer Head</h3>
                    <div class="foo-inner">
                        <nav id="footer-nav">
                            <ul class="list-no-style vertical-menu">
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div id="foo-right" class="foo-col">
                    <h3 class="foo-head with-square-box color-accent-2">Footer Head</h3>
                    <div class="foo-inner">
                        <nav id="services-nav">
                            <ul class="list-no-style vertical-menu">
                                <li><a href="#">Outsourcing Security</a></li>
                                <li><a href="#">Bodyguard</a></li>
                                <li><a href="#">Driver</a></li>
                                <li><a href="#">Operator Produksi</a></li>
                                <li><a href="#">Hotelier</a></li>
                            </ul>
                        </nav>
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
