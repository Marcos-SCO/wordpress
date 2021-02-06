<?php
// Template

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

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
    wp_register_script('custom', $templateUri . '/js/custom.js', [], true);
    wp_enqueue_script('custom');
    wp_register_script('xhr', $templateUri . '/js/xhr.js', [], true);
    wp_enqueue_script('xhr');
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


/** sending emails */
add_action('wp_ajax_enquiry', 'enquiry_form');
add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');
function enquiry_form()
{
    $data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // admin address
    $adminEmail = get_option('admin_email');

    $headers = [
        'Content-type: text/html; charset=UTF-8',
        'From: <' . $adminEmail . '>',
        'Reply-to:' . $data['email'],
        'BCC:' . $data['email'],
    ];
    // who are we sending the email to
    $sendTo = $adminEmail;
    // subject
    $subject = 'Mensagem de ' . $data['first_name'] . ' ' . $data['last_name'];
    // Message
    $message = '';
    foreach ($data as $index => $field) {
        $message .= '<strong>' . $index . '</strong>' . $field . '<br/>';
    }

    try {
        if (wp_mail($sendTo, $subject, $message, $headers)) {
            wp_send_json_success('Email sent');
        } else {
            wp_send_json_error('Email fail...');
        }
    } catch (Exception $e) {
        wp_send_json_error($e->getMessage());
    }

    wp_send_json_success($data);
}

/** PHPMailer overwrite */
add_action('phpmailer_init','custom_mailer');
function custom_mailer(PHPMailer $phpmailer) 
{
    $phpmailer->SetFrom('marcos_sco@outlook.com','Marcos');
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->Port = 587;
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Username = SMTP_LOGIN;
    $phpmailer->Password = SMTP_PASSWORD;
    $phpmailer->isSMTP();
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');
