<?php
/**
 * Frontpage Header Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 *  Section : ubik_frontpage_header_section
 * 
 *    ubik_frontpage_specific_header
 * 
 *    [if : ubik_frontpage_specific_header == 1]
 *    ubik_frontpage_header_format
 *
 *      [if : ubik_frontpage_header_format == image]
 *      Sub-section : ubik_frontpage_image_header_general_options_section
 *    
 *        ubik_frontpage_image_header_height_desktop
 *        ubik_frontpage_image_header_height_tablet
 *        ubik_frontpage_image_header_height_mobile
 * 				ubik_frontpage_image_header_bg_heading
 * 				ubik_frontpage_image_header_bg_color
 * 				ubik_core_header_image_controls
 *        ubik_frontpage_image_header_bg_img_position
 *        ubik_frontpage_image_header_bg_img_repeat
 *        ubik_frontpage_image_header_bg_img_attachment
 *        ubik_frontpage_image_header_bg_img_size
 * 				ubik_frontpage_image_header_border_heading
 * 				ubik_frontpage_image_header_border_style
 * 				ubik_frontpage_image_header_border_width
 * 				ubik_frontpage_image_header_colors_heading
 * 					[if : ubik_frontpage_image_header_colors_heading == true]
 * 					ubik_frontpage_image_header_border_color
 * 				ubik_frontpage_image_header_overlay_heading
 *      	ubik_frontpage_image_header_overlay_style
 *      	ubik_frontpage_image_header_overlay_color
 * 				
 * 
 * 			[if : ubik_frontpage_header_format != no-header]
 *      Sub-section : ubik_frontpage_menubar_section
 * 
 *        ubik_frontpage_menubar_heading_tabs
 * 
 *        [if : ubik_frontpage_menubar_heading_tabs = general]
 *        ubik_frontpage_image_header_menubar_deactivate  [& if : ubik_frontpage_header_format != simple]
 * 				ubik_frontpage_menubar_device_visibility
 *        ubik_frontpage_image_header_menubar_position    [& if : ubik_frontpage_header_format != simple]
 *        ubik_frontpage_menubar_full_width
 *        ubik_frontpage_menubar_sticky
 * 				ubik_frontpage_menubar_min_height
 * 				ubik_frontpage_menubar_color_heading
 * 					[if : ubik_frontpage_menubar_color_heading = true]
 * 					ubik_frontpage_menubar_bg_color
 * 					ubik_frontpage_menubar_borders_color
 * 
 *        [if : ubik_frontpage_menubar_heading_tabs = elements]
 *        ubik_frontpage_menubar_elements_positioning_heading
 *        ubik_frontpage_menubar_elements_subheading_tabs
 * 
 *          [if : ubik_frontpage_menubar_elements_subheading_tabs = left]
 *          ubik_frontpage_menubar_left_area_elements
 *          ubik_frontpage_menubar_left_area_alignment
 *          ubik_frontpage_menubar_left_area_width
 * 
 *          [if : ubik_frontpage_menubar_elements_subheading_tabs = center]
 *          ubik_frontpage_menubar_center_area_elements
 *          ubik_frontpage_menubar_center_area_alignment
 *          ubik_frontpage_menubar_center_area_width
 * 
 *          [if : ubik_frontpage_menubar_elements_subheading_tabs = right]
 *          ubik_frontpage_menubar_right_area_elements
 *          ubik_frontpage_menubar_right_area_alignment
 *          ubik_frontpage_menubar_right_area_width
 * 
 *          [if : ubik_frontpage_menubar_heading_tabs = elements]
 * 			    ubik_frontpage_menubar_logo_options_heading
 * 					ubik_frontpage_menubar_logo_device_visibility
 * 			    ubik_frontpage_menubar_logo_max_height_desktop
 * 			    ubik_frontpage_menubar_logo_max_height_tablet
 * 					ubik_frontpage_menubar_logo_hover_effect
 * 					ubik_frontpage_menubar_logo_spacing
 * 					ubik_frontpage_menubar_text_options_heading
 *          ubik_frontpage_menubar_text_device_visibility
 *          ubik_frontpage_menubar_text_content
 * 					ubik_frontpage_menubar_text_spacing
 * 					ubik_frontpage_menubar_text_color_heading
 * 						[if : ubik_frontpage_menubar_text_color_heading = true]
 * 						ubik_frontpage_menubar_text_color
 * 						ubik_frontpage_menubar_text_links_color
 * 						ubik_frontpage_menubar_text_links_hover_color
 * 					ubik_frontpage_menubar_text_typography_heading
 * 						[if : ubik_frontpage_menubar_text_typography_heading = true]
 * 						ubik_frontpage_menubar_text_typography_font_size
 * 						ubik_frontpage_menubar_text_typography_letter_spacing
 * 						ubik_frontpage_menubar_text_typography_text_transform
 *          ubik_frontpage_menubar_search_options_heading
 * 					ubik_frontpage_menubar_search_device_visibility
 *          ubik_frontpage_menubar_search_style
 * 					ubik_frontpage_menubar_search_spacing
 * 					ubik_frontpage_menubar_search_color_heading
 * 					[if : ubik_frontpage_menubar_search_color_heading = true && ubik_frontpage_menubar_search_style != form]
 * 					ubik_frontpage_menubar_search_icon_color
 * 					ubik_frontpage_menubar_search_icon_color_hover
 * 					[if : ubik_frontpage_menubar_search_color_heading = true && ubik_frontpage_menubar_search_style = form]
 * 					ubik_frontpage_menubar_search_form_border_color
 * 					ubik_frontpage_menubar_search_form_border_focus_color
 * 					ubik_frontpage_menubar_search_form_bg_color
 * 					ubik_frontpage_menubar_search_form_text_color
 * 					ubik_frontpage_menubar_search_form_button_bg_color
 * 					ubik_frontpage_menubar_search_form_icon_color
 * 					ubik_frontpage_menubar_search_form_icon_hover_focus_color
 *          ubik_frontpage_menubar_nav_options_heading
 * 					ubik_frontpage_menubar_nav_device_visibility
 * 					ubik_frontpage_menubar_nav_menu_spacing
 * 					ubik_frontpage_menubar_nav_menu_items_spacing
 * 					ubik_frontpage_menubar_nav_menu_items_color_heading
 * 						[if : ubik_frontpage_menubar_nav_menu_items_color_heading = true]
 * 						ubik_frontpage_menubar_nav_menu_items_color
 * 						ubik_frontpage_menubar_nav_menu_items_color_hover
 * 					ubik_frontpage_menubar_nav_typography_heading
 * 						[if : ubik_frontpage_menubar_nav_typography_heading = true]
 * 						ubik_frontpage_menubar_nav_typography_font_size
 * 						ubik_frontpage_menubar_nav_typography_letter_spacing
 * 						ubik_frontpage_menubar_nav_typography_text_transform
 * 
 *      [if : ubik_frontpage_header_format == image]
 *      Sub-section : ubik_frontpage_header_content_section
 * 
 *        ubik_frontpage_header_content_elements
 * 				ubik_frontpage_header_content_elements_direction
 *        ubik_frontpage_header_content_elements_vertical_alignment
 * 
 *        [if : site-tagline in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_site_tagline_options_heading
 *	  		ubik_frontpage_header_content_site_tagline_device_visibility
 *	  		ubik_frontpage_header_content_site_tagline_horizontal_alignment
 *				ubik_frontpage_header_content_site_tagline_spacing
 *				ubik_frontpage_header_content_site_tagline_color_heading
 *					[if : ubik_frontpage_header_content_site_tagline_color_heading = true]
 *					ubik_frontpage_header_content_site_tagline_color
 *				ubik_frontpage_header_content_site_tagline_typography_heading
 *					[if : ubik_frontpage_header_content_site_tagline_typography_heading = true]
 *					ubik_frontpage_header_content_site_tagline_font_size_desktop
 *					ubik_frontpage_header_content_site_tagline_letter_spacing
 *					ubik_frontpage_header_content_site_tagline_text_transform
 *        [if : page-title in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_page_title_options_heading
 *	  		ubik_frontpage_header_content_page_title_device_visibility
 *	  		ubik_frontpage_header_content_page_title_horizontal_alignment
 *				ubik_frontpage_header_content_page_title_spacing
 *				ubik_frontpage_header_content_page_title_color_heading
 *					[if : ubik_frontpage_header_content_page_title_color_heading = true]
 *					ubik_frontpage_header_content_page_title_color
 *				ubik_frontpage_header_content_page_title_typography_heading
 *					[if : ubik_frontpage_header_content_page_title_typography_heading = true]
 *					ubik_frontpage_header_content_page_title_font_size_desktop
 *					ubik_frontpage_header_content_page_title_letter_spacing
 *					ubik_frontpage_header_content_page_title_text_transform
 *        [if : nav in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_nav_options_heading
 *	  		ubik_frontpage_header_content_nav_device_visibility
 *	  		ubik_frontpage_header_content_nav_horizontal_alignment
 *				ubik_frontpage_header_content_nav_spacing
 *				ubik_frontpage_header_content_nav_items_spacing
 * 				ubik_frontpage_header_content_nav_color_heading
 * 					[if : ubik_frontpage_header_content_nav_color_heading = true]
 * 					ubik_frontpage_header_content_nav_links_color
 * 					ubik_frontpage_header_content_nav_links_hover_color
 *				ubik_frontpage_header_content_nav_typography_heading
 *					[if : ubik_frontpage_header_content_nav_typography_heading = true]
 *					ubik_frontpage_header_content_nav_font_size_desktop
 *					ubik_frontpage_header_content_nav_letter_spacing
 *					ubik_frontpage_header_content_nav_text_transform
 *        [if : search-form in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_search_form_options_heading
 *	  		ubik_frontpage_header_content_search_form_device_visibility
 *	  		ubik_frontpage_header_content_search_form_horizontal_alignment
 *				ubik_frontpage_header_content_search_form_spacing
 *				ubik_frontpage_header_content_search_form_width
 *				ubik_frontpage_header_content_search_form_color_heading
 *				[if : ubik_frontpage_header_content_search_form_color_heading = true]
 *				ubik_frontpage_header_content_search_form_border_color
 *				ubik_frontpage_header_content_search_form_border_focus_color
 *				ubik_frontpage_header_content_search_form_background_color
 *				ubik_frontpage_header_content_search_form_text_color
 * 				ubik_frontpage_header_content_search_form_button_bg_color
 * 				ubik_frontpage_header_content_search_form_icon_color
 * 				ubik_frontpage_header_content_search_form_icon_hover_focus_color	
 *        [if : site-logo in ubik_frontpage_header_content_elements]
 *        ubik_frontpage_header_content_site_logo_options_heading
 *        ubik_frontpage_header_content_site_logo_device_visibility
 *        ubik_frontpage_header_content_site_logo_horizontal_alignment
 * 			  ubik_frontpage_header_content_site_logo_max_height_desktop
 * 			  ubik_frontpage_header_content_site_logo_max_height_tablet
 * 			  ubik_frontpage_header_content_site_logo_max_height_mobile
 * 				ubik_frontpage_header_content_site_logo_spacing
 * 				[if : text in ubik_frontpage_header_content_elements]
 *  			ubik_frontpage_header_content_text_options_heading
 * 				ubik_frontpage_header_content_text_device_visibility
 *	  		ubik_frontpage_header_content_text_horizontal_alignment
 *				ubik_frontpage_header_content_text_content
 *	  		ubik_frontpage_header_content_text_spacing
 * 				ubik_frontpage_header_content_text_color_heading
 * 					[if : ubik_frontpage_header_content_text_color_heading = true]
 * 					ubik_frontpage_header_content_text_color
 * 					ubik_frontpage_header_content_text_links_color
 * 					ubik_frontpage_header_content_text_links_hover_color
 *				ubik_frontpage_header_content_text_typography_heading
 *					[if : ubik_frontpage_header_content_text_typography_heading = true]
 *					ubik_frontpage_header_content_text_font_size_desktop
 *					ubik_frontpage_header_content_text_letter_spacing
 *					ubik_frontpage_header_content_text_text_transform
 *				[if : links in ubik_frontpage_header_content_elements]
 *				ubik_frontpage_header_content_links_options_heading
 *				ubik_frontpage_header_content_links_device_visibility
 *				ubik_frontpage_header_content_links_horizontal_alignment
 *				ubik_frontpage_header_content_links_custom_repeater
 *				ubik_frontpage_header_content_elements_direction
 *				ubik_frontpage_header_content_links_spacing
 *					[if : ubik_frontpage_header_content_elements_direction = row]
 *					ubik_frontpage_header_content_links_items_horizontal_spacing
 *					[if : ubik_frontpage_header_content_elements_direction = column]
 *					ubik_frontpage_header_content_links_items_vertical_spacing
 *
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ Front page header fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_section( 'ubik_frontpage_header_section', array(
  'title'       => 'Header',
  'panel'       => 'ubik_frontpage_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'switch',
	'settings'    => 'ubik_frontpage_specific_header',
  'description'       => esc_html__( 'Activate a specific header for the front page', 'ubik' ),
	'section'     => 'ubik_frontpage_header_section',
	'default'     => '0',
  'priority'    => 10,
  'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'ubik' ),
		'off' => esc_attr__( 'Disable', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_format',
	'label'       => esc_html__( 'Header Format', 'ubik' ),
	'section'     => 'ubik_frontpage_header_section',
	'default'     => 'image',
  'priority'    => 10,
  'choices' 		=> array(
    'simple' 		    => esc_html__( 'Simple Bar', 'ubik' ),
		'image' 		    => esc_html__( 'Image', 'ubik' ),
		'no-header' 		=> esc_html__( 'No Header', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_section( 'ubik_frontpage_image_header_general_options_section', array(
  'title'       => 'Image Header General Options',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));

function ubik_frontpage_image_header_height( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_image_header_height_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '300',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_image_header_height_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '250',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_image_header_height_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '200',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_image_header_height_desktop', array(
    'label' 						  => esc_html__( 'Min Height (px)', 'ubik' ),
    'section'  					  => 'ubik_frontpage_image_header_general_options_section',
    'settings' 					  => array(
        'desktop' 	=> 'ubik_frontpage_image_header_height_desktop',
        'tablet' 		=> 'ubik_frontpage_image_header_height_tablet',
        'mobile' 		=> 'ubik_frontpage_image_header_height_mobile',
      ),
    'priority' 						=> 10,
    'input_attrs' 			  => array(
          'min'   	=> '0',
          'max'   	=> '1000',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_frontpage_header_format_is_image',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_height' );

function ubik_frontpage_image_header_bg_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_bg_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_bg_heading', array(
    'label'	   		        => esc_html__( 'Background', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_bg_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_bg_color',
	'description'       => esc_html__( 'Background Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => '#fefefe',
  'priority' 				  => 11,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#header.frontpage-image-header',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
  ),
) );

function ubik_core_header_image_controls( $wp_customize ) {

  $frontpage_header_video = $wp_customize->get_control( 'header_video' );
  $frontpage_ext_header_video = $wp_customize->get_control( 'external_header_video' );
	$frontpage_header_image = $wp_customize->get_control( 'header_image' );
	
	$frontpage_header_video->section = 'ubik_frontpage_image_header_general_options_section';
	$frontpage_ext_header_video->section = 'ubik_frontpage_image_header_general_options_section';
	$frontpage_header_image->section = 'ubik_frontpage_image_header_general_options_section';

	$frontpage_header_video->active_callback = 'ubik_frontpage_header_format_is_image';
  $frontpage_ext_header_video->active_callback = 'ubik_frontpage_header_format_is_image';
	$frontpage_header_image->active_callback = 'ubik_frontpage_header_format_is_image';
	
	$frontpage_header_video->priority = 12;
	$frontpage_ext_header_video->priority = 12;
	$frontpage_header_image->priority = 12;

}
add_action( 'customize_register', 'ubik_core_header_image_controls' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_bg_img_position',
	'label'       => esc_html__( 'Background Image Position', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'center center',
  'priority'    => 12,
  'choices' 		=> array(
    'top left' 				=> esc_html__( 'Top Left', 'ubik' ),
    'top center' 			=> esc_html__( 'Top Center', 'ubik' ),
    'top right'  			=> esc_html__( 'Top Right', 'ubik' ),
    'center left' 		=> esc_html__( 'Center Left', 'ubik' ),
    'center center' 	=> esc_html__( 'Center Center', 'ubik' ),
    'center right' 		=> esc_html__( 'Center Right', 'ubik' ),
    'bottom left' 		=> esc_html__( 'Bottom Left', 'ubik' ),
    'bottom center' 	=> esc_html__( 'Bottom Center', 'ubik' ),
    'bottom right' 		=> esc_html__( 'Bottom Right', 'ubik' ),
  ),
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_bg_img_repeat',
	'label'       => esc_html__( 'Background Image Repeat', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'repeat',
  'priority'    => 12,
  'choices' 		=> array(
    'no-repeat' => esc_html__( 'No-repeat', 'ubik' ),
    'repeat' 		=> esc_html__( 'Repeat', 'ubik' ),
    'repeat-x' 	=> esc_html__( 'Repeat-x', 'ubik' ),
    'repeat-y' 	=> esc_html__( 'Repeat-y', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_image_header_bg_img_attachment',
	'label'       => esc_html__( 'Background Image Attachment', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'scroll',
  'priority'    => 12,
  'choices' 		=> array(
    'scroll' 		=> esc_html__( 'Scroll', 'ubik' ),
    'fixed' 		=> esc_html__( 'Fixed', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_image_header_bg_img_size',
	'label'       => esc_html__( 'Background Image Size', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default'     => 'auto',
  'priority'    => 12,
  'choices' 		=> array(
    'auto' 			=> esc_html__( 'Auto', 'ubik' ),
    'cover' 		=> esc_html__( 'Cover', 'ubik' ),
    'contain' 	=> esc_html__( 'Contain', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'header_image',
      'operator'      => '!=',
      'value'         => '',
    ),
  )
) );

function ubik_frontpage_image_header_border_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_border_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_border_heading', array(
    'label'	   		        => esc_html__( 'Bottom Border', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_border_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'select',
	'settings'          => 'ubik_frontpage_image_header_border_style',
	'description'       => esc_html__( 'Border style', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => 'solid',
  'priority' 				  => 13,
  'choices'     			=> array(
		'none' 		=> esc_attr__( 'None', 'ubik' ),
		'solid' 	=> esc_attr__( 'Solid', 'ubik' ),
	),
	'output' 						=> array(
		array(
			'element'  => '.frontpage-image-header',
			'property' => 'border-bottom-style',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimension',
	'settings'          => 'ubik_frontpage_image_header_border_width',
	'description'       => esc_html__( 'Border width', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
	'priority' 				  => 13,
	'default'     			=> '1px',
	'output' 						=> array(
		array(
			'element'  			=> '.frontpage-image-header',
			'property' 			=> 'border-bottom-width',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'ubik_frontpage_image_header_border_style',
      'operator'      => '==',
      'value'         => 'solid',
    ),
  ),
) );

function ubik_frontpage_image_header_colors_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_colors_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_colors_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 14,
		'active_callback'     => 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_colors_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_border_color',
	'description'       => esc_html__( 'Borders Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 14,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '#header.frontpage-image-header',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
    array(
      'setting'       => 'ubik_frontpage_image_header_colors_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_image_header_overlay_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_image_header_overlay_heading', array(
    'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_image_header_overlay_heading', array(
    'label'	   		        => esc_html__( 'Overlay', 'ubik' ),
    'section'  				    => 'ubik_frontpage_image_header_general_options_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_header_format_is_image',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_image_header_overlay_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_overlay_style',
  'label'	   		=> esc_html__( 'Overlay Type', 'ubik' ),
	'section'     => 'ubik_frontpage_image_header_general_options_section',
	'default' 		=> 'none',
	'priority'    => 15,
	'choices'     => array(
		'none' 					=> esc_html__( 'None', 'ubik' ),
    'color' 				=> esc_html__( 'Color', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_image_header_overlay_color',
	'label'       			=> esc_html__( 'Overlay Color', 'ubik' ),
	'section'           => 'ubik_frontpage_image_header_general_options_section',
  'default'           => 'rgba(0,0,0,0.5)',
  'priority' 				  => 15,
  'choices'     => array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  => '.frontpage-image-header__overlay',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '==',
      'value'         => 'image',
    ),
		array(
      'setting'       => 'ubik_frontpage_image_header_overlay_style',
      'operator'      => '==',
      'value'         => 'color',
    ),
  ),
) );


Kirki::add_section( 'ubik_frontpage_menubar_section', array(
  'title'       => 'Menu Bar',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));

function ubik_frontpage_menubar_heading_tabs( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_heading_tabs', array(
    'sanitize_callback' 	=> 'ubik_sanitize_select',
    'default'     		=> 'general',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Tabs_Control( $wp_customize, 'ubik_frontpage_menubar_heading_tabs', array(
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 9,
		'choices' 				=> array(
			'general'   => esc_attr__( 'General', 'ubik' ),
			'elements'  => esc_attr__( 'Elements', 'ubik' ),
		),
		'active_callback' => 'ubik_specific_frontpage_header_is_activated',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_heading_tabs' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_image_header_menubar_deactivate',
	'label'       => esc_html__( 'Deactivate Menu Bar', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'simple',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 10,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_image_header_menubar_position',
  'label'	   		=> esc_html__( 'Bar Position', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'top',
	'priority'    => 10,
	'choices'     => array(
		'top' 	=> esc_html__( 'Top', 'ubik' ),
    'bottom'=> esc_html__( 'Bottom', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'simple',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_menubar_full_width',
	'label'       => esc_html__( 'Full Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'toggle',
	'settings'    => 'ubik_frontpage_menubar_sticky',
	'label'       => esc_html__( 'Enable Sticky Bar', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => '0',
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_min_height',
	'label'           => esc_attr__( 'Min Height (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => 50,
	'priority'    		=> 10,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
  ),
  'transport'       => 'refresh',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'general',
    ),
  )
) );

function ubik_frontpage_menubar_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_general',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_bg_color',
	'description'	   		=> esc_html__( 'Background Color', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#fefefe',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' => true,
	),
	'transport' => 'postMessage',
	'active_callback' => 'ubik_frontpage_menubar_heading_is_general_and_colors_on',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_borders_color',
	'description'	   		=> esc_html__( 'Border Top Color', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 16,
  'choices'     => array(
		'alpha' => true,
	),
	'transport' => 'postMessage',
	'active_callback' => 'ubik_frontpage_menubar_heading_is_general_and_colors_on',
) );

function ubik_frontpage_menubar_elements_positioning_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_elements_positioning_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_elements_positioning_heading', array(
		'label'    				=> esc_html__( 'Select elements in each area', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 10,
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_elements_positioning_heading' );

function ubik_frontpage_menubar_elements_subheading_tabs( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_elements_subheading_tabs', array(
		'default'     			=> 'left',
		'sanitize_callback' => 'ubik_sanitize_select',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Subheading_Tabs_Control( $wp_customize, 'ubik_frontpage_menubar_elements_subheading_tabs', array(
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 10,
		'choices' 				=> array(
			'left'   => esc_attr__( 'Left area', 'ubik' ),
			'center' => esc_attr__( 'Center area', 'ubik' ),
			'right'  => esc_attr__( 'Right area', 'ubik' ),
		),
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_elements_subheading_tabs' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_left_area_elements',
	'label'       => __( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => array(
		'site-logo',
	),
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'left',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_left_area_alignment',
	'label'       => __( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'horizontal',
	'priority'    => 10,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'left',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_left_area_width',
	'label'       => __( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'shrink',
	'priority'    => 10,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'left',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_center_area_elements',
	'label'       => __( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'center',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_center_area_alignment',
	'label'       => __( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'horizontal',
	'priority'    => 10,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'center',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_center_area_width',
	'label'       => __( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'shrink',
	'priority'    => 10,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'center',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'sortable',
	'settings'    => 'ubik_frontpage_menubar_right_area_elements',
	'label'       => __( 'Elements', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => array(
		'nav',
	),
	'choices'     => array(
		'site-logo' 			=> esc_html__( 'Site Logo', 'ubik' ),
    'nav' 	    			=> esc_html__( 'Navigation', 'ubik' ),
		'text' 	    			=> esc_html__( 'Custom Text', 'ubik' ),
		'search' 	        => esc_html__( 'Search', 'ubik' ),
	),
  'priority'    => 10,
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'right',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_right_area_alignment',
	'label'       => __( 'Elements Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'horizontal',
	'priority'    => 10,
	'choices'     => array(
		'horizontal'	=> esc_html__( 'Horizontal', 'ubik' ),
		'vertical' 		=> esc_html__( 'Vertical', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'right',
    ),
  )
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_frontpage_menubar_right_area_width',
	'label'       => __( 'Width', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'auto',
	'priority'    => 10,
	'choices'     => array(
		'auto'		        => esc_html__( 'Auto', 'ubik' ),
		'shrink' 	        => esc_html__( 'Shrink', 'ubik' ),
  ),
  'active_callback' => array(
    array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_header_format',
      'operator'      => '!=',
      'value'         => 'no-header',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_heading_tabs',
      'operator'      => '==',
      'value'         => 'elements',
    ),
    array(
      'setting'       => 'ubik_frontpage_menubar_elements_subheading_tabs',
      'operator'      => '==',
      'value'         => 'right',
    ),
  )
) );

function ubik_frontpage_menubar_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_logo_options_heading', array(
		'label'    				=> esc_html__( 'Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_logo_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 11,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

function ubik_frontpage_menubar_logo_max_height( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_logo_max_height_desktop', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '50',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_setting( 'ubik_frontpage_menubar_logo_max_height_tablet', array(
		'transport' 					=> 'postMessage',
		// 'default'           	=> '50',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_menubar_logo_max_height_desktop', array(
		'label' 						=> esc_html__( 'Logo Max Height (px)', 'ubik' ),
		'section'  					=> 'ubik_frontpage_menubar_section',
		'settings' 					=> array(
			'desktop' 	=> 'ubik_frontpage_menubar_logo_max_height_desktop',
			'tablet' 	  => 'ubik_frontpage_menubar_logo_max_height_tablet',
		),
		'priority' 					=> 12,
		'input_attrs' 			=> array(
				'min'   	=> '0',
				'max'   	=> '200',
				'step'  	=> '1',
		),
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_logo_max_height' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'toggle',
	'settings'    		=> 'ubik_frontpage_menubar_logo_hover_effect',
	'label'       		=> esc_html__( 'Hover Effect', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_section',
	'default'     		=> '1',
  'priority'    		=> 12,
  'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_logo_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-logo',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

function ubik_frontpage_menubar_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 13,
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'select',
	'settings'          => 'ubik_frontpage_menubar_text_device_visibility',
	'label'	   		      => esc_html__( 'Device Visibility', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_section',
	'default'           => 'show-desktop-tablet',
	'priority'          => 13,
	'choices'           => array(
			'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
			'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
			'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
		),
	'active_callback'   => 'ubik_frontpage_menubar_heading_is_elements',
	) );

Kirki::add_field( 'ubik_config', array(
'type'              => 'editor',
'settings'          => 'ubik_frontpage_menubar_text_content',
'label'             => esc_attr__( 'Content', 'ubik' ),
'section'           => 'ubik_frontpage_menubar_section',
// 'default'           => esc_attr__( 'Place your content here', 'ubik' ),
'priority'          => 13,
'transport'         => 'refresh',
'active_callback'   => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_text_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 13,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-text',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

function ubik_frontpage_menubar_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#929292',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_links_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#333333',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_text_links_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#1779ba',
  'priority' 				  => 14,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-text a:hover, .frontpage-menu-bar-text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

function ubik_frontpage_menubar_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_text_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_text_typography_font_size',
	'description'     => esc_attr__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
	'transport'       => 'auto',
	'active_callback' => array(
  	array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_text_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 15,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_menubar_text_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
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
			'element'  				=> '.frontpage-menu-bar-text, .frontpage-menu-bar-text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_text_typography_heading',
      'operator'      => '==',
      'value'         => '1',
		),
	),
) );

function ubik_frontpage_menubar_search_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_search_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_search_options_heading', array(
		'label'    				=> esc_html__( 'Search Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_search_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_search_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 16,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_search_style',
  'label'	   		=> esc_html__( 'Search Style', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'overlay',
	'priority'    => 16,
	'choices'     => array(
		'form' 		      => esc_html__( 'Form', 'ubik' ),
    'overlay'	      => esc_html__( 'Icon - Overlay', 'ubik' ),
    'replace'	      => esc_html__( 'Icon - Replace', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_search_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-search',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

function ubik_frontpage_menubar_search_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_search_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_search_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_search_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_icon_color',
	'description'				=> 'Icon',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#333333',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-icon a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '!=',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_icon_color_hover',
	'description'				=> 'Icon: Hover',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-icon a:hover, .frontpage-menu-bar-search-icon a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '!=',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_border_color',
	'description'				=> 'Form Border',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_border_focus_color',
	'description'				=> esc_attr__( 'Border: Focus', 'ubik' ),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_bg_color',
	'description'				=> esc_attr__( 'Background', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#fefefe',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input, .frontpage-menu-bar-search-form .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_text_color',
	'description'				=> esc_attr__( 'Text', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form input, .frontpage-menu-bar-search-form .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_button_bg_color',
	'description'				=> esc_attr__( 'Search Button Background test', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#fff0',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_icon_color',
	'description'				=> esc_attr__( 'Search Icon', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#929292',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_search_form_icon_hover_focus_color',
	'description'				=> esc_attr__( 'Search Icon: Hover-focus', 'ubik'),
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#1779ba',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-search-form .search-form button:hover, .frontpage-menu-bar-search-form .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_search_color_heading',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_frontpage_menubar_search_style',
      'operator'      => '==',
      'value'         => 'form',
    ),
  ),
) );

function ubik_frontpage_menubar_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_menubar_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_menubar_nav_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_menubar_section',
	'default'     => 'show-desktop-tablet',
	'priority'    => 18,
	'choices'     => array(
		'show-desktop' 		      => esc_html__( 'Show on Desktop Only', 'ubik' ),
		'show-desktop-tablet'	  => esc_html__( 'Show on Desktop & Tablet', 'ubik' ),
		'show-tablet'	  				=> esc_html__( 'Show on Tablet Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_menubar_nav_menu_spacing',
	'label'       		=> __( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_menubar_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 18,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-menu-bar-nav',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_menubar_heading_is_elements',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_menu_items_spacing',
	'label'           => esc_attr__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-menu-bar-nav .dropdown.menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_menubar_heading_is_elements',
) );

function ubik_frontpage_menubar_nav_menu_items_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_menu_items_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_menu_items_color_heading', array(
    'label'	   		        => esc_html__( 'Menu Items Color', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_menu_items_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_nav_menu_items_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#333333',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-nav a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .dropdown.menu > li.is-dropdown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent'
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.frontpage-menu-bar-nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_menu_items_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_menubar_nav_menu_items_color_hover',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_menubar_section',
  'default'           => '#1779ba',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-menu-bar-nav a:hover, .frontpage-menu-bar-nav a:focus, .frontpage-menu-bar-nav .menu .is-active > a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_menu_items_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_menubar_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_menubar_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_menubar_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_menubar_section',
		'priority' 				    => 20,
		'active_callback' 		=> 'ubik_frontpage_menubar_heading_is_elements',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_menubar_nav_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_font_size',
	'description'     => esc_attr__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => '16',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'font-size',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_menubar_nav_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_menubar_section',
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
			'element'  				=> '.frontpage-menu-bar-nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_frontpage_specific_header',
      'operator'      => '==',
      'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '!=',
			'value'         => 'no-header',
		),
		array(
			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
			'operator'      => '==',
			'value'         => 'elements',
		),
    array(
      'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

// Kirki::add_field( 'ubik_config', array(
// 	'type'        => 'typography',
// 	'settings'    => 'ubik_frontpage_menubar_nav_typography_general',
// 	'section'     => 'ubik_frontpage_menubar_section',
// 	'default'     => array(
// 		'font-family'     => 'inherit',
// 		'variant'         => '',
// 		'font-size'       => '16px',
// 		'letter-spacing' 	=> '0',
// 		'text-transform' 	=> 'none',
// 	),
// 	'priority'    => 20,
// 	'transport'   => 'auto',
// 	'output'      => array(
// 		array(
// 			'element' 		=> '.frontpage-menu-bar-nav',
// 		),
// 	),
// 	'active_callback' => array(
// 		array(
//       'setting'       => 'ubik_frontpage_specific_header',
//       'operator'      => '==',
//       'value'         => '1',
// 		),
//     array(
// 			'setting'       => 'ubik_frontpage_header_format',
// 			'operator'      => '!=',
// 			'value'         => 'no-header',
// 		),
// 		array(
// 			'setting'       => 'ubik_frontpage_menubar_heading_tabs',
// 			'operator'      => '==',
// 			'value'         => 'elements',
// 		),
//     array(
//       'setting'       => 'ubik_frontpage_menubar_nav_typography_heading',
//       'operator'      => '==',
//       'value'         => '1',
//     ),
//   ),
// ) );


Kirki::add_section( 'ubik_frontpage_header_content_section', array(
  'title'       => 'Header content',
  'section'     => 'ubik_frontpage_header_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_frontpage_header_content_elements',
	'label'           => __( 'Elements', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => array(
    'site-logo',
	),
	'choices'         => array(
		'site-logo' 	=> esc_html__( 'Site Logo', 'ubik' ),
		'tagline' 		=> esc_html__( 'Site Tagline', 'ubik' ),
    'page-title' 	=> esc_html__( 'Page Title', 'ubik' ),
    'nav' 		    => esc_html__( 'Navigation', 'ubik' ),
		'search-form' => esc_html__( 'Search Form', 'ubik' ),
		'text' 	      => esc_html__( 'Custom Text', 'ubik' ),
		'links' 	    => esc_html__( 'Action Links', 'ubik' ),
	),
  'priority'        => 10,
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_elements_direction',
  'label'	   		    => esc_html__( 'Elements Direction', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'column',
	'priority'        => 10,
	'choices'         => array(
		'column' 		=> esc_html__( 'Column', 'ubik' ),
    'row'				=> esc_html__( 'Row', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_elements_vertical_alignment',
  'label'	   		    => esc_html__( 'Elements Vertical Alignment', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'center',
	'priority'        => 10,
	'choices'         => array(
		'top' 			=> esc_html__( 'Top (Left)', 'ubik' ),
    'center'		=> esc_html__( 'Center', 'ubik' ),
    'bottom'		=> esc_html__( 'Bottom (Right)', 'ubik' ),
    'spaced'		=> esc_html__( 'Spaced', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_format_is_image',
) );

function ubik_frontpage_header_content_site_tagline_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_options_heading', array(
		'label'    				=> esc_html__( 'Site Tagline Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_site_tagline_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 12,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_site_tagline_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 12,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_site_tagline_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__tagline',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_site_tagline',
) );

function ubik_frontpage_header_content_site_tagline_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_site_tagline_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  						=> '.frontpage-header-content__tagline .site-tagline',
			'property' 						=> 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_header_content_site_tagline_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_site_tagline',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_typography_heading' );

function ubik_frontpage_header_content_site_tagline_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '12',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_site_tagline_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_header_content_site_tagline_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_header_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_header_content_site_tagline_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_header_content_site_tagline_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_header_content_site_tagline_font_size_mobile',
      ),
    'priority' 					=> 14,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_site_tagline_and_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_tagline_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_site_tagline_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__tagline .site-tagline',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_site_tagline_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__tagline .site-tagline',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'tagline',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_site_tagline_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

function ubik_frontpage_header_content_page_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_options_heading', array(
		'label'    				=> esc_html__( 'Page Title Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 16,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_page_title_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 16,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_page_title_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 16,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_page_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_page_title_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 16,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__page-title',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_page_title',
) );

function ubik_frontpage_header_content_page_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_page_title_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 17,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  						=> '.frontpage-header-content__page-title .site-page-title',
			'property' 						=> 'color',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_frontpage_header_content_page_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 18,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_page_title',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_typography_heading' );

function ubik_frontpage_header_content_page_title_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_font_size_desktop', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_page_title_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_header_content_page_title_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_header_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_header_content_page_title_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_header_content_page_title_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_header_content_page_title_font_size_mobile',
      ),
    'priority' 					=> 18,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '200',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_page_title_and_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_page_title_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_page_title_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__page-title .site-page-title',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_page_title_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 18,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__page-title .site-page-title',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
    array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'page-title',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_page_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

function ubik_frontpage_header_content_nav_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 20,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_nav_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 20,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_nav_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 20,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_nav_spacing',
	'label'       		=> esc_attr__( 'Menu Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 20,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__nav',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_nav',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_nav_items_spacing',
	'label'           => esc_attr__( 'Menu Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav .dropdown.menu a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-header-content__nav .dropdown.menu a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => 'ubik_frontpage_header_content_elements_has_nav',
) );

function ubik_frontpage_header_content_nav_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 21,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_nav_links_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#333333',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__nav a',
			'property' 			=> 'color',
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .dropdown.menu > li.is-dropdown-submenu-parent > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => '$ transparent transparent'
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-right > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent transparent transparent $'
		),
		array(
			'element'  			=> '.frontpage-header-content__nav .is-dropdown-submenu .is-dropdown-submenu-parent.opens-left > a::after',
			'property' 			=> 'border-color',
			'value_pattern' => 'transparent $ transparent transparent'
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_nav_links_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__nav a:hover, .frontpage-header-content__nav a:focus, .frontpage-header-content__nav .menu .is-active > a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_nav_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_nav_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_nav_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 22,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_typography_heading' );

function ubik_frontpage_header_content_nav_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_header_content_nav_font_size_desktop', array(
		'transport' 					=> 'postMessage',
		'default'     		    => '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_nav_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_nav_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_header_content_nav_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_header_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_header_content_nav_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_header_content_nav_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_header_content_nav_font_size_mobile',
      ),
    'priority' 					=> 22,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '200',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_nav_and_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_nav_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_nav_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 22,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_nav_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 22,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__nav',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'nav',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_nav_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

function ubik_frontpage_header_content_search_form_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_search_form_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_search_form_options_heading', array(
		'label'    				=> esc_html__( 'Search Form Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 23,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_search_form_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_search_form_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 23,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_search_form_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 23,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_search_form_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 23,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__search-form',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_search_form',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'slider',
	'settings'    		=> 'ubik_frontpage_header_content_search_form_width',
	'label'       		=> __( 'Form Width (px)', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> 300,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '1000',
    'step'  => '1',
	),
	'priority'    		=> 23,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  	=> '.frontpage-header-content__search-form form',
			'property' 	=> 'width',
			'units'			=> 'px',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_search_form',
) );

function ubik_frontpage_header_content_search_form_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_search_form_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_search_form_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 24,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_search_form',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_search_form_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_border_color',
	'description'				=> esc_attr__( 'Form Border', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_border_focus_color',
	'description'				=> esc_attr__( 'Form Border: Focus', 'ubik' ),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
		array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_background_color',
	'description'				=> esc_attr__( 'Form Background', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#fefefe',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input, .frontpage-header-content__search-form .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_text_color',
	'description'				=> esc_attr__( 'Form Text', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form input, .frontpage-header-content__search-form .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_button_bg_color',
	'description'				=> esc_attr__( 'Search Button Background Color', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_icon_color',
	'description'				=> esc_attr__( 'Search Icon Color', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_search_form_icon_hover_focus_color',
	'description'				=> esc_attr__( 'Search Icon Color: Hover', 'ubik'),
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 24,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__search-form .search-form button:hover, .frontpage-header-content__search-form .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'search-form',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_search_form_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_site_logo_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_logo_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_site_logo_options_heading', array(
		'label'    				=> esc_html__( 'Site Logo Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 25,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_logo_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_site_logo_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 25,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_site_logo_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 25,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

function ubik_frontpage_header_content_site_logo_max_height( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_logo_max_height_desktop', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '50',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_logo_max_height_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '50',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_setting( 'ubik_frontpage_header_content_site_logo_max_height_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '50',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_header_content_site_logo_max_height_desktop', array(
		'label' 						=> esc_html__( 'Logo Max Height (px)', 'ubik' ),
		'section'  					=> 'ubik_frontpage_header_content_section',
		'settings' 					=> array(
			'desktop' 	=> 'ubik_frontpage_header_content_site_logo_max_height_desktop',
			'tablet' 	  => 'ubik_frontpage_header_content_site_logo_max_height_tablet',
			'mobile' 	  => 'ubik_frontpage_header_content_site_logo_max_height_mobile',
		),
		'priority' 					=> 26,
		'input_attrs' 			=> array(
				'min'   	=> '1',
				'max'   	=> '500',
				'step'  	=> '1',
		),
		'active_callback' => 'ubik_frontpage_header_content_elements_has_site_logo',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_site_logo_max_height' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_site_logo_spacing',
	'label'       		=> __( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 26,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__site-logo',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_site_logo',
) );

function ubik_frontpage_header_content_text_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_options_heading', array(
		'label'    				=> esc_html__( 'Custom Text Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 27,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_text_device_visibility',
	'label'       => __( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 27,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_text_horizontal_alignment',
	'label'       => __( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 27,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_text',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'editor',
	'settings'    			=> 'ubik_frontpage_header_content_text_content',
	'label'       			=> esc_attr__( 'Content', 'ubik' ),
	'section'     			=> 'ubik_frontpage_header_content_section',
	'default'     			=> '',
	'priority'    			=> 27,
	'active_callback'  	=> 'ubik_frontpage_header_content_elements_has_text',
));

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_text_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 27,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__text',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_text',
) );

function ubik_frontpage_header_content_text_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 28,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_color',
	'description'				=> 'Text',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#929292',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' 						=> array(
		array(
			'element'  		=> '.frontpage-header-content__text',
			'property' 		=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_links_color',
	'description'				=> 'Links',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#333333',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__text a',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_frontpage_header_content_text_links_hover_color',
	'description'				=> 'Links: Hover',
	'section'           => 'ubik_frontpage_header_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 28,
  'choices'     			=> array(
		'alpha' => false,
	),
	'output' => array(
		array(
			'element'  			=> '.frontpage-header-content__text a:hover, .frontpage-header-content__text a:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_color_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
  ),
) );

function ubik_frontpage_header_content_text_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_frontpage_header_content_text_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_text_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_frontpage_header_content_section',
		'priority' 				    => 29,
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_text',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_typography_heading' );

function ubik_frontpage_header_content_text_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_frontpage_header_content_text_font_size_desktop', array(
		'transport' 					=> 'postMessage',
		'default'     		    => '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_text_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_frontpage_header_content_text_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_frontpage_header_content_text_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_frontpage_header_content_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_frontpage_header_content_text_font_size_desktop',
        'tablet' 		=> 'ubik_frontpage_header_content_text_font_size_tablet',
        'mobile' 		=> 'ubik_frontpage_header_content_text_font_size_mobile',
      ),
    'priority' 					=> 29,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '200',
          'step'  	=> '1',
			),
		'active_callback' 		=> 'ubik_frontpage_header_content_elements_has_text_and_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_text_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_text_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 29,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__text, .frontpage-header-content__text p',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_text_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 29,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__text, .frontpage-header-content__text p',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       		=> 'ubik_frontpage_specific_header',
			'operator'      		=> '==',
			'value'         		=> '1',
		),
    array(
			'setting'       		=> 'ubik_frontpage_header_format',
			'operator'      		=> '==',
			'value'         		=> 'image',
		),
		array(
      'setting'       		=> 'ubik_frontpage_header_content_elements',
      'operator'      		=> 'in',
      'value'         		=> 'text',
    ),
    array(
      'setting'       		=> 'ubik_frontpage_header_content_text_typography_heading',
      'operator'      		=> '==',
      'value'         		=> '1',
    ),
	),
) );

function ubik_frontpage_header_content_links_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_frontpage_header_content_links_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_frontpage_header_content_links_options_heading', array(
		'label'    				=> esc_html__( 'Action Links Options', 'ubik' ),
		'section'  				=> 'ubik_frontpage_header_content_section',
		'priority' 				=> 30,
		'active_callback' => 'ubik_frontpage_header_content_elements_has_links',
	) ) );

}
add_action( 'customize_register', 'ubik_frontpage_header_content_links_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_frontpage_header_content_links_device_visibility',
	'label'       => esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'all-devices',
	'priority'    => 31,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet'					  => esc_html__( 'Show on tablet Only', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_links',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'ubik_frontpage_header_content_links_horizontal_alignment',
	'label'       => esc_html__( 'Horizontal Alignment', 'ubik' ),
	'section'     => 'ubik_frontpage_header_content_section',
	'default'     => 'center',
	'priority'    => 31,
	'choices'     => array(
		'left'		=> esc_html__( 'Left (Top)', 'ubik' ),
    'center' 	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right (Bottom)', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_links',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        			=> 'repeater',
	'settings'    			=> 'ubik_frontpage_header_content_links_custom_repeater',
	'label'       			=> esc_attr__( 'Links', 'ubik' ),
	'section'     			=> 'ubik_frontpage_header_content_section',
	'priority'    			=> 31,
	'row_label' 				=> array(
		'type'  => 'field',
		'value' => esc_attr__('your custom value', 'ubik' ),
		'field' => 'link_custom_text',
	),
	'button_label' 			=> esc_attr__('"Add new link"', 'ubik' ),
	'default'      			=> array(
		array(
			'link_custom_text' 											=> esc_attr__( 'Kirki Site', 'ubik' ),
			'link_custom_url'  											=> 'https://aristath.github.io/kirki/',
			'link_custom_icon'											=> '',
			'link_custom_borders_style'							=> 'solid',
			'link_custom_borders_width'							=> '2',
			'link_custom_borders_radius'						=> '5',
			'link_custom_vertical_padding' 					=> '5',
			'link_custom_horizontal_padding' 				=> '15',
			'link_custom_font_size'									=> '16',
			'link_custom_text_color'								=> '#929292',
			'link_custom_text_hover_color'					=> '#929292',
			'link_custom_border_color'							=> '#e9e9e9',
			'link_custom_border_hover_color'				=> '#929292',
			'link_custom_background_color'					=> '#ffffff',
			'link_custom_background_hover_color'		=> '#ffffff',
		),
	),
	'fields' => array(
		'link_custom_text' => array(
			'type'        			=> 'text',
			'label'       			=> esc_attr__( 'Text', 'ubik' ),
			'description' 			=> esc_attr__( 'This will be the label for your link', 'ubik' ),
			'default'     			=> '',
		),
		'link_custom_url' => array(
			'type'        			=> 'text',
			'label'       			=> esc_attr__( 'URL', 'ubik' ),
			'description' 			=> esc_attr__( 'This will be the link URL', 'ubik' ),
			'default'     			=> '',
			'sanitize_callback' => 'esc_url_raw',
		),
		'link_custom_icon' => array(
			'type'        			=> 'text',
			'label'       			=> esc_attr__( 'Icon', 'ubik' ),
			'description' 			=> sprintf( esc_html__( 'Enter the full icon class: %1$sfontawsome%2$s', 'ubik' ), '<a href="https://fontawesome.com" target="_blank">', '</a>' ),
			'default'     			=> '',
		),
		'link_custom_borders_style' => array(
			'type' 							=> 'select',
			'label' 						=> esc_attr__( 'Borders Style', 'ubik'),
			'default'     			=> 'solid',
			'choices'     			=> array(
				'solid' 	=> esc_attr__( 'Solid', 'ubik' ),
				'dashed' 	=> esc_attr__( 'Dashed', 'ubik' ),
				'dotted' 	=> esc_attr__( 'Dotted', 'ubik' ),
				'double' 	=> esc_attr__( 'Double', 'ubik' ),
				'none' 		=> esc_attr__( 'None', 'ubik' ),
			),
		),
		'link_custom_borders_width' => array(
			'type'            => 'text',
			'label'           => esc_attr__( 'Borders Width (px)', 'ubik' ),
			'default'         => '2',
			'sanitize_callback' => 'ubik_sanitize_number',
		),
		'link_custom_borders_radius' => array(
			'type'            => 'text',
			'label'           => esc_attr__( 'Borders Radius (px)', 'ubik' ),
			'default'         => '5',
			'sanitize_callback' => 'ubik_sanitize_number',
		),
		'link_custom_vertical_padding' => array(
			'type'            => 'text',
			'label'           => esc_attr__( 'Vertical Padding (px)', 'ubik' ),
			'default'         => '5',
			'sanitize_callback' => 'ubik_sanitize_number',
		),
		'link_custom_horizontal_padding' => array(
			'type'            => 'text',
			'label'           => esc_attr__( 'Horizontal Padding (px)', 'ubik' ),
			'default'         => '15',
		),
		'link_custom_font_size' => array(
			'type'            => 'text',
			'label'           => esc_attr__( 'Text Font Size (px)', 'ubik' ),
			'default'         => '16',
			'sanitize_callback' => 'ubik_sanitize_number',
		),
		'link_custom_text_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Text Color', 'ubik' ),
			'default'     			=> '#929292',
		),
		'link_custom_text_hover_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Text:hover Color', 'ubik' ),
			'default'     			=> '#929292',
		),
		'link_custom_border_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Border Color', 'ubik' ),
			'default'     			=> '#e9e9e9',
		),
		'link_custom_border_hover_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Border:hover Color', 'ubik' ),
			'default'     			=> '#929292',
		),
		'link_custom_background_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Background Color', 'ubik' ),
			'default'     			=> '#ffffff',
		),
		'link_custom_background_hover_color' => array(
			'type'        			=> 'color',
			'label'       			=> esc_attr__( 'Background:hover Color', 'ubik' ),
			'default'     			=> '#ffffff',
		),
	),
	'active_callback' => 'ubik_frontpage_header_content_elements_has_links',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_frontpage_header_content_links_direction',
  'label'	   		    => esc_html__( 'Links Direction', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 'row',
	'priority'        => 31,
	'choices'         => array(
		'column' 		=> esc_html__( 'Column', 'ubik' ),
    'row'				=> esc_html__( 'Row', 'ubik' ),
  ),
  'active_callback' => 'ubik_frontpage_header_content_elements_has_links',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_frontpage_header_content_links_spacing',
	'label'       		=> esc_attr__( 'Links Spacing', 'ubik' ),
	'section'     		=> 'ubik_frontpage_header_content_section',
	'default'     		=> array(
		'top'    => '5px',
		'bottom' => '5px',
		'left'   => '5px',
		'right'  => '5px',
	),
	'priority'    		=> 31,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.frontpage-header-content__links',
      'property' => 'margin',
    ),
	),
	'active_callback'  => 'ubik_frontpage_header_content_elements_has_links',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_links_items_horizontal_spacing',
	'label'           => esc_attr__( 'Links Items Spacing (Left/Right)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 5,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 31,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__links a',
			'property' 				=> 'margin-left',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-header-content__links a',
			'property' 				=> 'margin-right',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
	'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'links',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_links_direction',
      'operator'      => '==',
      'value'         => 'row',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_frontpage_header_content_links_items_vertical_spacing',
	'label'           => esc_attr__( 'Links Items Spacing (Top/bottom)', 'ubik' ),
	'section'         => 'ubik_frontpage_header_content_section',
	'default'         => 5,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '100',
    'step'  => '1',
	),
	'priority'    		=> 31,
	'output' => array(
		array(
			'element'  				=> '.frontpage-header-content__links a',
			'property' 				=> 'margin-top',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.frontpage-header-content__links a',
			'property' 				=> 'margin-bottom',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_frontpage_specific_header',
			'operator'      => '==',
			'value'         => '1',
		),
		array(
			'setting'       => 'ubik_frontpage_header_format',
			'operator'      => '==',
			'value'         => 'image',
		),
		array(
      'setting'       => 'ubik_frontpage_header_content_elements',
      'operator'      => 'in',
      'value'         => 'links',
    ),
    array(
      'setting'       => 'ubik_frontpage_header_content_links_direction',
      'operator'      => '==',
      'value'         => 'column',
    ),
	),
) );


/*-------------------------------------------------------------------------------*/
/* [ Active callbacks ]
/*-------------------------------------------------------------------------------*/

/**
 * [ Table of contents ]
 * 
 * ubik_specific_frontpage_header_is_activated()
 * ubik_frontpage_header_format_is_image()
 * ubik_frontpage_menubar_heading_is_general()
 * ubik_frontpage_menubar_heading_is_general_and_borders_on
 * ubik_frontpage_menubar_heading_is_general_and_colors_on()
 * ubik_frontpage_menubar_heading_is_elements()
 * ubik_frontpage_header_content_elements_has_site_tagline()
 * ubik_frontpage_header_content_elements_has_site_tagline_and_typo_on()
 * ubik_frontpage_header_content_elements_has_page_title()
 * ubik_frontpage_header_content_elements_has_page_title_and_typo_on()
 * ubik_frontpage_header_content_elements_has_nav()
 * ubik_frontpage_header_content_elements_has_nav_and_typo_on()
 * ubik_frontpage_header_content_elements_has_search_form()
 * ubik_frontpage_header_content_elements_has_site_logo()
 * ubik_frontpage_header_content_elements_has_text()
 * ubik_frontpage_header_content_elements_has_text_and_typo_on()
 * ubik_frontpage_header_content_elements_has_links
 * 
 */

function ubik_specific_frontpage_header_is_activated() {
	return ( '1' == get_theme_mod( 'ubik_frontpage_specific_header', '0' ) && 'no-header' != get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) ? true : false;
}

function ubik_frontpage_header_format_is_image() {
	return ( ubik_specific_frontpage_header_is_activated() && 'image' == get_theme_mod( 'ubik_frontpage_header_format', 'image' ) ) ? true : false;
}

function ubik_frontpage_menubar_heading_is_general() {
	return ( ubik_specific_frontpage_header_is_activated() && 'general' == get_theme_mod( 'ubik_frontpage_menubar_heading_tabs', 'general' ) ) ? true : false;
}

// function ubik_frontpage_menubar_heading_is_general_and_borders_on() {
// 	return ( ubik_specific_frontpage_header_is_activated() && 'general' == get_theme_mod( 'ubik_frontpage_menubar_heading_tabs', 'general' ) && '1' == get_theme_mod('ubik_frontpage_menubar_borders_heading', '0') ) ? true : false;
// }

function ubik_frontpage_menubar_heading_is_general_and_colors_on() {
	return ( ubik_specific_frontpage_header_is_activated() && 'general' == get_theme_mod( 'ubik_frontpage_menubar_heading_tabs', 'general' ) && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) ? true : false;
}

function ubik_frontpage_menubar_heading_is_elements() {
	return ( ubik_specific_frontpage_header_is_activated() && 'elements' == get_theme_mod( 'ubik_frontpage_menubar_heading_tabs', 'general' ) ) ? true : false;
}

function ubik_frontpage_header_content_elements_has_site_tagline() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'tagline', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_site_tagline_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'tagline', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_site_tagline_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_page_title() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'page-title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_page_title_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'page-title', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_page_title_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_nav() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'nav', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_nav_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'nav', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_nav_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_search_form() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'search-form', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_site_logo() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'site-logo', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_text() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'text', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_text_and_typo_on() {
	$array = array( 'site-title', 'tagline', 'page-title', 'nav','search-form', 'site-logo', 'text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'text', $elements ) && '1' == get_theme_mod('ubik_frontpage_header_content_text_typography_heading', '0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_frontpage_header_content_elements_has_links() {
	$array = array( 'site-logo', 'tagline', 'page-title', 'breadcrumbs', 'nav','search-form','text','links' );
	$elements = get_theme_mod( 'ubik_frontpage_header_content_elements', $array );
	if ( ubik_frontpage_header_format_is_image() && in_array( 'links', $elements ) ) {
		return true;
	} else {
		return false;
	}
}
