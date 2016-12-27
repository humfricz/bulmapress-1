
<?php
if (get_post_thumbnail_id()) {
    ?>
    <figure class="image is-64x64">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
    </figure>
    <?php
}
?>

<hr>

Tags:

<?php the_tags('<div><span class="tag is-dark">', '</span></div><div><span class="tag is-dark">', '</span></div>'); ?>

<hr>

Categories:

<?php echo get_the_category_list(); ?>

<article id="post-<?php the_ID(); ?>"></article>

<hr>

Content:

<?php the_content(); ?>

<hr>

<blockquote>
    <cite>Written by Paul Kim<br>
        <a href="https://github.com/kimbaudi" target="_blank" class="gh-button">
            <i class="fa fa-github" aria-hidden="true"></i>
            <?php the_author(); ?>
        </a>
        <a href="https://twitter.com/kimbaudi" target="_blank" class="tw-button">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <?php the_author(); ?>
        </a>
    </cite>
</blockquote>

<hr>
