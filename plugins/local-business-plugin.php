<?php

/**
 * Silence is golden
 */

defined('ABSPATH') or die('No script kiddies please!');


function mm_load_local_business_plugin()
{
    if (is_single() && has_category('service')) {

        $title = get_the_title();
        $description = get_the_excerpt();
        $image = mm_get_first_image();
        $url = get_permalink();
        $alamat = get_field('alamat');
        $kota = get_field('kota');
        $provinsi = get_field('provinsi');
        $kodepos = get_field('kodepos');
        $first_image = mm_get_first_image();
        $secondary_image = get_the_post_thumbnail_url();
        $phone = mm_get_website_data()['phone'];
        $price_range = '100000 - 5000000';
    } elseif (is_tag() && has_category('service')) {
        $title = single_tag_title('', false);
        $url = get_queried_object()->url;
        $post_id = get_the_ID();
        $first_image = mm_get_first_image();
        $secondary_image = get_the_post_thumbnail_url();
        $phone = mm_get_website_data()['phone'];
        $price_range = '100000 - 5000000';
        $kota = get_field('kota', $post_id);
        $alamat = get_field('alamat', $post_id);
        $provinsi = get_field('provinsi', $post_id);
        $kodepos = get_field('kodepos', $post_id);
    }

?>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EmploymentAgency",
            "image": [
                "<?php echo $first_image; ?>",
                "<?php echo $secondary_image; ?>"
            ],
            "name": "<?php echo $title; ?>",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "<?php echo $alamat; ?>",
                "addressLocality": "<?php echo $kota; ?>",
                "addressRegion": "<?php echo $provinsi; ?>",
                "postalCode": "<?php echo $kodepos; ?>",
                "addressCountry": "ID"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.9",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "Murdhik"
                }
            },
            "url": "<?php echo $url; ?>",
            "telephone": "<?php echo $phone; ?>",
            "priceRange": "<?php echo $price_range; ?>"
        }
    </script>
<?php
}

add_action('wp_head', 'mm_load_local_business_plugin');



function mm_get_first_image()
{
    $dir = get_template_directory() . '/assets/images/';
    $files = glob($dir . '*.jpg');

    if (!empty($files)) {
        // Mengacak file dan membatasi jumlah file yang akan diproses menjadi 1
        shuffle($files);
        $file = array_shift($files); // Mengambil file pertama setelah diacak
        $file_url = get_template_directory_uri() . '/assets/images/' . basename($file);
        return $file_url;
    }

    return ''; // Mengembalikan string kosong jika tidak ada file
}
