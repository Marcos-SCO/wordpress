<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title(); ?></title>

    <?php wp_head() ?>

</head>

<body>
    <header>
        <nav class="container">
            <?php
            wp_nav_menu([
                'theme_location' => 'top-menu',
                'menu_class' => 'top-bar',
            ])
            ?>
        </nav>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>