<?php
// =============================================================================
// FUNCTIONS/SHOWS/SHOW-META.PHP
// -----------------------------------------------------------------------------
// Functions that retreive show meta-data
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//     COMING SOON
// =============================================================================

// Get Author
function wolf_get_show_author(){

	$author = get_field( 'show_author' );

	return esc_html( $author );

}

function wolf_get_show_by_author(){

	$author = get_field( 'show_author' );

	return esc_html( ' by ' . $author );

}


// Get Ticket URL
function wolf_get_show_ticket_url(){

	$ticket_url = get_field( 'show_ticket_button_url' );

	return esc_url( $ticket_url );

}

// Get Ticket Icon
function wolf_get_show_ticket_text( $ticket_text_mod = null ){

	// Get Tthe Ticket Text from ACF
	$ticket_text = get_field( 'show_ticket_button_text' );

	// Use the tocket mod value
	// if one was passed through the function

	if ( $ticket_text_mod ){

		$ticket_text = $ticket_text_mod;

	}

	return esc_html( $ticket_text );

}


// Get Ticket URL
function wolf_get_show_ticket_price(){

	$ticket_price = '';

	if( get_field( 'show_ticket_price' ) ){
		$ticket_price = get_field( 'show_ticket_price' );
	}

	return $ticket_price;

}

// Get  Trailer Embed
function wolf_get_show_trailer(){

	$trailer_embed = get_field( 'show_trailer_embed' );

	return $trailer_embed;

}

// Get  Trailer Embed
function wolf_get_show_trailer_2(){

	$trailer_embed = get_field( 'show_trailer_embed_2' );

	return $trailer_embed;

}

// Get Trailer Icon


// Get Trailer Sponsor Output
function wolf_get_show_trailer_sponsor(){

	$trailer_sponsor = get_field( 'show_trailer_sponsor', false, false);

	return $trailer_sponsor;

}




// Get Spotify Embed
function wolf_get_show_spotify(){

	$spotify_embed = get_field( 'show_spotify_embed' );

	return $spotify_embed;


}


// Get Opening Date
function wolf_get_show_opening(){

	$start_date = 'TBA';

	if ( get_field( 'show_start_date' ) ){

		$start_date = get_field( 'show_start_date' );

	}

	return esc_html( $start_date );

}


// Get Closing Date
function wolf_get_show_closing(){

	$end_date = 'TBA';

	if ( get_field( 'show_end_date' ) ){

		$end_date = get_field( 'show_end_date' );

	}

	return esc_html( $end_date );


}


// Get Show Location
function wolf_get_show_location(){

}


// Get Show Synopsis
function wolf_get_show_synopsis(){

	$synopsis = 'A full synopsis of this show is coming soon.';

	if( get_field( 'show_syn' ) ){

		$synopsis = get_field( 'show_syn' );

	}

	return esc_html( $synopsis );

}


// Get Show Small Thumb URL
function wolf_get_show_small_thumb_url(){

	$img = get_field( 'show_small_thumb' );

	return esc_url( $img[ 'url' ] );

}

// Show Start Date
function wolf_get_show_start_date(){

	$start_date = 'tba';

	if( get_field( 'show_start_date' ) ){

		$start_date = get_field( 'show_start_date' );

	}

	return esc_html( $start_date );

}


// Show End Date
function wolf_get_show_end_date(){

	$end_date = 'tba';

	if( get_field( 'show_end_date' ) ){

		$end_date = get_field( 'show_end_date' );

	}

	return esc_html( $end_date );

}



// Get Show Header Image URL
function wolf_get_show_header_image_url(){

	$img = '';

	if ( get_field( 'show_header_image' ) ){

		$img = get_field( 'show_header_image' );

	}

	return esc_url( $img['url'] );

}


// Get Show Header Image ALT
function wolf_get_show_header_image_alt(){

	$img_alt = 'An Image from The Playground Theatre\'s production of ' . get_the_title();

	if ( get_field( 'show_header_image' ) ){

		$img_alt = get_field( 'show_header_image' );

	}

	return esc_attr( $img['alt'] );


}


// Get Directions
function wolf_get_show_directions(){

	return esc_url( "https://www.google.com/maps/dir/''/schuster+center/data=!4m5!4m4!1m0!1m2!1m1!1s0x884081513d400e19:0x34d8592741f2aa0f?sa=X&ved=0ahUKEwjco6PArfnNAhUJYiYKHRPyCP4Q9RcIpQEwCw");

}

// Get Show Rating
function wolf_get_show_rating(){

	$rating = 'R';

	if( get_field( 'show_rating' ) ){

		$rating = strtoupper( get_field( 'show_rating' ) );

	}

	return esc_html( $rating );

}

// Get Show Rating Reasons
function wolf_get_show_rating_reasons(){

}


// Get Show Runtime in Hours
function wolf_get_show_runtime_hours(){

	$runtime_h = 'tba';

	if( get_field( 'show_runtime_h' ) ){

		$runtime_h = get_field( 'show_runtime_h' );

	}

	return esc_html( $runtime_h );

}


// Get Show Runtime in Minutes
function wolf_get_show_runtime_minutes(){

	$runtime_m = 'tba';

	if( get_field( 'show_runtime_m' ) ){

		$runtime_m = get_field( 'show_runtime_m' );

	}

	return esc_html( $runtime_m );

}


// Get Show Number of Intermissions
function wolf_get_show_intermission_count(){

	$int = 'tba';

	if( get_field( 'show_num_intermissions' ) ){

		$int = get_field( 'show_num_intermissions' );

	}

	return esc_html( $int );

}


// Get Show Hashtag
function wolf_get_show_hashtag(){

	$hash = '#playground_dyt';

	if( get_field(  ) ){

		$hash = get_field(  );

	}

	return esc_html( $hash );

}


// Get Show FB Event Link
function wolf_get_show_fb_link(){


	$link = '';

	if( get_field( 'show_fb_event_link' ) ){

		$link = get_field( 'show_fb_event_link' );

	}

	return esc_url( $link );

}

// Get Show VTA Page link ( the url where they are advertising thie show on their site )
function wolf_get_show_vta_page_link(){


	$link = '';

	if( get_field( 'show_vta_page_link' ) ){

		$link = get_field( 'show_vta_page_link' );

	}

	return esc_url( $link );

}


//Get the Appropriate Grid Shortcode for the Show Gallery
function wolf_get_show_gallery(){


	$output = '';

	// If we are displaying a gallery and The Grid Plugin Exists
	if( wolf_show_gallery_exists() && class_exists( 'The_Grid_Plugin' ) ){

		$grid = get_field( 'show_gallery_grid' );
		$grid_name = get_the_title( $grid );

		$grid_output = do_shortcode( '[the_grid name="'.$grid_name.'"]' );

		return $grid_output;

	}

}

// Get Show Link to Dramatists Script
function wolf_get_show_venue_name(){


	$name = 'The Mathile Theatre inside the Benjamin and Marian Schuster Center';

	if( get_field( 'show_venue_name' ) ){

		$name = get_field( 'show_venue_name' );

	}

	return esc_html( $name );

}

// Get Show Link to Dramatists Script
function wolf_get_show_venue_address(){


	$address = '1 W 2nd St, Dayton, OH 45402';

	if( get_field( 'show_venue_address' ) ){

		$address = get_field( 'show_venue_address' );

	}

	return esc_html ( $address );

}

// Get Show Link to Dramatists Script
function wolf_get_show_venue_info_link(){


	$link = 'https://victoriatheatre.com/venues/schuster-center/';

	if( get_field( 'show_venue_info_link' ) ){

		$link = get_field( 'show_venue_info_link' );

	}

	return esc_url( $link );

}


// Get Show Sponsor Name
function wolf_get_show_sponsor_name(){


	$name = '';

	if( get_field( 'show_sponsor_name' ) ){

		$name = get_field( 'show_sponsor_name' );

	}

	return esc_html( $name );

}

// Get Show Sponsor Info
function wolf_get_show_sponsor_info(){


	$info = '';

	if( get_field( 'show_sponsor_info' ) ){

		$info = get_field( 'show_sponsor_info' );

	}

	return esc_html( $info );

}

// Get Show Sponsor Logo URL
function wolf_get_show_sponsor_logo_url(){


	$logo = '';

	if( get_field( 'show_sponsor_logo' ) ){

		$logo = get_field( 'show_sponsor_logo' );
		$logo_url = $logo['url'];

	}

	return esc_url( $logo_url );

}

// Get Show Sponsor Logo ALT
function wolf_get_show_sponsor_logo_alt(){


	$logo = '';

	if( get_field( 'show_sponsor_logo' ) ){

		$logo = get_field( 'show_sponsor_logo' );
		$logo_alt = $logo['alt'];

	}

	return esc_attr( $logo_alt );

}

// Get Show Sponsor Link
function wolf_get_show_sponsor_link(){

	$link = '';

	if( get_field( 'show_sponsor_link' ) ){

		$link = get_field( 'show_sponsor_link' );

	}

	return esc_url( $link );

}


function wolf_get_show_artist_role(){

}
