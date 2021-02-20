<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css"> -->
    <?php wp_enqueue_style('ress','https://unpkg.com/ress@3.0.0/dist/ress.min.css') ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/scss/style.css">
    <?php wp_enqueue_script( 'jquery' ); ?>

    <?php wp_head(); ?><!--/wordpressのお約束/-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="c-wrap--headerMain">
<header class="l-header p-header">
    <div class="p-header__inner">
        <a class="p-header__inner__logo" href="<?php echo home_url(); ?>"><!--/トップページのurlを返す/-->
            <img src="<?php echo get_template_directory_uri(); ?>/ham_img/Hamburger.png" alt="Hamburgerロゴ">  
        </a>
        
        <button class="c-button--global-menu">
            <img src="<?php echo get_template_directory_uri(); ?>/ham_img/Menu.png" alt="#">
        </button>
        <form class="p-search-form u-margin--search-form">
            <input class="c-search-text" type="search">
            <input class="c-search-button" type="submit" value="検索">
        </form>
    </div>
</header>
<main class="l-main p-main--front-page">
    <div class="p-discription--front-page">
        <h1 class="c-headline--lv1"><?php bloginfo( 'name' ); ?></h1>
    </div>