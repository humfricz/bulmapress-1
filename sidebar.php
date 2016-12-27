<!-- search form -->
<?php get_search_form(); ?>

<hr>

<article class="message">
    <div class="message-header">
        Recent Posts
    </div>
    <div class="message-body">
        <aside class="menu">
            <!--
            <p class="menu-label"></p>
            -->
            <ul class="menu-list">
                <?php
                $recent_posts = wp_get_recent_posts();
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .
                        $recent["post_title"] . '</a></li>';
                }
                wp_reset_query();
                ?>
            </ul>
        </aside>
    </div>
</article>

<hr>

<article class="message">
    <div class="message-header">
        Recent Comments
    </div>
    <div class="message-body">

        <?php
        $comments = get_comments( apply_filters( 'widget_comments_args', array(
            'number'      => 5,
            'status'      => 'approve',
            'post_status' => 'publish'
        ) ) );

        if ( is_array( $comments ) && $comments ) {
            echo '<ol style="list-style: outside none none;">';
            foreach ( (array) $comments as $comment ) {
                echo '<li style="padding: 5px 10px;">' .
                    sprintf( _x( '%1$s on %2$s', 'widgets' ),
                        '<span class="comment-author-link">' . get_comment_author_link( $comment ) . '</span>',
                        '<a href="' . esc_url( get_comment_link( $comment ) ) . '">' . get_the_title( $comment->comment_post_ID ) . '</a>'
                    ) . '</li>';
            }
            echo '</ol>';
        }
        ?>
    </div>
</article>

<hr>

<article class="message">
    <div class="message-header">
        Archives
    </div>
    <div class="message-body">

        <aside class="menu">
            <!--
            <p class="menu-label"></p>
            -->
            <ol class="menu-list" style="list-style: outside none none;">
                <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>
        </aside>

    </div>
</article>

<hr>

<article class="message">
    <div class="message-header">
        About
    </div>
    <div class="message-body">
        <?php the_author_meta( 'description' ); ?>
    </div>
</article>
