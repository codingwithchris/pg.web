<?php


// Check to see if tickets are available
// ===========================
function wolf_show_tickets_avalable(){

	if( get_field( 'tickets_available' ) ){

		return true;

	} else {

		return false;

	}

}

// Check to see if There is a trailer
// =========================
function wolf_show_trailer_exists(){

	if ( get_field( 'show_trailer_check' ) ){

		return true;

	} else {

		return false;

	}

}

// Check to see if There is a trailer
// =========================
function wolf_show_spotify_exists(){

	if ( get_field( 'show_spotify_check' ) ){

		return true;

	} else {

		return false;

	}

}


// Check to see if the show is an adaptation
function wolf_show_is_adapted(){

	if ( get_field( 'show_adaptation_check' ) ){

		return true;

	} else {

		return false;

	}

}

// Check to see of a gallery is available
function wolf_show_gallery_exists(){

	if ( get_field( 'show_gallery_check' ) ){

		return true;

	} else {

		return false;

	}

}

// Check to see if actors have been added to the show
function wolf_show_actors_exist(){

	if ( have_rows( 'show_actor_repeater' ) ){

		return true;

	} else {

		return false;

	}

}


// Check to see of a gallery is available
function wolf_show_artists_exist(){

	if ( have_rows( 'show_crew_repeater' ) ){

		return true;

	} else {

		return false;

	}

}
