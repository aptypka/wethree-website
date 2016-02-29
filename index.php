<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_title(); ?>
<?php the_content(''); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>