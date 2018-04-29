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
?>
<div class="home-perspective _ptm _pbm _bg-white">
	<div class="container -max -width _c-txt">
		<h5 class="_gray">Exploring human stories</h5>
		<h2 class="_green _mbn">Through our generation's unique voice</h2>

	</div>
</div>

<?php

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
	$img = get_field( 'home_rapp_quote_bg' );
	$img_url = esc_url ( $img['url'] );
?>
<div class="home-quote _pvl _bg-white _bgCover _before _bg-overlay-m-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>);background-position:center center;">
	<div class="container -max -width _l-txt _bring-to-front _pls _left-green">

				<p class="-quote _width-max-800 _l-block _white _mbn _pls">"It’s the live experience. When you see something powerfully acted on stage, it hits a nerve in the way music hits a nerve, the way great sports games hit a nerve. Watching someone twelve feet from you falling in love or being abused… There’s something raw about that experience that you don’t get from film or TV."<br/><br/><strong><em>~ Adam Rapp</em></strong> • Playwright</p>

	</div>
</div>