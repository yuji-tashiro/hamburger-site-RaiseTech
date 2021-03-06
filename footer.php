<footer class="l-footer p-footer">
    <div class="p-footer__inner">
    <nav class="p-footer__inner__nav">

        <?php wp_nav_menu( array(
            'theme_location' => 'footer-menu',
        ) ); ?>

        <!-- <?php 
        $args = array(
        'menu'=>'f-menus',
        'menu_class'=>'menu',
        'container'=>'false',
        'menu_id'=>'',
        );
        wp_nav_menu($args);
        ?> -->
    </nav>
        <p class="c-copyright">copyright: RaiseTech</p>
    </div>
</footer>

<?php wp_footer(); ?><!--/wordpressのお約束/-->
</body>
</html>