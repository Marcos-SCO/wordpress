<?php get_header('header.php', ['title' => 'Scratch Page']) ?>


<section class="page-wrap">
    <div class="container">

        <h1><?= the_title() ?></h1>

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php the_title() ?>" class="img-fluid mb-3 img-thumbnail me-4">
        <?php endif; ?>

        <?= get_template_part('includes/section', 'content') ?>

    </div>
</section>


<?php get_footer() ?>