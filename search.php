<!--
search page template
https://blog.paul.kim/?s=foo
-->
<?php get_header(); ?>

    <div class="hero-body has-text-centered is-paddingless">
        <div class="container" style="padding: 40px 20px; box-shadow: 0 1px 0 rgba(219, 219, 219, 0.3);">
            <div class="title">
                Search
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
                ?>
                    <!-- https://codex.wordpress.org/Pagination -->
                    <nav class="pagination">
		                <?php previous_posts_link( 'Newer posts' ); ?>
                        <ul>
                            <li></li>
                        </ul>
		                <?php next_posts_link( 'Older posts' ); ?>
                    </nav>
                <?php
                else :
                    ?>
                    <h3 class="title has-text-centered">Sorry, no results were found!</h3>
                    <?php
                endif;
                ?>
            </div>
            <div class="column is-one-third-tablet is-one-quarter-desktop">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </div><!-- .container -->
</section><!-- .section -->

<?php get_footer(); ?>
