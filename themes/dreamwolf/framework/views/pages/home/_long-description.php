<?php
// =============================================================================
// Do you think theatre is...
//
// A view for our home page
//
// FRAMEWORK/VIEWS/PAGES/HOME/_ICON-ROW.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// =============================================================================

	// ACF Vars
	// ===============
	$img = get_field( 'home_description_bg' );
	$img_url = esc_url ( $img['url'] );
 ?>


<div class="home-description _bgCover _before _bg-overlay-d-gray--98" style="background-image: url( '<?= wolf_cdn_url( $img_url ); ?>');">
	<div class="container -max -width _bring-to-front">

		<div class="-fill _c-txt _white">
			<h3 class="h1 -grunge">Welcome to The Playground</h3>
			<p class="_l-gray -larger _width-max-700 _c-block">A place where adults explore what it means to be human through unfiltered storytelling. Our stripped down approach to theatre shines a spotlight on the messy parts of life that no one talks about and provides a space for grown-ups to try and figure out who they want to be when they grow up. From scraped knees to broken hearts, we’ve all been there and The Playground is here to tell the story.</p>
		</div>

	</div>
</div>