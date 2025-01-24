<?php
function theme_support($theme)
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', theme_support);

function ugym_menus()
{
    $locations = [
        'primary' => 'Desktop Primary Top',
        'footer' => 'Footer Menu Items',
    ];

    register_nav_menus($locations);
}

add_action('init', ugym_menus);

function ugym_register_styles()
{
    wp_enqueue_style(
        'ugym-main',
        get_template_directory_uri() . '/assets/css/main.css',
    );
    wp_enqueue_style(
        'ugym-main-header',
        get_template_directory_uri() . '/assets/css/main-header.css',
    );
}

add_action('wp_enqueue_scripts', 'ugym_register_styles');

function ugym_register_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'ugym_main',
        get_template_directory_uri() . '/assets/js/main.js',
    );
    wp_enqueue_script(
        'ugym_header',
        get_template_directory_uri() . '/assets/js/header.js',
    );
    wp_enqueue_script(
        'ugym_welcome-slider',
        get_template_directory_uri() . '/assets/js/welcome-slider.js',
    );
    wp_enqueue_script(
        'ugym_faq',
        get_template_directory_uri() . '/assets/js/faq.js',
    );
    wp_enqueue_script(
        'ugym_clubs-map',
        get_template_directory_uri() . '/assets/js/clubs-map.js',
    );
    wp_enqueue_script(
        'ugym_clubs-header',
        get_template_directory_uri() . '/assets/js/clubs-header.js',
    );
    wp_enqueue_script(
        'ugym_swiper-components',
        get_template_directory_uri() . '/assets/js/swiper-components.js',
    );
}

add_action('wp_enqueue_scripts', 'ugym_register_scripts');
?>
