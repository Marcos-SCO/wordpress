<?php get_header(); ?>

<div class="content">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-lg-3 my-4">
                <div class="sticky-top" style="top:50px">
                    <?php dynamic_sidebar('blog-sidebar') ?>
                </div>
            </div>
            <div class="col-lg-9">
                <figure>
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title() ?>" class="img-fluid mb-5">
                    <?php endif; ?>
                </figure>
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                else : endif;
                ?>

                <?php the_tags(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>