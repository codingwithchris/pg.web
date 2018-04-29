<?php
/**
 * FOOTER.PHP
 *
 * Pulls in all of the different footer views. These views also contain the necessary code
 * To close out the body and html tags etc
 *
 * @uses views from FRAMEWORK/VIEWS/GLOBAL/_FOOTER-$FILE-PART
 * @uses wolf_display_cta to display the appropriate call to action*
 *
 * @since 1.0.0
 * @author Christopher Hahn <chris@codewolfseven.com>
 * @package wordpress
 * @todo modify wolf_display_cta to use wolf_display_footer_cta
 */

wolf_get_view( 'modules', '_social', 'footer' );
wolf_get_view( 'cta', 'cta', 'footer' );

wolf_get_view( 'core', '_site', 'end' );
wolf_get_view( 'core', '_footer', 'start' );
wolf_get_view( 'core', '_footer', 'content' );
wolf_get_view( 'core', '_footer', 'end' );