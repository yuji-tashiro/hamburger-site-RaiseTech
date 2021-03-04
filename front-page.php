<?php get_header(); ?>

    <main class="l-main p-main--front-page">
        <div class="p-discription--front-page">
            <h1 class="c-headline--lv1"><?php bloginfo( 'name' ); ?></h1>
        </div>
        <div class="p-branch-menus">
            <article class="p-branch-menus__menu u-bgi--takeout">
            <a href="<?php echo home_url('/category/takeout'); ?>">
                <h2 class="c-headline--lv2--front-page">Take Out</h2>
            </a>
                <div class="c-underline-headline--branch-menu"></div>
                <div class="p-contents">
                    <section class="p-contents__unit">
                        <h3 class="c-headline--lv3 u-padding--content__headline">小見出しが入ります</h3>
                        <p class="c-text u-text--branch-menu__content__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                    </section>
                    <section class="p-contents__unit">
                        <h3 class="c-headline--lv3 u-padding--content__headline">小見出しが入ります</h3>
                        <p class="c-text u-text--branch-menu__content__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                    </section>
                </div>
            </article>
            <article class="p-branch-menus__menu u-bgi--eatin">
            <a href="<?php echo home_url('/category/eatin'); ?>">
                <h2 class="c-headline--lv2--front-page">Eat In</h2>
            </a>
                <div class="c-underline-headline--branch-menu"></div>
                <div class="p-contents">
                    <section class="p-contents__unit">
                        <h3 class="c-headline--lv3 u-padding--content__headline">小見出しが入ります</h3>
                        <p class="c-text u-text--branch-menu__content__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                    </section>
                    <section class="p-contents__unit">
                        <h3 class="c-headline--lv3 u-padding--content__headline">小見出しが入ります</h3>
                        <p class="c-text u-text--branch-menu__content__text">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
                    </section>
                </div>
            </article>
        </div><!--./c-branch-menus-->

        <div class="p-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.747975468369!2d139.7432442146523!3d35.658580480199596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1614770791979!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="p-map__content">
                <h3 class="c-headline--lv3 u-color--access u-padding--access__headline">見出しが入ります</h3>
                <div class="c-underline"></div>
                <p class="c-text u-text--access">テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。テキストがはいります。</p>
            </div>
        </div>



    </main>
</div><!--/c-wrap--headerMain/-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>