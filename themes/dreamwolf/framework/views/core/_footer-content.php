<?php
// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_FOOTER-CONTENT.PHP
// -----------------------------------------------------------------------------
// Contians the content for the footer
// no need for footer tags -those are handled in their own partials
// =============================================================================
?>

<div class="footer-info _bring-to-front _clear-b">

	<div class="six footer-info__col footer-company-info" itemtype="http://schema.org/PerformingGroup">

		<h4 class="_white footer-info__title">Connect With Us</h4>

		<img class="_visually-hidden" src="https://theplaygroundtheatre.org/wp-content/uploads/2016/04/playground-logo.png" itemprop="logo" alt="The Playground Theatre's logo in white and green.">
		<ul>
			<li>
				<p class="_l-gray footer-info__item footer-info__name _mbn" itemprop="name">The Playground Theatre</p>
			</li>

			<li>
				<p class="_l-gray footer-info__item footer-info__location" itemprop="location">Dayton, Ohio</p>
			</li>

			<li>
				<a class="_l-gray footer-info__item footer-info__link footer-info__phone _mbn" href="tel:9373563162" itemprop="telephone">937.356.3162</a>
			</li>

			<li>
				<a class="_l-gray footer-info__item footer-info__link footer-info__email _mbn" href="mailto:play@theplaygroundtheatre.org" itemprop="email">hello@theplaygroundtheatre.org</a>
			</li>

		</ul>

	</div>

	<div class="six footer-info__col footer-quick-links">

		<h4 class="_white footer-info__title">Quick Links</h4>

		<ul>
			<li>
				<a class="_l-gray footer-info__item footer-info__link _mbn" href="<?= home_url( '/audition/' ); ?>">Audition</a>
			</li>

			<li>
				<a class="_l-gray footer-info__item footer-info__link _mbn" href="<?= home_url( '/dayton-acting-classes/' ); ?>">Classes</a>
			</li>

			<li>
				<a class="_l-gray footer-info__item footer-info__link _mbn" href="<?= home_url( '/instagram/' ); ?>">Instagram</a>
			</li>

			<li>
				<a class="_l-gray footer-info__item footer-info__link _mbn" href="<?= home_url( '/privacy-policy/' ); ?>">Privacy Policy</a>
			</li>

		</ul>

	</div>

</div>