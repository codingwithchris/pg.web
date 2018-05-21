<?php
// =============================================================================
// A view that will give a little info about us and link to our about page
//
// A view for our home page
//
// FRAMEWORK/VIEWS/PAGES/HOME/_ABOUT-US.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// =============================================================================

$img = get_field( 'home_about_img' );
$img_url = esc_url ( $img['url'] );
$img_alt = esc_html ( $img['alt'] );

$icon = get_field( 'home_about_icon' );
$icon_url = esc_url ( $icon['url'] );
$icon_alt = esc_html ( $icon['alt'] );

?>

<div class="home-about-us o-offset-feature --content-left --block-center _bg-white _flex _flex-center-all">

	<div class="flex-col flex-col__left">
		
		<img class="icon" src="<?= $icon_url ?>" alt="<?= $icon_alt ?>" width="150 "height="150">
		<h4 class="title">What is The Playground?</h4>
		<p class="content _width-max-400">Discover who we are, why we exist, and why our brand of theatre will get under your skin.</p>
		<a class="btn -green -bold" href="<?= esc_html( home_url( '/about/' ) ); ?>">Get to Know Us</a>

	</div>

	<div class="flex-col flex-col__right">
		<img class="flex-col__img -full-width" src="<?= $img_url ?>" alt="<?= $img_alt ?>" width="800" height="600">
	</div>
	

</div>