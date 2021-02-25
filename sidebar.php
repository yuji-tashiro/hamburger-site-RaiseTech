<aside class="l-aside p-aside">
    <div class="p-global-menu">
        <div class="p-global-menu__inner">                        
            <img class="p-global-menu__inner__logo" src="<?php echo get_template_directory_uri(); ?>/ham_img/Menu.png" alt="menuロゴ">
            <button class="c-button--cross">
                <span></span>
                <span></span>
            </button>

            <div class="p-sidebar">
                <?php if ( is_active_sidebar( 'menu_widget' ) ) : dynamic_sidebar( 'menu_widget' ); ?>
                <?php else: ?>
                    <div class="widget">
                        <h2>No Widget</h2>
                        <p>ウィジットは設定されていません。</p>
                    </div>
                <?php endif; ?>








            <!-- <ul class="c-typelist">
                <li class="c-typelist__item">バーガー
                    <ul class="c-typelist__item__itemlist">
                        <li class="c-typelist__item__itemlist__item">ハンバーガー</li>
                        <li class="c-typelist__item__itemlist__item">チーズバーガー</li>
                        <li class="c-typelist__item__itemlist__item">テリヤキバーガー</li>
                        <li class="c-typelist__item__itemlist__item">アボカドバーガー</li>
                        <li class="c-typelist__item__itemlist__item">フィッシュバーガー</li>
                        <li class="c-typelist__item__itemlist__item">ベーコンバーガー</li>
                        <li class="c-typelist__item__itemlist__item">チキンバーガー</li>
                    </ul>
                </li>
                <li class="c-typelist__item">サイド
                    <ul class="c-typelist__item__itemlist">
                        <li class="c-typelist__item__itemlist__item">ポテト</li>
                        <li class="c-typelist__item__itemlist__item">サラダ</li>
                        <li class="c-typelist__item__itemlist__item">ナゲット</li>
                        <li class="c-typelist__item__itemlist__item">コーン</li>
                    </ul>
                </li>
                <li class="c-typelist__item">ドリンク
                    <ul class="c-typelist__item__itemlist">
                        <li class="c-typelist__item__itemlist__item">コーラ</li>
                        <li class="c-typelist__item__itemlist__item">ファンタ</li>
                        <li class="c-typelist__item__itemlist__item">オレンジ</li>
                        <li class="c-typelist__item__itemlist__item">アップル</li>
                        <li class="c-typelist__item__itemlist__item">紅茶（Ice/Hot）</li>
                        <li class="c-typelist__item__itemlist__item">コーヒー（Ice/Hot）</li>
                    </ul>
                </li>
            </ul>./c-typelist -->
        </div><!--./p-global-menu__inner-->
    </div><!--./p-global-menu-->
</aside>