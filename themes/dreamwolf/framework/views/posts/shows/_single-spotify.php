<?php
// ================================
// Build and Embed the Spotify Playlist for this show
// --------------------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-SPOTIFY.PHP
// ===============================================
?>

<div id="show-spotify-row" class="row _ptm _pbl _bg-l-green _before _bgCover" style="background-image:url( <?php echo esc_url( wolf_cdn_url ( content_url() . '/uploads/2016/02/playground-show-spotify-record-cassette-bg.jpg' ) ); ?> )">>
	<div class="container -max -width">

		<h2 class="_white _pbs">The Soundtrack</h2>

		<div class="embed-container">
			<?php echo wolf_get_show_spotify(); ?>
		</div>

	</div>
</div>