<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Paul Kim</title>

<!--	<link rel="apple-touch-icon" href="apple-touch-icon.png">-->
<!--	<link rel="icon" href="https://paul.kim/favicon.ico?v=2">-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/config/TeX-MML-AM_CHTML.js"></script>
	<?php wp_head(); ?>
</head>

<body>

<section class="hero is-medium has-text-centered">
	<div class="hero-head">
		<div class="container">
			<nav class="nav">
				<div class="nav-left">
					<a class="nav-item is-brand" href="<?php echo site_url(); ?>">
						<figure class="image is-24x24" style="margin-right: 5px;">
							<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
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
					<a class="nav-item" href="<?php echo site_url(); ?>/about">About</a>
<!--					<a class="nav-item" href="--><?php //echo site_url(); ?><!--/archive">Archive</a>-->
<!--					<a class="nav-item" href="--><?php //echo site_url(); ?><!--/articles">Articles</a>-->
					<a class="nav-item" href="<?php echo site_url(); ?>/blog">Blog</a>
					<a class="nav-item" href="<?php echo site_url(); ?>/portfolio">Portfolio</a>
					<a class="nav-item" href="<?php echo site_url(); ?>/projects">Projects</a>
<!--					<a class="nav-item" href="--><?php //echo site_url(); ?><!--/videos">Videos</a>-->
<!--					<a class="is-hidden nav-item" href="--><?php //echo site_url(); ?><!--/templates">-->
<!--						<span>Templates</span>-->
<!--						<span class="tag is-small is-success">New!</span>-->
<!--					</a>-->
				</div>
			</nav>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">