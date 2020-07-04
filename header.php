<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0 ">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
          integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--font-awesomeのスタイルシートの呼び出し-->

	<?php wp_head(); ?><!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
<!--<div class="head_contents">-->
<!--    <div class="back_img">-->
<!--        <div class="site_info">-->
<!---->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<header>
    <div class="header_inner">
        <div class="logo_area">
            <h1>
                <!-- サイト名 -->
                <a id="logo" href="<?php echo home_url(); ?>">
					<?php bloginfo( 'name' ); ?>
                </a>
            </h1>
        </div>
        <!-- ヘッダーメニュー-->
		<?php
		wp_nav_menu( array(
			'theme_location' => 'main-menu'
		) );
		?>
    </div>

</header>
