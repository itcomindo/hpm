<?php

/**
 * New Time Zone Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_get_greeting_message()
{
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    $jam = $date->format('H');
    if ($jam >= 0 && $jam <= 11) {
        $greeting = 'Selamat Pagi';
    } elseif ($jam >= 12 && $jam <= 14) {
        $greeting = 'Selamat Siang';
    } elseif ($jam >= 15 && $jam <= 18) {
        $greeting = 'Selamat Sore';
    } elseif ($jam >= 19 && $jam <= 24) {
        $greeting = 'Selamat Malam';
    }
    return $greeting;
}
