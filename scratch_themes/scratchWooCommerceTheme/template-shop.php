<?php

/**
Template Name: Shop Page
 */
get_header();

?>

<div class="content">
    <div class="container">

        <h1><?php the_title(); ?></h1>

        <div class="row">
            <div class="col-lg-12">
                <?php
                if (have_posts()) : while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                else : endif;
                ?>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>