<div class="about-intro about-intro__bio _ptm" itemscope itemtype="http://schema.org/Person">

	<div class="container _flex _flex-center-v _bring-to-front">


			<?php
				// Set ACF Vars

				$img = get_field( 'about_bio_img' );
				$img_url = esc_url ( $img['url'] );
				$img_alt = esc_html ( $img['alt'] );

			?>
			

			<div class="about-intro__col about-intro__col--img _flex _flex-center-v  _pls _prm _r-txt">

				<img class="about-intro__img _width-max-700" src="<?php echo $img_url; ?>" alt="<?php echo $img_alt; ?>">

			</div>



			<div class="about-intro__col about-intro__col--content _l-txt _prm">

				<div class="about-intro__content _width-max-700">

					<div class="c-title-group">

						<h4 class="_l-gray _mbn">Who Are</h4>

						<h2 class="_green" ><strong itemprop="name">Jenna & Chris?</strong></h2>

					</div>
					
						<p class="_l-gray -larger">We are the Co-founders and Artistic Directors. So here's our story...In 2011 a girl from Huber Heights and a boy from Bellbrook met in the Sinclair Community College Theatre Department and bonded over our love of acting. Fast forward…we fell in love and stuff and moved to Chicago to pursue our dreams. One night, in our small studio apartment, we were unable to sleep and began having a conversation that we didn’t know at the time would spark the idea for The Playground. We were fired up and full of creative energy that just couldn’t find the right outlet. We began to dream of creating our own theatre company where we could do the kind of work that we desperately wanted to do. The kind of work that would affect people in a very real way.</p>

						<p class="_l-gray -larger">After a move back to Dayton, and a whole lot of soul searching, The Playground was born. And so, since 2014, we’ve produced raw, real, and relevant work that has made an impact on the Dayton art's scene. In the meantime we've bought a house, acquired 3 more cats, and continued to grow as people and artists. Together, we serve as artistic directors, producers, directors, actors, and designers.</p>

						<p class="_l-gray -larger">The Playground embodies our unique voice and the way we see the world through our lens. The company evolves as we evolve. Our rule is, we won’t tell a story until we’ve reached a point in our lives where we are ready to tell it.</p>

				</div>

			</div>



	</div>
</div>