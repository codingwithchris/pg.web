<?php
use Playground\Seasons;

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

// Get Show Archive Header Image
if( get_field( 'show_archive_header_image', 'options') ){

	$show_header = get_field( 'show_archive_header_image', 'options');

	$header_image_url =  $show_header['url'];
	$header_image_url = esc_url( $header_image_url );

}

$season = new Playground\Seasons\Season( $current_term_id );
?>

<div id="archive-show-header" class="page-header -inner -archive _before _flex _flex-center-v _bgCover" style="background-image:url(<?php echo $header_image_url; ?>)">

	<div class="container -max -width">
			<div class="header-inner-wrap -fill">

				<h1 class="title-group">
					<span class="h1 -grunge title _mbn"><?php echo $season->get_name(); ?></span>
					<span class="h5 sub mtn"><?= $season->get_tagline(); ?></span>
				</h1>

		</div>
	</div>
</div>