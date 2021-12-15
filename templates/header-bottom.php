<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Creative_Agency
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

$circle_img1 = CREATIVE_AGENCY_DIR_IMGS_URI . 'circle-img-1.png';
$circle_img2 = CREATIVE_AGENCY_DIR_IMGS_URI . 'circle-img-2.png';
$dynamic_class = is_singular('project') ? ' minus-padd' : '';
?>

    <!-- agency_heading_start -->
    <div class="agency_heading<?php echo esc_attr( $dynamic_class )?>">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text">
                        <h3>
                            <?php
                                if ( is_category() ) {
                                    single_cat_title( __('Category: ', 'creativeagency') );

                                } elseif ( is_tag() ) {
                                    single_tag_title( __('Tag Archive for - ', 'creativeagency') );

                                } elseif ( is_archive() ) {
                                    echo get_the_archive_title();

                                } elseif ( is_page() ) {
                                    echo get_the_title();

                                } elseif ( is_search() ) {
                                    echo esc_html__( 'Search for: ', 'creativeagency' ) . get_search_query();

                                } elseif ( ! ( is_404() ) && ( is_single() ) || ( is_page() ) ) {
                                    echo  get_the_title();

                                } elseif ( is_home() ) {
                                    echo esc_html__( 'Blog', 'creativeagency' );

                                } elseif ( is_404() ) {
                                    echo esc_html__( '404 error', 'creativeagency' );

                                }
                            ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated_shape">
            <div class="anim_1">
                <img src="<?php echo esc_url( $circle_img1 )?>" alt="circle image 1">
            </div>
            <div class="anim_2">
                <img src="<?php echo esc_url( $circle_img2 )?>" alt="circle image 2">
            </div>
        </div>
    </div>
    <!-- agency_heading_end -->