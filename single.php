<?php get_header(); ?>
   <main class="l-main p-main">
      <div class="p-main--single">
         <div class="p-discription--single">
            <h1 class="c-headline--lv1 u-margin--headline--lv1">h1 チーズバーガー</h1>
         </div>
         
         <?php if( have_posts() ) : ?> <!--/1,記事があるかの確認/-->
         <?php while( have_posts() ) : the_post(); ?><!--/2,表示する投稿データがあれば繰り返し処理開始 3,ループ処理に必要なカウント処理等/-->
            <!--4.「ここに出力したい処理などを記述」-->
            <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
               <div class="p-main--single__contents">
                  <?php the_content(); ?>
               </div>
            </div>
         <?php endwhile; ?> <!--/5,繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了/-->
      <?php else : ?><!--/6.投稿データがなければ/-->
         <p>表示する記事がありません</p><!--/7.ない時の処理/-->
      <?php endif; ?><!--/8.条件 分岐終了/-->

         </div><!--/p-main--single__contents/-->
      </div><!--/p-main--single/-->
   </main>
</div><!--/c-wrap--headerMain/-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>