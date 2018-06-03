<?php
// ===========================================================
// Build and Output the list of Actors and other artists working on the show
// -------------------------------------------------------------------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-ARTIST-FEED.PHP
// ===============================================
?>

<div id="show-artists-row" class="row _pvl _bg-l-gray">

	<?php if( wolf_show_actors_exist() ){ ?>

		<div class="container -max -width -actors _pbs">

			<h2 class="_gray _mbn">The Actors</h2>
			<p class="_gray" style="margin-bottom:40px">Meet the cast of <?php echo get_the_title(); ?></p>

				<?php wolf_get_show_artists( 'actor' ); ?>

		</div>

	<?php } ?>

	<?php if( wolf_show_artists_exist() ){ ?>

		<div class="container -max -width -crew">

			<h2 class="_gray _mbn">The Crew</h2>
			<p class="_gray" style="margin-bottom:40px">Meet the director, designers and crew members of <?php echo get_the_title(); ?></p>

				<?php wolf_get_show_artists( 'crew' ); ?>

		</div>

	<?php } ?>

</div>