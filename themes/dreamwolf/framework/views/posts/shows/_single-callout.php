<?php
// ===============================================
// Build and Output an extra show callout
// -----------------------------------------------
// FRAMEWORK/VIEWS/POSTS/SHOWS/_SINGLE-CALLOUT.PHP
// ===============================================

// Set ACF Variables and Fallbacks

$image = get_field( 'show_callout_image' ) ?? 'https://placehold.it/200x200';
$title = get_field( 'show_callout_title' ) ?? '';
$link = get_field( 'show_callout_link' ) ?? '';
$info = get_field( 'show_callout_info' ) ?? '';


?>

<div id="show-callout-row" class="_bg-white _pvl _bg-l-green _before _bgCover _bg-overlay-l-green--98" style="background-image: url('/wp-content/uploads/2018/05/playground-wood-fence-texture-1.jpg')">

		<div class="container -max -width">

			<div class="c-card--stacked c-card--callout">	

				<div class="c-card--stacked__upper">

					<div class="c-card--stacked__media">
						<img class="c-card--stacked__img" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
					</div>

				</div>

				<div class="c-card--stacked__lower">

					<div class="c-card--stacked__content">

						<h6 class="c-card--stacked__title _l-green">
							<?= $title; ?>
						</h6>

						<p class="c-card--stacked__sub -small _gray">
							<?= $info; ?>
						</p>

					</div>

				</div>

			</div>
			
		</div>
</div>