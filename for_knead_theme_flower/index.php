<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(is_category() || is_tag()): ?>
      <h1 class="report_category_label"><?php single_cat_title() ?>の記事一覧</h1>
    <?php elseif(is_year()): ?>
      <h1 class="report_category_label"><?php the_time("Y年") ?>の記事一覧</h1>
    <?php elseif(is_month()): ?>
      <h1 class="report_category_label"><?php the_time("Y年m月") ?>の記事一覧</h1>
    <?php endif; ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article <?php post_class( 'report_list' ); ?>>
        <a href="<?php the_permalink(); ?>">

          <div class="report_text">
            <!--タイトル-->
            <h2><?php the_title(); ?></h2>
            <!--投稿日を表示-->
            <span class="report_date">
              <i class="fas fa-pencil-alt"></i>
              <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <!--カテゴリ-->
            <?php if (!is_category()): ?>
              <?php if( has_category() ): ?>
              <span class="report_category">
                <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
              </span>
              <?php endif; ?>
            <?php endif; ?>
            <!--抜粋-->
            <?php the_excerpt(); ?>
          </div>
        </a>
      </article>
    <?php endwhile; endif; ?><!--ループ終了-->


    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '&laquo;',
      'next_text' => '&raquo;'
      ) ); ?>
</div>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
