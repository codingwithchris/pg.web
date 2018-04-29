<div class="acting-class-calling _bg-white">
	<div class="container">

			<div class="six _pls _prm _ptl _pbs">

				<div class="calling-content _width-max-500 _r-block _r-txt">
					<h2 class="_gray">We all have a <strong class="_green">calling</strong></h2>
					<p class="_gray">And Acting is most definitely a calling. Actors are born. It's something that lives in your soul, a passion that flows through your veins. It's an innate urge to play and an overwhelming desire to create. It's a way to make sense of the world or escape from it all together.</p>
					<h5 class="_gray _pts">"We are the music makers and we are the dreamers of the dreams." <strong>~ Gene Wilder</strong></h5>
				</div>
			</div>


			<?php
				// Set ACF Vars

				$img = get_field( 'class_actors_calling_bg_image' );
				$img_url = esc_url ( $img['url'] );

			?>

			<div class="six _bgCover _bgCol-600 _before _bg-overlay-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>);background-position:center center;">
			</div>

	</div>
</div>