<?php
/**
 * maxtem functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maxtem
 */

if ( ! function_exists( 'maxtem_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function maxtem_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on maxtem, use a find and replace
		 * to change 'maxtem' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'maxtem', get_template_directory() . '/languages' );

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
		/*
		**мой размер
		*/
		add_image_size( 'galery-cvadrat', 225, 225, true );
		add_image_size( 'galery-cvadrat-big', 470, 470, true );
		add_image_size( 'galery-rectangle', 470, 225, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header-menu-top' => esc_html__( 'Header Menu', 'maxtem' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'maxtem' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'maxtem_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'maxtem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function maxtem_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'maxtem_content_width', 640 );
}
add_action( 'after_setup_theme', 'maxtem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function maxtem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'maxtem' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'maxtem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Comments', 'maxtem' ),
		'id'            => 'sidebar-comments',
		'description'   => esc_html__( 'Add widgets here.', 'maxtem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'maxtem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function iglesiass_scripts() {
	wp_enqueue_style('jquery');
	wp_enqueue_style( 'iglesiass-style-bootstrap',  get_template_directory_uri() . '/layouts/libs/bootstrap/bootstrap.css' );
	wp_enqueue_style( 'iglesiass-style-fontaveson',  get_template_directory_uri() . '/layouts/libs/fontaveson/css/all.css' );
	wp_enqueue_style( 'animate',  get_template_directory_uri() . '/layouts/css/animate.css' );
	wp_enqueue_style( 'iglesiass-style',  get_template_directory_uri() . '/layouts/css/style.css' );

	
	// wp_enqueue_script( 'iglesiass-scripts-jquery', get_template_directory_uri() . '/layouts/libs/query.js', array(), '20151215', true );
	wp_enqueue_script( 'iglesiass-scripts-bootstrap', get_template_directory_uri() . '/layouts/libs/bootstrap/bootstrap.js', array(), '', true );
	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/layouts/script/wow.min.js', array(), '', false );
	wp_enqueue_script( 'wowInit-script', get_template_directory_uri() . '/layouts/script/wowInit.js', array(), '', false );
	wp_enqueue_script( 'iglesiass-scripts-script', get_template_directory_uri() . '/layouts/script/script.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iglesiass_scripts' );

// function ale_add_scripts_maxx($hook) {

// 	wp_enqueue_script( 'aletheme_metaboxes',  get_template_directory_uri(). '/inc/js/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
// }
// add_action( 'admin_enqueue_scripts', 'ale_add_scripts_maxx');Данный script не совместим с REDUX

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * REDUX.
 */
require get_template_directory() . '/inc/sample-config.php';
/**
 * breadcrumbs хлебные крошки.
 */
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 *  META BOXES.
 */
require get_template_directory() . '/inc/metaboxes.php';
/**
 *  Posts Type.
 */
require get_template_directory() . '/inc/posts.php';
/**
 *  Taxonomy.
 */
require get_template_directory() . '/inc/taxonomy.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



	








/* Отключаем админ панель для всех пользователей. */
  show_admin_bar(false);
// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}

