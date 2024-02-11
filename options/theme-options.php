<?php

/**
 * Theme Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    $container = Container::make('theme_options', __('Theme Options'))
        ->add_fields([

            // nama perusahaan
            Field::make('text', 'name_p', 'Nama Perusahaan'),

            // textarea alamat
            Field::make('textarea', 'address_p', 'Alamat'),

            //text no kantor
            Field::make('text', 'phone_p', 'No Telepon'),

            //text no hp
            Field::make('text', 'mobile_p', 'No Handphone'),

            //text email
            Field::make('text', 'email_p', 'Email'),

            //complex sosmed
            Field::make('complex', 'sosmed_p', 'Sosial Media')
                ->set_layout('tabbed-horizontal')
                ->add_fields([
                    Field::make('text', 'sosmed_icon', 'Sosmed Icon'),
                    Field::make('text', 'sosmed_name', 'Nama Sosmed'),
                    Field::make('text', 'sosmed_link', 'Link Sosmed'),
                ])
                ->set_header_template('
                <% if (sosmed_name) { %>
                    <%- sosmed_name %>
                <% } else { %>
                    Sosmed
                <% } %>
            '),



        ]);



    Container::make('theme_options', 'Footer')
        ->set_page_parent($container)
        ->add_fields([
            Field::make('text', 'opopopop', 'label')
        ]);
}





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
