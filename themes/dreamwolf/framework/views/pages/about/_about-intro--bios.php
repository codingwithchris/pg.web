<div class="about-intro about-intro__bio _pvm" itemscope itemtype="http://schema.org/Person">

	<div class="container _flex _flex-center-v _bring-to-front">


			<?php
				// Set ACF Vars

				$img = get_field( 'about_bio_img' );
				$img_url = esc_url ( $img['url'] );
				$img_alt = esc_html ( $img['alt'] );

			?>
			

			<div class="about-intro__col about-intro__col--img _flex _flex-center-v  _pls _prm _r-txt">

				<img class="about-intro__img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

			</div>



			<div class="about-intro__col about-intro__col--content _l-txt _prm">

				<div class="about-intro__content _width-max-600">

					<h4 class="_l-gray">Meet</h4>

					<h2 class="_mbn _green" ><strong itemprop="name">Jenna & Chris</strong></h2>

					<h5 class="_l-gray" itemprop="jobTitle">Co-founders & Artistic Directors</h5>
					
						<p class="_l-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				</div>

			</div>



	</div>
</div>