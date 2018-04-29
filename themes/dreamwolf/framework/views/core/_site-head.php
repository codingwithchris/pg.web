<?php
// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_SITE-HEAD.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site and includes the <head>.
// =============================================================================

?>
<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!-->

<?php if( is_front_page() ){

	// If we are on the front page, output Google Comment about Schema
	// Eventually Roll this into a plugin

	?>

	<!-- Microdata markup added by Google Structured Data Markup Helper. -->

<?php } ?>

<html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php wp_title(); ?></title>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<?php do_action( 'wolf_load_schema' ); ?>
</head>