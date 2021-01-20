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

	$creativeagency_reservation_title     = !empty( creativeagency_opt( 'creativeagency_reservation_title' ) ) ? creativeagency_opt( 'creativeagency_reservation_title' ) : '';
	$creativeagency_reservation_sub_title = !empty( creativeagency_opt( 'creativeagency_reservation_sub_title' ) ) ? creativeagency_opt( 'creativeagency_reservation_sub_title' ) : '';
	$creativeagency_reservation_btn_text  = !empty( creativeagency_opt( 'creativeagency_reservation_btn_text' ) ) ? creativeagency_opt( 'creativeagency_reservation_btn_text' ) : '';
	$creativeagency_reservation_btn_url	  = !empty( creativeagency_opt( 'creativeagency_reservation_btn_url' ) ) ? creativeagency_opt( 'creativeagency_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $creativeagency_reservation_title )?></h3>
			<p><?php echo esc_html( $creativeagency_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $creativeagency_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $creativeagency_reservation_btn_text )?></a>
		</div>
	</div>