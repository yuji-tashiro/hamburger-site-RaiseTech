<form class="p-search-form" method="get" action="<?php echo home_url('/'); ?>">
  <input class="c-search-text" type="text" name="s" value="<?php the_search_query(); ?>"><!--/検索されたキーワードを表示できる。/-->
  <input class="c-search-button" type="submit" value="検索">
</form>