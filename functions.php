<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'CREATIVE_AGENCY_DIR_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'CREATIVE_AGENCY_DIR_ASSETS_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_ASSETS_URI', CREATIVE_AGENCY_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'CREATIVE_AGENCY_DIR_CSS_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_CSS_URI', CREATIVE_AGENCY_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'CREATIVE_AGENCY_DIR_JS_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_JS_URI', CREATIVE_AGENCY_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'CREATIVE_AGENCY_DIR_IMGS_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_IMGS_URI', CREATIVE_AGENCY_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'CREATIVE_AGENCY_DIR_ICON_IMG_URI' ) ) {
	define( 'CREATIVE_AGENCY_DIR_ICON_IMG_URI', CREATIVE_AGENCY_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'CREATIVE_AGENCY_DIR_PATH' ) ) {
	define( 'CREATIVE_AGENCY_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'CREATIVE_AGENCY_DIR_PATH_INC' ) ) {
	define( 'CREATIVE_AGENCY_DIR_PATH_INC', CREATIVE_AGENCY_DIR_PATH . 'inc/' );
}

//Creative_Agency Libraries Folder Directory
if ( ! defined( 'CREATIVE_AGENCY_DIR_PATH_LIBS' ) ) {
	define( 'CREATIVE_AGENCY_DIR_PATH_LIBS', CREATIVE_AGENCY_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'CREATIVE_AGENCY_DIR_PATH_CLASSES' ) ) {
	define( 'CREATIVE_AGENCY_DIR_PATH_CLASSES', CREATIVE_AGENCY_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'CREATIVE_AGENCY_DIR_PATH_HOOKS' ) ) {
	define( 'CREATIVE_AGENCY_DIR_PATH_HOOKS', CREATIVE_AGENCY_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function creativeagency_admin_script(){
    wp_enqueue_style( 'creativeagency-admin', get_template_directory_uri().'/assets/css/creativeagency-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'creativeagency_admin', get_template_directory_uri().'/assets/js/creativeagency-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'creativeagency_admin_script' );



/**
 * Include File
 *
 */
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'creativeagency-breadcrumbs.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'creativeagency-widgets-reg.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'post-like.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'creativeagency-functions.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'creativeagency-commoncss.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'support-functions.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_HOOKS . 'hooks.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( CREATIVE_AGENCY_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Creative_Agency object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Creative_Agency = new Creative_Agency();