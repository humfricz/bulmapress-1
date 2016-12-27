<?php get_header(); ?>

<div class="hero-body has-text-centered is-paddingless">
    <div class="container" style="padding: 40px 20px; box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);">
        <div class="title">
            <?php the_title(); ?>
        </div>
    </div>
</div>
</section><!-- .hero -->

<section class="section">
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h1 class="title is-2 has-text-centered"><?php the_title(); ?></h1>
            <hr>
            <?php the_content(); ?>

        <?php endwhile; endif; ?>

        <?php get_footer(); ?>
