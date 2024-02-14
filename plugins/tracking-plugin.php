<?php

/**
 * Tracking Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_search_console()
{
    echo '<meta name="google-site-verification" content="2T7ARpAQWyCU8PGvX0hPFigQJcDf3P8tZ_vxxw9wHaQ" />';
}


function mm_gtm_head()
{
    echo "<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NJXLWL6F');</script>
    <!-- End Google Tag Manager -->";
}


function mm_gtm_body()
{
    echo '<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJXLWL6F"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->';
}


function mm_tracking_plugin()
{
    if (!mm_is_devmode()) {
        //head
        add_action('wp_head', function () {
            mm_search_console();
            mm_gtm_head();
        });

        //body
        add_action('wp_body_open', function () {
            mm_gtm_body();
        });
    }
}
add_action('init', 'mm_tracking_plugin');
