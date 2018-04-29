<?php
// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-404PHP
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
	$title = 'Page Not Found';

	$title = esc_html( $title );

	//
	// Header Sub Title
	//
	$sub = '404 Error';

	$sub = esc_html( $sub );



	// Get 404 Header Image
	if( get_field( 'header_404_image', 'options') ){

		$header_404 = get_field( 'header_404_image', 'options');

		$header_image_url =  $header_404['url'];
		$header_image_url = esc_url( $header_image_url );

		$header_image_alt = $header_404['alt'];
		$header_image_alt = esc_attr( $header_404['alt'] );

		$header_thumbnail_url = $header_404['sizes']['thumbnail'];
		$header_thumbnail_url = esc_url( $header_thumbnail_url );
	}


?>

<div class="page-header -inner -page <?php wolf_page_class(); ?>  _before _flex _flex-center-v">

		<div class="_bgCover-seo">
		<img class="_bgCover-seo-img" src ="<?php echo $header_image_url; ?>" alt="<?php echo $header_image_alt ?>">
	</div>

		<div class="container -max -width">
			<div class="header-inner-wrap -fill">

				<h1 class="title-group">
					<span class="h1 -grunge title _mbn"><?php echo $title; ?></span>
					<span class="h5 sub"><?php echo $sub; ?></span>
				</h1>

			</div>
		</div>
</div>
