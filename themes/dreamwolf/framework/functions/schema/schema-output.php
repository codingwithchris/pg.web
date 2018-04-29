<?php
// =============================================================================
// FUNCTIONS/SCHEMA.PHP
// -----------------------------------------------------------------------------
// Core Helper functions for generating schema and loading it in the proper place
// =============================================================================

// Dynamically Generate Schema for Shows
if( ! function_exists( 'wolf_load_show_schema' ) ){

	add_action( 'wolf_load_schema', 'wolf_load_show_schema' );

	function wolf_load_show_schema(){

		if( is_singular( 'shows' ) ){

			wolf_build_show_schema();

		}

	}

}

// Dynamically Generate Schema for Artists