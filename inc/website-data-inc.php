<?php

/**
 * Website Data
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_get_website_data()
{
    $data = array();
    //nama
    $nm = carbon_get_theme_option('name_p');
    if ($nm) {
        $data['nama-perusahaan'] = carbon_get_theme_option('name_p');
    } else {
        $data['nama-perusahaan'] = get_bloginfo('name');
    }

    //alamat
    $data['alamat'] = carbon_get_theme_option('address_p');

    //no kantor
    $data['no-kantor'] = carbon_get_theme_option('phone_p');


    //email
    $data['email'] = carbon_get_theme_option('email_p');

    //no hp
    $hp = carbon_get_theme_option('mobile_p');

    $phone_url = substr_replace($hp, '62', 0, 1);
    //remove space with nothing
    $phone_url = str_replace(' ', '', $phone_url);
    //replace - with nothing
    $phone_url = str_replace('-', '', $phone_url);

    $data['phone'] = $hp;
    $data['phone-url'] = $phone_url;



    //logo-png
    $data['logo-png'] = get_template_directory_uri() . '/assets/images/logo-png.png';

    //logo-webp
    $data['logo-webp'] = get_template_directory_uri() . '/assets/images/logo-webp.webp';






    return $data;
}


function mm_get_sosmed()
{
    $sosmeds = carbon_get_theme_option('sosmed_p');
    if ($sosmeds) {
        echo '<ul class="sosmed-list list-no-style">';
        foreach ($sosmeds as $sosmed) {
            $icon = $sosmed['sosmed_icon'];
            $name = $sosmed['sosmed_name'];
            $link = $sosmed['sosmed_link'];
?>
            <li><a href="<?php echo esc_html($link); ?>" title="<?php echo esc_html($name); ?>" rel="noopener" target="_blank"><?php echo $icon; ?></a></li>
<?php
        }
        echo '</ul>';
    }
}
