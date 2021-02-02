<?php
// Template
$templateUri = get_template_directory_uri();
// Bootstrap
$css_bootstrap = $templateUri . '/css/bootstrap.min.css';
$css_main = $templateUri . '/css/main.css';
$js_bootstrap = $templateUri . '/js/bootstrap.min.js';

/**
 * Function to handle bootstrap css
 */
function load_css()
{
    global $css_bootstrap, $css_main;

    wp_register_style('bootstrap', $css_bootstrap, [], false);
    wp_enqueue_style('bootstrap');

    wp_register_style('main', $css_main, [], false);
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

/**
 * Function to handle js
 */
function load_js()
{
    global $js_bootstrap, $templateUri;
    wp_register_script('bootstrap', $js_bootstrap, [], true);
    wp_enqueue_script('bootstrap');
    wp_register_script('custom', $templateUri .'/js/custom.js', [], true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

/**
 * Theme options
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

/** Menus */
register_nav_menus(
    [
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
    ]
);

/** Custom images sizes */
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

/** Register sidebars */
function my_sidebars()
{
    // Page sidebar
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);
    // Blog sidebar
    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ]);
}
add_action('widgets_init', 'my_sidebars');


function my_first_post_type()
{
    $args = [
        'labels' => [
            'name' => 'Games',
            'singular_name' => 'Game',
        ],
        //'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        // 'rewrite' => ['slug' => 'cars']
    ];
    register_post_type('games', $args);
}
add_action('init', 'my_first_post_type');

function my_first_taxonomy()
{
    $args = [
        'labels' => [
            'name' => 'Categorias',
            'singular_name' => 'Categoria',
        ],
        'public' => true,
        'hierarchical' => false,
    ];

    register_taxonomy('categories', ['games'], $args);
}
add_action('init', 'my_first_taxonomy');
