<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-INNERPHP
// ----------------------------------------------------------------------------
//
// The header that will be used on every inner page of the site.
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom frameowrk/functions/controls/header-controls.php.
//
// @since 1.0
// @todo - Make Styles Dynamic based on Subtitle or no-subtitle
// =============================================================================


// Declare Acf Variables
// =======================================

	//
	// Header Title
	//
	$title = get_the_title();

	if( get_field( 'inner_header_title' ) ){
		$title = get_field( 'inner_header_title' );
	}

	$title = esc_html( $title );

	//
	// Header Sub Title
	//
	$sub = '';

	if( get_field( 'inner_header_sub' ) ){
		$sub = get_field( 'inner_header_sub' );
	}

	$sub = esc_html( $sub );

?>


<div class="page-header -inner -page <?php wolf_page_class(); ?>  _before _flex _flex-center-v _bgCover" style="background-image:url(<?php echo wolf_get_featured_image(); ?>)">

		<div class="container -max -width">
			<div class="header-inner-wrap -fill">

				<h1 class="title-group">
					<span class="h1 -grunge title _mbn"><?php echo $title; ?></span>
					<span class="h5 sub"><?php echo $sub; ?></span>
				</h1>

			</div>
		</div>
</div>
