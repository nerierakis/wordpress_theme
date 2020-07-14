<?php get_header(); ?>
<div class="container row">

    <div class="main_contents col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 bg-info">
        <!--記事本文-->
		<?php if ( have_posts() ): the_post(); ?>
			<?php
			$classes = array(
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
    <div class="row col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 bg-success">
	<?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
