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