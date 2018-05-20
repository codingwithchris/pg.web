<?php
// =============================================================================
// We bring a fresh perspective
//
// A view for our home page
//
// FRAMEWORK/VIEWS/PAGES/HOME/_FRESH-PERSPECTIVE.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// =============================================================================

/**
 * Temporarily Removing until needed
 * 

<div id="home-video-row" class="_bg-l-gray _pvl">
	<div class="container -max -width _c-txt">

		<h2 class="h1 -grunge _d-gray _pbs">Curious about our season?</h2>

		<div class="embed-container"> 

				$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?v=25qppuWM1sA', array('width'=>1280,'height'=>720));
				echo $embed_code;
						
		</div>
	</div>
</div>

**/?>


<?php
	// Set ACF Vars
	$img = get_field( 'home_quote_bg' );
	$img_url = esc_url ( $img['url'] );
?>

<div class="home-quote _bg-l-green">

	<div class="container -max -width _c-txt">

			<blockquote class="quote _width-max-800 _c-block _white">"When you see something powerfully acted on stage, it hits a nerve in the way music hits a nerve, the way great sports games hit a nerve. Watching someone twelve feet from you falling in love or being abused…there’s something raw about that experience that you don’t get from film or TV. It’s the live experience. "</blockquote>

			<p class="credit -larger _white">~ Adam Rapp</p>

	</div>

</div>