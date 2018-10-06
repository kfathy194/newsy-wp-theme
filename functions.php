<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Newsy 1.0
 */
function newsy_setup() {
	if( !function_exists( 'the_field' ) ) {
		add_action( 'admin_notices', 'mu_plugins_for_newsy' );
	}
	function mu_plugins_for_newsy(){
		echo '<div class="error notice">
						<p>Please install <a href="https://wordpress.org/plugins/advanced-custom-fields/">Advanced Custom Fields plugin</a>, it is required for this theme to work properly!</p>
					</div>';
	}
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
  add_theme_support( 'title-tag' );
  
  /**
   * Template for the favicon full cross browser support
   */
  function get_favicon($icon_path){
    echo  '  <link rel="apple-touch-icon" sizes="57x57" href="'.$icon_path.'/apple-icon-57x57.png">';
    echo  '  <link rel="apple-touch-icon" sizes="60x60" href="'.$icon_path.'/apple-icon-60x60.png">';
    echo  '  <link rel="apple-touch-icon" sizes="72x72" href="'.$icon_path.'/apple-icon-72x72.png">';
    echo  '  <link rel="apple-touch-icon" sizes="76x76" href="'.$icon_path.'/apple-icon-76x76.png">';
    echo  '  <link rel="apple-touch-icon" sizes="114x114" href="'.$icon_path.'/apple-icon-114x114.png">';
    echo  '  <link rel="apple-touch-icon" sizes="120x120" href="'.$icon_path.'/apple-icon-120x120.png">';
    echo  '  <link rel="apple-touch-icon" sizes="144x144" href="'.$icon_path.'/apple-icon-144x144.png">';
    echo  '  <link rel="apple-touch-icon" sizes="180x180" href="'.$icon_path.'/apple-icon-180x180.png">';
    echo  '  <link rel="apple-touch-icon" sizes="152x152" href="'.$icon_path.'/apple-icon-152x152.png">';
    echo  '  <link rel="icon" type="image/png" sizes="192x192"  href="'.$icon_path.'/android-icon-192x192.png">';
    echo  '  <link rel="icon" type="image/png" sizes="32x32" href="'.$icon_path.'/favicon-32x32.png">';
    echo  '  <link rel="icon" type="image/png" sizes="96x96" href="'.$icon_path.'/favicon-96x96.png">';
    echo  '  <link rel="icon" type="image/png" sizes="16x16" href="'.$icon_path.'/favicon-16x16.png">';
    echo  '  <link rel="manifest" href="'.$icon_path.'/manifest.json">';
    echo  '  <meta name="msapplication-TileColor" content="#ffffff">';
    echo  '  <meta name="msapplication-TileImage" content="'.$icon_path.'/ms-icon-144x144.png">';
    echo  '  <meta name="theme-color" content="#ffffff"> ';
  }

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Newsy 1.0
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'newsy' ),
		'social'  => __( 'Social Links Menu', 'newsy' ),
	) );
}
add_action( 'after_setup_theme', 'newsy_setup' );


/**
 * Enqueue scripts and styles.
 *
 * @since Newsy 1.0
 */
function newsy_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'newsy-fonts', get_theme_file_uri('/assets/css/fonts.css') );

	// Newsy Theme stylesheet.
	wp_enqueue_style( 'newsy-style', get_stylesheet_uri() );

	// Newsy Theme scripts.
  wp_enqueue_script( 'slick-slider-js', get_theme_file_uri('/assets/js/slick.min.js'), array( 'jquery' ), '', true );
  wp_enqueue_script( 'newsy-js', get_theme_file_uri('/assets/js/functions.js'), array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'newsy_scripts' );

?>