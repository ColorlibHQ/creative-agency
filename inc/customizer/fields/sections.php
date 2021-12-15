<?php 
/**
 * @Packge     : Creative_Agency
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'creativeagency_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'creativeagency' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    // array(
    //     'id'   => 'creativeagency_general_section',
    //     'args' => array(
    //         'title'    => esc_html__( 'General', 'creativeagency' ),
    //         'panel'    => 'creativeagency_theme_options_panel',
    //         'priority' => 1,
    //     ),
    // ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'creativeagency_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'creativeagency_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'creativeagency_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'creativeagency_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'creativeagency_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'creativeagency_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'creativeagency_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'creativeagency' ),
            'panel'    => 'creativeagency_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>