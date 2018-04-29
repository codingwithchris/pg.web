<?php

if( ! function_exists( 'wolf_build_show_schema' ) ){

	function wolf_build_show_schema(){

		// Get the global post variable since we are outside of the loop
		global $post;
		?>

		<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "Event",
			  "Organizer": "The Playground Theatre in Dayton, Ohio",
			  "name": "The Playground presents, <?php echo get_the_title(); ?>",
			  "image" : "<?php echo wolf_get_featured_image(); ?>",
			  "description": "<?php echo get_the_excerpt(); ?>",
			  "url": "<?php echo get_the_permalink(); ?>",
			  "location": {
			    "@type": "Place",
			    "name": "<?php echo wolf_get_show_venue_name(); ?>",
			   "sameAs": "<?php echo wolf_get_show_venue_info_link(); ?>",
			   "address": "<?php echo wolf_get_show_venue_address(); ?>"
			  },
			  "offers": {
			    "@type": "Offer",
			    "url": "<?php echo wolf_get_show_ticket_url(); ?>",
			    "availability" : "<?php echo wolf_get_show_availability(); ?>",
			    "price" : "<?php echo wolf_get_show_ticket_price(); ?>",
			    "priceCurrency" : "USD",
			    "validFrom"	: "<?php echo wolf_get_show_schema_start_datetime(); ?>",
			    "validThrough" : "<?php echo wolf_get_show_schema_end_datetime(); ?>"
			  },
			  "startDate": "<?php echo wolf_get_show_schema_start_datetime(); ?>",
			  "endDate": "<?php echo wolf_get_show_schema_end_datetime(); ?>",
			  "eventStatus": "EventScheduled",
			  "workPerformed": {
			    "@type": "CreativeWork",
			    "name": "<?php echo get_the_title(); ?>",
			    "sameAs": "<?php echo wolf_get_show_schema_dramatists_link(); ?>",
			    "audience": "Rated <?php echo wolf_get_show_rating(); ?>",
			    "author": {
			    	"@type": "Person",
			    	"name": "<?php echo wolf_get_show_author(); ?>",
			     "sameAs": "<?php echo wolf_get_show_schema_author_info_link(); ?>"
			  }
			}

		 }
		</script>

	<?php }
}