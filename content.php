<div class="box">
    <article id="post-<?php the_ID(); ?>" class="media">
        <?php
        if ( get_post_thumbnail_id() ) {
            ?>
            <div class="media-left">
                <a href="<?php the_permalink(); ?>">
                    <figure class="image is-64x64">
                        <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" alt="<?php the_title(); ?>">
                    </figure>
                </a>
            </div>
            <?php
        }
        ?>
        <div class="media-content">
            <h1 class="title is-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p class="subtitle is-5"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time></p>
        </div>
    </article>
    <p class="content">
        <?php the_excerpt(); ?>
    </p>
</div>
