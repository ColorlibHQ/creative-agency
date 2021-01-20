<?php 
/**
 * @Packge     : Creative_Agency
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook creativeagency_footer
         *
         * @Hooked  creativeagency_footer_area 
         *
         */

		do_action( 'creativeagency_footer' );

	wp_footer(); 
 ?>
</body>
</html>