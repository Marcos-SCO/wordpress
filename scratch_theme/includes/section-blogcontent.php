<?php
if (have_posts()) : while (have_posts()) : the_post();
?>

        <?php the_content() ?>

        <?php
        //the_author() 
        $fname = get_the_author_meta('first_name');
        $lname = get_the_author_meta('last_name');
        $fullName = $fname . ' ' . $lname;
        $date = get_the_date('d/m/Y');
        $hour = get_the_date('H:s');
        ?>
        <?= sprintf('<p>Publicado em %s as %s por <b>%s</b></p>', $date, $hour, $fullName); ?>

        <div>
            <?php
            // badges
            $tags = get_the_tags();
            if ($tags) {
                foreach ($tags as $tag) :
                    echo sprintf('<a href="%s" class="badge bg-success">%s</a> ', get_tag_link($tag->term_id), $tag->name);
                endforeach;
            }
            ?>
        </div>

        <div>
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) :
                echo sprintf('<a href="%s">%s</a> ', get_category_link($category->term_id), $category->name);
            endforeach;
            ?>
        </div>

        <?php // comments_template() ?>

<?php endwhile;
else : endif;
?>