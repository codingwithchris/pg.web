<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-SINGLE-SHOW.PHP
// ----------------------------------------------------------------------------
//
// The header used for a Single Show Post Page
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom frameowrk/functions/controls/header-controls.php.
//
// @since 1.0.5
// =============================================================================

// Declare Acf Variables
// =======================================

	//
	// Show Status
	//
	$status = esc_attr( wolf_get_show_status() );

	//
	// Show Title
	//
	$title = get_the_title();
	$title = esc_html( $title );

	//
	// Fallback Header
	//

	$header_image_url = '';
	$header_image_alt = '';

	// Get Single Show Image
	if( get_field( 'show_header_image') ){

		$show_header = get_field( 'show_header_image');

		$header_image_url =  $show_header['url'];
		$header_image_url = esc_url( $header_image_url );

		$header_image_alt = $show_header['alt'];
		$header_image_alt = esc_attr( $show_header['alt'] );

	}


?>


<div id="single-show-header" class="page-header -inner -show -single<?php echo "-$status"; ?> _before _flex _flex-center-all _bgCover" style="background-image:url(<?php echo $header_image_url; ?>)">

	<div class="container -max -width">
			<div class="header-inner-wrap">

				<h1 class="title-group _c-txt">
					<span class="h1 -grunge title _mbn"><?php echo $title; ?></span>
					<span class="h5 sub mtn"><?php echo wolf_get_show_by_author(); ?></span>
				</h1>

		</div>
	</div>

</div>
<?php wolf_get_post_view( 'shows', '_single',  'pre-action-bar'); ?>
<?php wolf_get_post_view( 'shows', '_single',  'action-bar'); ?>



