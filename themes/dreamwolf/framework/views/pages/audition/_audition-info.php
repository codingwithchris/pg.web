<?php
// =============================================================================
// This view is used to display our audition info
// FRAMEWORK/VIEWS/PAGES/AUDITION/_AUDITION-INFO.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// @todo - Re-code Season Overview into it's own cusomt module for re-use elsewhere
// @todo - separate the peices into different views
// =============================================================================
?>


<div id="audition-info" class="row _pvl _bg-l-gray">

	<div id="audition-intro" class="container -max -width">

		<div class="-fill _pbs">
			<h2 class="_gray _mbn">Welcome to our 2016/2017 <br/><span class="_l-green">Season General Audition Sign-ups</span></h2>
			<h5 class="_gray">Review the info on this page & then use the form below to request an audition.</h5>
		</div>

	</div>

	<div id="audition-details" class="container -max -width _bg-gray">

		<div class="four _omega-n">
			<h4 class="_white"><i class="fa fa-calendar"></i> Audition Dates</h4>
			<h5 class="_l-gray _mbn">June 4th, 2016</h5>
			<h5 class="_l-gray">June 5th, 2016</h5>
		</div>

		<div class="four">
			<h4 class="_white"><i class="fa fa-clock-o"></i> Available Times</h4>
			<h5 class="_l-gray">11am - 4pm</h5>
		</div>

		<div class="four">
			<h4 class="_white"><i class="fa fa-map-marker"></i> Location</h4>
			<h5 class="_l-gray _mbn"><a href="https://www.google.com/maps/dir//126+N+Main+St,+Dayton,+OH+45402/@39.7619111,-84.1940569,17z/data=!4m13!1m4!3m3!1s0x88408150d969ad31:0x792ceaa6d0fa4bca!2s126+N+Main+St,+Dayton,+OH+45402!3b1!4m7!1m0!1m5!1m1!1s0x88408150d969ad31:0x792ceaa6d0fa4bca!2m2!1d-84.1918682!2d39.7619111" target="_blank" class="_l-gray">126 N Main St, Dayton, OH 45402</a></h5>
			<h5 class="_l-gray">2nd Floor</h5>
		</div>

	</div>

	<div id="audition-requirements" class="container -max -width _bg-d-gray">
		<h5 class="_l-gray"><strong>AGE RANGE:</strong> <span class="_l-green">18-35</span></h5>
		<h5 class="_l-gray"><strong>PLEASE PREPARE:</strong> <span class="_l-green">a one minute contemporary monologue</span></h5>
		<h5 class="_l-gray"><strong>NOTE:</strong> <span class="_l-green">you may be asked to cold read</span></h5>
		<h5 class="_l-gray"><strong>ALL ROLES PAY:</strong> <span class="_l-green">$100 stipend</span></h5>
	</div>

	<div id="audition-season-overview" class="container -max -width _bg-l-gray">

		<div class="four _omega-n _c-txt show _before"  style="background-image:url( <?php echo wolf_cdn_url ( content_url( '/uploads/2016/05/youth-audition-bg.jpg' ) ); ?> )">
			<h4 class="_white title">This is our youth</h4>
			<h5 class="_l-gray date">September 1st-4th, 2016</h5>
			<a class="btn" href="http://www.dramatists.com/cgi-bin/db/single.asp?key=2838" target="_blank">More Info</a>
		</div>

		<div class="four _c-txt show _before" style="background-image:url( <?php echo wolf_cdn_url ( content_url( '/uploads/2016/05/jailbait-audition-bg.jpg' ) ); ?> )">
			<h4 class="_white title">Jailbait</h4>
			<h5 class="_l-gray date">December 1st-4th, 2016</h5>
			<a class="btn" href="http://www.dramatists.com/cgi-bin/db/single.asp?key=4116" target="_blank">More Info</a>
		</div>

		<div class="four _c-txt show _before" style="background-image:url( <?php echo wolf_cdn_url ( content_url( '/uploads/2016/05/gruesome-audition-bg.jpg' ) ); ?> )">
			<h4 class="_white title">Gruesome Playground Injuries</h4>
			<h5 class="_l-gray date">March 23rd-26th, 2017</h5>
			<a class="btn" href="http://www.dramatists.com/cgi-bin/db/single.asp?key=4293" target="_blank">More Info</a>
		</div>

	</div>

</div>