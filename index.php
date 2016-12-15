<?php get_header(); ?>

<h1 class="title has-text-centered">INDEX</h1>

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
