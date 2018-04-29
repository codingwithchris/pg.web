<?php
// FRAMEWORK / VIEWS / POSTS / SHOWS / _ARCHIVE-SYNOPSIS.PHP
// -------------------------------------------------------------------------------------------
// Get the short excerpt of the current show.
// =================================
$synopsis = get_the_excerpt();
?>

<p class="synopsis _gray"><?php esc_html_e( $synopsis ); ?></p>