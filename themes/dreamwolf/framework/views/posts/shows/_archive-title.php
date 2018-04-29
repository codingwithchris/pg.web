<?php
// FRAMEWORK / VIEWS / POSTS / SHOWS / _ARCHIVE-TITLE.PHP
// -------------------------------------------------------------------------------------
// Get the Show Title	for the feed
// ========================

$title = get_the_title();
$link = get_the_permalink();

?>
<a class="title-link" href="<?php echo esc_url( $link ); ?>">
	<h1 class="h1 title -grunge _mbn"><?php esc_html_e( $title ); ?></h1>
</a>