<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'creativeagency' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( creativeagency_opt( 'creativeagency_footer_copyright_text' ) ) ? creativeagency_opt( 'creativeagency_footer_copyright_text' ) : $copyText;
	?>
	<div class="copy-right_text">
		<div class="container">
			<div class="footer_border"></div>
			<div class="row">
				<div class="col-xl-12">
					<p class="copy_right text-center"><?php echo wp_kses_post( $copyRight ); ?> </p>
				</div>
			</div>
		</div>
	</div>