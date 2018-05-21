<?php
	// Set ACF Vars

	$img = get_field( 'about_video_bg' );
	$img_url = esc_url ( $img['url'] );

?>


<div class="about-video _bg-l-gray _pvl _bgCover _before _bg-overlay-white--98" style="background-image: url( <?php echo esc_url( $img_url ); ?> );">
	<div class="container -max -width _c-txt _bring-to-front">
		
		<div class="twelve">

			<div class="about-video-text _width-max-600 _c-block _pbm">

				<h4 class="_d-gray">Our Purpose</h4>

				<p class="_d-gray -larger">The Playground’s vision is to be a playground for actors, artists, designers, and dreamers to use their unique voice to bring to the stage raw, honest, and relevant stories that reflect what it means to be human.</p>

			</div>

			<div class="about-video-container _width-max-800 _c-block">
				<div class="embed-container"> 

					<?php
						$embed_code = get_field('about_video_embed');
						echo $embed_code;
					?>

				</div>

				<p class="video-creator _d-gray _pts _mbn">
					Filmed and edited by our friends at <strong><a class="_green _under-green" href="http://knackforsubstance.com" target="_blank" title="Knack Creative Websote">Knack Creative</a></strong>.
				</p>

			</div>
		</div>

	</div>
</div>