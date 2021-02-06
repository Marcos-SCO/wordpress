<?php
// searchform.php overwrites search.php file 
?>
<form role="search" method="get" id="searchform" class="searchform" action="<?= get_site_url() ?>" >
    <!-- <label for="search">Pesquisar</label> -->

    <!-- Restrict search by category -->
    <!-- <input type="hidden" name="games" value="10"> -->

    <input type="text" name="s" id="s" value="<?php the_search_query() ?>" placeholder="Digite sua busca" required>
    <button id="searchsubmit">Pesquisar</button>
</form>

<!-- <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/projetos_wordpress/wordpress/wordpress_theme_from_scratch/">
    <div>
        <label class="screen-reader-text" for="s">Pesquisar por:</label>
        <input type="text" value="" name="s" id="s">
        <input type="submit" id="searchsubmit" value="Pesquisar">
    </div>
</form> -->