<?php 
/**
 * @Packge     : Amor
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
    'amor_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'amor' ),
        'description' => esc_html__( 'Select the theme color.', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_general_section',
        'default'     => '#8d00ff',
    )
);


// Header booking button field
Epsilon_Customizer::add_field(
    'amor_header_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Header button show/hide', 'amor' ),
        'section'     => 'amor_header_section',
        'default'     => true
    )
);

// Booking button label
Epsilon_Customizer::add_field(
    'header_btn_label',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button label', 'amor' ),
        'section'           => 'amor_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'learn more'
    )
);

// Booking button url
Epsilon_Customizer::add_field(
    'booking_btn_url',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Header button url', 'amor' ),
        'section'           => 'amor_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '#',
    )
);

// Booking button hover background color
Epsilon_Customizer::add_field(
    'amor_booking_btn_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover BG Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#8d00ff'
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'amor' ),
        'section'     => 'amor_header_section',

    )
);

 
// Header background color field
Epsilon_Customizer::add_field(
    'amor_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'amor' ),
        'description' => esc_html__( 'Select the header background color.', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#8d00ff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'amor_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#fff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'amor_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#fff',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'amor_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#000',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'amor_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_header_section',
        'default'     => '#8d00ff',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'amor_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'amor' ),
        'description' => esc_html__( 'Set post excerpt length.', 'amor' ),
        'section'     => 'amor_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'amor_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'amor' ),
        'section'     => 'amor_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'amor_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'amor' ),
        'section'     => 'amor_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'amor_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'amor' ),
        'section'     => 'amor_blog_section',
        'default'     => true
    )
);


/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'amor_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'amor' ),
        'section'           => 'amor_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'amor_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'amor' ),
        'section'           => 'amor_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'amor_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'amor_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_fof_section',
        'default'     => '#656565',
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
        'label'       => esc_html__( 'Footer Widget Section', 'amor' ),
        'section'     => 'amor_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'amor_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'amor' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'amor' ),
        'section'     => 'amor_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'amor_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'amor' ),
        'section'     => 'amor_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'amor' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'amor_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'amor' ),
        'section'     => 'amor_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Social Profile section
Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'amor' ),
        'section'     => 'amor_footer_section',
        'default'     => true,

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'amor_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'amor' ),
        'section'     => 'amor_footer_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'amor_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'amor_footer_section',
		'label'        => esc_html__( 'Social Profile Links', 'amor' ),
        'button_label' => esc_html__( 'Add new social link', 'amor' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
        ),
        'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'amor' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'amor' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'amor' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Behance', 'amor' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-behance',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'amor' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'amor' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'amor' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'amor_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_footer_section',
        'default'     => '#faf4ff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'amor_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_footer_section',
        'default'     => '#555555',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'amor_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_footer_section',
        'default'     => '#000',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'amor_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_footer_section',
        'default'     => '#555',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'amor_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'amor' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'amor_footer_section',
        'default'     => '#8d00ff',
    )
);

