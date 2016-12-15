<article id="post-<?php the_ID(); ?>">
    <?php if (get_post_thumbnail_id()) { ?>
        <div class="single-article-image">
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
        </div>
    <?php } ?>
    <div class="single-article-header">
        <h1><?php the_title(); ?></h1>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); ?></time>
        <?php the_tags('<div class="tags-container"><span class="tags">', '</span><span class="tags">', '</span></div>'); ?>
    </div>
    <?php the_content(); ?>
</article>

<blockquote>
    <cite>Written by Paul Kim<br>
        <a href="https://github.com/kimbaudi" target="_blank" class="gh-button">
            <i class="fa fa-github" aria-hidden="true"></i>
            kimbaudi
        </a>
        <a href="https://twitter.com/kimbaudi" target="_blank" class="tw-button">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            kimbaudi
        </a>
    </cite>
</blockquote>
