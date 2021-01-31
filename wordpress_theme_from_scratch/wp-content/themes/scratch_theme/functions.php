<?php

$templateUri = get_template_directory_uri();

$css_bootstrap = $templateUri . '/css/bootstrap.min.css';
$js_bootstrap = $templateUri . '/js/bootstrap.min.js';

/**
 * Function to handle bootstrap css
 */
function load_css()
{
    global $css_bootstrap;
    wp_register_style('bootstrap', $css_bootstrap, [], false);
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_css');

/**
 * Function to handle js
 */
function load_js()
{
    global $js_bootstrap;
    wp_register_script('bootstrap', $js_bootstrap, [], true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');
