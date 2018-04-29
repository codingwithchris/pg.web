<?php
// ================================
// Build and Embed the Trailer for this show
// --------------------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-TRAILER.PHP
// ===============================================

// Set Variables
$trailer_title = 'The Trailer';

if( wolf_get_show_trailer_2() ){
	$trailer_title = 'The Trailers';
}

?>

<div id="show-trailer-row" class="row _pvl _bg-d-gray _before _bgCover" style="background-image:url( <?php echo esc_url( wolf_cdn_url ( content_url() . '/uploads/2016/02/playground-show-trailer-brick-bg.jpg' ) ); ?> )">
	<div class="container -max -width">

		<h2 class="_l-gray trailer-heading _mbn"><?php echo esc_html( $trailer_title ); ?></h2>
		<p class="trailer-sponsor _l-gray _pbs"><?php echo wolf_get_show_trailer_sponsor(); ?></p>


			<div class="embed-container -trailer-1">
				<?php echo wolf_get_show_trailer(); ?>
			</div>

			<?php // If there is a second Trailer ?>
			<?php if( wolf_get_show_trailer_2() ){ ?>

				<div class="embed-container -trailer-2" style="margin-top: 35px;">
					<?php echo wolf_get_show_trailer_2(); ?>
				</div>

			<?php } ?>

	</div>
</div>