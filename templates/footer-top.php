<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Creative_Agency
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
?>

	<div class="footer_top">
		<div class="container">
			<div class="row">
				<?php
					if ( creativeagency_opt('creativeagency_footer_widget_toggle') ) {
						get_template_part( 'templates/footer', 'widgets' );
					}
				?>
			</div>
		</div>
	</div>