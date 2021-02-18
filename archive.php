<!DOCTYPE html>
<html lang="jp">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
   <link rel="stylesheet" href="scss/style.css">
   <title>Document</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<div class="c-wrap--headerMain">
   <header class="l-header p-header">
      <div class="p-header__inner">
         <img class="p-header__inner__logo" src="../ham_img/Hamburger.png" alt="Hamburgerロゴ">  
         <button class="c-button--global-menu">
            <img src="ham_img/Menu.png" alt="#">
         </button>
         <form class="p-search-form u-margin--search-form">
            <input class="c-search-text" type="search">
            <input class="c-search-button" type="submit" value="検索">
         </form>
      </div>
   </header>
   
   <main class="l-main p-main--archive">
      <div class="p-discription--archive">
         <h1 class="c-headline--lv1 u-margin--headline--lv1">Menu:</h1>
         <p class="c-text">チーズバーガー</p>
      </div>
   
      <div class="p-menus-catch">
         <h2 class="c-headline--lv2--archive">小見出しが入ります</h2>
         <p class="c-text--menus-catch">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      </div>
   
      <section class="p-menu-unit">
         <img src="/ham_img/e-1.png" alt="#">
         <div class="p-menu-unit__content">
            <h3 class="c-headline--lv3--archive">チーズバーガー</h3>
            <h4 class="c-headline--lv4--archive">小見出しが入ります</h4>
            <p class="c-text--menu-unit">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-button--see-details">詳しく見る</button>
         </div>
      </section>
      <section class="p-menu-unit">
         <img src="/ham_img/e-1.png" alt="#">
         <div class="p-menu-unit__content">
            <h3 class="c-headline--lv3--archive">ダブルチーズバーガー</h3>
            <h4 class="c-headline--lv4--archive">小見出しが入ります</h4>
            <p class="c-text--menu-unit">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-button--see-details">詳しく見る</button>
         </div>
      </section>
      <section class="p-menu-unit">
         <img src="/ham_img/e-1.png" alt="#">
         <div class="p-menu-unit__content">
            <h3 class="c-headline--lv3--archive">スペシャルチーズバーガー</h3>
            <h4 class="c-headline--lv4--archive">小見出しが入ります</h4>
            <p class="c-text--menu-unit">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            <button class="c-button--see-details">詳しく見る</button>
         </div>
      </section>
   
      <div class="p-pageButtons">
         <div class="p-pageButtons__nowPageNumber">page1/10</div>
         <a class="p-pageButtons__movePrevious" href="#">
            <button class="p-pageButtons__movePrevious__left">≪</button>
            <button class="p-pageButtons__movePrevious__mobile">前へ</button>
         </a>
         <ul class="p-pageButtons__numberBoxes">
            <li class="p-pageButtons__numberBoxes__box">1</li>
            <li class="p-pageButtons__numberBoxes__box">2</li>
            <li class="p-pageButtons__numberBoxes__box">3</li>
            <li class="p-pageButtons__numberBoxes__box">4</li>
            <li class="p-pageButtons__numberBoxes__box">5</li>
            <li class="p-pageButtons__numberBoxes__box">6</li>
            <li class="p-pageButtons__numberBoxes__box">7</li>
            <li class="p-pageButtons__numberBoxes__box">8</li>
            <li class="p-pageButtons__numberBoxes__box">10</li>
         </ul>
         <a class="p-pageButtons__moveNext" href="#">
            <button class="p-pageButtons__moveNext__mobile">次へ</button>
            <button class="p-pageButtons__moveNext__right">≫</button>
         </a>
      </div>
   </main>
</div><!--/c-wrap--headerMain/-->

<aside class="l-aside p-aside">
   <div class="p-global-menu">
         <div class="p-global-menu__inner">                        
            <img class="p-global-menu__inner__logo" src="../ham_img/Menu.png" alt="menuロゴ">
            <button class="c-button--cross">
               <span></span>
               <span></span>
            </button>
            <ul class="c-typelist">
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
            </ul><!--./c-typelist-->
         </div><!--./p-global-menu__inner-->
   </div><!--./p-global-menu-->
</aside>

<footer class="l-footer p-footer">
   <div class="p-footer__inner">
      <nav class="c-nav">
         <ul class="c-nav__list">
               <li class="c-nav__list__item">ショップ情報</li>
               <li class="c-nav__list__item">|</li>
               <li class="c-nav__list__item">ヒストリー</li>
         </ul>
      </nav>
      <p class="c-copyright">copyright: RaiseTech</p>
   </div>
</footer>

<script src="script.js"></script>
</body>
</html>