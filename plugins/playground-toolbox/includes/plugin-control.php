<?php


// Prevent TapTap from making a Google Fonts Call
// ========================================

	add_action( 'wp_enqueue_scripts', 'remove_taptap_font_call', 100 );

	function remove_taptap_font_call(){

		if ( function_exists( 'bonfire_taptap_font' ) ){

			wp_deregister_style( 'bonfire-taptap-font' );

		}

	}


// Move TapTap Jquery Accordion to Footer
// ================================

add_action( 'wp_enqueue_scripts', 'wolf_move_taptap_tofooter', 100);

function wolf_move_taptap_tofooter(){

	if( function_exists( 'bonfire_taptap_accordion' ) ){

		wp_deregister_script( 'bonfire-taptap-accordion' );
		wp_register_script( 'bonfire-taptap-accordion', plugins_url() . '/taptap-by-bonfire/taptap-accordion.js', array( 'jquery' ), '2.4', true );
		wp_enqueue_script( 'bonfire-taptap-accordion' );

	}

}


// Remove Select2 CSS From loading on any page other than the show archive pages
// via the Beautiful Taxonomy Plugin
// ==============================================================
add_action( 'wp_enqueue_scripts', 'wolf_remove_select2_except_shows', 100);

function wolf_remove_select2_except_shows(){

 	if( ! is_admin() && class_exists( 'Beautiful_Taxonomy_Filters' ) && ! is_archive('shows') ){

		wp_deregister_style( 'beautiful-taxonomy-filters-basic' );
		wp_deregister_style( 'beautiful-taxonomy-filters' );
		wp_deregister_style( 'select2' );
		wp_deregister_script( 'select2' );

 	}

}


// Remove The Grid Scripts and Styles from Loading on any pages that
// are not show pages or the instagram page
// @note A priority of no lower than 101 must be used
// ==============================================================
add_action( 'wp_enqueue_scripts', 'wolf_remove_the_grid_with_exceptions', 101);

function wolf_remove_the_grid_with_exceptions(){

	if( ! is_admin() && class_exists( 'The_Grid_Plugin' ) ){

	 	if( ! is_singular('shows') && ! is_page( '766' ) ){

			wp_deregister_style( 'the-grid-inline' );
			wp_deregister_style( 'the-grid' );
			wp_deregister_script( 'the-grid' );

	 	}

 	}

}