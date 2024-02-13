<?php

/**
 * Testimonial Options
 */

defined('ABSPATH') or die('No script kiddies please!');

use Carbon_Fields\Field;

function mm_testimonial_fields()
{
    return [
        Field::make('complex', 'testi', 'Testimonials')
            ->set_layout('tabbed-horizontal')
            ->add_fields([
                Field::make('text', 'testi_name', 'Name'),
                Field::make('textarea', 'testi_content', 'Content'),
            ])
            ->set_header_template('
                <% if (testi_name) { %>
                    <%- testi_name %>
                <% } else { %>
                    Testimoni
                <% } %>
            '),
    ];
}
