<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>    
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <?php 
    /**
     * Preloader Start
     *
     * @Hook creativeagency_preloader
     *
     * @Hooked creativeagency_site_preloader 10
     *
     */
    do_action( 'creativeagency_preloader' );

    /**
     * Header Area Start
     * Header menu
     * 
     * @Hook creativeagency_header
     *
     * @Hooked creativeagency_header_cb 10
     */

	do_action( 'creativeagency_header' );
