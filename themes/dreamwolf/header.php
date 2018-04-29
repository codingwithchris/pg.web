<?php
/**
 * HEADER.PHP
 *
 * Our main site header is built using different "views" which  is fancy talk for components.
 * The views work by looking in the views folder in FRAMEWORK/VIEWS/.
 * We use the function wolf_get_view() which builds on get_template part.
 * This functions exists in FRAMEWORK/FUNCTIONS/HELPERS.PHP
 *
 * @since 1.0
 * @author Christopher Hahn <chris@codewolfseven.com>
 * @package wordpress
 */
?>

<?php // Load The Site Head Including meta Info ?>
<?php wolf_get_view( 'core', '_site', 'head' ); ?>

<?php // Open the body and #top.site tags ?>
<?php wolf_get_view( 'core', '_site', 'top' ); ?>

<?php // This action loads a site notice if we have one ?>
<?php do_action( 'wolf_display_topbar_notice' ); ?>


<?php
	/**
	 * Load site main navigation bar
	 */
?>

<header id="masthead" role="banner">
	<?php wolf_get_view( 'core', '_navbar', 'main' ) ?>
</header>


<div class="playground-main" role="main">

	<?php

		// Load the appropriate site headers using conditional logic
		// --------------------------------------------------------------------------------
		// @location FRAMEWORK/ FUNCTIONS/CONTROLS/HEADER-CONTROLS.PHP
		// ==========================================================

		wolf_display_page_header();

	?>