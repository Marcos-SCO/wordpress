<?php get_header() ?>

<?php
function isPostMetaData($key)
{
    global $post;
    return get_post_meta($post->ID, $key, true);
}
?>

<section class="page-wrap">
    <div class="container">

        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php the_title() ?>" class="img-fluid mb-3 img-thumbnail">
        <?php endif; ?>

        <div class="row">
            <h1><?= the_title() ?></h1>

            <div class="col-lg-6">
                <?= get_template_part('includes/section', 'games') ?>
            </div>

            <div class="col-lg-6">
                <?php if (isPostMetaData('produtora')) : ?>
                    <li>Produtora: <?= get_post_meta($post->ID, 'produtora', true) ?></li>
                <?php endif; ?>
                <?php if (isPostMetaData('data_de_lançamento')) : ?>
                    <li>Data de lançamento: <?= get_post_meta($post->ID, 'data_de_lançamento', true) ?></li>
                <?php endif; ?>
            </div>

        </div>


    </div>
</section>


<?php get_footer() ?>