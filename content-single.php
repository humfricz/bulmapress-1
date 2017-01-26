<!--
single blog post content
single.php is the parent of this page
https://blog.paul.kim/hello-world
https://blog.paul.kim/nvm-cheatsheet
https://blog.paul.kim/toontastic-3d
-->
<?php
if (get_post_thumbnail_id()) {
    ?>
    <figure class="image is-64x64">
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>">
    </figure>
    <?php
}
?>

<!--TODO: categories-->
<!--<p>Categories:</p>-->
<?php //echo get_the_category_list(); ?>

<?php the_content(); ?>

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
