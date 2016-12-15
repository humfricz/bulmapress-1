<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <h1 class="title is-2 has-text-centered"><?php the_title(); ?></h1>
    <hr>
    <?php the_content(); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
