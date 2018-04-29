<?php
// =============================================================================
// This view is used to display our audition form
// FRAMEWORK/VIEWS/PAGES/AUDITION/_AUDITION-FORM.PHP
// ------------------------------------------------------------------------------------
//
// @since 1.0.0
// @todo - Link with ACF
// =============================================================================
?>
<div id="audition-form" class="row _pvl _width-max-900 _c-block">

	<div class="container -max -width">

		<div class="-fill _pbs">
			<h2 class="_l-gray">Audition Request Form</h2>
		</div>

		<div class="-fill">
			<?php echo do_shortcode( '[gravityform id=3 title=false description=false ajax=true]' ); ?>
		</div>

	</div>
</div>