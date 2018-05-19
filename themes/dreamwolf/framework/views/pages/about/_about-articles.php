<?php
	// Set ACF Vars

	$img = get_field( 'about_articles_bg' );
	$img_url = esc_url ( $img['url'] );


	$articles = get_field( 'about_articles' );

?>


<div class="about-articles _bg-l-green _pvl" style="background-image: url( <?php echo esc_url( $img_url ); ?> );">
	
	<div class="container -max -width _c-txt _bring-to-front">
			
			<div class="title-group _pbm">

				<h2 class="_white _mbn"><?php esc_html_e('Find Out More'); ?></h2>

				<p class="_l-gray -larger _width-max-400 _c-block"><?php esc_html_e('Check out some recent articles about us.'); ?></p>

			</div>			

			<div class="c-card-grid">

				<?php foreach( $articles as $article ): ?>

					<a class="c-card--inline c-card--a" href="<?php echo esc_url( $article['link'] ); ?>" target="_blank">	

						<div class="c-card--inline__media">
							<i class="fa fa-file-text-o"></i>
						</div>

						<div class="c-card--inline__content">

							<h6 class="c-card--inline__title _mbn _l-green">
								<?php esc_html_e( $article['title'] ); ?>
							</h6>

							<p class="c-card--inline__sub -small _gray">
								<?php esc_html_e( $article['author'] ); ?>
							</p>

						</div>


						<div class="c-card--inline__arrow">
							<i class="fa fa-arrow-right"></i>
						</div>

					</a>

				<?php endforeach; ?>
			</div>
	</div>
</div>