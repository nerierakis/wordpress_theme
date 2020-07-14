
<?php

/*add_action( 'widgets_init', 'arphabet_widgets_init' );

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}*/

/*https://agohack.com/wp-enqueue-script-and-style/*/



function add_my_styles_and_scripts() {
	//bootstrap.min.css の読み込み
	wp_enqueue_style(
		'my-template-bs-style',
		'//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' ,
		array(),
		'4.1.3'
	);

	//スタイルシート style.css の読み込み
	wp_enqueue_style(
		'my-template-style',
		get_stylesheet_uri(),
		array('my-template-bs-style'),
		filemtime( get_theme_file_path( '/style.css' ) )
	);

	//WordPress 本体の jQuery を登録解除
	wp_deregister_script( 'jquery');

	//jQuery を CDN から読み込む
	wp_enqueue_script( 'jquery',
		'//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
		array(),
		'3.3.1',
		true //</body> 終了タグの前で読み込み
	);

	// Bootstrap の依存ファイル popper.min.js の読み込み
	wp_enqueue_script( 'popper',
		'//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
		array('jquery'),
		'1.14.3',
		true
	);

	// Bootstrap JavaScript の読み込み
	wp_enqueue_script( 'bootstrap',
		'//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
		array('jquery', 'popper'),
		'4.1.3',
		true
	);

	// base.js の読み込み（独自の JS ファイル）
	wp_enqueue_script(
		'my-script',
		get_theme_file_uri( '/js/script.js' ),
		array( 'jquery', 'bootstrap' ),
		filemtime( get_theme_file_path( '/js/script.js' ) ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'add_my_styles_and_scripts' );





















//function my_scripts() {
//	// 自作jsファイルの読み込み
//	wp_enqueue_script( 'my-script', get_theme_file_uri('/js/script.js') );
//	// CDNから「jquery.cookie.js」を読み込む
//	//wp_enqueue_script( 'jquery-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), '1.4.1', true);
//}
//add_action( 'wp_enqueue_scripts', 'my_scripts' );


if ( function_exists( 'register_sidebar' ) ) {
	register_sidebar( array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>',
	) );
}


/*記事抜粋　文字数の調整*/
function custom_excerpt_length( $length ) {
	return 55;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//function my_edit_posts_per_page ($posts_per_page) {
//	return 100;
//}
//add_filter('edit_posts_per_page', 'my_edit_posts_per_page');
//add_filter('pre_get_posts', 'my_edit_posts_per_page');

function knead_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'knead' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'knead' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s imomy_widgets">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	/*register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'knead' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'knead' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'knead' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'knead' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);*/
}
add_action( 'widgets_init', 'knead_widgets_init' );

?>
