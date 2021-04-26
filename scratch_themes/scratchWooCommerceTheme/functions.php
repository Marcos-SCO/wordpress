<?php

function admin_bar()
{
    if (is_user_logged_in())  add_filter('show_admin_bar', '__return_true', 1000);
}
add_action('init', 'admin_bar');

function load_stylesheets()
{
    // Name handler / Source / Dependencies / Version / Media
    wp_register_style('stylesheet', get_template_directory_uri() . '/public/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
    wp_register_style('custom', get_template_directory_uri() . '/public/app.css', '', 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts()
{
    wp_register_script('custom', get_template_directory_uri() . '/public/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_scripts');
