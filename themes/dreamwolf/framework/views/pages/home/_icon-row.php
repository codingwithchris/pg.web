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
	$bg = '';
	$icon_1 = '';
	$icon_2 = '';
	$icon_3 = '';
	$icon_4 = '';
 ?>


<div class="home-icons _pvl _bgCover _before _bg-overlay-d-gray--98" style="background-image: url( <?php echo esc_url( wolf_cdn_url ( content_url() . '/uploads/2016/04/home-icon-bg.jpg' ) ); ?> );">
	<div class="container -max -width _bring-to-front">

		<div class="-fill _c-txt _white">
			<h2 class="h1 -grunge _pbm">A Playground For...</h2>
		</div>

		<div class="three _c-txt home-icon -omega-n">
			<img class="icon" src="<?php echo esc_url(content_url() . '/uploads/2016/04/home-elitist-playground.png' ); ?>" alt="An icon representing elitist by showing an old time fancy hat." width="175" height="175">
			<h4 class="icon-title _l-gray" style="margin-top:25px;margin-bottom:30px;">Artists</h4>
		</div>

		<div class="three _c-txt home-icon">
			<img class="icon" src="<?php echo esc_url( content_url() . '/uploads/2016/04/home-unrealistic-playground.png' ); ?>" alt="An icon representing unrealistic by showing a magical wand!" width="175" height="175">
			<h4 class="icon-title _l-gray" style="margin-top:25px;margin-bottom:30px;">Creators</h4>
		</div>

		<div class="three _c-txt home-icon">
			<img class="icon" src="<?php echo esc_url( content_url() . '/uploads/2016/04/home-outdated-playground.png' ); ?>" alt="An icon representing outdated by showing an old VCR tape." width="175" height="175">
			<h4 class="icon-title _l-gray" style="margin-top:25px;margin-bottom:30px;">Storytellers</h4>
		</div>

		<div class="three _c-txt home-icon">
			<img class="icon" src="<?php echo esc_url( content_url() . '/uploads/2016/04/home-boring-playground.png' ); ?>" alt="An icon representing boring by depicting the letter z floating up into the air." width="175" height="175">
			<h4 class="icon-title _l-gray" style="margin-top:25px; margin-bottom:30px;">Dreamers</h4>
		</div>

	</div>
</div>