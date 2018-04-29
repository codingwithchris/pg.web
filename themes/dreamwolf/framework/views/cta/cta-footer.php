<?php
// The Main Call to action for The Playground Theatre
// FRAMEWORK/VIEWS/CTA/_CTA-MAIN.PHP
//
// @todo Better ACF Linking
// @todo Make CTA Dynamic based on current show
//
// since 1.0
// =========================================

// Display CTA and set vars Only if ACF Option is Checked
// This helps speed things up by making sure nothing is queried
// unless we intend to display a Call to Action
// ==================================================

	// Set ACF field variables
	// -----------------------------
	$cta_change = get_field( 'cta_footer_change' );
	$cta_txt_field = get_field( 'cta_footer_txt' );
	$cta_sub_field = get_field( 'cta_footer_subtxt' );
	$cta_bg_color_field = get_field( 'cta_footer_bg_color' );


	$cta_bg_image = get_field( 'cta_footer_bg_image', 'options');
	$cta_bg_image_url = esc_url( $cta_bg_image['url'] );


	// Set Default Variables
	// -----------------------------------------------------------------------------

		// Set Normal Page Defaults
		// ====================
		if( is_page() ){
			$cta_txt = esc_html( 'This is Life Unfiltered.' );
			$cta_subtxt = esc_html( 'welcome to the playground.' );
		}

		// Set Single Post Defaults
		// ===================
		if( is_single() ){

				// Set Show Page Defaults
				if( is_singular( 'shows' ) ){
					$cta_txt = esc_html( 'like what we\'re doing?' );
					$cta_subtxt = esc_html( 'subscribe to get updates' );
				}

		}

		// Set Post Type Archive Defaults
		// ========================
		if( is_archive() || is_tax() ){

			// Show Post Archive
			if( is_post_type_archive( 'shows' ) || is_tax( 'season' ) ){
				$cta_txt = esc_html( 'like what we\'re doing?' );
				$cta_subtxt = esc_html( 'subscribe to get updates' );
			}

		}

		// Set 404 Error Page Defaults
		// ======================
		if( is_404() ){
			$cta_txt = esc_html( 'This is Life Unfiltered.' );
			$cta_subtxt = esc_html( 'welcome to the playground.' );
		}



	// If We are over-riding defaults on an individual page or Show Page
	// ===================================================
	if( $cta_change ){

		//Set ACF Overrides
		// -----------------------------------------------------------------------------
		if ( $cta_txt_field ){
			$cta_txt = esc_html( $cta_txt_field );
		}

		if ( $cta_sub_field ){
			$cta_subtxt = esc_html( $cta_sub_field );
		}

	}


?>

<div class="cta-row -footer _c-txt _pvl _bgCover _bg-overlay-d-gray _before" style="background-image:url( <?php  echo wolf_cdn_url( $cta_bg_image_url ); ?> )">

	<div class="container -max -width _bring-to-front">

		<h2 class="h1 -grunge title _white _mbn"><?php echo $cta_txt; ?></h1>
		<h5 class="subtitle _white"><?php echo $cta_subtxt; ?></h5>

		<?php
			// load the appropriate call to action
			// based on ACf fields.  THis will be updated in the future
			// right now we are using a file in framework/functions/helpers/cta-helpers to display the cta
			// =======================================================================

			do_action( 'wolf_cta' );

		?>

	</div>

</div>