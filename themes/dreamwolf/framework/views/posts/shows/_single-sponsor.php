<?php
// ================================
// Build a Section That outputs the current show's sponsor
// --------------------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-SPONSOR.PHP
// ===============================================
?>

<div id="show-sponsor-row" class="row _ptl _pbm _bg-white">
	<div class="container -max -width">

		<?php echo do_shortcode( '[show_sponsors]' ); ?>

	</div>
</div>


<div id="sponsor-contact-row" class="sponsor-contact row _pvl _bg-l-gray">
	<div class="container -max -width">

		<div class="twelve -fill">

			<div class="sponsor-contact-title-group _c-txt _c-block _width-max-500">

				<h3 class="_d-gray">Get Your Organization Involved</h3>

				<p class="_gray _pbs _mbn">The only way we can stick around is if we get support from some freaking awesome organizations like the ones listed above. If you or someone you know is interested in helping us grow and thrive in Dayton, we'd love to chat! So go ahead, be awesome...</p>
				
				<a class="btn -bold -green" href="<?php echo esc_url( home_url( '/contact?why=sponsorship' ) );?>">I'm Awesome. Let's Talk.</a>

			</div>

		</div>

	</div>
</div>