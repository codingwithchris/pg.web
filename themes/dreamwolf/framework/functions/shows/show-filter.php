<?php
// Display Beautiul Taxonomy Filters on Show Archives
// ==========================================

add_action( 'wolf_before_post', 'wolf_display_beatiful_taxonomy_filter' );

if( ! function_exists( 'wolf_display_beatiful_taxonomy_filter' ) ){

	function wolf_display_beatiful_taxonomy_filter(){

		if( is_archive( 'shows' ) || is_tax( 'season' ) ){

			do_action('show_beautiful_filters');

		}

	}

}