<div class="about-intro__vision">

	<div class="container _flex _flex-center-v _bring-to-front">


			<div class="about-intro__col about-intro__col--content _r-txt _plm">
	

				<div class="about-intro__content _width-max-700 _r-block">

					<div class="c-title-group">
					
						<h4 class="_l-gray _mbn">Why</h4>

						<h2 class="_green"><?php esc_html_e('The Playground?'); ?></h2>

					</div>

					<p class="_l-gray -larger">The Playground represents coming of age and self discovery. It's the transition we all make from the playground of our childhood to the playground of our adulthood. Humans, are constantly changing, evolving and learning as they grow older, having new experiences and going on new adventures. The Playground is the place where you discover yourself. It’s where you make friends, develop crushes, fall down, get scrapes, bruises, and broken bones.</p>

					<p class="_l-gray -larger">We tell modern stories that offer a very realistic glimpse into people’s lives as ugly, beautiful, painful, hopeful, dark or inspiring as they can be. We depict with as much honesty and authenticity as possible, what it means to be human and to live a life.</p>

				</div>

			</div>




			<?php
				// Set ACF Vars

				$img = get_field( 'about_vision_img' );
				$img_url = esc_url ( $img['url'] );
				$img_alt = esc_html ( $img['alt'] );

			?>

			<div class="about-intro__col about-intro__col--img _flex _flex-center-v _plm _prs">

				<img class="about-intro__img _width-max-700" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

			</div>


	</div>
</div>