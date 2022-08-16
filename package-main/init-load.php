<?php

define( 'PJ_DIR', __DIR__ );
define( 'PJ_URI', get_stylesheet_directory_uri() . '/package-main/' );
define( 'PJ_DIR_URL', get_stylesheet_directory() . '/package-main/' );
define( 'PJ_VERSION', '1.3.3' );

/**
 * Includes
 */
// require( PJ_DIR . '/hooks.php' );
require( PJ_DIR . '/helper.php' );
// require( PJ_DIR . '/ajax.php' );
require( PJ_DIR . '/static.php' );
// require( PJ_DIR . '/functions.php');
// require( PJ_DIR . '/post-type.php' );
// require( PJ_DIR . '/shortcode.php' );


/**
 * Create Linkselect Options
 */
if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page( array(
			'page_title' => 'ThangMayMienTrung Options',
			'menu_title' => 'ThangMayMienTrung Options',
			'menu_slug'  => 'thangmaymientrung-options',
			'capability' => 'edit_posts',
			'redirect'   => false
		) );
}

if ( ! function_exists( 'thangmaymientrung_register_nav_menu' ) ) {
    function thangmaymientrung_register_nav_menu(){
        register_nav_menus( array(
            'main_menu' => __( 'Main Menu', 'thangmaymientrung' ),
            'footer_menu'  => __( 'Footer Menu', 'thangmaymientrung' ),
        ) );
    }
    add_action( 'after_setup_theme', 'thangmaymientrung_register_nav_menu', 0 );
}
?>
