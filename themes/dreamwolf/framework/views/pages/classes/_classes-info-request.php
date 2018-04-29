<?php
	// Set ACF Vars
	$img = get_field( 'class_info_request_bg_image' );
	$img_url = esc_url ( $img['url'] );
?>

<div id="get-info" class="acting-class-info-request _bg-d-gray _pvl _bgCover _before _bg-overlay-m-gray" style="background-image:url( <?php echo wolf_cdn_url ( $img_url ); ?>)">
	<div class="container -max -width _c-txt _bring-to-front">

		<h3 class="pre _l-gray _width-max-800 _c-block">If you're an actor or an aspiring actor, come on this journey with us, <strong>because...</strong></h3>
		<h5 class="title _l-gray _width-max-700 _c-block" style="margin-top:30px;">You are born an actor,  but you can <strong class="_under-green"> learn to be a great actor</strong>.</h5>

		<div class="callout-box _bg-green">
			<h4 class="pre-info-form _width-max-800 _c-block _white _mbn">Be the first to know as soon as more details and information about our classes become available.</h4>
		</div>

		<div class="info-form-wrapper _width-max-600 _c-block _clear-b _pvs">
			<?php echo( do_shortcode( '[mc4wp_form id="916"]' ) ); ?>
		</div>

	</div>
</div>

