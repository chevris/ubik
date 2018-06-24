<?php
/**
 * Frontpage Vertical Bar Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 *  Section : ubik_frontpage_vertical_bar_section
 *    
 *    ubik_frontpage_vertical_bar_activate
 * 
 *    [if : ubik_frontpage_vertical_bar_activate == 1]
 *    ubik_frontpage_no_vertical_bar
 *    ubik_frontpage_vertical_bar_style
 * 
 *      [if : ubik_frontpage_vertical_bar_style == classic]
 *      Sub-section : ubik_frontpage_classic_vertical_bar_general_section
 * 
 *        ubik_frontpage_classic_vertical_bar_device_visibility
 * 				ubik_frontpage_classic_vertical_bar_position
 *        ubik_frontpage_classic_vertical_bar_scroll_behavior
 *        ubik_frontpage_classic_vertical_bar_width
 * 				ubik_frontpage_classic_vertical_bar_width_tablet_heading
 * 				[if : ubik_frontpage_classic_vertical_bar_device_visibility = show-desktop-tablet && ubik_frontpage_classic_vertical_bar_width_tablet_heading = true]
 * 				ubik_frontpage_classic_vertical_bar_width_tablet
 * 				ubik_frontpage_classic_vertical_bar_color_heading
 * 					[if : ubik_frontpage_classic_vertical_bar_color_heading = true]
 * 					ubik_frontpage_classic_vertical_bar_bg_color				
 * 					ubik_frontpage_classic_vertical_bar_footer_bg_color	[if : ubik_frontpage_classic_vertical_bar_scroll_behavior == sticky]
 * 					ubik_frontpage_classic_vertical_bar_border_color
 * 
 *      [if : ubik_frontpage_vertical_bar_style == classic]
 *      Sub-section : ubik_frontpage_classic_vertical_bar_content_section
 * 
 *        ubik_frontpage_classic_vertical_bar_elements
 * 					[if : ubik_frontpage_classic_vertical_bar_scroll_behavior == sticky]
 * 					ubik_frontpage_classic_vertical_bar_footer_elements
 * 				ubik_frontpage_classic_vertical_bar_logo_options_heading
 * 				ubik_frontpage_classic_vertical_bar_logo_max_height
 * 				ubik_frontpage_classic_vertical_bar_logo_position
 * 				ubik_frontpage_classic_vertical_bar_logo_spacing
 * 				ubik_frontpage_classic_vertical_bar_logo_color_heading
 * 					[if : ubik_frontpage_classic_vertical_bar_logo_color_heading == true]
 * 					ubik_frontpage_classic_vertical_bar_logo_bg_color
 * 					[if : ubik_frontpage_classic_vertical_bar_device_visibility == show-desktop-tablet]
 * 					ubik_frontpage_classic_vertical_bar_logo_hide_tablet
 *				ubik_frontpage_classic_vertical_bar_nav_options_heading
 *				ubik_frontpage_classic_vertical_bar_nav_style
 *				ubik_frontpage_classic_vertical_bar_nav_position
 *				ubik_frontpage_classic_vertical_bar_nav_spacing
 *				ubik_frontpage_classic_vertical_bar_nav_items_spacing
 *				ubik_classic_vertical_bar_nav_color_heading
 *					[if : ubik_classic_vertical_bar_nav_color_heading == true]
 *					ubik_frontpage_classic_vertical_bar_nav_items_color
 *					ubik_frontpage_classic_vertical_bar_nav_items_hover_color
 *						[if : ubik_frontpage_classic_vertical_bar_nav_style == drilldown]
 *						ubik_frontpage_classic_vertical_bar_nav_drilldown_submenu_bg_color
 * 				ubik_frontpage_classic_vertical_bar_nav_typography_heading
 * 					[if : ubik_frontpage_classic_vertical_bar_nav_typography_heading = true]
 * 					ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop
 * 					ubik_frontpage_classic_vertical_bar_nav_typography_letter_spacing
 * 					ubik_frontpage_classic_vertical_bar_nav_typography_text_transform
 *					[if : ubik_frontpage_classic_vertical_bar_device_visibility == show-desktop-tablet]
 *					ubik_frontpage_classic_vertical_bar_nav_hide_tablet
 *				ubik_frontpage_classic_vertical_bar_search_options_heading
 *				ubik_frontpage_classic_vertical_bar_search_style
 *					ubik_frontpage_classic_vertical_bar_search_position
 *					[if : ubik_frontpage_classic_vertical_bar_device_visibility == show-desktop-tablet]
 *					ubik_frontpage_classic_vertical_bar_search_style_tablet
 *				ubik_frontpage_classic_vertical_bar_search_position
 *				ubik_frontpage_classic_vertical_bar_search_spacing
 *				ubik_frontpage_classic_vertical_bar_search_color_heading
 *					[if : ubik_frontpage_classic_vertical_bar_search_color_heading == true]
 *					ubik_frontpage_classic_vertical_bar_search_icon_color
 *					ubik_frontpage_classic_vertical_bar_search_icon_hover_color
 *					ubik_frontpage_classic_vertical_bar_search_form_border_color
 * 					ubik_frontpage_classic_vertical_bar_search_form_border_focus_color
 * 					ubik_frontpage_classic_vertical_bar_search_form_bg_color
 * 					ubik_frontpage_classic_vertical_bar_search_form_text_color
 * 					ubik_frontpage_classic_vertical_bar_search_form_button_bg_color
 *					[if : ubik_frontpage_classic_vertical_bar_device_visibility == show-desktop-tablet]
 *					ubik_frontpage_classic_vertical_bar_search_hide_tablet
 *				ubik_frontpage_classic_vertical_bar_text_options_heading
 *				ubik_frontpage_classic_vertical_bar_text_content
 *				ubik_frontpage_classic_vertical_bar_text_position
 *				ubik_frontpage_classic_vertical_bar_text_spacing
 * 				ubik_frontpage_classic_vertical_bar_text_color_heading
 * 					[if : ubik_frontpage_classic_vertical_bar_text_color_heading = true]
 * 					ubik_frontpage_classic_vertical_bar_text_color
 * 					ubik_frontpage_classic_vertical_bar_text_links_color
 * 					ubik_frontpage_classic_vertical_bar_text_links_hover_color
 *				ubik_frontpage_classic_vertical_bar_text_typography_heading
 *					[if : ubik_frontpage_classic_vertical_bar_text_typography_heading = true]
 *					ubik_frontpage_classic_vertical_bar_text_font_size_desktop
 *					ubik_frontpage_classic_vertical_bar_text_letter_spacing
 *					ubik_frontpage_classic_vertical_bar_text_text_transform
 *				ubik_frontpage_classic_vertical_bar_text_hide_tablet
 *				ubik_frontpage_classic_vertical_bar_footer_text_options_heading
 *				ubik_frontpage_classic_vertical_bar_footer_text_content
 *				ubik_frontpage_classic_vertical_bar_footer_text_position
 *				ubik_frontpage_classic_vertical_bar_footer_text_spacing
 * 				ubik_frontpage_classic_vertical_bar_footer_text_color_heading
 * 					[if : ubik_frontpage_classic_vertical_bar_footer_text_color_heading = true]
 * 					ubik_frontpage_classic_vertical_bar_footer_text_color
 * 					ubik_frontpage_classic_vertical_bar_footer_text_links_color
 * 					ubik_frontpage_classic_vertical_bar_footer_text_links_hover_color
 *				ubik_frontpage_classic_vertical_bar_footer_text_typography_heading
 *					[if : ubik_frontpage_classic_vertical_bar_footer_text_typography_heading = true]
 *					ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop
 *					ubik_frontpage_classic_vertical_bar_footer_text_letter_spacing
 *					ubik_frontpage_classic_vertical_bar_footer_text_text_transform
 *					[if : ubik_frontpage_classic_vertical_bar_device_visibility == show-desktop-tablet]
 *					ubik_frontpage_classic_vertical_bar_footer_text_hide_tablet
 * 
 *    
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Front page Vertical Bar fields ]
/*-------------------------------------------------------------------------------*/

/** Vertical bar section */

Kirki::add_section( 'ubik_frontpage_vertical_bar_section', array(
  'title'       => 'Full Height Vertical Bar',
  'panel'       => 'ubik_frontpage_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_frontpage_vertical_bar_activate',
  'description' => esc_html__( 'Activate a specific vertical bar for the front page', 'ubik' ),
	'section'     => 'ubik_frontpage_vertical_bar_section',
	'default'     => '0',
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'ubik' ),
		'off' => esc_attr__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_frontpage_no_vertical_bar',
	'label'           => esc_html__( 'No Vertical Bar (Front Page only)', 'ubik' ),
	'section'         => 'ubik_frontpage_vertical_bar_section',
	'default'         => '0',
  'priority'        => 10,
  'active_callback' => 'ubik_frontpage_vertical_bar_is_activated',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_vertical_bar_style',
  'label'	   		    => esc_html__( 'Vertical Bar Style', 'ubik' ),
	'section'         => 'ubik_frontpage_vertical_bar_section',
	'default'         => 'classic',
	'priority'        => 10,
	'choices'         => array(
		'classic' 					=> esc_html__( 'Classic', 'ubik' ),
  ),
	//'active_callback' => 'ubik_frontpage_vertical_bar_is_activated',
	'active_callback' => 'ubik_frontpage_vertical_bar_style_option_hidden',
) );

Kirki::add_section( 'ubik_frontpage_classic_vertical_bar_general_section', array(
  'title'       => 'Classic Bar : General Options',
  'section'     => 'ubik_frontpage_vertical_bar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_classic_vertical_bar_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_classic_vertical_bar_general_section',
	'default'     => 'show-desktop',
	'priority'    => 9,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show On Desktop Only', 'ubik' ),
    'show-desktop-tablet'	  => esc_html__( 'Show On Desktop & Tablet', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_position',
  'label'	   		    => esc_html__( 'Bar Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_general_section',
	'default'         => 'left',
	'priority'        => 9,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_scroll_behavior',
  'label'	   		    => esc_html__( 'Scroll Behavior', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_general_section',
	'default'         => 'sticky',
	'priority'        => 9,
	'choices'         => array(
		'sticky'	  => esc_html__( 'Sticky', 'ubik' ),
    'scroll' 	  => esc_html__( 'Scroll', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_width',
	'label'           => esc_attr__( 'Width (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_general_section',
	'default'         => 250,
	'priority'    		=> 9,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
	),
	'output' => array(
		array(
			'element'  		=> '.has-classic-vertical-bar .frontpage-classic-vertical-bar',
			'property' 		=> 'width',
			'units'				=> 'px',
		),
	),
  'transport'       => 'refresh',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_width_tablet_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_width_tablet_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_width_tablet_heading', array(
    'label'	   		        => esc_html__( 'Width (px) - Tablet only', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_general_section',
		'priority' 				    => 10,
		'active_callback'  		=> 'ubik_frontpage_classic_vertical_bar_visibility_is_tablet'
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_width_tablet_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'slider',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_width_tablet',
	'section'           => 'ubik_frontpage_classic_vertical_bar_general_section',
  'default'           => '100',
  'priority' 				  => 10,
  'choices'     => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
	),
	'output' => array(
		array(
			'element'  		=> '.has-classic-vertical-bar .frontpage-classic-vertical-bar',
			'property' 		=> 'width',
			'units'				=> 'px',
			'media_query' => '@media screen and (min-width: 40em) and (max-width: 63.9375em)',
		),
	),
	'transport' => 'refresh',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_device_visibility',
			'operator'      => '==',
			'value'         => 'show-desktop-tablet',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_width_tablet_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	)
) );

function ubik_frontpage_classic_vertical_bar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_general_section',
		'priority' 				    => 11,
		'active_callback'     => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_frontpage_classic_vertical_bar_general_section',
  'default'           => '#fefefe',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.has-classic-vertical-bar .frontpage-classic-vertical-bar:not(.sticky-container), .has-classic-vertical-bar .frontpage-classic-vertical-bar .frontpage-classic-vertical-bar-inner.sticky',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_footer_bg_color',
	'description'	   		=> esc_html__( 'Footer: Background', 'ubik' ),
	'section'           => 'ubik_frontpage_classic_vertical_bar_general_section',
  'default'           => '#fefefe',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.frontpage-classic-vertical-bar-footer',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_scroll_behavior',
			'operator'      => '==',
			'value'         => 'sticky',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_border_color',
	'description'	   		=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_frontpage_classic_vertical_bar_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.has-classic-vertical-bar #frontpage-vertical-bar.frontpage-classic-vertical-bar:not(.right-bar):not(.sticky-container), .has-classic-vertical-bar #frontpage-vertical-bar.frontpage-classic-vertical-bar:not(.right-bar) .frontpage-classic-vertical-bar-inner.sticky',
			'property' => 'border-color',
		),
		array(
			'element'  => '.has-classic-vertical-bar #frontpage-vertical-bar.frontpage-classic-vertical-bar.right-bar:not(.sticky-container), .has-classic-vertical-bar #frontpage-vertical-bar.frontpage-classic-vertical-bar.right-bar .frontpage-classic-vertical-bar-inner.sticky',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );


Kirki::add_section( 'ubik_frontpage_classic_vertical_bar_content_section', array(
  'title'       => 'Classic Bar : Content',
  'section'     => 'ubik_frontpage_vertical_bar_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_elements',
	'label'           => __( 'Elements Positioning', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => array(
    'logo',
		'nav',
		'search',
	),
	'choices'     => array(
		'logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
		'nav' 	    => esc_html__( 'Navigation', 'ubik' ),
		'search'		=> esc_html__( 'Search', 'ubik' ),
		'text' 	    => esc_html__( 'Custom Text', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_footer_elements',
	'label'           => esc_html__( 'Footer Elements Positioning', 'ubik' ),
	'description'     => esc_html__( 'Only if the bar is sticky', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'choices'     => array(
		'logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
		'search'		=> esc_html__( 'Search', 'ubik' ),
		'text' 	    => esc_html__( 'Custom Text', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_scroll_behavior',
			'operator'      => '==',
			'value'         => 'sticky',
		),
	)
) );

function ubik_frontpage_classic_vertical_bar_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_logo_options_heading', array(
		'label'    				=> esc_html__( 'Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_logo_max_height',
	'label'           => esc_attr__( 'Max Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'priority' 				=> 11,
	'default'         => 50,
	'choices'         => array(
		'min'   	=> '1',
		'max'   	=> '200',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar .custom-logo',
			'property' 		=> 'max-height',
			'units'				=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_logo_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'center',
	'priority'        => 11,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-logo',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_logo_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> array(
		'top'    => '20px',
		'bottom' => '20px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-classic-vertical-bar-logo',
      'property' => 'padding',
    ),
	),
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_logo_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_logo_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_logo_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 12,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_logo_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_logo_bg_color',
	'description'	   		=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.has-classic-vertical-bar .frontpage-classic-vertical-bar-logo',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 		=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_logo_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_logo_hide_tablet',
	'label'       		=> esc_html__( 'Hide on Tablet', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> 0,
  'priority'    		=> 12,
  'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_device_visibility',
			'operator'      => '==',
			'value'         => 'show-desktop-tablet',
		),
	)
) );

function ubik_frontpage_classic_vertical_bar_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				=> 13,
		'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'select',
	'settings'    			=> 'ubik_frontpage_classic_vertical_bar_nav_style',
  'label'	   					=> esc_html__( 'Navigation Style', 'ubik' ),
	'section'     			=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     			=> 'accordion',
	'priority'    			=> 13,
	'choices'     			=> array(
		'accordion' 	=> esc_html__( 'Accordion', 'ubik' ),
    'drilldown'	  => esc_html__( 'Drilldown', 'ubik' ),
  ),
  'active_callback'  	=> 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_nav_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'left',
	'priority'        => 13,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-nav',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_nav_spacing',
	'label'       		=> esc_attr__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> array(
		'top'    => '20px',
		'bottom' => '20px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 13,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-classic-vertical-bar-nav',
      'property' => 'padding',
    ),
	),
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_nav_items_spacing',
	'label'           => esc_attr__( 'Menu Items Spacing (Top/Bottom)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-nav .accordion-menu a, .frontpage-classic-vertical-bar-nav .drilldown a',
			'property' 				=> 'margin-top',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-nav .accordion-menu a, .frontpage-classic-vertical-bar-nav .drilldown a',
			'property' 				=> 'margin-bottom',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_nav_items_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#333333',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .accordion-menu a, .frontpage-classic-vertical-bar-nav .drilldown a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .accordion-menu .is-accordion-submenu-parent:not(.has-submenu-toggle) > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent transparent'
		),
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .drilldown .is-drilldown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .drilldown .js-drilldown-back > a::before',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	)
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_nav_items_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .accordion-menu a:hover, .frontpage-classic-vertical-bar-nav .accordion-menu a:focus, .frontpage-classic-vertical-bar-nav .drilldown a:hover, .frontpage-classic-vertical-bar-nav .drilldown a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	)
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_nav_drilldown_submenu_bg_color',
	'description'				=> 'Drilldown Sub Menu Background',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-nav .drilldown .is-drilldown-submenu',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_style',
			'operator'      => '==',
			'value'         => 'drilldown',
		),
	)
) );

function ubik_frontpage_classic_vertical_bar_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_nav_typography_heading' );

function ubik_frontpage_classic_vertical_bar_nav_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop', array(
		'transport' 					=> 'postMessage',
		'default'     		    => '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_classic_vertical_bar_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile',
      ),
    'priority' 					=> 15,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic_and_nav_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_nav_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_nav_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_nav_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_nav_hide_tablet',
	'label'       		=> esc_html__( 'Hide on Tablet', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> 0,
  'priority'    		=> 15,
  'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_device_visibility',
			'operator'      => '==',
			'value'         => 'show-desktop-tablet',
		),
	)
) );

function ubik_frontpage_classic_vertical_bar_search_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_search_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_search_options_heading', array(
		'label'    				=> esc_html__( 'Search Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_search_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'select',
	'settings'    			=> 'ubik_frontpage_classic_vertical_bar_search_style',
  'label'	   					=> esc_html__( 'Search Style', 'ubik' ),
	'section'     			=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     			=> 'form',
	'priority'    			=> 16,
	'choices'     			=> array(
		'form' 		   => esc_html__( 'Form', 'ubik' ),
    'overlay'	   => esc_html__( 'Icon - Overlay', 'ubik' ),
  ),
  'active_callback'  	=> 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'select',
	'settings'    			=> 'ubik_frontpage_classic_vertical_bar_search_style_tablet',
  'label'	   					=> esc_html__( 'Search Style - Tablet only', 'ubik' ),
	'section'     			=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     			=> 'overlay',
	'priority'    			=> 16,
	'choices'     			=> array(
		'form' 		   => esc_html__( 'Form', 'ubik' ),
    'overlay'	   => esc_html__( 'Icon - Overlay', 'ubik' ),
  ),
  'active_callback'  	=> 'ubik_frontpage_classic_vertical_bar_visibility_is_tablet',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_search_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'center',
	'priority'        => 16,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-search-icon',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
	)
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_search_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> array(
		'top'    => '20px',
		'bottom' => '20px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-classic-vertical-bar-search',
      'property' => 'padding',
    ),
	),
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_icon_color',
	'description'				=> 'Search Icon',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#929292',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-icon a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_icon_hover_color',
	'description'				=> 'Search Icon: Hover',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-icon a:hover, .frontpage-classic-vertical-bar-search-icon a:focus',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form button:hover, .frontpage-classic-vertical-bar-search-form .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_form_border_color',
	'description'				=> 'Form Border',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_form_border_focus_color',
	'description'				=> esc_attr__( 'Form Border: Focus', 'ubik' ),
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_form_bg_color',
	'description'				=> esc_attr__( 'Form Background', 'ubik'),
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form input, .frontpage-classic-vertical-bar-search-form .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_form_text_color',
	'description'				=> esc_attr__( 'Form Text', 'ubik'),
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form input, .frontpage-classic-vertical-bar-search-form .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_search_form_button_bg_color',
	'description'				=> esc_attr__( 'Search Button Background', 'ubik'),
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-search-form .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_search_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_search_hide_tablet',
	'label'       		=> esc_html__( 'Hide on Tablet', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> 0,
  'priority'    		=> 17,
  'active_callback' => 'ubik_frontpage_classic_vertical_bar_visibility_is_tablet',
) );

function ubik_frontpage_classic_vertical_bar_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'editor',
	'settings'    => 'ubik_frontpage_classic_vertical_bar_text_content',
  'label'       => esc_html__( 'Content', 'ubik' ),
  // 'description'	=> sprintf( esc_html__( 'Shortcodes allowed, %1$ssee the list%2$s.', 'ubik' ), '<a href="https://codex.wordpress.org/Shortcode_API" target="_blank">', '</a>' ),
	'section'     => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     => '',
  'priority'    => 18,
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_text_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'center',
	'priority'        => 18,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-text',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_text_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> array(
		'top'    => '20px',
		'bottom' => '20px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 18,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-classic-vertical-bar-text',
      'property' => 'padding',
    ),
	),
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_text_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#929292',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' 						=> array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-text',
			'property' 		=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage-classic_vertical_bar_text_links_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#333333',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_text_links_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-text a:hover, .frontpage-classic-vertical-bar-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_frontpage_classic_vertical_bar_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 20,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_text_typography_heading' );

function ubik_frontpage_classic_vertical_bar_text_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_font_size_desktop', array(
		'transport' 					=> 'postMessage',
		'default'     		    => '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_text_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_text_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_classic_vertical_bar_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_classic_vertical_bar_text_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_classic_vertical_bar_text_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_classic_vertical_bar_text_font_size_mobile',
      ),
    'priority' 					=> 20,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '200',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic_and_text_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_text_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_text_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_text_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_text_hide_tablet',
	'label'       		=> esc_html__( 'Hide on Tablet', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> 0,
  'priority'    		=> 21,
  'active_callback' => 'ubik_frontpage_classic_vertical_bar_visibility_is_tablet',
) );

function ubik_frontpage_classic_vertical_bar_footer_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_footer_text_options_heading', array(
		'label'    				=> esc_html__( 'Footer Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				=> 22,
		'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_footer_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'editor',
	'settings'    => 'ubik_frontpage_classic_vertical_bar_footer_text_content',
  'label'       => esc_html__( 'Content', 'ubik' ),
  // 'description'	=> sprintf( esc_html__( 'Shortcodes allowed, %1$ssee the list%2$s.', 'ubik' ), '<a href="https://codex.wordpress.org/Shortcode_API" target="_blank">', '</a>' ),
	'section'     => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     => '',
  'priority'    => 22,
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_footer_text_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'center',
	'priority'        => 22,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-footer-text',
			'property' 		=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_footer_text_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> array(
		'top'    => '20px',
		'bottom' => '20px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 22,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-classic-vertical-bar-footer-text',
      'property' => 'padding',
    ),
	),
	'active_callback'  => 'ubik_frontpage_vertical_bar_style_is_classic',
) );

function ubik_frontpage_classic_vertical_bar_footer_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 23,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_footer_text_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#929292',
  'priority' 				  => 23,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' 						=> array(
		array(
			'element'  		=> '.frontpage-classic-vertical-bar-footer-text',
			'property' 		=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_footer_text_links_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#333333',
  'priority' 				  => 23,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-footer-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_classic_vertical_bar_footer_text_links_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_classic_vertical_bar_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 23,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-classic-vertical-bar-footer-text a:hover, .frontpage-classic-vertical-bar-footer-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_footer_text_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );

function ubik_frontpage_classic_vertical_bar_footer_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_classic_vertical_bar_content_section',
		'priority' 				    => 24,
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_footer_text_typography_heading' );

function ubik_frontpage_classic_vertical_bar_footer_text_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop', array(
		'transport' 					=> 'postMessage',
		'default'     		    => '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_classic_vertical_bar_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile',
      ),
    'priority' 					=> 24,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '200',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_vertical_bar_style_is_classic_and_footer_text_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_classic_vertical_bar_footer_text_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_footer_text_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 24,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_footer_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_classic_vertical_bar_footer_text_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 24,
	'output' => array(
		array(
			'element'  				=> '.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_activate',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_vertical_bar_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_frontpage_classic_vertical_bar_footer_text_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_classic_vertical_bar_footer_text_hide_tablet',
	'label'       		=> esc_html__( 'Hide on Tablet', 'ubik' ),
	'section'     		=> 'ubik_frontpage_classic_vertical_bar_content_section',
	'default'     		=> 0,
  'priority'    		=> 25,
  'active_callback' => 'ubik_frontpage_classic_vertical_bar_visibility_is_tablet',
) );


/*-------------------------------------------------------------------------------*/
/* [ Active callbacks ]
/*-------------------------------------------------------------------------------*/

/**
 * [ Table of contents ]
 * 
 * ubik_frontpage_vertical_bar_is_activated()
 * ubik_frontpage_vertical_bar_style_option_hidden()
 * ubik_frontpage_vertical_bar_style_is_classic()
 * ubik_frontpage_vertical_bar_style_is_classic_and_nav_typo_on()
 * ubik_frontpage_vertical_bar_style_is_classic_and_text_typo_on()
 * ubik_frontpage_vertical_bar_style_is_classic_and_footer_text_typo_on()
 * ubik_frontpage_classic_vertical_bar_visibility_is_tablet()
 * 
 */

function ubik_frontpage_vertical_bar_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_frontpage_vertical_bar_activate', '0' ) ) ? true : false;
}

function ubik_frontpage_vertical_bar_style_option_hidden() {
	return false;
}

function ubik_frontpage_vertical_bar_style_is_classic() {
	return ( ubik_frontpage_vertical_bar_is_activated() && 'classic' == get_theme_mod( 'ubik_frontpage_vertical_bar_style', 'classic' ) ) ? true : false;
}

function ubik_frontpage_vertical_bar_style_is_classic_and_nav_typo_on() {
	return ( ubik_frontpage_vertical_bar_is_activated() && 'classic' == get_theme_mod( 'ubik_frontpage_vertical_bar_style', 'classic' ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_nav_typography_heading', '0') ) ? true : false;
}

function ubik_frontpage_vertical_bar_style_is_classic_and_text_typo_on() {
	return ( ubik_frontpage_vertical_bar_is_activated() && 'classic' == get_theme_mod( 'ubik_frontpage_vertical_bar_style', 'classic' ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_text_typography_heading', '0') ) ? true : false;
}

function ubik_frontpage_vertical_bar_style_is_classic_and_footer_text_typo_on() {
	return ( ubik_frontpage_vertical_bar_is_activated() && 'classic' == get_theme_mod( 'ubik_frontpage_vertical_bar_style', 'classic' ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', '0') ) ? true : false;
}

function ubik_frontpage_classic_vertical_bar_visibility_is_tablet() {
	return ( ubik_frontpage_vertical_bar_is_activated() && 'classic' == get_theme_mod( 'ubik_frontpage_vertical_bar_style', 'classic' ) && 'show-desktop-tablet' == get_theme_mod( 'ubik_frontpage_classic_vertical_bar_device_visibility', 'show-desktop' ) ) ? true : false;
}

