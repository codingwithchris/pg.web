<?php
// Enqueue Scripts on The Playground Website
// ====================================
// Table of Contents
//
// ---------------------------------------------------------------

//Register and Enqueue Parent Stylesheet / Normalize
// @note	Only used to identify theme info - site styles are not in the parent stylesheet
if ( ! function_exists( 'wolf_enqueue_html5_shiv' ) ){

	function wolf_enqueue_html5_shiv() {

	    //Register and Enqueue HTML5 Shiv on IE 8 or 9
	    wp_register_script( 'wolf-html5-shiv', WOLF_ASSETS_URL . '/js/dist/html5shiv.min.js', '' , '1.0' , false );
	    wp_enqueue_style( 'wolf-html5-shiv' );
	    wp_script_add_data( 'wolf-html5-shiv', 'conditional', 'lt IE 9' );

	}

}




//Register and Enqueue the Lightcase Script

if ( ! function_exists( 'wolf_enqueue_lightcase' ) ){

	function wolf_enqueue_lightcase() {

	    //Register and Enqueue HTML5 Shiv on IE 8 or 9
	    wp_register_script( 'wolf-lightcase', WOLF_ASSETS_URL . '/js/dist/lightcase.min.js', '' , '1.1.1' , true );
	    wp_register_script( 'wolf-lightcase-init', WOLF_ASSETS_URL . '/js/dist/lightcase-init.min.js', '' , '1.1.1' , true );

	    if( is_singular( 'shows' ) ){

	    	wp_enqueue_script('wolf-lightcase');
	    	wp_enqueue_script('wolf-lightcase-init');


	    }
	  

	}

	add_action( 'wp_enqueue_scripts', 'wolf_enqueue_lightcase', 999999 );

}


