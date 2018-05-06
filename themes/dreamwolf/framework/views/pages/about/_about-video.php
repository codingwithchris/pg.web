<div class="about-video _bg-l-gray _pvl">
	<div class="container -max -width _c-txt _bring-to-front">
		
		<div class="twelve">

			<div class="about-video-text _width-max-600 _c-block _pbm">

				<h4 class="_d-gray">A Clever Thing Here.</h4>

				<p class="_gray -larger">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

			</div>

			<div class="about-video-container _width-max-800 _c-block">
				<div class="embed-container"> 

					<?php
						$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?v=25qppuWM1sA', array('width'=>1280,'height'=>720) );
						echo $embed_code;
					?>
				
				</div>
			</div>
		</div>

	</div>
</div>