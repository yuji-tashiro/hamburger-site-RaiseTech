<?php 
/**
 * <title>タグを出力する。タイトルタグのサポートを許可するという記述
 */
add_theme_support( 'title-tag' );
/**
 * テーマにメニューという項目を機能をサポートすることを許可するという記述
 */
add_theme_support( 'menus' );
/**
 * アイキャッチ画像を投稿の時に追加できる
 */
add_theme_support( 'post-thumbnails' );

wp_enqueue_style('ress','https://unpkg.com/ress@3.0.0/dist/ress.min.css');
wp_enqueue_script( 'jquery' );

/**
 * ウィジェットが扱えるよう設定を書き込み
 * name – 画像に書いているnameの部分で出力されます
 * id – ウィジェットを呼び出す際のid
 * description – 画像に書いているdescription
 * before_widget – フロント側で出力される際、ウィジェットの前に挿入されるタグや文言です。id=”%1$s”と記述して 
 * おくと自動的にidが振られます。
 * after_widget – フロントで出力される際、ウィジェットの後ろに挿入されるタグや文言です。
 * before_title – ウィジェットのタイトルの前に挿入される文字列やタグです
 * after_title – ウィジェットのタイトルの後ろに挿入される文字列やタグです
 */
function hamburger_site_widgets_init() {
  register_sidebar (
      array(
          'name'          => 'メニューウィジェット',
          'id'            => 'menu_widget',
          'description'   => 'メニュー用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
      )
  );
  register_sidebar (
      array(
          'name'          => 'メニューウィジェット',
          'id'            => 'menu_widget',
          'description'   => 'メニュー用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
      )
  );
  register_sidebar (
      array(
          'name'          => 'メニューウィジェット',
          'id'            => 'menu_widget',
          'description'   => 'メニュー用ウィジェットです',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2><i class="fa fa-folder-open" aria-hidden="true"></i>',
          'after_title'   => "</h2>\n",
      )
  );
}
add_action( 'widgets_init', 'hamburger_site_widgets_init' );


/**
 * ページネーション用の関数
 */ 

function current_total_pagenumber() {
  global $wp_query;
  $current_page = get_query_var( 'paged' );
  if (empty( $current_page ) ) {
    $current_page = 1;
  }
  $total_page = $wp_query -> max_num_pages ;
  echo $current_page. "/" .$total_page;
}

function the_pagenation() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query -> max_num_pages <= 1 )
  return;
  echo '<nav class="p-pagenation">';
  echo paginate_links( array(
  // 'base' => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
  // 'format' => '',
  // 'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query -> max_num_pages,/**total:全体のページ数 */
  'prev_text' => '&laquo;',
  'next_text' => '&raquo;',
  'type' => 'list',
  // 'end_size' => 3,
  // 'mid_size' => 3
  ) );
  echo '</nav>';
}
