<?php

// =============================================================================
// FRAMEWORK/VIEWS/GLOBAL/_FOOTER-END.PHP
// -----------------------------------------------------------------------------
// Closes the footer
// Includes the wp_footer() hook and closes out the <body> and <html> tags.
// =============================================================================

?>
<?php //This custom footer copyright was created in the CC-Toolbox Plugin ?>

<div class="site-copyright -fill">

	<?php do_action('wolf_footer_copyright'); ?>

</div><!-- .site-copyright-->

</div><!-- .container -->

</footer>

<?php do_action( 'wolf_after_footer' ); ?>

 </div> <!-- END #site.top -->

 <?php do_action( 'wolf_after_site_end' ); ?>

<?php wp_footer(); ?>

</body>
</html>