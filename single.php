<?php get_header(); ?>

<main>
    <section>
        <?php while (have_posts()) : the_post(); ?>
        
        <?php the_post_thumbnail('large'); ?> 
        <h1><?php the_title(); ?></h1>
                 <?php the_content(); ?>
        <?php endwhile; ?>
    </section>
  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>