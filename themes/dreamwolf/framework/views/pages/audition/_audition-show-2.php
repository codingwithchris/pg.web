<div class="audition-show-row -show-2 _bg-white">
	<div class="container _flex-row-container">

		<?php
			// Set ACF Vars

			$img = get_field( 'audition_show_2_bg' );
			$img_url = esc_url ( $img['url'] );

		?>

		<div class="audition-content-wrapper _flex-half _l-txt _flex _flex-center-v">

			<div class="audition-content _width-max-600 _r-block _r-txt _plm _prm _pvl">

				<h2 class="h1 -grunge _d-gray _mbn">Assistance</h2>
				<h5 class="_gray _mtn" style="margin-top: -10px;">by Leslye Headland</h5>
				<h4 class="_gray">January 2019</h4>
				
				<p class="-larger _gray">For these young assistants, life is an endless series of humiliations at the hands of their hellacious boss, a powerful uber-magnate. In rare moments of calm when the phone calls stop rolling, Nick and Nora and their traumatized co-workers question whether all their work will lead to success—or just more work. Leslye Headland’s ASSISTANCE is a biting, high-octane satire about our attraction to power and what we’re willing to sacrifice to stay in its orbit.</p>

				<a class="btn -green download-breakdown" style="margin-top: 30px;" href="<?php echo esc_url( home_url('/download/tutors-casting-call/') ); ?>"><i class="fa fa-download"></i><strong>Casting Breakdown</strong></a>
			</div>
		</div>

		<div class="_flex-half _bgCover _bgCol-700" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
		</div>

	</div>
</div>