<?php get_header('header') ?>


<div class="container">

    <h1><?= the_title() ?></h1>

    <?= get_template_part('includes/section', 'content') ?>

</div>


<?php get_footer() ?>