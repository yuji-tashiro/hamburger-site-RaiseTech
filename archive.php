<?php get_header(); ?>

   <main class="l-main p-main--archive">
      <div class="p-discription--archive">

      <?php $cats = get_the_category(); ?>
         <h1 class="c-headline--lv1 u-margin--headline--lv1">Menu:<?php echo $cats[0] -> cat_name; ?></h1>
      </div>
   
      <div class="p-menus-catch">
         <h2 class="c-headline--lv2--menu-catch">小見出しが入ります</h2>
         <p class="c-text--menus-catch">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
   
      <?php if( have_posts() ) : ?> <!--/1,記事があるかの確認/-->
         <?php while( have_posts() ) : the_post(); ?><!--/2,表示する投稿データがあれば繰り返し処理開始 3,ループ処理に必要なカウント処理等/-->
            <!--4.「ここに出力したい処理などを記述」-->
            <div id="post-<?php the_ID(); ?>" <?php post_class('p-menu-unit'); ?>>

               <?php if ( has_post_thumbnail() ) : ?>
                  <?php 
                     $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                  ?>
                  <a class="c-thumbnail" style="background-image: url( '<?php echo $url; ?>' );">
                  </a>
               <?php endif; ?>





               <!-- <a class="c-thumbnail" href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium'); ?>
               </a> -->


               
               <div class="p-menu-unit__content">
                  <h2 class="c-headline--lv2--menu-unit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <?php the_excerpt(); ?>
                  <button class="c-button--see-details">
                     <a href="<?php the_permalink(); ?>">詳しく見る</a>
                  </button>
               </div>
            </div><!--/p-menu-unit/-->
         <?php endwhile; ?> <!--/5,繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了/-->
      <?php else : ?><!--/6.投稿データがなければ/-->
         <p>表示する記事がありません</p><!--/7.ない時の処理/-->
      <?php endif; ?><!--/8.条件 分岐終了/-->

      <div class="c-wrap--pagenation">
         <div class="p-current-total-pagenumber">
            <ul>
               <li>page</li>
               <li><?php current_total_pagenumber(); ?></li>
            </ul>
         </div>
         <?php if( function_exists("the_pagenation") ) the_pagenation(); ?>
      </div>
   </main>
</div><!--/c-wrap--headerMain/-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>