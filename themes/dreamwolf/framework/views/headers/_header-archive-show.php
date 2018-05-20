<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-ARCHIVE-SHOW.PHP
// ----------------------------------------------------------------------------
//
// The header used for a the Show Archive Page
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom frameowrk/functions/controls/header-controls.php.
//
// @since 1.0.5
// @todo - Link with ACF
// @todo - set a unique fallback image for show archive pages
// @todo - set a unique title based on what season we are filtered to
// =============================================================================

// Get the Currently Queried Term ID
$current_term_id = $wp_query->get_queried_object_id();

// If the Currently Queried Season ID is equal to the current season ID, we
// are loading the current season
// @uses wolf_get_current_season_id() -> functions/shows/show-core.php
if( is_tax() && ( wolf_get_current_season_id() == $current_term_id ) ){

	$title = single_cat_title( '', false );
	$sub = 'current season';

// If we are still filtering, and not in the current season, then we are
// loading an archive
} elseif( is_tax() ) {

	$title = single_cat_title( '', false );
	$sub = 'season archive';

// If we are not filtering by season, we are displaying all of the Shows!
} else {

	$title = 'Explore';
	$sub= 'Our Shows';

}

// Get Show Archive Header Image
if( get_field( 'show_archive_header_image', 'options') ){

	$show_header = get_field( 'show_archive_header_image', 'options');

	$header_image_url =  $show_header['url'];
	$header_image_url = esc_url( $header_image_url );

}

?>

<div id="archive-show-header" class="page-header -inner -archive _before _flex _flex-center-v _bgCover" style="background-image:url(<?php echo $header_image_url; ?>)">

	<div class="container -max -width">
			<div class="header-inner-wrap -fill">

				<h1 class="title-group">
					<span class="h1 -grunge title _mbn"><?php echo $title; ?></span>
					<span class="h5 sub mtn"><?php echo $sub; ?></span>
				</h1>


		</div>
	</div>
</div>