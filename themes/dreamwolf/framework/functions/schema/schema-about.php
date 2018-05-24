<?php

if( ! function_exists( 'wolf_build_about_schema' ) ){

	function wolf_build_about_schema(){

		// Get the global post variable since we are outside of the loop
		global $post;
		?>

		<script type="application/ld+json">
			{
			  "@context": "http://schema.org",
			  "@type": "AboutPage",
			  "name": "We Are The Playground. This is Our Story.",
			  "primaryImageOfPage" : "https://theplaygroundtheatre.org/wp-content/uploads/2018/05/s4iuj6dggq0.jpg",
			  "description": "The Playground’s vision is to be a playground for actors, artists, designers, and dreamers to use their unique voice to bring to the stage raw, honest, and relevant stories that reflect what it means to be human.",
			  "url": "<?php echo get_the_permalink(); ?>",
			  "creator": {
			  	"@type": "Organization",
			  	"name": "The Playground Theatre",
			  	"founders": {
			  	  "@type": "Person",
			  	  "name": ["Christopher Hahn","Jenna Burnette"] ,
			  	 "image": ["https://vyto8sfq6j-flywheel.netdna-ssl.com/wp-content/uploads/2016/02/christopher-hahn-web-headshot-playground.jpg","https://vyto8sfq6j-flywheel.netdna-ssl.com/wp-content/uploads/2016/02/jenna-burnette-web-headshot-playground.jpg"],
			  	 "jobTitle": "Co-founder and Artistic Director of The Playground Theatre"
			  	}
			 }

		 }
		</script>

	<?php }
}