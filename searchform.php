<form class="p-search-form" id="searchform" method="get" action="<?php esc_url(home_url('/')); ?>">
  <label class="screen-reader-text" for="s">検索:</label>
  <input class="p-search-form__keyword" type="text" name="s" id="s" placeholder="&#xF002;" value="<?php the_search_query(); ?>"><!--/検索されたキーワードを表示できる。/-->
  <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
</form>