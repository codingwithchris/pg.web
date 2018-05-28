<div class="audition-show-row -show-3 _bg-white">
	<div class="container _flex-row-container">

		<?php
			// Set ACF Vars

			$img = get_field( 'audition_show_3_bg' );
			$img_url = esc_url ( $img['url'] );

		?>

		<div class="_flex-half _bgCover _bgCol-700 _before _bg-overlay-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
		</div>

		<div class="audition-content-wrapper _flex-half _l-txt _flex _flex-center-v">

			<div class="audition-content _width-max-600 _plm _prm _pvl">

				<h2 class="h1 -grunge _d-gray _mbn">The </h2>
				<h5 class="_gray _mtn" style="margin-top: -10px;">by Leslye Headland</h5>
				<h4 class="_gray">March 2018</h4>
				
				<p class="-larger _gray">Ten years out of high school, Regan, Gena and Katie convene in the luxurious bridal suite of their old friend, Becky, the night before her wedding in New York City. Fueled by jealousy and resentment, the girls embark on a night of debauchery that goes from playfully wasted to devastatingly destructive. Their old fears, unfulfilled desires and deep bonds with each other transform a prenuptial bender into a night they'll never forget. A wicked black comedy about female friendship and growing up in an age of excess.</p>

				<a class="btn -green download-breakdown" style="margin-top: 30px;" href="<?php echo esc_url( home_url('/download/bachelorette-casting-call/') ); ?>"><i class="fa fa-download"></i><strong>Casting Breakdown</strong></a>
			</div>
		</div>


	</div>
</div>