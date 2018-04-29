<?php
	// Set ACF Vars

	$img = get_field( 'class_world_needs_actors_bg_image' );
	$img_url = esc_url ( $img['url'] );

?>

<div class="acting-class-actors-job _bg-gray _pvl _bgCover _before _bg-overlay-m-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>);background-position:center top">
	<div class="container -max -width _c-txt _bring-to-front">

			<i class="fa fa-thumbs-up" style="font-size:100px; color:white;" aria-hidden="true"></i>
			<h2 class="_white" style="margin:20px 0;"><span class="_under-l-gray">The World Needs Actors</span></h5>
			<p class="_white -larger _width-max-700 _c-block">Can you imagine what it would be like if there were no actors? Tom Hanks would be an accountant and Meryl Streep would be like...a realtor...or something.</p>
			<a class="btn -green -bold" style="margin-top:20px;" href="#get-info">Get Info About Classes</a>

	</div>
</div>