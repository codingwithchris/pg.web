<?php
// =============================================================================
// FUNCTIONS/SHOWS/SHOW-CORE.PHP
// -----------------------------------------------------------------------------
// Core Functionality related specifically to shows
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//     COMING SOON
// =============================================================================


// Get the STATUS of a show to determine where it is at in the show lifecycle
// @return		string 		lower case status of a show
// @returns tba, playing, rehearsing, past, future
// @uses ACF, date(), and strtotime()
// @ref for date compare http://stackoverflow.com/questions/2113940/compare-given-date-with-today
// @ref date range check http://stackoverflow.com/questions/976669/how-to-check-if-a-date-is-in-a-given-range
// @ref current date minus months http://stackoverflow.com/questions/10633879/current-date-minus-4-month
// @author Christopher Hahn
// @since 1.1.0
// ==================================================================

if ( ! function_exists( 'wolf_get_show_status' ) ){

	function wolf_get_show_status(){

		// Set a default of TBA when start and end dates are not selected
		$show_status = 'tba';


		// Make sure date and time field are populated with data
		if( get_field( 'show_start_date' ) && get_field( 'show_end_date' ) ){

			// Get today's Date
			$today = date("Ymd");

			// Get Raw Dates from ACF values
			$show_start_date = get_field( 'show_start_date', false, false);
			$show_end_date = get_field( 'show_end_date', false, false);

			//Get the approproate timestamps from the dates
			// @note rehearsal_start_ts will be used to determine if the show is in rehearsal
			// by taking the starting date of the show, and subtracting one month
			// =============================================================
			$rehearsals_start_ts = strtotime( $show_start_date .'-1month' );
			$show_start_ts = strtotime( $show_start_date );
			$show_end_ts = strtotime( $show_end_date );
			$today_ts = strtotime( $today );

			 // Check that show date is between start & end date, meaning it is currently in it's run
			 if ( ($today_ts >= $show_start_ts)  && ( $today_ts <= $show_end_ts)){

				 $show_status = 'playing';

			 }

			 // Check to see if the show is one month out from the start date, if it is, the show is in rehearsal
			  elseif ( ($today_ts > $rehearsals_start_ts) && ( $today_ts < $show_start_ts ) ){

			  	 $show_status = 'rehearsing';

			 }

			 // Check to see of the show is past it's end date
			 elseif ( $today_ts > $show_end_ts ){

				 $show_status = 'past';

			 }


			 // Check to see if the show is a future show but not yet in rehearsal
			  elseif ( ( $today_ts < $show_start_ts) && $show_status != 'rehearsing' ){

				 $show_status = 'future';

			 } else { }

		}

		 return $show_status;

	}

}


// will return true if the current show status is playing
// @since 1.1.0
// =====================================
if ( function_exists( 'wolf_get_show_status' ) ){

	function wolf_show_is_playing(){

		if( wolf_get_show_status() === 'playing' ){

			return true;

		} else {

			return false;

		}

	}

}

// Show is rehearsing
// Will return true if the current show status is rehearsing
// @since 1.1.0
// ===========================================
if ( function_exists( 'wolf_get_show_status' ) ){

	function wolf_show_is_rehearsing(){

		if( wolf_get_show_status() === 'rehearsing' ){

			return true;

		} else {

			return false;

		}

	}

}

// Will return true if the current show status is past
// @since 1.1.0
// =======================================
if ( function_exists( 'wolf_get_show_status' ) ){

	function wolf_show_is_past(){

		if( wolf_get_show_status() === 'past' ){

			return true;

		} else {

			return false;

		}

	}

}

// Will return true if the current show is in the future
// @since 1.1.0
// =======================================
if ( function_exists( 'wolf_get_show_status' ) ){

	function wolf_show_is_future(){

		if( wolf_get_show_status() === 'future' ){

			return true;

		} else {

			return false;

		}

	}

}

// If a show is currently playing or rehearsing, set the post to be sticky
// If the post is sticky and it is not currenlty playing or rehearsing, update the
// post in the db to remove the sticky status
// @uses the_post action to check at the top of each post
// @since 1.1.0
// ===========================================

add_action( 'the_post', 'wolf_stick_playing_or_rehearsing_to_top');

if( function_exists( 'wolf_show_is_playing') && function_exists( 'wolf_show_is_rehearsing' ) ){

	function wolf_stick_playing_or_rehearsing_to_top(){

		if( wolf_show_is_rehearsing() || wolf_show_is_playing() ){

			stick_post( get_the_ID() );

		} elseif( is_sticky() ){

			update_option( 'sticky_posts', false );

		}

	}

}

// Get the ID of the current season based off of an AF Option
// =============================================
function wolf_get_current_season_id(){

	$current_season_id = '';

	if( get_field( 'playground_current_season', 'options' ) ){

		$current_season_id = get_field( 'playground_current_season', 'options' );

	}

	return $current_season_id;

}


// Get the URL of the Current Season based of of an ACF Option
// =================================================

function wolf_get_current_season_url(){

	$current_season_id = wolf_get_current_season_id();

	// Fallback URL
	$current_season_link = site_url( '/shows' );

	// If we have the id of the current season
	if( $current_season_id ){

		$current_season_link = get_term_link( $current_season_id );

	}

	return esc_url( $current_season_link );

}


// Get the title of the current season based off of an ACF option
// ================================================

function wolf_get_current_season_title(){

	$current_season_title = '';

	if( $current_season_id ){

		$current_season_title = get_title( $current_season_id );

	}

	return esc_html( $current_season_title );

}