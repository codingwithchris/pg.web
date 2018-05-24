<?php
/**
 * FUNCTIONS.PHP
 *
 * The Main functions file for dreamwolf used to define constants, define paths, and require fles
 *
 * @since 1.0.0
 * @author Christopher Allen Hahn <chris@codewolfseven.com>
 * @copyright 2016 Code Wolf Seven
 * @package wordpress
 */



/**
 * The current version of the Dreamwof Theme
 *
 * @since 1.0.0
 */
define( 'WOLF_VERSION', '1.3.0' );

/**
 * Define the template path constant.
 *
 * @since 1.0.0
 */
define( 'WOLF_TEMPLATE_PATH', get_template_directory()  );

/**
 * Define the template URL constant.
 *
 * @since 1.0.0
 */
define( 'WOLF_TEMPLATE_URL', get_template_directory_uri() );

/**
 * Define the assets URL constant.
 *
 * This is where CSS, JS and certain images can be found.
 * @since 1.0.0
 */
define( 'WOLF_ASSETS_URL', get_template_directory_uri() . '/framework/assets' );


/**
 * Define the assets Path constant.
 *
 * Specifically useful for loading things like file_get_contents();
 * @since 1.0.0
 */
define( 'WOLF_ASSETS_PATH', get_template_directory() . '/framework/assets' );

/**
 * Define this if Gravity Forms is Active
 *
 * @since 1.0.0
 */
define( 'WOLF_GF_ACTIVE', class_exists( 'GFForms' ) );

/**
 *  Define site path for use in CDN String Replace Function in helpers.php
 *
 * @since 1.1
 * @todo make the definitio dynamic and not hard coded
 */

 if ( ! defined( 'PG_LIVE_SITE_PATH' ) ){
	define ( 'PG_LIVE_SITE_PATH', 'theplaygroundtheatre.org' );
}



/**
 * Set the main stylesheet version of the site equal to the file upload time
 *
 * This is used for cache-busting
 * @since 1.0.0
 *
 */
define( 'WOLF_CACHEBUST_STYLESHEET_VERSION', filemtime( WOLF_TEMPLATE_PATH. '/style.css' ) );


/**
 * Define variables to use for includes and requires.
 *
 * These variables are scoped to this file.
 * @since 1.0.0
 */

$func_path 			= '/framework/functions';
$help_path 			= $func_path . '/helpers';
$enq_path 			= $func_path . '/enqueue';
$cont_path 			= $func_path . '/controls';
$show_path 			= $func_path . '/shows';
$artist_path 			= $func_path . '/artists';
$schema_path 		= $func_path . '/schema';
$admin_path			= $func_path . '/admin';
$asset_path 			= '/framework/assets';


/**
 * Load the files responsible for enqueing scripts and styles
 *
 * @since 1.0.0
 * @package Enqueue
 */


require_once( WOLF_TEMPLATE_PATH . $enq_path . '/styles.php' );
require_once( WOLF_TEMPLATE_PATH . $enq_path . '/scripts.php' );

/**
 * Load the files responsible for Theme Setup
 *
 * @since 1.0.0
 */
require_once( WOLF_TEMPLATE_PATH . $func_path . '/setup.php' );

/**
 * Load global helper functions.
 *
 * These functions are all-important core-functions used across the coebase.
 * @since 1.0.0
 * @package Helpers
 */
require_once( WOLF_TEMPLATE_PATH . $help_path . '/helpers.php' );
require_once( WOLF_TEMPLATE_PATH . $help_path . '/sanitize.php' );
require_once( WOLF_TEMPLATE_PATH . $help_path . '/cta-helpers.php' );

/**
 * Load global helper functions.
 *
 * These functions are all-important core-functions used across the coebase.
 * @since 1.0.0
 * @package Admin
 */
require_once( WOLF_TEMPLATE_PATH . $admin_path . '/admin-columns.php' );

/**
 * Load global schema specific funtions.
 *
 * @since 1.2.0
 * @package Schema
 */
require_once( WOLF_TEMPLATE_PATH . $schema_path . '/schema-about.php' );
require_once( WOLF_TEMPLATE_PATH . $schema_path . '/schema-shows.php' );
require_once( WOLF_TEMPLATE_PATH . $schema_path . '/schema-output.php' );


/**
 * Load show functions loader
 *
 * The loader itself loads the show related functions and files
 * @since 1.2.0
 * @package Shows
 */
require_once( WOLF_TEMPLATE_PATH . $show_path . '/show-loader.php' );

/**
 * Load artist functions loader
 *
 * The loader itself loads the artist related functions and files
 * @since 1.2.1
 * @package Artists
 */
require_once( WOLF_TEMPLATE_PATH . $artist_path . '/artist-loader.php' );


/**
 * Load our controls
 *
 * These files are responsible for loading functionality specific to controlling
 * The display of site elements.  FOr eample, header-controls.php controls
 * determines where we are at and loads the proper header file accordingly.
 *
 * @since 1.0.0
 * @package Controls
 */
require_once( WOLF_TEMPLATE_PATH . $cont_path . '/header-controls.php' );
require_once( WOLF_TEMPLATE_PATH . $cont_path . '/post-sort-order.php' );

/**
 * Handle the asynchronous loading of scripts and styles
 *
 * @since 1.1.0
 * @package Enqueue
 */
require_once( WOLF_TEMPLATE_PATH . $enq_path . '/async.php' );