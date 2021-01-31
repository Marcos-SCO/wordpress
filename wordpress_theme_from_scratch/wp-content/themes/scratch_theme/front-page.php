<?php get_header('header') ?>


<section class="page-wrap">
    <div class="container">
    
        <h1><?= the_title() ?></h1>
    
        <?= get_template_part('includes/section', 'content') ?>
    
    </div>
</div>


<?php get_footer() ?>