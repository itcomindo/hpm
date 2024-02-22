<?php

/**
 * Organization Schema Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_organization_schema_plugin()
{
    if (is_front_page() || is_home()) {
        $image = get_template_directory_uri() . '/assets/images/pt-hpm-(1).jpg';
        $url = get_home_url();
        $logo = get_template_directory_uri() . '/assets/images/logo-png.png';
        $name = 'PT. Husnan Putra Mandiri Group';
        $description = 'PT. Husnan Putra Mandiri Group perusahaan yang bergerak di bidang outsourcing jasa pengamanan, cleaning service, warehousing, operator produksi dan lain-lain.';
        $email = mm_get_website_data()['email'];
        $telephone = '+62-' . mm_get_website_data()['phone-internasional'];
        $streetAddress = mm_get_website_data()['alamat'];
        $addressLocality = 'Bekasi';
        $addressCountry = 'ID';
        $addressRegion = 'Jawa Barat';
        $postalCode = mm_get_website_data()['kodepos'];

?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "image": "<?php echo $image; ?>",
                "url": "<?php echo $url; ?>",
                "logo": "<?php echo $logo; ?>",
                "name": "<?php echo $name; ?>",
                "description": "<?php echo $description; ?>",
                "email": "<?php echo $email; ?>",
                "telephone": "<?php echo $telephone; ?>",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "<?php echo $streetAddress; ?>",
                    "addressLocality": "<?php echo $addressLocality; ?>",
                    "addressCountry": "<?php echo $addressCountry; ?>",
                    "addressRegion": "<?php echo $addressRegion; ?>",
                    "postalCode": "<?php echo $postalCode; ?>"
                }
            }
        </script>
<?php
    }
}

add_action('wp_head', 'mm_organization_schema_plugin');
