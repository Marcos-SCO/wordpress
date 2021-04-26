<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title() ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('test'); ?>>

    <header class="main-header">
        <div class="container">
            <figure class="logo">
                <img src="<?php bloginfo('template_directory'); ?>/images/WooCommerceLogo.svg" alt="Logo" class="img-fluid">
            </figure>
        </div>
    </header>