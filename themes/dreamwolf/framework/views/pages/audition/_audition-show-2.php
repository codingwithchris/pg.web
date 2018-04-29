<div class="audition-show-row -show-2 _bg-white">
	<div class="container _flex-row-container">

		<?php
			// Set ACF Vars

			$img = get_field( 'audition_show_2_bg' );
			$img_url = esc_url ( $img['url'] );

		?>

		<div class="audition-content-wrapper _flex-half _l-txt _flex _flex-center-v">

			<div class="audition-content _width-max-600 _r-block _r-txt _plm _prm _pvl">

				<h2 class="h1 -grunge _d-gray _mbn">The Tutors</h2>
				<h5 class="_gray _mtn" style="margin-top: -10px;">by Erica Lipez</h5>
				<h4 class="_gray">January 2018</h4>
				
				<p class="-larger _gray">No one dreams of being a tutor: just ask Heidi, Toby, and Joe. While catering to the offspring of New York elite has forced them to confront the anticlimax of adulthood, these roommates are not ready to give up on their social networking startup—just yet. When Heidi's online editing begins to invade her subconscious and a student crosses the line, all three friends might be in over their heads. A funny, heartfelt look at day jobs versus dream jobs and the people we count on to remind us of the difference.</p>

				<a class="btn -green download-breakdown" style="margin-top: 30px;" href="<?php echo esc_url( home_url('/download/tutors-casting-call/') ); ?>"><i class="fa fa-download"></i><strong>Casting Breakdown</strong></a>
			</div>
		</div>

		<div class="_flex-half _bgCover _bgCol-700 _before _bg-overlay-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
		</div>

	</div>
</div>