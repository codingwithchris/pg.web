<?php
/**
 * This file contains any function that removes or filters another function
 *
 * @call	   load-includes.php
 * @since      1.0.0
 * @author     Christopher Hahn & Jordan Hanely - Catapult Creative
 *
 * Copyright © 2015 Catapult Creative LLC
 *
 */


// Remove Wordpress Version
// ================================
 // Showing WP version is a security risk
// --------------------------------------------------------

 add_filter('the_generator', 'wolf_remove_version_from_wp_head');

function wolf_remove_version_from_wp_head() {

	return '';

}



// Remove Default WP Login Error
// =====================================================
// Uses a filter to change the login failes error message
// Showing the default message can pose a security risk because
// it gives hints about why the login was incorrect.
// @since 1.0
// ---------------------------------------------------------------------------------------------

add_filter( 'login_errors', 'wolf_change_default_login_error_message' );

function wolf_change_default_login_error_message(){

 	return 'INCORRECT LOGIN';

}





// Remove Default Posts menu from WP Admin
// ===================================================
// @since 1.0
// @future This should be linked with an ACF
// option to toggle it on or off
// ------------------------------------------------------------------------------------------

add_action('admin_menu','wolf_remove_default_post_type');

function wolf_remove_default_post_type() {

	if ( is_admin() ){

		remove_menu_page('edit.php');
	}
}


// REMOVE Support for WP-EMOJIS
// because the script force loads in header...boooooooo
// =============================================
// @since 1.0
// ------------------------------------------------------------------------------

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );



// Remove the theme editor menu from the
// wp-admin menu.  We really don't need
// it for any reason.
// ==========================================
// @since 1.0
// ---------------------------------------------------------------------------

 add_action('_admin_menu', 'wolf_remove_theme_editor_menu', 1);

function wolf_remove_theme_editor_menu() {

  remove_action('admin_menu', '_add_themes_utility_last', 101);

}



// Remove RSD Link from WP-Head
// ===============================================================
// @since 1.0
// @note  if you need to add integration with services like Flickr...add this back
// -----------------------------------------------------------------------------------------------------------------

remove_action('wp_head', 'rsd_link');

// Remove Windows Live Writer
// =======================
// @since 1.0
// ------------------------------------------
remove_action('wp_head', 'wlwmanifest_link');


// Remove Post Relational Links
// =========================
// @since 1.0
// -------------------------------------------

remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );


// Remove The Auto Paragraphs from ACF WYSIWYG Editor
// ==============================================
// @since 1.0
// -------------------------------------------
remove_filter ('acf_the_content', 'wpautop');