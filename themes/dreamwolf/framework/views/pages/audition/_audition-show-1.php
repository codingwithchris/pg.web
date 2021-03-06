<div class="audition-show-row -show-1 _bg-white">
	<div class="container _flex-row-container">

		<?php
			// Set ACF Vars

			$img = get_field( 'audition_show_1_bg' );
			$img_url = esc_url ( $img['url'] );

		?>

		<div class="_flex-half _bgCover _bgCol-700" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
		</div>

		<div class="audition-content-wrapper _flex-half _l-txt _flex _flex-center-v">

			<div class="audition-content _width-max-600 _plm _prm _pvl">

				<h2 class="h1 -grunge _gd-/ray _mbn">The Feast</h2>
				<h5 class="_gray _mtn" style="margin-top: -10px;">by Cory Finley</h5>
				<h4 class="_gray">October 2018</h4>
				
				<p class="-larger _gray">Matt and Anna’s relationship is going swimmingly, until the sewers under their apartment open up and begin to speak. The plumber is angry, Matt’s paintings are getting stranger, and a storm is gathering. An eerie comedy about what is real, what is not, and who knows.</p>

				<a class="btn -green download-breakdown" style="margin-top: 30px;" href="<?php echo esc_url( home_url('/download/the-feast-casting-call/') ); ?>"><i class="fa fa-download"></i><strong>Casting Breakdown</strong></a>
			</div>
		</div>

	</div>
</div>