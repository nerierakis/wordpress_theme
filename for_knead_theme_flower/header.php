<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"><!--font-awesomeのスタイルシートの呼び出し-->

<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <h1>
      <!-- title -->
      <a id="logo" href="<?php echo home_url(); ?>"></a>
    </h1>
<!--      <nav id="top-nav">-->
<!--          <ul>-->
<!--              <li><a href="#merit">ABOUT</a></li>-->
<!--              <li><a href="#diary">DIARY</a></li>-->
<!--              <li><a href="#about">COMMIT</a></li>-->
<!--              <li><a href="#recruit">PROFILE</a></li>-->
<!--              <li><a href="contact.html">CONTACT</a></li>-->
<!--          </ul>-->
<!--      </nav>-->
	  <?php
	  wp_nav_menu( array(
		  'theme_location' => 'main-menu'
	  ) );
	  ?>
    <!--サイト文言 -->
    <!--<h2>自分の中をこねくり回すための記録</h2> -->

  </div>

</header>
