<?php
/**
 * dandachi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dandachi
 */

if ( ! function_exists( 'dandachi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dandachi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dandachi, use a find and replace
		 * to change 'dandachi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dandachi', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'dandachi' ),
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
		
		
		
		
			$labels = array(
				'name'               => _x( 'Services', 'dandachi' ),
				'singular_name'      => _x( 'Service','dandachi' ),
				'menu_name'          => _x( 'Services','dandachi' ),
				'name_admin_bar'     => _x( 'Services', 'dandachi'),
				'add_new'            => _x( 'Add Service', 'book', 'dandachi' ),
				'add_new_item'       => __( 'Add New Service', 'dandachi' ),
				'new_item'           => __( 'New Service', 'dandachi' ),
				'edit_item'          => __( 'Edit Service', 'dandachi' ),
				'view_item'          => __( 'View Service', 'dandachi' ),
				'all_items'          => __( 'All Services', 'dandachi' ),
				'search_items'       => __( 'Search Service', 'dandachi' ),
				'parent_item_colon'  => __( 'Parent Service:', 'dandachi' ),
				'not_found'          => __( 'No Service found.', 'dandachi' ),
				'not_found_in_trash' => __( 'No Service found in Trash.', 'dandachi' )
			);

			$args = array(
				'labels'             => $labels,
						'description'        => __( 'Description.','dandachi' ),
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'menu_icon'       	 => 'dashicons-clipboard',
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'Service' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
			);

			register_post_type( 'service', $args );
		
		

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'dandachi_custom_background_args', array(
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
add_action( 'after_setup_theme', 'dandachi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dandachi_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'dandachi_content_width', 640 );
}
add_action( 'after_setup_theme', 'dandachi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dandachi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dandachi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dandachi' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dandachi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dandachi_scripts() {
	
	
	wp_enqueue_style( 'dandachi-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
	
	wp_enqueue_style( 'dandachi-green', get_template_directory_uri().'/css/owl.theme.green.min.css' );
	wp_enqueue_style( 'dandachi-default', get_template_directory_uri().'/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'dandachi-carousel', get_template_directory_uri().'/css/owl.carousel.min.css' );
	wp_enqueue_style( 'dandachi-animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_style( 'dandachi-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style( 'dandachi-style', get_stylesheet_uri() );
	wp_enqueue_style( 'dandachi-responsive', get_template_directory_uri().'/css/responsive.css' );
	
	
	
	
	
	
	
	wp_enqueue_script( 'dandachi-js-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dandachi-js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dandachi-js-wow', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'dandachi-js-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dandachi_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




/* ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
    $option_page = acf_add_options_page(
        array(
            'page_title'  => 'Theme Settings',
            'menu_title'  => 'Theme Settings',
            'menu_slug'   => 'theme-settings',
            'capability'  => 'edit_posts',
            'redirect'    => true,
            'position' => 61,
            'icon_url'    => 'dashicons-layout'
        )
    );
}



