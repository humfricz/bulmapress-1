<?php get_header(); ?>

<section class="hero has-text-centered">
    <div class="hero-body">
        <div class="container">
            <p class="title">
                <?php echo get_bloginfo('name'); ?>
            </p>
            <p class="subtitle">
                <?php echo get_bloginfo('description'); ?>
            </p>
        </div>
    </div>
</section>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
endif;
?>

<?php get_footer(); ?>
