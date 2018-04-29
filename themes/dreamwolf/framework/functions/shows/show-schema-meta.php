<?php
// =============================================================================
// FUNCTIONS/SHOWS/SHOW-SCHEMA.PHP
// -----------------------------------------------------------------------------
// Functions that retreive show Schema Data
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//     COMING SOON
// =============================================================================

// Get Show Link to More Information about this Author
function wolf_get_show_schema_author_info_link(){


	$link = '';

	if( get_field( 'show_schema_author_info_link' ) ){

		$link = get_field( 'show_schema_author_info_link' );

	}

	return esc_url( $link );

}

// Get Show Link to Dramatists Script
function wolf_get_show_schema_dramatists_link(){


	$link = '';

	if( get_field( 'show_schema_dramatists_link' ) ){

		$link = get_field( 'show_schema_dramatists_link' );

	}

	return esc_url( $link );

}

// Get Show Link to Dramatists Script
function wolf_get_show_schema_start_datetime(){


	$date = '';

	if( get_field( 'show_schema_start_datetime' ) ){

		$date = get_field( 'show_schema_start_datetime' );

	}

	return esc_html( $date );

}

// Get Show Link to Dramatists Script
function wolf_get_show_schema_end_datetime(){


	$date = '';

	if( get_field( 'show_schema_end_datetime' ) ){

		$date = get_field( 'show_schema_end_datetime' );

	}

	return esc_html( $date );

}



function wolf_get_show_availability(){

	$availability = 'LimitedAvailability';

	if( wolf_show_is_past() ){

		$availability = 'Discontinued';

	}

	return $availability;


}