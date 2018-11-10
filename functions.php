<?php
/**
 * bizteh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bizteh
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
 require_once get_theme_file_path("/inc/example.php");
if ( ! isset( $content_width ) ) {
	$content_width = 1088;
}

if ( ! function_exists( 'bizteh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bizteh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bizteh, use a find and replace
		 * to change 'bizteh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bizteh', get_theme_file_uri() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bizteh' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bizteh_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support('post-formats', array("image","audio","quote","link"));

		//Extra css editor
		add_editor_style( 'assets/css/custom-editor-style.css' );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 150,
			
		) );
	}
endif;
add_action( 'after_setup_theme', 'bizteh_setup' );


/**
 * Enqueue scripts and styles.
 */
function bizteh_scripts() {
	wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
	wp_enqueue_style( "bootstrap-css", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" );
	wp_enqueue_style( "bootstrap-css", "//fonts.googleapis.com/css?family=Playfair+Display:400,700");
	wp_enqueue_style( "style-css", get_theme_file_uri( "/assets/css/style.css" ), null, "1.0" );
	wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, "1.0" );

	wp_enqueue_style( 'bizteh-style', get_stylesheet_uri() );


	wp_enqueue_script( "bundle-js", get_theme_file_uri( "assets/js/bundle.min.js" ), array( "jquery" ), "1.0", true);

	wp_enqueue_script( "clean-js", get_theme_file_uri( "assets/js/clean.min.js" ), array( "jquery" ), "1.0", true);

	wp_enqueue_script( 'bizteh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bizteh-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bizteh_scripts' );


 // Register custom sidebars
function biztechfooter() {

		register_sidebar(array(
			'name'          => __( 'Footer one', 'bizteh' ),
			'id'            => 'footer-1',
			'description'   => __( 'footer widget', 'bizteh' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s text-center">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="text-center foot1">',
			'after_title'   => '</h2>',
		));
		

		register_sidebar(array(
			'name'          => __( 'Footer two', 'bizteh' ),
			'id'            => 'footer-2',
			'description'   => __( 'footer widget', 'bizteh' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s text-center">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="text-center foot1">',
			'after_title'   => '</h2>',
		));
		
		register_sidebar(array(
			'name'          => __( 'Footer thre', 'bizteh' ),
			'id'            => 'footer-3',
			'description'   => __( 'footer widget', 'bizteh' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s text-center">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="text-center foot1">',
			'after_title'   => '</h2>',
		));

		register_sidebar(array(
			'name'          => __( 'Right sidebar', 'bizteh' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Sidebar widget', 'bizteh' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s text-center">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="text-center foot1">',
			'after_title'   => '</h2>',
		));
		
		

}
add_action( 'widgets_init', 'biztechfooter' );
/*
* Customizer API
*/
function bizteh_customize_register( $wp_customize ) {
   	$wp_customize ->add_section('testimonial', array(
		'title' =>__('Header image','bizteh'),
		'priority' =>10
	));
	$wp_customize ->add_setting('image1', array(
		'default'  => '',
		'transport' =>'refresh'
	   ));
	 
	   $wp_customize -> add_control(
		  new WP_Customize_Image_Control($wp_customize,'image1',array(
			  'label' => 'Image Upload',
			  'section' => 'testimonial',
			  'settings' => 'image1'
		  ))
	   );
}
add_action( 'customize_register', 'bizteh_customize_register' );

