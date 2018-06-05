<?php
/**
 * Output the Chosen Call to Action
 *
 * Let the user select the type of call to action to display per page
 *
 * @future will incorporate a donate button and tickets
 * @since 1.1.0
 * @uses custom hook wolf_cta
 *
 */
 add_action( 'wolf_cta', 'wolf_display_chosen_cta');

 function wolf_display_chosen_cta(){

	$cta_option = get_field( 'cta_footer_choose' );

 	switch( $cta_option ){

 		case "about":
 			wolf_get_view( 'cta', '_cta', 'about' );
 			break;

 		case "donate":
 			wolf_get_view( 'cta', '_cta', 'donate' );
 			break;

 		case "next show":
 			wolf_get_next_show( 'small' );
 			break;

 		case "class info":
 			wolf_get_view( 'cta', '_cta-class', 'info' );
 			break;

 		case "class register":
 			wolf_get_view( 'cta', '_cta-class', 'register' );
 			break;

 		case "review":
 			wolf_get_view( 'cta', '_cta', 'review' );
 			break;

 		 case "season":
 			wolf_get_view( 'cta', '_cta', 'season' );
 			break;

 		case "subscribe":
 			wolf_get_view( 'cta', '_cta', 'subscribe' );
 			break;

 		case "tickets":
 			wolf_get_view( 'cta', '_cta', 'tickets' );
 			break;

 		default:
 			wolf_get_view( 'cta', '_cta', 'subscribe' );
	}

 }