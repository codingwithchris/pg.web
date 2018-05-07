<?php
	// Set ACF Vars

	$img = get_field( 'about_artists_bg' );
	$img_url = esc_url ( $img['url'] );

?>

<div class="about-resident-artists _bg-white _bgCover _before _bg-overlay-white--95 _pvl" style="background-image: url( <?php echo esc_url( $img_url ); ?> );">

	<div class="container -max -width _c-txt _bring-to-front">
		
		<div class="title-group _pbm">

			<h4 class="_green"><?php esc_html_e('Playground Artists'); ?></h4>

			<p class="_d-gray -larger _width-max-700 _c-block"><?php esc_html_e('Quisque placerat facilisis egestas cillum dolore. Fictum,  deserunt mollit anim laborum astutumque! Quisque placerat facilisis egestas cillum dolore. Fictum,  deserunt mollit anim laborum astutumque!'); ?></p>
		</div>

		<?php do_action('resident_artists') ?>

	</div>
</div>