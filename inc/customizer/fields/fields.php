<?php 
/**
 * @Packge     : Creative_Agency
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
// Epsilon_Customizer::add_field(
//     'creativeagency_theme_color',
//     array(
//         'type'        => 'epsilon-color-picker',
//         'label'       => esc_html__( 'Theme Color', 'creativeagency' ),
//         'description' => esc_html__( 'Select the theme color.', 'creativeagency' ),
//         'sanitize_callback' => 'sanitize_text_field',
//         'section'     => 'creativeagency_general_section',
//         'default'     => '#131313',
//     )
// );

// Header button label
Colorlib_Customizer::add_field(
    'creativeagency_header_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button Text', 'creativeagency' ),
        'section'     => 'creativeagency_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Say Hi', 'creativeagency' ),
    )
);

// Header button URL
Colorlib_Customizer::add_field(
    'creativeagency_header_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Button URL', 'creativeagency' ),
        'section'     => 'creativeagency_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '#', 'creativeagency' ),
    )
);

// Header call button bg color
Colorlib_Customizer::add_field(
    'creativeagency_book_btn_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Anchor Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#1F1F1F',
    )
);

// Header book button hover bg color
Colorlib_Customizer::add_field(
    'creativeagency_book_btn_border_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header Anchor Border Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#FFCB00',
    )
);

// Header color sections
Colorlib_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Header Color Section', 'creativeagency' ),
        'section'     => 'creativeagency_header_section',

    )
);
 
// Header background color field
Colorlib_Customizer::add_field(
    'creativeagency_header_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the header background color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Colorlib_Customizer::add_field(
    'creativeagency_header_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu color field
Colorlib_Customizer::add_field(
    'creativeagency_header_menu_border_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu Border color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#00A7FF',
    )
);

// Header nav menu hover color field
Colorlib_Customizer::add_field(
    'creativeagency_header_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Colorlib_Customizer::add_field(
    'creativeagency_dropdown_menu_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Colorlib_Customizer::add_field(
    'creativeagency_dropdown_menu_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#808080',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Colorlib_Customizer::add_field(
    'creativeagency_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'creativeagency' ),
        'description' => esc_html__( 'Set post excerpt length.', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Colorlib_Customizer::add_field(
    'creativeagency_blog_meta',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'creativeagency_like_btn',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);
Colorlib_Customizer::add_field(
    'creativeagency_blog_share',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Colorlib_Customizer::add_field(
    'creativeagency_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'creativeagency' ),
        'section'           => 'creativeagency_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Colorlib_Customizer::add_field(
    'creativeagency_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'creativeagency' ),
        'section'           => 'creativeagency_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Colorlib_Customizer::add_field(
    'creativeagency_fof_textone_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Colorlib_Customizer::add_field(
    'creativeagency_fof_texttwo_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Colorlib_Customizer::add_field(
    'creativeagency_fof_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Colorlib_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',

    )
);

// Footer widget toggle field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_toggle',
    array(
        'type'        => 'colorlib-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'creativeagency' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Colorlib_Customizer::add_field(
    'creativeagency_footer_copyright_separator',
    array(
        'type'        => 'colorlib-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'creativeagency' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Colorlib_Customizer::add_field(
    'creativeagency_footer_copyright_text',
    array(
        'type'        => 'colorlib-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_bg_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#000000',
    )
);

// Footer widget text color field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_heading_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_text_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#C7C7C7',
    )
);

// Footer widget anchor color field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_anchor_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor hover color field
Colorlib_Customizer::add_field(
    'creativeagency_footer_widget_anchor_hover_color',
    array(
        'type'        => 'colorlib-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#00A7FF',
    )
);

