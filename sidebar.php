<aside class="l-aside p-aside">
    <div class="p-global-menu">
        <div class="p-global-menu__inner">                        
            <img class="p-global-menu__inner__logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/ham_img/Menu.png" alt="menuロゴ">
            <button class="c-button--cross">
                <span></span>
                <span></span>
            </button>

            <!-- <div class="p-sidebar">
                <?php
                    if ( is_active_sidebar( 'global_menu_widget' ) ) :
                        dynamic_sidebar( 'global_menu_widget' );
                    else:
                ?>
                <div class="widget">
                    <h2>No Widget</h2>
                    <p>ウィジットは設定されていません。</p>
                </div>
                <?php endif; ?> -->


            <?php wp_nav_menu( array(
                'theme_location' => 'sidebar-menu',
            ) ); ?>

        </div><!--./p-global-menu__inner-->
    </div><!--./p-global-menu-->
</aside>