<?php
/**
 *  FUNCTIONS/CONTROLS/HEADER-CONTROLS.PHP
 *
 * The function that is responsible for loading headers accross the site.
 * It runs through various scenarious to see which header file we need to load.
 *
 * @uses wolf_get_view to grab the appropriate header file
 * @since 1.0
 * @author Christopher Allen Hahn <chris@codewolfseven.com>
 * @package Controls
 */

// Only continue if our custom wolf_dispaly_header function exists

if( ! function_exists( 'wolf_display_header' ) ){

	function wolf_display_page_header(){

		// If we hit a 404 error
		if( is_404() ){

			wolf_get_view( 'headers', '_header', '404' );

		//If we are on a page
		}elseif( is_page() ){

			//If we are on the home page
			if ( is_front_page() ){

				wolf_get_view( 'headers', '_header', 'home' );

			// If we are on any other page
			} else{

				wolf_get_view( 'headers', '_header', 'inner' );

			}

		//If we are on an archive page
		} elseif ( is_archive() ){

			//
			// Pulls in our blog archive header
			//
			if( is_post_type_archive( 'blog' ) ){

				 wolf_get_view( 'headers', '_header', 'archive-blog' );

			//
			// Pulls in our show archive header
			//
			} elseif ( is_post_type_archive( 'shows' ) || is_tax( 'season' ) ){

				 wolf_get_view( 'headers', '_header', 'archive-show' );

			//
			// pulls in our artist archive header
			//
			} elseif( is_post_type_archive( 'artist') ){

				 wolf_get_view( 'headers', '_header', 'archive-artist' );

			} else {}

		//If we are on a single post page
		} elseif( is_single() ){

			//
			// Pulls in our single blog header
			//
			if( is_singular( 'blog' ) ){

				 wolf_get_view( 'headers', '_header', 'single-blog' );

			//
			// Pulls in our single show header
			//
			} elseif ( is_singular( 'shows' ) ){

				 wolf_get_view( 'headers', '_header', 'single-show' );

			//
			// pulls in our single artist header
			//
			} elseif( is_singular( 'artist') ){

				 wolf_get_view( 'headers', '_header', 'single-artist' );

			} else {}


		} else {}

	}//end function

} // End if function_exists check