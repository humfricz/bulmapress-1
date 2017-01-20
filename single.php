<?php get_header(); ?>

<div class="hero-body has-text-centered is-paddingless">
    <div class="container" style="padding: 40px 20px; box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);">
        <h1 class="title is-3"><?php the_title(); ?></h1>
        <p class="subtitle is-5"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time></p>
    </div>
</div>
</section><!-- .hero -->

<section class="section">
    <div class="container">

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();

                get_template_part('content-single', get_post_format());

                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile;
        endif;
        ?>

    </div><!-- .container -->
</section><!-- .section -->

<?php get_footer(); ?>
