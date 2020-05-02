<?php 
/**
 * @Packge     : Amor
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

// demo import file
function amor_import_files() {
	
	$demoImg = '<img src="'. AMOR_DIR_INC . 'demo/screen-image.jpg' .' " alt="'.esc_attr__( 'Demo Preview Imgae', 'amor' ).'" />';
	
  return array(
    array(
      'import_file_name'             => 'Amor Demo',
      'local_import_file'            => AMOR_DIR_PATH_INC .'demo/amor-demo.xml',
      'local_import_widget_file'     => AMOR_DIR_PATH_INC .'demo/amor-widgets.wie',
      'import_customizer_file_url'   => AMOR_DIR_INC . 'demo/amor-customizer.dat',
      'import_notice' => $demoImg,
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'amor_import_files' );
	
// demo import setup
function amor_after_import_setup() {
	// Assign menus to their locations.
    $main_menu    = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$causes_menu    = get_term_by( 'name', 'Causes', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary-menu' => $main_menu->term_id,
            'causes-menu'  => $causes_menu->term_id
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Homepage' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'amor_demodata_import', 'yes' );

}
add_action( 'pt-ocdi/after_import', 'amor_after_import_setup' );

//disable the branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//change the location, title and other parameters of the plugin page
function amor_import_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'amor' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'amor' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'amor-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'amor_import_plugin_page_setup' );

// Enqueue scripts
function amor_demo_import_custom_scripts(){
	
	
	if( isset( $_GET['page'] ) && $_GET['page'] == 'amor-demo-import' ){
		// style
		wp_enqueue_style( 'amor-demo-import', AMOR_DIR_INC . 'demo/css/demo-import.css', array(), '1.0', false );
	}
	
	
}
add_action( 'admin_enqueue_scripts', 'amor_demo_import_custom_scripts' );



?>