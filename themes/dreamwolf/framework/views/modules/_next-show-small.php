<?php

// Build the recent show output

// Get Title
$title = get_the_title();

// Set date fallbacks
	$start_date = 'dates tba';
	$end_date =  '';
	$separator = '';

	// If A Show start Date is Set
	if ( get_field( 'show_start_date' ) ){
		$start_date = get_field( 'show_start_date' );
	}

	// If a Show end date is set
	if( get_field( 'show_end_date' ) ) {
		$end_date = get_field( 'show_end_date' );
		$separator = '-';
	}

$current_show_link = get_the_permalink();

// Set Ticket URl and Fallback to the Permalink
$ticket_url = get_the_permalink();
$ticket_title = 'more Info';

if( get_field( 'tickets_available' ) ){
	$ticket_url = get_field( 'show_ticket_button_url' );
	$ticket_title = 'tickets';
}

$img = get_field( 'show_small_thumb' );
$img_url = $img['url'];
?>

<div class="next-show-item -small" style="position:relative;">
	<h5 class="pre-txt _l-gray -x-small">Our next show</h5>
	<a class="image-link" href="<?php echo esc_url( $current_show_link ); ?>" title="Check out the official <?php echo $title; ?> web page.">
		<img class="image" src="<?php echo esc_url( $img_url ); ?>" alt="The Playground Theatre's next show, <?php echo $title; ?>." width=100 height=100/>
	</a>

	<div class="inner-container">

		<div class="item-upper">
			<p class="title"><?php esc_html_e( $title ); ?></p>

			<div class="dates">
				<p class="start"><?php esc_html_e( $start_date ); ?></p>
				<p class="end"> <span class="date-sep"><?php esc_html_e( $separator ); ?></span> <?php esc_html_e( $end_date ); ?></p>
			</div>

		</div>

		<ul class="item-lower">
			<li class="link -tickets"><a href="<?php echo esc_url( $ticket_url ); ?>" target="_blank" class="_green" title="Get tickets for <?php echo $title; ?>."><i class="fa fa-ticket" aria-hidden="true"></i><?php esc_html_e( $ticket_title ); ?></a></li>
			<li class="link -season"><a href="<?php echo esc_url( $current_show_link ); ?>" class="_green" title="Check out the official <?php echo $title; ?> web page."><i class="fa fa-eye" aria-hidden="true"></i>more info</a></li>
		</ul>
	</div>

</div>