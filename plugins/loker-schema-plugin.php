<?php

/**
 * Lokers Schema Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_load_loker_schema_plugin()
{
    if (is_single() && has_category('loker')) {
        add_action('wp_head', 'mm_loker_schema_data');
    }
}
add_action('wp', 'mm_load_loker_schema_plugin');

function mm_loker_schema_data()
{
    if (is_single() && has_category('loker')) {
        $name = get_the_title();
        $lastReviewed = get_the_date('c');
        $description = get_the_excerpt();
        $city = get_field('kota_loker');
?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Occupation",
                "name": "<?php echo $name; ?>",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "lastReviewed": "<?php echo $lastReviewed; ?>"
                },
                "description": "<?php echo $description; ?>",
                "estimatedSalary": [{
                    "@type": "MonetaryAmountDistribution",
                    "name": "base",
                    "currency": "IDR",
                    "duration": "P1M",
                    "percentile10": "3000000",
                    "percentile25": "3000000",
                    "median": "3000000",
                    "percentile75": "3000000",
                    "percentile90": "3000000"
                }],
                "occupationLocation": [{
                    "@type": "City",
                    "name": "<?php echo $city; ?>"
                }]
            }
        </script>
<?php
    }
}
