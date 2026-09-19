<?php 
/**
 * @Packge 	   : Amor
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	// Final Class
	final class Amor{

		
		// Theme Version
		private $amor_version = '1.0';

		// Minimum WordPress Version required
		private $min_wp = '4.0';

		// Minimum PHP version required 
		private $min_php = '5.6.25';

		function __construct(){
			// Theme Support
			add_action( 'after_setup_theme', array( $this, 'support' ) );
			// 
			$this->init();
		}

		// Theme init
		public function init(){
			//
			$this->setup();

			// customizer init Instantiate
			$this->customizer_init();
			
		}

		// Theme setup
		private function setup(){
			
			// Create enqueue class instance
			$enqueu = new amor_Enqueue();
			$enqueu->scripts = $this->enqueue() ;
			$enqueu->amor_scripts_enqueue_init() ;

		}
		// Theme Support
		public function support(){
			// content width
	        $GLOBALS['content_width'] = apply_filters( 'amor_content_width', 751 );

	        
	        // text domain for translation.
	        load_theme_textdomain( 'amor', AMOR_DIR_PATH . '/languages' );
	        
	        // support title tage
	        add_theme_support( 'title-tag' );
	        
	        // support logo
			add_theme_support( 'custom-logo', array(
				'height'      => 34,
				'width'       => 126,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );

			//Custom Hreader
			add_theme_support( 'custom-header', array(
				'flex-width'    => true,
				'width'         => 1920,
				'flex-height'   => true,
				'height'        => 625,
				'default-image' => get_template_directory_uri() . '/assets/img/banner.jpg'
			) );

			//Custom background
			add_theme_support( 'custom-background', array(
				'default-color' => 'ffffff'
			) );

	        //  support post format
	        add_theme_support( 'post-formats', array( 'video','audio' ) );
	        
	        // support post-thumbnails
	        add_theme_support( 'post-thumbnails', array( 'post' ) );
			
			// Site logo size
			add_image_size( 'amor_logo_126x34', 126, 34, true );
					
			// Banner video thumb image size
			add_image_size( 'amor_banner_video_thumb_750x498', 750, 498, true );
					
			// About thumb image size
			add_image_size( 'amor_about_thumb_458x580', 458, 580, true );
					
			// Cases thumb image size
			add_image_size( 'amor_cases_thumb_350x361', 350, 361, true );
					
			// Event thumb image size
			add_image_size( 'amor_event_thumb_203x211', 203, 211, true );
					
			// Home blog post image size
			add_image_size( 'amor_home_blog_350x374', 350, 374, true );

			// Partners image size
			add_image_size( 'amor_partners_155x70', 155, 70, true );

			// Single blog post image size
			add_image_size( 'amor_single_blog_750x375', 750, 375, true );
			add_image_size( 'amor_np_thumb', 60, 60, true );

			// Latest post thumbnail Widget thumbnail size
			add_image_size( 'amor_widget_post_thumb', 80, 80, true );
	        	        
	        // support automatic feed links
	        add_theme_support( 'automatic-feed-links' );
	        
	        // support html5
	        add_theme_support( 'html5' );
			
			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
						    
	        // register nav menu
	        register_nav_menus( array(
	            'primary-menu'   => esc_html__( 'Primary Menu', 'amor' ),
				'causes-menu'    => esc_html__( 'Causes', 'amor' ),
	        ) );

	        // editor style
	        add_editor_style('assets/css/editor-style.css');

		} // end support method

		// enqueue theme style and script
		private function enqueue(){

			$cssPath = AMOR_DIR_CSS_URI;
			$jsPath  = AMOR_DIR_JS_URI;

			$scripts = array(
				'style' => array(
					array(
						'handler'		=> 'amor-google-font',
						'file' 			=> $this->google_font(),
					),
					array(
						'handler'		=> 'amor-bootstrap',
						'file' 			=> $cssPath.'bootstrap.min.css',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-4',
					),
					array(
						'handler'		=> 'amor-animate',
						'file' 			=> $cssPath.'animate.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-owl-carousel',
						'file' 			=> $cssPath.'owl.carousel.min.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-font-awesome',
						'file' 			=> $cssPath.'font-awesome.min.css',
						'dependency' 	=> array(),
						'version' 		=> '7.3.1-1',
					),
					array(
						'handler'		=> 'amor-themify',
						'file' 			=> $cssPath.'themify-icons.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					// array(
					// 	'handler'		=> 'amor-all-css',
					// 	'file' 			=> $cssPath.'all.css',
					// 	'dependency' 	=> array(),
					// 	'version' 		=> '1.0',
					// ),
					array(
						'handler'		=> 'amor-flaticon',
						'file' 			=> $cssPath.'flaticon.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-magnific-popup-css',
						'file' 			=> $cssPath.'magnific-popup.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-nice-select-css',
						'file' 			=> $cssPath.'nice-select.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-slick-css',
						'file' 			=> $cssPath.'slick.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-default-css',
						'file' 			=> $cssPath.'default.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'amor-style-css',
						'file' 			=> $cssPath.'style.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					
					array(
						'handler'		=> 'amor-style',
						'file' 			=> get_stylesheet_uri(),
					),
				),
				
				'scripts' => array(
					array(
						'handler'		=> 'amor-bootstrap',
						'file' 			=> $jsPath.'bootstrap.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '5.3.8-4',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-magnific-popup-js',
						'file' 			=> $jsPath.'jquery.magnific-popup.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-swiper-min-js',
						'file' 			=> $jsPath.'swiper.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-wow-min-js',
						'file' 			=> $jsPath.'wow.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-jquery-smooth-scroll-js',
						'file' 			=> $jsPath.'jquery.smooth-scroll.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-instagram-feed-js',
						'file' 			=> $jsPath.'jquery.instagramFeed.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-owl-carousel-js',
						'file' 			=> $jsPath.'owl.carousel.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-jquery-nice-select-js',
						'file' 			=> $jsPath.'jquery.nice-select.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-jquery-counterup-js',
						'file' 			=> $jsPath.'jquery.counterup.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-jquery-countdown-js',
						'file' 			=> $jsPath.'jquery.countdown.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-waypoints-min-js',
						'file' 			=> $jsPath.'waypoints.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-loopcounter-js',
						'file' 			=> $jsPath.'loopcounter.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-jquery-ajaxchimp-js',
						'file' 			=> $jsPath.'jquery.ajaxchimp.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'amor-slick-min-js',
						'file' 			=> $jsPath.'slick.min.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> '1.0',
						'in_footer' 	=> true
					),
					
					array(
						'handler'		=> 'amor-custom',
						'file' 			=> $jsPath.'custom.js',
						'dependency' 	=> array( 'jquery' ),
						'version' 		=> $this->amor_version,
						'in_footer' 	=> true
					),

				)
			);

			return $scripts;

		} // end enqueu method 

		// Google Font  
		private function google_font(){
			$font_url = '';

			/*
			 * The families this theme uses are bundled under
			 * assets/fonts/google, so nothing is fetched from Google and
			 * no request leaves the visitor's browser for a third party.
			 *
			 * Translators can still turn the fonts off for scripts these
			 * families do not cover.
			 */
			if ( 'off' !== _x( 'on', 'Google font: on or off', 'amor' ) ) {
				$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
			}

			return esc_url_raw( $font_url );
		} //End google_font method

		private function customizer_init(){

		
			

			
			// Instantiate amor theme customizer
			$amor_theme_customizer = new amor_theme_customizer();
		}
	} // End Amor Class

?>