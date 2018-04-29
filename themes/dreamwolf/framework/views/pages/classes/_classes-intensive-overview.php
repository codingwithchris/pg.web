<div class="acting-class-intensive-overview _bg-white">
	<div class="container _c-txt">

			<?php
				// Set ACF Vars

				$img = get_field( 'class_intensive_overview_bg_image' );
				$img_url = esc_url ( $img['url'] );

			?>

			<div class="six _bgCover _bgCol-700 _before _bg-overlay-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
			</div>

			<div class="six _l-txt _plm _ptl _pbs _prs">

				<div class="invite-content _width-max-600">
					<h4 class="_gray">Learn how to...</h4>
					<h2 class="_green"><strong>focus your talents</strong> <span class="_gray">and</span> <strong>hone your craft</strong><span class="_gray">.</span></h2>
					<p class="-larger _gray">We will give you the tools you need to tell engaging stories and bring your character to life. Yes, this will be fun, but it will also be intense. Expect to be pushed beyond your comfort zone, work hard, and discover what you are made of. <strong class="_green">INTERESTED?</strong></p>
					<a class="btn -green" style="margin-top: 30px;" href="#get-info"><strong>Hell yes. I'm interested</strong></a>
				</div>
			</div>

	</div>
</div>