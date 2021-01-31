<?php

$templateUri = get_template_directory_uri(); 

$bootstrapCssDir = $templateUri . '/css/bootstrap.min.css';

/**
 * Function to handle bootstrap css
 */
function load_css()
{
    global $bootstrapCssDir;
    wp_register_style('bootstrap', $bootstrapCssDir, [], false);
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts','load_css');