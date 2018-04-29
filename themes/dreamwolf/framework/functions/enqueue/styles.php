<?php
// =============================================================================
// FUNCTIONS/ENQUEUE/STYLES.PHP
// -----------------------------------------------------------------------------
// Theme styles.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
// Load Google Fonts
// Enqueue Parent Styles
// =============================================================================

// Enqueue Site Styles
// =============================================================================
add_action( 'wp_enqueue_scripts', 'wolf_enqueue_gfont', 1);
add_action( 'wp_enqueue_scripts', 'wolf_enqueue_parent_styles', 2 );

// Register and Enqueue Open Sans through Google Fonts
if( ! function_exists( 'wolf_enqueue_gfont' ) ){

	function wolf_enqueue_gfont(){

		wp_register_style( 'gfont-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,300italic,400italic', '', WOLF_VERSION, 'all' );

		// Load font if not in admin area
		if( ! is_admin() ){

			wp_enqueue_style( 'gfont-open-sans' );

		}

	}

}


//Register and Enqueue Parent Stylesheet / Normalize
// @note	Only used to identify theme info - site styles are not in the parent stylesheet
if ( ! function_exists( 'wolf_enqueue_parent_styles' ) ){

	function wolf_enqueue_parent_styles() {


	    //Register and Enqueue Parent Styles

	    wp_register_style( 'wolf-parent-stylesheet', WOLF_TEMPLATE_URL . '/style.css', '' , WOLF_CACHEBUST_STYLESHEET_VERSION , 'all' );

	    wp_enqueue_style( 'wolf-parent-stylesheet' );

	}

}