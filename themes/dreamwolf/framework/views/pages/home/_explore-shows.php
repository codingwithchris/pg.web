<?php
// =============================================================================
// A view that will link to our shows page
//
// A view for our home page
//
// FRAMEWORK/VIEWS/PAGES/HOME/_EXPLORE-SHOWS.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// =============================================================================

$img = get_field( 'home_shows_img' );
$img_url = esc_url ( $img['url'] );
$img_alt = esc_html ( $img['alt'] );

$icon = get_field( 'home_shows_icon' );
$icon_url = esc_url ( $icon['url'] );
$icon_alt = esc_html ( $icon['alt'] );


?>


<div class="home-explore-shows o-offset-feature --content-right --block-center --last _bg-white _flex _flex-center-all">

		<div class="flex-col flex-col__left">
			<img class="flex-col__img -full-width" src="<?= $img_url ?>" alt="<?= $img_alt; ?>" width="800" height="600">
		</div>

		<div class="flex-col flex-col__right">

			<img class="icon" src="<?= $icon_url ?>" alt="<?= $icon_alt ?>" width="150 "height="150" >
			<h4 class="title">Exlpore The Shows</h4>
			<p class="content _width-max-400">Gallia est omnis divisa in partes tres, quarum. Nec dubitamus multa iter quae et nos invenerat.</p>
			<a class="btn -green -bold" href="<?= esc_html( home_url( '/shows/' ) ); ?>">Start Exploring</a>

		</div>
		
</div>