<?php get_header(); ?>

    <div class="hero-body has-text-centered is-paddingless">
        <div class="container" style="padding: 40px 20px; box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);">
            <div class="title">
                <?php echo get_bloginfo('name'); ?>
            </div>
            <div class="subtitle">
                <?php echo get_bloginfo('description'); ?>
            </div>
        </div>
    </div>
</section><!-- .hero -->

<section class="section">
    <div class="container">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>

<?php get_footer(); ?>
