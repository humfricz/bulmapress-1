<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body>

<section class="hero">
    <div class="hero-head">
        <div class="container">
            <nav class="nav">
                <div class="nav-left">
                    <a class="nav-item is-brand <?php if ( is_front_page() ) { ?>is-active<?php } ?>" href="/">
                        <figure class="image is-24x24" style="margin-right: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
                        </figure>
                        <span style="font-size: 1.5rem;">Paul Kim</span>
                    </a>
                </div>
                <!--<div class="nav-center">-->
                    <!--<a class="nav-item" href=""><span class="icon"><i class="fa fa-github"></i></span></a>-->
                    <!--<a class="nav-item" href="https://twitter.com/jgthms"><span class="icon"><i class="fa fa-twitter"></i></span></a>-->
                <!--</div>-->
                <span id="nav-toggle" class="nav-toggle"><span></span><span></span><span></span></span>
                <div id="nav-menu" class="nav-right nav-menu">
                    <a class="nav-item <?php if ( get_queried_object()->post_name == 'about' ) { ?>is-active<?php } ?>" href="<?php echo site_url(); ?>/about">
                        About
                    </a>
                    <a class="nav-item <?php if ( get_queried_object()->post_name == 'blog' ) { ?>is-active<?php } ?>" href="<?php echo site_url(); ?>/blog">
                        Blog
                    </a>
                    <a class="nav-item <?php if ( get_queried_object()->post_name == 'projects' ) { ?>is-active<?php } ?>" href="<?php echo site_url(); ?>/projects">
                        Projects
                    </a>
                        <!--<a class="nav-item" href="https://blog.paul.kim">-->
                            <!--<span class="icon"><i class="fa fa-wordpress"></i></span>-->
                        <!--</a>-->
                </div><!-- .nav-menu -->
            </nav><!-- .nav -->
        </div><!-- .container -->
    </div><!-- .hero-head -->
