<?php get_header(); ?>
   <main class="l-main p-main">
      <div class="p-main--single">
      <!--/1,記事があるかの確認/-->
      <?php if( have_posts() ) : ?> 
            <!--/2,表示する投稿データがあれば繰り返し処理開始 3,ループ処理に必要なカウント処理等/-->
         <?php while( have_posts() ) : the_post(); ?>
            <!--4.「ここに出力したい処理などを記述」-->
            <div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

            <?php 
               $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
            <?php if ( has_post_thumbnail() ) : ?>
               <div class="p-discription--single
               " style="background-image: url( '<?php echo $url; ?>' );">
                  <div class="c-layer">
                     <!-- 記事のタイトルを表示 -->
                     <h1 class="c-headline--lv1--single"><?php the_title(); ?></h1>
                  </div>
               </div>
            <?php else : ?>
               <h1 class="c-headline--lv1--single u-title"><?php the_title(); ?></h1>
            <?php endif; ?>
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