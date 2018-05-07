<div class="about-intro__vision _ptm" itemscope itemtype="http://schema.org/Person">

	<div class="container _flex _flex-center-v _bring-to-front">



			<div class="about-intro__col about-intro__col--content _r-txt _plm">

				<div class="about-intro__content _width-max-600 _r-block">

					<h2 class="_green"><?php esc_html_e('Why Playground Exists'); ?></h2>

					<p class="_l-gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</div>
			</div>


			<?php
				// Set ACF Vars

				$img = get_field( 'about_vision_img' );
				$img_url = esc_url ( $img['url'] );
				$img_alt = esc_html ( $img['alt'] );

			?>

			<div class="about-intro__col about-intro__col--img _flex _flex-center-v _pls _prs">

				<img class="about-intro__img" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

			</div>


	</div>
</div>