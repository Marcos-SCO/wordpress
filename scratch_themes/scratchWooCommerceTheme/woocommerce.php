<?php get_header(); ?>

<div class="content">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-lg-12">
                <?php woocommerce_content(); ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>