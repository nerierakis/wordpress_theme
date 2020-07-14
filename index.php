<?php get_header(); ?>

<div class="container row">
    <div class="main_contents col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12 bg-info">
		<?php if ( is_category() || is_tag() ): ?>
            <h1 class="report_category_label"><?php single_cat_title() ?>の記事一覧</h1>
		<?php elseif ( is_year() ): ?>
            <h1 class="report_category_label"><?php the_time( "Y年" ) ?>の記事一覧</h1>
		<?php elseif ( is_month() ): ?>
            <h1 class="report_category_label"><?php the_time( "Y年m月" ) ?>の記事一覧</h1>
		<?php endif; ?>
        <?php
        $query = new WP_Query(
                [
                    'post_type' => 'post',
                    //'nopaging' => true,
                    'posts_per_page' => 15
                ]
        );
        ?>
        <!-- グリッドシステム -->
	    <?php if ( $query->have_posts() ): ?>
        <div class="report_contents">
		    <?php while ( $query->have_posts() ):


			    $query->the_post(); ?>


                <article <?php post_class( 'report_list' ); ?>>
                    <a href="<?php the_permalink(); ?>">

                        <div class="report_text">
                            <!--タイトル-->
                            <h2 class="report_title">
                <span class="report_title_inner">
                    <?php //the_title(); ?>
	                <?php
	                if(mb_strlen($post->post_title)>20) {
		                $title= mb_substr($post->post_title,0,20) ;
		                echo $title . '...';
	                } else {
		                echo $post->post_title;
	                }
	                ?>
                 <span>
                            </h2>
                            <!-- 記事の抜粋 -->
                            <div class="report_excerpt"><?php the_excerpt(); ?></div>

                            <!--投稿日を表示-->
                            <div class="report_list_footer">
                                <div class="report_list_footer_info">
                        <span class="report_date">
                          <i class="fas fa-calendar"></i>
                          <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                            <?php echo get_the_date(); ?>
                          </time>
                        </span>


                                </div>
                                <div class="report_list_footer_tag">
                                    <!--カテゴリ-->
								    <?php if ( ! is_category() ): ?>
									    <?php if ( has_category() ): ?>
                                            <span class="report_category">
                                <?php $postcat = get_the_category();
                                foreach ($postcat as $category) {
	                                echo "<span class='category_tag'>{$category->name}</span>";
                                } ?>
                              </span>
									    <?php endif; ?>
								    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </a>
                </article>

		    <?php endwhile; ?>
        </div>
	    <?php endif; ?><!--ループ終了-->
<!--        <div class="pagination">-->
<!--		    --><?php //echo paginate_links( array(
//			    'type'      => 'list',
//			    'mid_size'  => '1',
//			    'prev_text' => '&laquo;',
//			    'next_text' => '&raquo;'
//		    ) ); ?>
<!--        </div>-->
    </div>

    <div class="row col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12 bg-success">
	<?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
