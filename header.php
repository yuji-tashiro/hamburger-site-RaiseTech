<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>><!--/言語設定を自動的に出力します/-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?><!--/wordpressのお約束/-->
</head>

<body <?php body_class(); ?>><!--/ページごとに自動的にタグが追加される。ページによって装飾を変えたい時などテンプレートに自分でクラスを付けなくてもWordPressが付けてくれるので便利></>/-->
<?php wp_body_open(); ?>


<div class="c-wrap--headerMain">
<header class="l-header p-header">
    <div class="p-header__inner">
        <a class="p-header__inner__logo" href="<?php echo esc_url( home_url() ); ?>"><!--/トップページのurlを返す/-->
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ham_img/Hamburger.png" alt="Hamburgerロゴ">  
        </a>
        
        <button class="c-button--global-menu">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/ham_img/Menu.png" alt="#">
        </button>

        <?php get_search_form(); ?>
    </div>
</header>


