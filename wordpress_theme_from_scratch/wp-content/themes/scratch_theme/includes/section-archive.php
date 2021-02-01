<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
        <div class="card mb-3">
            <div class="card-body">
                <h3><?= the_title() ?></h3>
                <?//= the_content(); ?>
                <?= the_excerpt(); ?>
                <a href="<?= the_permalink() ?>" class="btn btn-success">Ler mais</a>
            </div>
        </div>
<?php endwhile;
else : endif;
?>