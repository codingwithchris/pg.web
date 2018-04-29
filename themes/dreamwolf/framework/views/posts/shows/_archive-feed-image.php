<?php
// FRAMEWORK / VIEWS / POSTS / SHOWS / _ARCHIVE-FEED-IMAGER.PHP
// -----------------------------------------------------------------------------------------------
// The featured image that pulls into our main show feed.
// We are using a technique similar to that seen on medium.com
// where a tiny thumbnail is loaded in first and then swapped with
// the large image after the page is loaded.
// This file works because of the stackblur.js and blur-in-img.js files
// being loaded in through the playground-main.js file.
// =======================================================
?>
<div class="aspect-ratio-fill" style="padding-bottom:43.478261%">

	<!-- The component -->
	<div class="ProgressiveMedia">

		<!-- The canvas -->
		<canvas class="ProgressiveMedia-canvas" width="920	" height="400"></canvas>

		<!-- The thumbnail -->
		<img class="ProgressiveMedia-thumbnail" src="<?php echo wolf_get_featured_image( 'thumbnail' ); ?>" crossorigin="anonymous" alt="A tiny placeholder image for the main Playground feed image" width="30" height="13">

		<!-- The image -->
		<img class="ProgressiveMedia-image -feed"
			data-src="<?php echo wolf_get_featured_image(); ?>"
			src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
			alt="<?php echo wolf_get_featured_alt(); ?>"
			width="920"
			height="400">
	</div>
</div>
