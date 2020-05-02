<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'AMOR_DIR_URI' ) )
		define( 'AMOR_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'AMOR_DIR_ASSETS_URI' ) )
		define( 'AMOR_DIR_ASSETS_URI', AMOR_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'AMOR_DIR_CSS_URI' ) )
		define( 'AMOR_DIR_CSS_URI', AMOR_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'AMOR_DIR_JS_URI' ) )
		define( 'AMOR_DIR_JS_URI', AMOR_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('AMOR_DIR_ICON_IMG_URI') )
		define( 'AMOR_DIR_ICON_IMG_URI', AMOR_DIR_ASSETS_URI.'img/icon/' );
	
	//DIR inc
	if( !defined( 'AMOR_DIR_INC' ) )
		define( 'AMOR_DIR_INC', AMOR_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'AMOR_DIR_ELEMENTOR' ) )
		define( 'AMOR_DIR_ELEMENTOR', AMOR_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'AMOR_DIR_PATH' ) )
		define( 'AMOR_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'AMOR_DIR_PATH_INC' ) )
		define( 'AMOR_DIR_PATH_INC', AMOR_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'AMOR_DIR_PATH_LIB' ) )
		define( 'AMOR_DIR_PATH_LIB', AMOR_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'AMOR_DIR_PATH_CLASSES' ) )
		define( 'AMOR_DIR_PATH_CLASSES', AMOR_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'AMOR_DIR_PATH_WIDGET' ) )
		define( 'AMOR_DIR_PATH_WIDGET', AMOR_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'AMOR_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'AMOR_DIR_PATH_ELEMENTOR_WIDGETS', AMOR_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( AMOR_DIR_PATH_INC . 'amor-breadcrumbs.php' );
	// Sidebar register file include
	require_once( AMOR_DIR_PATH_INC . 'widgets/amor-widgets-reg.php' );
	// Post widget file include
	require_once( AMOR_DIR_PATH_INC . 'widgets/amor-recent-post-thumb.php' );
	// News letter widget file include
	require_once( AMOR_DIR_PATH_INC . 'widgets/amor-newsletter-widget.php' );
	//Social Links
	require_once( AMOR_DIR_PATH_INC . 'widgets/amor-social-links.php' );
	// Instagram Widget
	require_once( AMOR_DIR_PATH_INC . 'widgets/amor-instagram.php' );
	// Nav walker file include
	require_once( AMOR_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( AMOR_DIR_PATH_INC . 'amor-functions.php' );

	// Theme Demo file include
	require_once( AMOR_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( AMOR_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( AMOR_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( AMOR_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( AMOR_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( AMOR_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( AMOR_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( AMOR_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( AMOR_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( AMOR_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class amor dashboard
	require_once( AMOR_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( AMOR_DIR_PATH_INC . 'amor-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( AMOR_DIR_PATH_INC . 'amor-metabox.php' );
	}
	

	// Admin Enqueue Script
	function amor_admin_script(){
		wp_enqueue_style( 'amor-admin', get_template_directory_uri().'/assets/css/amor_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'amor_admin', get_template_directory_uri().'/assets/js/amor_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'amor_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Amor object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Amor Dashboard .
	 *
	 */
	
	$Amor = new Amor();
	
