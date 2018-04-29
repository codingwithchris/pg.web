<?php
// DreamWolf Theme Setup
// =============================================================================

if ( ! function_exists( 'wolf_setup_theme' ) ) :

	add_action( 'after_setup_theme', 'wolf_setup_theme' );

	function wolf_setup_theme() {

	//
	// Localization.
	//
	// Translations can be added to the /framework/lang/ directory.
	//

	load_theme_textdomain( '__wolf__', WOLF_TEMPLATE_PATH . '/framework/lang' );


	//
	// Automatic feed links.
	//
	// Adds RSS feed links to <head> for posts and comments.
	//

	// add_theme_support( 'automatic-feed-links' );


	//
	// WordPress menus.
	//
	// This theme uses wp_nav_menu() in one location.
	//

	register_nav_menus( array(
	 'primary' => __( 'Primary Menu', '__wolf__' )
	) );


	//
	// Featured images.
	//
	// Theme support for featured images and thumbnail sizes.
	//

	add_theme_support( 'post-thumbnails' );


	//
	// Allow shortcodes in widgets.
	//

	add_filter( 'widget_text', 'do_shortcode' );

  }

endif;



// Add an option to
// Gravity Forms that allows the user
// to hide field labels for each section
//
// @since 1.0

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );