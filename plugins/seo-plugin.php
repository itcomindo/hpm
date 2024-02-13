<?php

/**
 * SEO Plugin
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_seo_plugin()
{
    $experienced = mm_get_website_data()['experience'];
    $perusahaan = mm_get_website_data()['nama-perusahaan'];
    $phone = mm_get_website_data()['phone'];
    $website_url = get_bloginfo('url');
    if (is_front_page()) {
        $title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
        $description = 'Perusahaan Outsourcing (Agency, Yayasan) Manpower penyedia Tenaga Kerja Harian Kontrak Terlengkap Terbaik di Indonesia Berpengalaman lebih dari ' . $experienced;
        $robots = 'index, follow';
    } elseif (is_home()) {
        $title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
        $description = 'Perusahaan Outsourcing ( Agency, Yayasan) Manpower penyedia Tenaga Kerja Harian Kontrak Terlengkap Terbaik di Indonesia Berpengalaman lebih dari ' . $experienced;
        $robots = 'index, follow';
    } elseif (is_category()) {
        $title = single_cat_title('', false) . ' | ' . get_bloginfo('name');
        $description = single_cat_title('', false) . ' ' . category_description();
        $robots = 'index, follow';
    } elseif (is_tag()) {
        $title = single_tag_title('', false) . ' | ' . get_bloginfo('name');
        $description = single_tag_title('', false) . ' ' . tag_description();
        $robots = 'index, follow';
    } elseif (is_single()) {
        $title = get_the_title() . ' | ' . get_bloginfo('name');
        $description = substr(get_the_title() . ' ' . get_the_excerpt(), 0, 160);
        $robots = 'index, follow';
    } elseif (is_page_template('service-page.php')) {
        $title = 'Perusahaan Outsourcing Penyedia ' . get_the_title() . ' | ' . get_bloginfo('name');
        $description = substr($title . ' ' . get_the_excerpt(), 0, 160);
        $robots = 'index, follow';
    } elseif (is_page_template('contact-page.php')) {
        $title = 'Nomor telepon dan Whatsapp perusahaan outsourcing ' . get_bloginfo('name');
        $description = 'Nomor telepon dan Whatsapp perusahaan outsourcing ' . $perusahaan . ' ' . $phone;
        $robots = 'index, follow';
    } elseif (is_page()) {
        $title = get_the_title() . ' | ' . get_bloginfo('name');
        $description = substr(get_the_title() . ' ' . get_the_excerpt(), 0, 160);
        $robots = 'index, follow';
    } elseif (is_search()) {
        $title = 'Hasil Pencarian: ' . get_search_query() . ' | ' . get_bloginfo('name');
        $description = 'Hasil Pencarian: ' . get_search_query() . ' ' . get_bloginfo('description');
        $robots = 'noindex, follow';
    } elseif (is_404()) {
        $title = '404 Halaman Tidak Ditemukan | ' . get_bloginfo('name');
        $description = '404 Halaman Tidak Ditemukan ' . get_bloginfo('description');
        $robots = 'noindex, follow';
    } else {
        $title = get_bloginfo('name') . ' | ' . get_bloginfo('description');
        $description = 'Perusahaan Outsourcing (Agency, Yayasan) Manpower penyedia Tenaga Kerja Harian Kontrak Terlengkap Terbaik di Indonesia Berpengalaman lebih dari ' . $experienced;
        $robots = 'index, follow';
    }
?>
    <!-- SEO Plugin by Budiharyono.id 0813-9891-2341 -->
    <title><?php echo esc_html($title); ?></title>
    <meta name="description" content="<?php echo esc_html($description); ?>">
    <meta name="robots" content="<?php echo esc_html($robots); ?>">
    <!-- SEO Plugin End -->
<?php

    //if is_single create json breadcrumb below this line
    if (is_single()) {
        $json_ld = array(
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => array(
                array(
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $website_url
                ),
                array(
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => get_the_title(),
                    "item" => get_the_permalink()
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json_ld) . '</script>';
    } elseif (is_tag()) {
        $json_ld = array(
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => array(
                array(
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => $website_url
                ),
                array(
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => single_tag_title('', false),
                    "item" => get_tag_link(get_query_var('tag_id'))
                )
            )
        );
        echo '<script type="application/ld+json">' . json_encode($json_ld) . '</script>';
    }
}

add_action('wp_head', 'mm_seo_plugin', 1);
