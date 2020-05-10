
<?php get_header(); ?>
<div class="container">

<div class="contents">
<!--記事本文-->
<?php if(have_posts()): the_post(); ?>
	<?php
	$classes = array(
		'kiji',
		'report'
	);
	?>
<article <?php post_class( $classes ); ?>>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--本文取得-->
  <?php the_content(); ?>
</article>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
