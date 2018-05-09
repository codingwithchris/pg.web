<?php
	// Set ACF Vars

	$img = get_field( 'about_artists_bg' );
	$img_url = esc_url ( $img['url'] );

?>

<div class="about-resident-artists _bg-white _bgCover _before _bg-overlay-white--95 _pvl" style="background-image: url( <?php echo esc_url( $img_url ); ?> );">

	<div class="container -max -width _c-txt _bring-to-front">
		
		<div class="title-group _pbm">

			<h2 class="_green"><?php esc_html_e('Playground Artists'); ?></h2>

			<p class="_d-gray -larger _width-max-700 _c-block"><?php esc_html_e('Without great artists we couldn’t tell great stories. Here are some of the extraordinarily awesome people who are part of the Playground family.'); ?></p>
		</div>

		<?php do_action('resident_artists') ?>

	</div>
</div>