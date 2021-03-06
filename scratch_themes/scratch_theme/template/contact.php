<?php
/*
Template Name: Contato template
*/
?>

<?php get_header('header.php', ['title' => 'Scratch Page']) ?>


<section class="page-wrap">
    <div class="container">
    
        <h1><?= the_title() ?></h1>
    
        <div class="row">
            <div class="col lg-6">
                Formulário de contato
            </div>
            <div class="col lg-6">
                <?= get_template_part('includes/section', 'content') ?>
            </div>
        </div>
    
    </div>
</section >


<?php get_footer() ?>