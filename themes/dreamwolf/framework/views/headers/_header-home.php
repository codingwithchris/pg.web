<?php
namespace Wolf;
use Reactor\Helpers;

// =============================================================================
// FRAMEWORK/VIEWS/HEADERS/HEADER-HOME.PHP
// ----------------------------------------------------------------------------
// A unique header for our home page.
//
// @uses wolf_get_featured_image() fround in framework/functions/helpers.php
// to get the featured image with a dynamic CDN URL and look for a fallback via ACF
// if needed
//
// @calledFrom frameowrk/functions/controls/header-controls.php.
//
// @since 1.0
// @todo - Link with ACF
// @todo - make homeheader image for this file unique and dynamic based off of the current show
// =============================================================================
?>

<div class="page-header -home _before _bgCover" style="background-image: url( <?php echo wolf_get_featured_image(); ?> );">

	<div class="container -max -width">
		<div class="header-inner-wrap -fill">

			<?php echo file_get_contents( WOLF_ASSETS_PATH . '/img/playground-logo.svg' ); ?>
			<h1 class="home-hero _bring-to-front _c-txt">
				<span class="_visually-hidden"><?php esc_html_e( 'The Playground Theatre' ); ?></span>
				<span class="h2 alt sub _l-gray _c-block"><?php esc_html_e( 'Life Unfiltered.' ); ?></span>
			</h1>
				
			<?php echo do_shortcode( '[mc4wp_form id="651"]' ); ?>
			<?php // wolf_get_next_show( 'small' ); ?>


		</div>

	</div>

</div>