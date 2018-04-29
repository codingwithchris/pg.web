<?php
// ================================
// Build and Output the full show synopsis
// --------------------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-SYNOPSIS.PHP
// ===============================================

// Set ACF Variables and Fallbacks

$syn = 'A Full Synopsis of this show is coming soon!';

if ( get_field( 'show_syn' ) ){
	$syn = get_field( 'show_syn' );
}
?>

<div id="show-synopsis-row" class="row _pvm _bg-white">
	<div class="container -max -width">

	<h2 class="_green">The Synopsis</h2>
	<p class="synopsis _gray"><?php _e( $syn ); ?></p>

	</div>
</div>