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
    wp_enqueue_style(
        'ugym-wordpress-content',
        get_template_directory_uri() . '/assets/css/wordpress-content.css',
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

function filter_blog_by_category($query)
{
    // Only modify the main query on the blog archive page
    if (
        $query->is_main_query() &&
        !is_admin() &&
        is_post_type_archive('blog')
    ) {
        // Check if a category has been selected in the URL
        if (isset($_GET['cat']) && !empty($_GET['cat'])) {
            $category_id = intval($_GET['cat']);
            // Modify the query to filter the 'blog' posts by the selected category
            $query->set('cat', $category_id);
        }
    }
}
add_action('pre_get_posts', 'filter_blog_by_category');
?>
