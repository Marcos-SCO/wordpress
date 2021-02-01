<?php get_header() ?>
<div class="container">

    <h1>Resultados para '<?= get_search_query() ?>'</h1>

    <h1><?= single_cat_title() ?></h1>

    <?= get_template_part('includes/section', 'searchresults') ?>

    <?//= previous_posts_link() ?>
    <?//= next_posts_link() ?>

    <?php
    global $wp_query;

    $big = 999999999; // need an unlikely integer
    $translated = __('', 'mytextdomain'); // Supply translatable string

    echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">' . $translated . ' </span>'
    ));
    ?>

</div>
<?php get_footer() ?>