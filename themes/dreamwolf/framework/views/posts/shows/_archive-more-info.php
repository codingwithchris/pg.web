<?php
// FRAMEWORK / VIEWS / POSTS / SHOWS / _ARCHIVE-MORE-INFO.PHP
// --------------------------------------------------------------------------------------------------------------
// Display the More Info and Tickets buttons conditionally based on current show status
// and whether or not tickets are actualy available.
// ===================================================================
use Samrap\Acf\Acf;
use Playground\Locations;

$status = wolf_get_show_status();
$link 	  = get_the_permalink();

$more_text = 'See What You Missed';

if( ! wolf_show_is_past() ){
	$more_text = 'More Info';
}

// Get the ID of our location
$location_id = Acf::field( 'show_location', $post->ID )->get();

// Get our location data
$location = new Locations\Location( $location_id );

?>

<div class="show-actions -<?php echo esc_attr( $status ); ?>">


	<a class="more" href="<?php echo esc_url( $link ); ?>"><?php echo $more_text; ?></a>

	<?php

	// If there is a ticket URL, we need to put the ticket text with the appropriate link
	// We will only do this if the show is currently playing or reheasring and the user
	// has checked that tickets are on sale
	// Using ACF
	// =============================================================

	if( wolf_show_tickets_avalable()  &&  ! wolf_show_is_past() ){

	?> <span class="action-sep _gray"> | </span> <?php

		echo wolf_get_show_ticket_module( 'Tickets' , '', 'tickets' );

	 }


	// We are going to temporarily hard code the link to schuster center in gmaps - eventually it will be linked via post2post functionality
	// Only show this if the show is Currently playing or rehearsing
	// =============================================================

	if( wolf_show_is_playing() || wolf_show_is_rehearsing() ){

		?>

		<span class="action-sep _gray"> | </span>

		<a href="<?= $location->get_gmap_link(); ?>" target="_blank" class="tickets">
			DIRECTIONS
		</a>

	<?php } ?>

</div>