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
Epsilon_Customizer::add_field(
    'creativeagency_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the theme color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_general_section',
        'default'     => '#131313',
    )
);

// Header button label
Epsilon_Customizer::add_field(
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
Epsilon_Customizer::add_field(
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
Epsilon_Customizer::add_field(
    'creativeagency_book_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Header book button hover bg color
Epsilon_Customizer::add_field(
    'creativeagency_book_btn_hvr_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover Bg Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'creativeagency' ),
        'section'     => 'creativeagency_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'creativeagency_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'creativeagency' ),
        'description' => esc_html__( 'Select the header background color.', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'creativeagency_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'creativeagency_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'creativeagency_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'creativeagency_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
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
Epsilon_Customizer::add_field(
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
Epsilon_Customizer::add_field(
    'creativeagency_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'creativeagency_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'creativeagency_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'creativeagency' ),
        'section'     => 'creativeagency_blog_section',
        'default'     => true
    )
);

// Footer Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Social Profile Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'creativeagency_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'creativeagency_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'creativeagency_footer_section',
		'label'        => esc_html__( 'Social Profile Links', 'creativeagency' ),
        'button_label' => esc_html__( 'Add new social link', 'creativeagency' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'creativeagency' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'creativeagency' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'creativeagency' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'creativeagency' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'creativeagency' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'creativeagency' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);
 
/***********************************
 * Footer Reservation Section
 ***********************************/

// Footer Reservation section
Epsilon_Customizer::add_field(
    'footer_reservation_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Reservation Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',

    )
);

// Footer reservation toggle field
Epsilon_Customizer::add_field(
    'creativeagency_footer_reservation_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer reservation show/hide', 'creativeagency' ),
        'description' => esc_html__( 'Toggle to display footer reservation.', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,
    )
);

// Reservation title field
Epsilon_Customizer::add_field(
    'creativeagency_reservation_title',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Reservation title', 'creativeagency' ),
        'section'           => 'creativeagency_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Do youn have any project or Query ?', 'creativeagency' ),
    )
);

// Reservation sub title field
Epsilon_Customizer::add_field(
    'creativeagency_reservation_sub_title',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Reservation sub title', 'creativeagency' ),
        'section'           => 'creativeagency_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Consectetur adipiscing elit, sed do eiusmod tempor incididunt.', 'creativeagency' ),
    )
);

// Reservation Button Text field
Epsilon_Customizer::add_field(
    'creativeagency_reservation_btn_text',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Reservation Button Text', 'creativeagency' ),
        'section'           => 'creativeagency_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'Contact Us', 'creativeagency' ),
    )
);

// Reservation Button URL field
Epsilon_Customizer::add_field(
    'creativeagency_reservation_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Reservation Button URL', 'creativeagency' ),
        'section'           => 'creativeagency_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( '#', 'creativeagency' ),
    )
);
 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
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
Epsilon_Customizer::add_field(
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
Epsilon_Customizer::add_field(
    'creativeagency_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'creativeagency_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'creativeagency_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
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
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'creativeagency' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'creativeagency_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'creativeagency' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'creativeagency_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'creativeagency' ),
        'section'     => 'creativeagency_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#1f1b1b',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'creativeagency_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'creativeagency' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'creativeagency_footer_section',
        'default'     => '#ffffff',
    )
);

