<?php
/*
Template Name: HAMBURGER page
*/
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="l-thumbnail">

<?php the_post_thumbnail('large'); ?>
</div>
<div class="l-main_contents">
				<!-- 👇記事のタイトル -->
        <h1><?php the_title(); ?></h1>
				<!-- 👇記事の本文 -->
        <?php the_content(); ?>

</div>


    <?php endwhile; endif; ?>

</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
