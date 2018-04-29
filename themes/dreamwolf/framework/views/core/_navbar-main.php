<?php
// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_NAVBAR-MAIN.PHP
// -----------------------------------------------------------------------------
// If the primary meu exists, we will output it wherever this view is called
// =============================================================================
?>

<div class="playground-navbar">
	<div class="playground-navbar-inner container -max -width">

			<a class="nav-logo-link" href="<?php echo esc_url( home_url() ); ?>">
				<?php echo file_get_contents( WOLF_ASSETS_URL . '/img/playground-logo.svg' ); ?>
			</a>

			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'playground' ); ?></a>

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php if ( has_nav_menu( 'primary' ) ) {

					wolf_get_view( 'core', '_menu', 'primary' );

				} ?>

			</nav>
	</div>
</div><!-- #site-navigation -->