<?php
use Playground\Locations;
use Samrap\Acf\Acf;

// Get the ID of our location
$location_id = Acf::field('show_location')->get();

// Get our location data
$location = new Locations\Location( $location_id );
?>

<div class="action-bar -single -show">
	<div class="container">

		<div class="action-bar-items">

			<?php
				if ( ! wolf_show_is_past() ){ ?>

						<?php echo wolf_get_show_ticket_module( 'TICKETS', 'fa-ticket', 'action -tickets' ); ?>

						<a href="<?= $location->get_gmap_link(); ?>" target="_blank" class="action -directions">
							<?= wolf_get_icon( 'fa-map-marker' ); ?>
							DIRECTIONS
						</a>

					 	<?php echo wolf_get_show_fbevent_module( 'FB Event', 'fa-facebook', 'action -fb'); ?>

				<?php } else { ?>

						<?php echo wolf_get_show_fbreview_module( 'Leave Us a Review', 'fa-facebook', 'action -review'); ?>


				<?php }

			?>
		</div>
	</div>
</div>