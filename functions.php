<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentyseventeen' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'twentyseventeen-featured-image', 2000, 1200, true );

	add_image_size( 'twentyseventeen-thumbnail-avatar', 100, 100, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'twentyseventeen' ),
		'social' => __( 'Social Links Menu', 'twentyseventeen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-list',
        //'comment-form',
        'search-form',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', twentyseventeen_fonts_url() ) );

	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'sidebar-1' => array(
				'text_business_info',
				'search',
				'text_about',
			),

			'sidebar-2' => array(
				'text_business_info',
			),

			'sidebar-3' => array(
				'text_about',
				'search',
			),
		),

		'posts' => array(
			'home',
			'about' => array(
				'thumbnail' => '{{image-sandwich}}',
			),
			'contact' => array(
				'thumbnail' => '{{image-espresso}}',
			),
			'blog' => array(
				'thumbnail' => '{{image-coffee}}',
			),
			'homepage-section' => array(
				'thumbnail' => '{{image-espresso}}',
			),
		),

		'attachments' => array(
			'image-espresso' => array(
				'post_title' => _x( 'Espresso', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/espresso.jpg',
			),
			'image-sandwich' => array(
				'post_title' => _x( 'Sandwich', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/sandwich.jpg',
			),
			'image-coffee' => array(
				'post_title' => _x( 'Coffee', 'Theme starter content', 'twentyseventeen' ),
				'file' => 'assets/images/coffee.jpg',
			),
		),

		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		'theme_mods' => array(
			'panel_1' => '{{homepage-section}}',
			'panel_2' => '{{about}}',
			'panel_3' => '{{blog}}',
			'panel_4' => '{{contact}}',
		),

		'nav_menus' => array(
			'top' => array(
				'name' => __( 'Top Menu', 'twentyseventeen' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
			'social' => array(
				'name' => __( 'Social Links Menu', 'twentyseventeen' ),
				'items' => array(
					'link_yelp',
					'link_facebook',
					'link_twitter',
					'link_instagram',
					'link_email',
				),
			),
		),
	) );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );


/**
 * Register custom fonts.
 */
function twentyseventeen_fonts_url() {
	$fonts_url = '';

	/**
	 * Translators: If there are characters in your language that are not
	 * supported by Libre Franklin, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$libre_franklin = _x( 'on', 'Libre Franklin font: on or off', 'twentyseventeen' );

	if ( 'off' !== $libre_franklin ) {
		$font_families = array();

		$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyseventeen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentyseventeen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'twentyseventeen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'twentyseventeen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyseventeen-fonts', twentyseventeen_fonts_url(), array(), null );

	// // Theme stylesheet.
	// wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri() );

	// // Load the dark colorscheme.
	// if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
	// 	wp_enqueue_style( 'twentyseventeen-colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'twentyseventeen-style' ), '1.0' );
	// }

	// // Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	// if ( is_customize_preview() ) {
	// 	wp_enqueue_style( 'twentyseventeen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'twentyseventeen-style' ), '1.0' );
	// 	wp_style_add_data( 'twentyseventeen-ie9', 'conditional', 'IE 9' );
	// }

	// // Load the Internet Explorer 8 specific stylesheet.
	// wp_enqueue_style( 'twentyseventeen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'twentyseventeen-style' ), '1.0' );
	// wp_style_add_data( 'twentyseventeen-ie8', 'conditional', 'lt IE 9' );

	// // Load the html5 shiv.
	// wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	// wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	// wp_enqueue_script( 'twentyseventeen-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	// $twentyseventeen_l10n = array(
	// 	'quote'          => twentyseventeen_get_svg( array( 'icon' => 'quote-right' ) ),
	// );

	// if ( has_nav_menu( 'top' ) ) {
	// 	wp_enqueue_script( 'twentyseventeen-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array(), '1.0', true );
	// 	$twentyseventeen_l10n['expand']         = __( 'Expand child menu', 'twentyseventeen' );
	// 	$twentyseventeen_l10n['collapse']       = __( 'Collapse child menu', 'twentyseventeen' );
	// 	$twentyseventeen_l10n['icon']           = twentyseventeen_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
	// }

	// wp_enqueue_script( 'twentyseventeen-global', get_theme_file_uri( '/assets/js/global.js' ), array( 'jquery' ), '1.0', true );

	// wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );

	// wp_localize_script( 'twentyseventeen-skip-link-focus-fix', 'twentyseventeenScreenReaderText', $twentyseventeen_l10n );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_scripts' );


/**
 * Customize scripts and styles.
 */

// google fonts
wp_register_style('material', '//fonts.googleapis.com/icon?family=Material+Icons', array(), null, 'all');
wp_enqueue_style('material');

// font-awesome
wp_register_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), null, 'all');
wp_enqueue_style('font-awesome');

// bulma
wp_register_style('bulma', '//cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.min.css', array(), null, 'all');
wp_enqueue_style('bulma');

// jquery
wp_deregister_script('jquery');
wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), null, true);
wp_enqueue_script('jquery');

// highlight.js
wp_register_style('highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css', array(), null, 'all');
wp_enqueue_style('highlightjs');
wp_register_script('highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js', array(), null, true);
wp_enqueue_script('highlightjs');
wp_add_inline_script( 'highlightjs', 'hljs.initHighlightingOnLoad();' );

//// prism.js
//wp_register_style('prismjs', get_template_directory_uri() . '/css/prism.css', array(), null, 'all');
//wp_enqueue_style('prismjs');
//wp_register_script('prismjs', get_template_directory_uri() . '/js/prism.js', array(), null, true);
//wp_enqueue_script('prismjs');

// mathjax
wp_register_script('mathjax', '//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js', array(), null, false);
wp_enqueue_script('mathjax');
wp_register_script('mathjax-config', '//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/config/TeX-MML-AM_CHTML.js', array(), null, false);
wp_enqueue_script('mathjax-config');

// main.css
wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), null, 'all');
wp_enqueue_style('main');

// main.js
wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);
wp_enqueue_script('main');


// disable emojicons
function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}
function disable_wp_emojicons() {
    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
    // remove dns prefetch (emoji only)
    add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );

// remove dns prefetch (both google and emoji)
////remove_action( 'wp_head', 'wp_resource_hints', 2 );

// remove dns prefetch (emoji only)
////add_filter( 'emoji_svg_url', '__return_false' );

// Exclude Pages from Search Results
function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
    }
}
add_action('pre_get_posts','search_filter');



// Disable use XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );

// Disable X-Pingback to header
add_filter( 'wp_headers', 'disable_x_pingback' );
function disable_x_pingback( $headers ) {
    unset( $headers['X-Pingback'] );
    return $headers;
}

// remove rsd link (Really Simple Discovery)
remove_action( 'wp_head', 'rsd_link' );

// remove wlwmanifest link (Windows Live Writer)
remove_action( 'wp_head', 'wlwmanifest_link' );

// remove show recent comments
add_filter( 'show_recent_comments_widget_style', '__return_false' );

//// disable wpautop
//remove_filter( 'the_content', 'wpautop' );
//remove_filter( 'the_excerpt', 'wpautop' );


function bulmapress_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <article class="media" id="comment-<?php comment_ID() ?>">
        <figure class="media-left">
            <p class="image is-48x48">
                <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <strong>
                    <?php printf( __( '%s' ), get_comment_author_link() ); ?>
                </strong>
                <small>
                    <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                        <?php
                        /* translators: 1: date, 2: time */
                        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() );
                        ?>
                    </a>
                </small>

                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <p class="comment-awaiting-moderation">
                        <?php _e( 'Your comment is awaiting moderation.' ); ?>
                    </p>
                <?php endif; ?>

                <?php comment_text(); ?>
                <small>
                    <?php edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
                    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                </small>
            </div>
        </div>
    </article>

<!--    <--><?php //echo $tag ?><!-- --><?php //comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?><!-- id="comment---><?php //comment_ID() ?><!--">-->
<!--    --><?php //if ( 'div' != $args['style'] ) : ?>
<!--        <div id="div-comment---><?php //comment_ID() ?><!--" class="comment-body">-->
<!--    --><?php //endif; ?>
<!--    <div class="comment-author vcard">-->
<!--        --><?php //if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
<!--        --><?php //printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
<!--    </div>-->
<!--    --><?php //if ( $comment->comment_approved == '0' ) : ?>
<!--        <em class="comment-awaiting-moderation">--><?php //_e( 'Your comment is awaiting moderation.' ); ?><!--</em>-->
<!--        <br />-->
<!--    --><?php //endif; ?>
<!---->
<!--    <div class="comment-meta commentmetadata"><a href="--><?php //echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?><!--">-->
<!--            --><?php
//            /* translators: 1: date, 2: time */
//            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?><!--</a>--><?php //edit_comment_link( __( '(Edit)' ), '  ', '' );
//        ?>
<!--    </div>-->
<!---->
<!--    --><?php //comment_text(); ?>
<!---->
<!--    <div class="reply">-->
<!--        --><?php //comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
<!--    </div>-->
<!--    --><?php //if ( 'div' != $args['style'] ) : ?>
<!--        </div>-->
<!--    --><?php //endif; ?>

    <?php
}


remove_action('wp_head', 'wp_generator');

function remove_wp_version() {
    return '';
}
add_filter('the_generator', 'remove_wp_version');
