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

            //text type number tahun berdiri
            Field::make('text', 'year_p', 'Tahun Berdiri')
                ->set_default_value('2000')
                ->set_attribute('type', 'number'),

            //text type number customer
            Field::make('text', 'customer_p', 'Customer')
                ->set_default_value('300')
                ->set_attribute('type', 'number'),

            //text type number staff
            Field::make('text', 'staff_p', 'Staff')
                ->set_default_value('3100')
                ->set_attribute('type', 'number'),

            //call testmonial fields from testimonial-options.php
            ...mm_testimonial_fields(),



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
