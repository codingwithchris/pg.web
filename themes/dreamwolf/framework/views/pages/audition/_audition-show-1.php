<div class="audition-show-row -show-1 _bg-white">
	<div class="container _flex-row-container">

		<?php
			// Set ACF Vars

			$img = get_field( 'audition_show_1_bg' );
			$img_url = esc_url ( $img['url'] );

		?>

		<div class="_flex-half _bgCover _bgCol-700 _before _bg-overlay-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
		</div>

		<div class="audition-content-wrapper _flex-half _l-txt _flex _flex-center-v">

			<div class="audition-content _width-max-600 _plm _prm _pvl">

				<h2 class="h1 -grunge _gd-/ray _mbn">Tape</h2>
				<h5 class="_gray _mtn" style="margin-top: -10px;">by Stephen Belber</h5>
				<h4 class="_gray">October 2017</h4>
				
				<p class="-larger _gray">Jon, an aspiring filmmaker on the verge of hitting it big, hooks up for the weekend with his best friend from high school, Vince, a volunteer fireman who makes his money selling dope. Jon's new film is being shown at a festival in Lansing, Michigan, and Vince has come from Oakland to see it.</p>

				<a class="btn -green download-breakdown" style="margin-top: 30px;" href="<?php echo esc_url( home_url('/download/tape-casting-call/') ); ?>"><i class="fa fa-download"></i><strong>Casting Breakdown</strong></a>
			</div>
		</div>

	</div>
</div>