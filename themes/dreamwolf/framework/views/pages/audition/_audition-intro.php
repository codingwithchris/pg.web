<div id="audition-intro" class="_pvl _bg-l-gray">

	<div class="container -max -width ">

		<div class="-fill">

			<h2 class="_gray">Welcome to our<br/><span class="_l-green">Audition Request Page</span></h2>
			<p class="_gray -larger _width-max-600">Take some time and look around because there is a lot of important info, including role breakdowns, audition dates, times, locations and more!</p>

			<p class="_gray _width-max-600">When you're ready, simply fill out the request form towards the bottom of this page.</p>

		</div>

	</div>

</div>

<div id="audition-video-row" class="_bg-d-gray _pvl">
	<div class="container -max -width ">

		<h2 class="h1 -grunge _white _pbs">Curious about our season?</h2>

		<div class="embed-container"> 

			<?php
				$embed_code = wp_oembed_get( 'https://www.youtube.com/watch?v=25qppuWM1sA', array('width'=>1280,'height'=>720));
				echo $embed_code;
			?>
			
		</div>
	</div>
</div>