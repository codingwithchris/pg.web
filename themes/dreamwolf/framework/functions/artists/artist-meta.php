<?php
/**
 * ARTIST-META.PHP
 *
 * Functions that grab and return core Artist meta data for use anywhere in our theme.
 *
 * @package Artists
 * @since 1.2.0
 */

// Get small artist Thumbnail for use in cards
function wolf_get_artist_small_headshot_url(){

	$img_url = '';

	if( get_field( 'artist_headshot' ) ){

		$img = get_field( 'artist_headshot' );
		$img_url = esc_url( $img['sizes']['medium'] );

	}

	return $img_url;

}

function wolf_get_artist_full_headshot_url(){


	$img_url = '';

	if( get_field( 'artist_headshot' ) ){

		$img = get_field( 'artist_headshot' );
		$img_url = esc_url( $img['url'] );

	}

	return $img_url;


}

function wolf_get_artist_headshot_alt(){

$img_alt = 'A headshot photo for ' . get_the_title();

	if( get_field( 'artist_headshot' ) ){

		$img = get_field( 'artist_headshot' );
		$img_alt = esc_attr( $img['alt'] );

	}

	return $img_alt;

}

function wolf_get_artist_bio_short(){

	$bio = 'Bio currently unavailable for this artist';

	if( get_field( 'artist_short_bio' ) ){
		$bio = get_field( 'artist_short_bio' );
	}

	return esc_html( $bio );

}

function wolf_get_artist_bio_full(){

	$bio = 'Bio currently unavailable for this artist';

	if( get_field( 'artist_full_bio' ) ){
		$bio = get_field( 'artist_full_bio' );
	}

	return esc_html( $bio );

}

function wolf_get_artist_twitter(){

}

function wolf_get_artist_instagram(){

}