<?php

/** Variables */
$templateUri = get_template_directory_uri();

/** Theme Scripts */
function scripts()
{
    global $templateUri;

    wp_register_style('style', $templateUri . '/dist/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');
    
    wp_register_script('app', $templateUri . '/dist/app.js', [], 1, true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'scripts');
