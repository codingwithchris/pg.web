<?php
namespace Reactor\ACF;

if( class_exists('acf') ){

	
	/**
	 * Add a general Site Options Page
	 *
	 * This page can be accessed by anyone with edit_posts capabilities
	 *
	 * @since  1.0.0
	 */
	
	acf_add_options_sub_page([
		'page_title' 	=> 'Custom Site Options',
		'menu_title' 	=> '∞ Site Options',
		'menu_slug' 	=> 'custom-site-options',
		'capability' 	=> 'edit_posts',
		'redirect' 		=> false,
		'parent_slug'	=> 'options-general.php'
	]);



	/**
	 * Sets the local path to load ACF options from
	 *
	 * @since  1.0.0
	 */

	add_filter('acf/settings/load_json', 'new_json_load_point' );

	function new_json_load_point( $paths ){

		// remove original path
		unset($paths[0]);

		// append new path with defined acf-local-cache lcoation
		$paths[] = __DIR__ . '/cache';

		// return the new path
		return $paths;

	}

	/**
	 * Sets the local path to save ACF options to
	 *
	 * @since  1.0.0
	 */

	add_filter('acf/settings/save_json', 'new_json_save_point' );

	function json_save_point( $point ){
			
		// update path with the constant
		$path = __DIR__ . '/cache';

		// return the new path
		return $path;
	}

}