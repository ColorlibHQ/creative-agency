<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package creativeagency
 */

get_header();
$project_img  = get_the_post_thumbnail( get_the_id(), 'creativeagency_project_details_thumb_1146x650', '', array( 'alt' => get_the_title() ) );
$client_name  = ! empty( creativeagency_meta( 'project_client') ) ? creativeagency_meta( 'project_client') : 'N/A';
$service_type = ! empty( creativeagency_meta( 'project_service') ) ? creativeagency_meta( 'project_service') : 'N/A';
$project_date = ! empty( creativeagency_meta( 'project_date') ) ? creativeagency_meta( 'project_date') : 'N/A';
$project_url  = ! empty( creativeagency_meta( 'project_live_url') ) ? creativeagency_meta( 'project_live_url') : '#';

if( have_posts() ) {
    while( have_posts() ) : the_post();
    ?>

    <!-- app_design_area_start -->
    <div class="app_design_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="app_banner">
                        <?php
                            if( $project_img ) {
                                echo $project_img;
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-md-8">
                    <div class="service_wrap d-flex justify-content-between">
                        <div class="single-serv">
                            <h4><?php echo esc_html( 'Clients', 'creativeagency' );?></h4>
                            <p><?php echo esc_html( $client_name )?></p>
                        </div>
                        <div class="single-serv">
                            <h4><?php echo esc_html( 'Service', 'creativeagency' );?></h4>
                            <p><?php echo esc_html( $service_type )?></p>
                        </div>
                        <div class="single-serv">
                            <h4><?php echo esc_html( 'Date', 'creativeagency' );?></h4>
                            <p><?php echo esc_html( $project_date )?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-4">
                    <div class="social_link">
                        <?php echo creativeagency_social_sharing_buttons('project-social-sharing')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- app_design_area_end -->

    <!-- "pro_detaols_info_start -->
    <div class="pro_detaols_info">
        <div class="container">
            <div class="border-top"></div>
            <div class="row">
                <div class="col-xl-7 col-md-7">
                    <div class="details_info">
                        <?php the_content()?>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5">
                    <div class="live_view_btn text-right">
                        <a class="boxed_btn_round" href="<?php echo esc_url( $project_url )?>"><?php echo esc_html( 'Live View', 'creativeagency' );?></a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between plus-padding">
                <?php creativeagency_project_navigation()?>
            </div>
        </div>
    </div>
    <!-- "pro_detaols_info_end -->
    <?php 
    endwhile;
}

// Footer============
get_footer();