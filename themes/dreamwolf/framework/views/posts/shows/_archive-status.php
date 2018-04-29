<?php
// FRAMEWORK / VIEWS / POSTS / SHOWS / _ARCHIVE-STATUS.PHP
// --------------------------------------------------------------------------------------------------------------
// Get and conditionally display the status tag of a show based on current
// show status.
//
// @uses wolf_show_is_playing
// @uses wolf_show_is_rehearsing
// @uses wolf_get_show_status
// ==============================================================

// Set ACF Vars based on Show Status
// =============================
if ( wolf_show_is_playing()  ){

	$status_txt = 'now playing';

}

if ( wolf_show_is_rehearsing() ){

	$status_txt = 'in rehearsal';

}

// If there is a special Show Status, display the status info
// ===========================================

if( wolf_show_is_playing() || wolf_show_is_rehearsing() ){

 ?>

<div class="show-status -<?php echo esc_attr( wolf_get_show_status() ); ?>">
	<p class="_white _mbn"><?php esc_html_e( $status_txt ); ?></p>
</div>

<?php } ?>
