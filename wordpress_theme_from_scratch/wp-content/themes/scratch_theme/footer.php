<footer>
    <div class="container">
        <?php
        wp_nav_menu([
            'theme_location' => 'footer-menu',
            'menu_class' => 'footer-bar',
        ])
        ?>
    </div>
</footer>

<?php wp_footer() ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>