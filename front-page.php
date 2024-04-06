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
		さまざまな問題を解決するお手伝いをしたい。</p>
</div>
<div class="c-more">
	<a href="">more</a>
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


<div class="l-work_description1 c-fadeUp">
	
<img class="l-pic l-pic1" src="<?php echo get_stylesheet_directory_uri(); ?>/img/RaiseTeck.jpg" alt="RaiseTeck">
<h3 class="l-work_description">スクール課題</h3>
<p class="l-work_subdescription">HTML・CSS・JavaScript・GitHub</p>
</div>

<div class="l-work_description2 c-fadeUp">
	
<img class="l-pic l-pic2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hamburger.jpg" alt="RaiseTeck">
<h3 class="l-work_description">スクール課題</h3>
<p class="l-work_subdescription">HTML・CSS・JavaScript・WordPress・GitHub</p>
</div>


<div class="c-more">
	<a href="">more</a>
</div>

</div>
</section>

<!-- skill -->
<section class="l-skill">
<div class="round-wrap">
<div class="l-margin l-margin_left c-round">
<h1 class="l-fontsize_large l-rotate l-line_height" >Skill </h1>
<h3 class="l-fontsize_sub l-rotate">できること</h3>
</div>


<div class="l-skill_description1 l-flex">
<h3 class="l-work_description">コーディング</h3>
<img class="l-pic_skill" src="<?php echo get_stylesheet_directory_uri(); ?>/img/PC.jpg" alt="パソコン">
</div>
<p class="l-skill_description">HTML・CSS・JavaScript・GitHub</p>

<div class="l-skill_description2 l-flex">
<h3 class="l-work_description">デザイン</h3>
<img class="l-pic_skill" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pen.jpg" alt="パソコン">
</div>
<p class="l-skill_description">figma</p>


<div class="c-more">
	<a href="">more</a>
</div>
</div>
</section>

<div class="c-scroll">
<p class=c-scroll_arrow>↑</p>
	<a href="#top" class="scroll-up-box">
	
	</a>
</div>

</main>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
<?php endif; ?>