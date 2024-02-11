<?php

/**
 * WhatsApp Box Component
 */

defined('ABSPATH') or die('No script kiddies please!');



?>

<div id="grt">
    <span>Customer Services</span>
</div>

<div id="wa-pr">
    <div class="wa-close">X</div>
    <div id="wa-wr">
        <ul class="list-no-style wa-list">
            <li><a class="the-btn wa-bg" href="//wa.me/<?php echo mm_get_website_data()['phone-url']; ?>" title="chat whatsapp" rel="noopener" target="_blank"><i class="fab fa-whatsapp"></i>Chat</a></li>


            <li><a class="the-btn call-bg" href="tel:+<?php echo mm_get_website_data()['phone-url']; ?>" title="Call" rel="noopener" target="_blank"><i class="fas fa-phone"></i>Call</a></li>

            <li><a class="the-btn call-bg" href="mailto:<?php echo mm_get_website_data()['email']; ?>" title="Email" rel="noopener" target="_blank"><i class="far fa-envelope"></i>Email</a></li>
        </ul>
    </div>
</div>