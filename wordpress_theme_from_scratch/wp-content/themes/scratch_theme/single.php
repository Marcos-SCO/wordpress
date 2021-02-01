<?php get_header('header.php', ['title' => 'Scratch Page']) ?>


<section class="page-wrap">
    <div class="container">

        <h1><?= the_title() ?></h1>

        <?= get_template_part('includes/section', 'blogcontent') ?>

    </div>
</section>


<?php get_footer() ?>