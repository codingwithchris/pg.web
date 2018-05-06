<div class="about-bio about-bio--jenna _bg-white _ptl _pbl" itemscope itemtype="http://schema.org/Person">
	<div class="container _flex">

			<?php
				// Set ACF Vars

				$img_url = 'https://placehold.it/500x500';

				if( get_field( 'about_jenna_img' ) ){

					$img = get_field( 'about_jenna_img' );
					$img_url = esc_url ( $img['url'] );

				}

			?>

			<div class="_flex-half _pls _prm _r-txt">
				<img class="about-bio__img" src="<?php echo $img_url; ?>">
			</div>

			<div class="_flex-half _l-txt _plm _prs">

				<div class="about-bio__content _width-max-600">

					<h4 class="_gray">Meet</h4>

					<h2 class="_mbn _green" ><strong itemprop="name">Jenna Valyn</strong></h2>

					<h5 class="_gray" itemprop="jobTitle">Co-founder • Artistic Director</h5>
					
						<p class="_gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p class="_gray">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>

	</div>
</div>