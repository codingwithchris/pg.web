<?php
/**
 * This file hold special functions to set-up ACF Options Pages
 * and further customize ACF to our liking
 *
 * @author Christopher Hahn - Catapult Creative
 * @since     1.0.0
 * @call	   cc-toolbox.php
 */


/* DO NOT LOAD DIRECTLY - DO NOT REMOVE
-------------------------------------------------------------------*/
defined( 'ABSPATH' ) or die( '<h1>NOT THIS TIME</h1>');

/**
 * ACF Options Setup
 *
 * Check if ACF Options function is present.
 * If the function exists, we are going to
 * set up our ACF Options pages
 *
 * (Required after v5 update - options page no longer loaded via plugin)
 *
 * @since 1.0.0
 * @uses acf_missing_func to give admin errors
 *
 */

if (function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')){

   /**
	* Create an options page
	* that is editable by clients
	*
	* This contains the General Site Options
	*
	*/

	acf_add_options_page([
		'page_title' => 'Site Options',
		'menu_title' => 'Site Options',
		'menu_slug' => 'custom-site-settings',
		'capability' => 'edit_posts',
		'redirect' => false,
	]);

} else {

	//If the necessary function are not found, give an admin error
	add_action('admin_notices', 'acf_missing_func');

}


/**
 * ACF json local cache setup
 *
 * SET ACF-JSON PLugin Folder Location to
 * /toolbox/acf-local-cache ONLY if the local
 * cache constant is defined.
 *
 *
 * @since 1.0.0
 *
 */

if ( defined( 'ACF_LOCAL_CACHE' ) ){

	/**
	 * Tell ACF where to load the local cache from
	 *
	 */

	add_filter('acf/settings/load_json', 'pg_acf_json_load_point');

	function pg_acf_json_load_point( $paths ) {

	    // remove original path
	    unset($paths[0]);

	    // append new path with constant
	    $paths[] = ACF_LOCAL_CACHE;

	    // return the new path
	    return $paths;
	}

	/**
	 * Tell ACF where to save the local cache to
	 *
	 */

	add_filter('acf/settings/save_json', 'pg_acf_json_save_point');

	function pg_acf_json_save_point( $path ) {

	    // update path with the constant
	    $path = ACF_LOCAL_CACHE;

	    // return the new path
	    return $path;

	}
}