<?php

/**
 * Website Data
 */

defined('ABSPATH') or die('No script kiddies please!');



function mm_get_website_data()
{
    $greeting = mm_get_greeting_message();
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


    //kota
    $data['kota'] = carbon_get_theme_option('city_p');

    //provinsi
    $data['provinsi'] = carbon_get_theme_option('province_p');

    //kodepos
    $data['kodepos'] = carbon_get_theme_option('postal_code_p');

    //no kantor
    $data['no-kantor'] = carbon_get_theme_option('phone_p');


    //email
    $data['email'] = carbon_get_theme_option('email_p');

    //no hp
    $hp = carbon_get_theme_option('mobile_p');

    $phone_url = substr_replace($hp, '62', 0, 1);
    $phone_url = str_replace(' ', '', $phone_url);
    $phone_url = str_replace('-', '', $phone_url);

    $data['phone'] = $hp;
    $data['phone-url'] = $phone_url;
    $pinternasional = str_replace('62', '', $data['phone-url']);
    $data['phone-internasional'] = $pinternasional;



    //logo-png
    $data['logo-png'] = get_template_directory_uri() . '/assets/images/logo-png.png';

    //logo-webp
    $data['logo-webp'] = get_template_directory_uri() . '/assets/images/logo-webp.webp';


    //experience
    $data['experience-start'] = carbon_get_theme_option('year_p');
    $year_now = date('Y');
    $data['experience'] =  date('Y') - $data['experience-start'];


    //jumlah-customer
    $data['jumlah-customer'] = carbon_get_theme_option('customer_p');

    //jumlah-staff
    $data['jumlah-staff'] = carbon_get_theme_option('staff_p');


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
