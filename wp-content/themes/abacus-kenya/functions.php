<?php 

function abacus_files() {
    wp_enqueue_script('swiper-js', '//unpkg.com/swiper/swiper-bundle.min.js', NULL, '1.0', true);
    
    if (strstr($_SERVER['SERVER_NAME'], 'abacus.local')) {
        wp_enqueue_script('abacus-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);        
    } else {
        wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
        wp_enqueue_script('abacus-js', get_theme_file_uri('/bundled-assets/scripts.e325082804af589ef7f5.js'), NULL, '1.0', true);
        wp_enqueue_style('abacus-styles', get_theme_file_uri('/bundled-assets/undefined'));

    }

    wp_localize_script('abacus-js', 'abacusData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts', 'abacus_files');

function abacus_features() {
    // add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('medium', 400, 267, true);
    add_image_size('large', 554, 370, true);
    // add_image_size('pageBanner', 1500, 350, true);
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');
    // register_nav_menu('footerLocationOne', 'FOoter Location One');
    // register_nav_menu('footerLocationTwo', 'FOoter Location Two');
}

add_action('after_setup_theme', 'abacus_features');

// Customize Login Screen
function ourHeaderUrl() {
    return esc_url(site_url('/'));
}

add_filter('login_headerurl', 'ourHeaderUrl');

function ourLoginCSS() {
        wp_enqueue_script('abacus-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true);        
}

add_action('login_enqueue_scripts', 'ourLoginCSS');

function ourLoginTitle() {
    return get_bloginfo('name');
}

add_filter('login_headertitle', 'ourLoginTitle');