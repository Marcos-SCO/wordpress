<?php get_header() ?>


<section class="page-wrap">
    <div class="container justify-content-center">

        <section class="row">

            <?php if (is_active_sidebar('page-sidebar')) : ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar('page-sidebar'); ?>
                </div>
            <?php endif; ?>

            <div class="col-lg-9">
                <h1><?= the_title() ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php the_title() ?>" class="img-fluid mb-3 img-thumbnail me-4">
                <?php endif; ?>

                <?= get_template_part('includes/section', 'content') ?>
            </div>

        </section>
    </div>
</section>


<?php get_footer() ?>