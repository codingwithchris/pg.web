<?php
// =============================================================================
//
// AUDITION PAGE
//
// FRAMEWORK/PAGES/PAGE/PAGE-AUDITION.PHP
// ------------------------------------------------------------------------------------------
// This file is displayed using our wolf_page_loader helper function.
//
// @uses wolf_get_view() to get template parts to build the output
// @since 1.0
// =============================================================================

//
// @uses ACF to check if the site audition notice is enabled.
// If the notice is enabled it shows the ful audition page with signup.
// Otherwise it shows an auditions unavailable txt.
//
?> 

<?php

	
if( get_field( 'audition_display', 'options' ) ){	

	// ALL Pertinent Audition info
	// @todo  spearate this file out
	wolf_get_page_view( 'audition', '_audition', 'intro' );
	wolf_get_page_view( 'audition', '_audition', 'show-1' );
	wolf_get_page_view( 'audition', '_audition', 'show-2' );
	// wolf_get_page_view( 'audition', '_audition', 'show-3' );
	wolf_get_page_view( 'audition', '_audition', 'details' );
	wolf_get_page_view( 'audition', '_audition', 'form' );

} else {

	// No Auditions Available
	wolf_get_page_view( 'audition', '_audition', 'closed' );

} ?>
