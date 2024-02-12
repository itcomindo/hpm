<?php

/**
 * WhatsApp Box Component
 */

defined('ABSPATH') or die('No script kiddies please!');



?>

<div id="grt" class="wa-open">
    <span>Customer Services</span>
</div>

<div id="wa-pr">
    <div id="wa-wr">
        <ul class="list-no-style wa-list">
            <li class="wa-close">X</li>

            <li><a class="the-btn wa-bg" href="//wa.me/<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" title="chat whatsapp" rel="noopener" target="_blank"><i class="fab fa-whatsapp"></i>Chat</a></li>


            <li><a class="the-btn call-bg" href="tel:+<?php echo esc_html(mm_get_website_data()['phone-url']); ?>" title="Call" rel="noopener" target="_blank"><i class="fas fa-phone"></i>Call</a></li>

            <li><a class="the-btn email-bg" href="mailto:<?php echo esc_html(mm_get_website_data()['email']); ?>" title="Email" rel="noopener" target="_blank"><i class="far fa-envelope"></i>Email</a></li>
        </ul>
    </div>
</div>