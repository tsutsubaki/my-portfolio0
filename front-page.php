<?php
/*
Template Name: HAMBURGER index
*/
?>

<?php if ((is_home() || is_front_page()) && !is_paged()) : ?>

<?php get_header(); ?>

<div id="wrap">
<div class="inner">
<main class="l-main">

<section class="mv">

<div class="l-main_pic ">
<a href="https://blog.tsubakicode.com">
<img class="l-blog l-sns_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog.jpg" alt="blog">
</a>

<a href="https://x.com/tsubaki___tsu">
<img class="l-x l-sns_logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/x.jpg" alt="x">
</a>

<!-- PC画像をimgフォルダから取得 -->
<img class="l-pc_pic" src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_picPC2.jpg" alt="ocean">
</div>

<div class="c-scrolldown1">
	<span>Scroll</span>
</div>

</section>

<!-- About -->
<section class="l-about">
<div class="round-wrap">
<h2 class="l-about_contents">Create New Value</h2>
<div class="l-margin c-round">
<h1 class="l-fontsize_large l-rotate l-line_height" >About </h1>
<h3 class="l-fontsize_sub l-rotate">私について</h3>
</div>
<div class="l-content_description">
	<p>つくるものを通して繋がりを築き、新たな価値を生み出し、
		さまざまな問題を解決するお手伝いをしたいという想いで制作に取り組んでいます。</p>
</div>
<div class="c-more">
	<a href="http://my-portfolio.local/about/">more</a>
</div>
</div>
</section>

<!-- Work -->
<section class="l-work">
<div class="round-wrap">
<div class="l-margin_right c-round">
<h1 class="l-left l-fontsize_large l-rotate l-line_height" >Works</h1>
<h3 class="l-left_sub l-fontsize_sub l-rotate">制作物</h3>
</div>


</section>

<ul class="works-production">
<?php
  $args = array(
    'posts_per_page' => 5 // 表示件数の指定
  );
  $posts = get_posts( $args );
  foreach ( $posts as $post ): // ループの開始
  setup_postdata( $post ); // 記事データの取得
?>
  <li class="works-production_second box">
  <a href="<?php the_permalink(); ?>">
  <p class="img">
  <?php the_post_thumbnail('thumbnail'); ?>
 
  </p>
  <h3 class="workd-title">
   <?php the_title(); ?>
  </h3>
    </a>
   
  </li>
<?php
  endforeach; // ループの終了
  wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>

<div class="c-more">
	<a href="http://my-portfolio.local/works/">more</a>
</div>

<div class="c-scroll">
<p class=c-scroll_arrow>↑</p>
<!-- <p class=c-scroll_arrow>↑</p> -->
	<a href="#top" class="scroll-up-box">
	
	</a>
</div>

</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
<?php endif; ?>