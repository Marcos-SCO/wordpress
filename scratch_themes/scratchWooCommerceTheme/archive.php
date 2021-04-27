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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <figure class="blog-post">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="<?php the_title() ?>" class="img-fluid mb-5">
                            <?php endif; ?>
                            <figcaption>
                                <a href="<?php the_permalink() ?>">
                                    <h1><?php the_title(); ?></h1>
                                </a>
                                <div style="word-break:break-word">
                                    <?php the_excerpt() ?>
                                </div>
                            </figcaption>
                        </figure>
                <?php endwhile;
                else : endif; ?>

                <div class="pagination">
                    <?php
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer

                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query->max_num_pages
                    ));
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>