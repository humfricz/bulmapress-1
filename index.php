<?php get_header(); ?>

    <div class="hero-body has-text-centered is-paddingless">
        <div class="container" style="padding: 40px 20px; box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);">
            <div class="title">
                Blog
            </div>
        </div>
    </div>
</section><!-- .hero -->

<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column is-two-thirds-tablet is-three-quarters-desktop">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                endif;
                ?>
            </div>
            <div class="column is-one-third-tablet is-one-quarter-desktop">
                <?php get_sidebar(); ?>
            </div>
        </div>

<?php get_footer(); ?>