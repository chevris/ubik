<?php
/**
 * General Customizer Options
 *
 * @package Ubik WordPress theme
 */

/**
 * [ Table of contents ]
 * 
 * Panel : ubik_general_panel
 * 
 * 	Section : ubik_layout_section
 * 
 * 		ubik_container_width
 * 
 * 	Section : colors
 * 
 * 		ubik_colorscheme
 * 
 * 		[if : ubik_colorscheme == custom]
 * 		ubik_site_primary_color
 * 		ubik_site_bg_color
 * 		ubik_content_wrap_color
 * 		ubik_site_text_color
 * 		ubik_site_headings_color
 * 		ubik_site_links_color
 * 		ubik_site_borders_color
 * 
 * 		ubik_site_bg_img
 * 		ubik_site_bg_img_position
 *    ubik_site_bg_img_attachment
 *    ubik_site_bg_img_repeat
 *    ubik_site_bg_img_size
 * 
 * 	Section : ubik_typography_section
 * 
 * 		Sub-section : ubik_typography_body_section
 * 			ubik_typography_body_general
 * 
 * 		Sub-section : ubik_typography_headings_section
 * 			ubik_typography_headings_font_family
 * 			ubik_typography_headings_h1_options_heading
 * 			ubik_typography_headings_h1_general
 * 			ubik_typography_headings_h1_font_size_desktop
 * 			ubik_typography_headings_h2_options_heading
 * 			ubik_typography_headings_h2_general
 * 			ubik_typography_headings_h2_font_size_desktop
 * 			ubik_typography_headings_h3_options_heading
 * 			ubik_typography_headings_h3_general
 * 			ubik_typography_headings_h3_font_size_desktop
 * 			ubik_typography_headings_h4_options_heading
 * 			ubik_typography_headings_h4_general
 * 			ubik_typography_headings_h4_font_size_desktop
 * 			ubik_typography_headings_h5_options_heading
 * 			ubik_typography_headings_h5_general
 * 			ubik_typography_headings_h5_font_size_desktop
 * 			ubik_typography_headings_h6_options_heading
 * 			ubik_typography_headings_h6_general
 * 			ubik_typography_headings_h6_font_size_desktop
 * 
 *  Section : ubik_general_blog_section
 * 
 *    ubik_blog_style
 * 
 * 			[if : ubik_blog_style == classic]
 * 			Sub-section : ubik_classic_entry_general_section
 * 
 * 				ubik_classic_entry_posts_spacing
 * 				ubik_classic_entry_color_heading
 * 					[if : ubik_classic_entry_color_heading == true]
 * 					ubik_classic_entry_border_color
 * 
 *      [if : ubik_blog_style == classic]
 *      Sub-section : ubik_classic_entry_content_section
 * 
 *        ubik_classic_entry_elements
 * 
 * 				[if ubik_blog_style == classic && featured_image in ubik_classic_entry_elements]
 * 				ubik_classic_entry_featured_image_options_heading
 * 				ubik_classic_entry_featured_image_max_height
 * 				ubik_classic_entry_featured_image_spacing
 * 				ubik_classic_entry_featured_image_zoom
 * 				ubik_classic_entry_featured_image_overlay
 * 				[if ubik_blog_style == classic && title in ubik_classic_entry_elements]
 * 				ubik_classic_entry_title_options_heading
 * 				ubik_classic_entry_title_spacing
 * 				ubik_classic_entry_title_color_heading
 * 					[if : ubik_classic_entry_title_color_heading == true]
 * 					ubik_classic_entry_title_color
 * 					ubik_classic_entry_title_hover_color
 * 				ubik_classic_entry_title_typography_heading
 * 					[if : ubik_classic_entry_title_typography_heading = true]
 * 					ubik_classic_entry_title_typography_font_size_desktop
 * 					ubik_classic_entry_title_typography_letter_spacing
 * 					ubik_classic_entry_title_typography_text_transform
 * 					ubik_classic_entry_title_typography_text_align
 *        [if ubik_blog_style == classic && meta in ubik_classic_entry_elements]
 *        ubik_classic_entry_meta_options_heading
 *        ubik_classic_entry_meta_elements
 * 				ubik_classic_entry_meta_hide_icon
 * 				ubik_classic_entry_meta_menu_position
 * 				ubik_classic_entry_meta_menu_spacing
 * 				ubik_classic_entry_meta_color_heading
 * 					[if : ubik_classic_entry_meta_color_heading == true]
 * 					ubik_classic_entry_meta_items_color
 * 					ubik_classic_entry_meta_links_hover_color
 * 				ubik_classic_entry_meta_typography_heading
 * 					[if : ubik_classic_entry_meta_typography_heading = true]
 * 					ubik_classic_entry_meta_typography_font_size_desktop
 * 					ubik_classic_entry_meta_typography_letter_spacing
 * 					ubik_classic_entry_meta_typography_text_transform
 *        [if ubik_blog_style == classic && content in ubik_classic_entry_elements]
 *        ubik_classic_entry_content_options_heading
 *        ubik_classic_entry_excerpt_length
 *        ubik_classic_entry_full_content
 * 				[if ubik_blog_style == classic && read_more in ubik_classic_entry_elements]
 * 				ubik_classic_entry_read_more_options_heading
 * 				ubik_classic_entry_read_more_text
 * 				ubik_classic_entry_read_more_position
 * 				ubik_classic_entry_read_more_font_size
 * 				ubik_classic_entry_read_more_margin
 * 				ubik_classic_entry_read_more_padding
 * 				ubik_classic_entry_read_more_border_width
 * 				ubik_classic_entry_read_more_border_radius
 * 				ubik_classic_entry_read_more_color_heading
 * 					[if : ubik_classic_entry_read_more_color_heading == true]
 * 					ubik_classic_entry_read_more_border_color
 * 					ubik_classic_entry_read_more_border_hover_color
 * 					ubik_classic_entry_read_more_bg_color
 * 					ubik_classic_entry_read_more_bg_hover_color
 * 					ubik_classic_entry_read_more_text_color
 * 					ubik_classic_entry_read_more_text_hover_color
 * 
 *      [if : ubik_blog_style == card]
 *      Sub-section : ubik_card_entry_general_section
 * 
 *        ubik_card_entry_columns_desktop
 *        ubik_card_entry_columns_tablet
 *        ubik_card_entry_columns_mobile
 *        ubik_card_entry_equal_height
 * 				ubik_card_entry_border_width
 * 				ubik_card_entry_border_radius
 * 				ubik_card_entry_color_heading
 * 					[if : ubik_card_entry_color_heading == true]
 * 					ubik_card_entry_border_color
 * 
 *      [if : ubik_blog_style == card]
 *      Sub-section : ubik_card_entry_content_section
 * 
 *        ubik_card_entry_elements
 * 				[if ubik_blog_style == card && featured_image in ubik_card_entry_elements]
 * 				ubik_card_entry_featured_image_options_heading
 * 				ubik_card_entry_featured_image_spacing
 * 				ubik_card_entry_featured_image_zoom
 * 				ubik_card_entry_featured_image_overlay
 * 				[if ubik_blog_style == card && title in ubik_card_entry_elements]
 * 				ubik_card_entry_title_options_heading
 * 				ubik_card_entry_title_spacing
 * 				ubik_card_entry_title_color_heading
 * 					[if : ubik_card_entry_title_color_heading == true]
 * 					ubik_card_entry_title_bg_color
 * 					ubik_card_entry_title_color
 * 					ubik_card_entry_title_hover_color
 * 				ubik_card_entry_title_typography_heading
 * 					[if : ubik_card_entry_title_typography_heading = true]
 * 					ubik_card_entry_title_typography_font_size_desktop
 * 					ubik_card_entry_title_typography_letter_spacing
 * 					ubik_card_entry_title_typography_text_transform
 * 					ubik_card_entry_title_typography_text_align
 *        [if ubik_blog_style == card && meta in ubik_card_entry_elements]
 *        ubik_card_entry_meta_options_heading
 * 				ubik_card_entry_meta_device_visibility
 *        ubik_card_entry_meta_elements
 * 				ubik_card_entry_meta_hide_icon
 * 				ubik_card_entry_meta_menu_position
 * 				ubik_card_entry_meta_menu_spacing
 * 				ubik_card_entry_meta_color_heading
 * 					[if : ubik_card_entry_meta_color_heading == true]
 * 					ubik_card_entry_meta_bg_color
 * 					ubik_card_entry_meta_items_color
 * 					ubik_card_entry_meta_links_hover_color
 * 				ubik_card_entry_meta_typography_heading
 * 					[if : ubik_card_entry_meta_typography_heading = true]
 * 					ubik_card_entry_meta_typography_font_size_desktop
 * 					ubik_card_entry_meta_typography_letter_spacing
 * 					ubik_card_entry_meta_typography_text_transform
 *        [if ubik_blog_style == card && content in ubik_card_entry_elements]
 *        ubik_card_entry_content_options_heading
 * 				ubik_card_entry_content_device_visibility
 *        ubik_card_entry_excerpt_length
 * 				ubik_card_entry_content_spacing
 * 				ubik_card_entry_content_color_heading
 * 					[if : ubik_card_entry_content_color_heading == true]
 * 					ubik_card_entry_content_bg_color
 * 					ubik_card_entry_content_text_color
 * 				[if ubik_blog_style == card && read_more in ubik_card_entry_elements]
 * 				ubik_card_entry_read_more_options_heading
 * 				ubik_card_entry_read_more_device_visibility
 * 				ubik_card_entry_read_more_text
 * 				ubik_card_entry_read_more_position
 * 				ubik_card_entry_read_more_font_size
 * 				ubik_card_entry_read_more_spacing
 * 				ubik_card_entry_read_more_padding
 * 				ubik_card_entry_read_more_border_width
 * 				ubik_card_entry_read_more_border_radius
 * 				ubik_card_entry_read_more_color_heading
 * 					[if : ubik_card_entry_read_more_color_heading == true]
 * 					ubik_card_entry_read_more_bg_color
 * 					ubik_card_entry_read_more_border_color
 * 					ubik_card_entry_read_more_border_hover_color
 * 					ubik_card_entry_read_more_link_bg_color
 * 					ubik_card_entry_read_more_link_bg_hover_color
 * 					ubik_card_entry_read_more_text_color
 * 					ubik_card_entry_read_more_text_hover_color
 * 
 *      [if : ubik_blog_style == h-card]
 *      Sub-section : ubik_h_card_entry_general_section
 * 
 *        ubik_h_card_entry_columns_desktop
 *        ubik_h_card_entry_columns_tablet
 *        ubik_h_card_entry_columns_mobile
 *        ubik_h_card_entry_height_desktop
 * 				ubik_h_card_entry_height_tablet
 * 				ubik_h_card_entry_height_mobile
 * 				ubik_h_card_entry_custom_height_desktop
 * 				ubik_h_card_entry_custom_height_tablet
 * 				ubik_h_card_entry_custom_height_mobile
 * 				ubik_h_card_entry_image_width
 * 				ubik_h_card_entry_image_position
 * 				ubik_h_card_entry_border_width
 * 				ubik_h_card_entry_border_radius
 * 				ubik_h_card_entry_margin
 * 				ubik_h_card_entry_color_heading
 * 					[if : ubik_h_card_entry_color_heading == true]
 * 					ubik_h_card_entry_border_color
 * 
 *      [if : ubik_blog_style == h-card]
 *      Sub-section : ubik_h_card_entry_content_section
 * 
 *        ubik_h_card_entry_elements
 * 				[if ubik_blog_style == h-card && title in ubik_h_card_entry_elements]
 * 				ubik_h_card_entry_title_options_heading
 * 				ubik_h_card_entry_title_device_visibility
 * 				ubik_h_card_entry_title_spacing
 * 				ubik_h_card_entry_title_color_heading
 * 					[if : ubik_h_card_entry_title_color_heading == true]
 * 					ubik_h_card_entry_title_bg_color
 * 					ubik_h_card_entry_title_color
 * 					ubik_h_card_entry_title_hover_color
 * 				ubik_h_card_entry_title_typography_heading
 * 					[if : ubik_h_card_entry_title_typography_heading = true]
 * 					ubik_h_card_entry_title_typography_font_size_desktop
 * 					ubik_h_card_entry_title_typography_letter_spacing
 * 					ubik_h_card_entry_title_typography_text_transform
 * 					ubik_h_card_entry_title_typography_text_align
 *        [if ubik_blog_style == h-card && meta in ubik_h_card_entry_elements]
 *        ubik_h_card_entry_meta_options_heading
 * 				ubik_h_card_entry_meta_device_visibility
 *        ubik_h_card_entry_meta_elements
 * 				ubik_h_card_entry_meta_hide_icon
 * 				ubik_h_card_entry_meta_menu_position
 * 				ubik_h_card_entry_meta_menu_direction
 * 				ubik_h_card_entry_meta_menu_spacing
 * 					[if : ubik_h_card_entry_meta_menu_direction == vertical]
 * 					ubik_h_card_entry_meta_menu_items_spacing
 * 				ubik_h_card_entry_meta_color_heading
 * 					[if : ubik_h_card_entry_meta_color_heading == true]
 * 					ubik_h_card_entry_meta_bg_color
 * 					ubik_h_card_entry_meta_items_color
 * 					ubik_h_card_entry_meta_links_hover_color
 * 				ubik_h_card_entry_meta_typography_heading
 * 					[if : ubik_h_card_entry_meta_typography_heading = true]
 * 					ubik_h_card_entry_meta_typography_font_size_desktop
 * 					ubik_h_card_entry_meta_typography_letter_spacing
 * 					ubik_h_card_entry_meta_typography_text_transform
 *        ubik_h_card_entry_content_options_heading
 * 				ubik_h_card_entry_content_device_visibility
 *        ubik_h_card_entry_excerpt_length
 * 				ubik_h_card_entry_content_spacing
 * 				ubik_h_card_entry_content_color_heading
 * 					[if : ubik_h_card_entry_content_color_heading == true]
 * 					ubik_h_card_entry_content_bg_color
 * 					ubik_h_card_entry_content_text_color
 * 				ubik_h_card_entry_read_more_options_heading
 * 				ubik_h_card_entry_read_more_device_visibility
 * 				ubik_h_card_entry_read_more_text
 * 				ubik_h_card_entry_read_more_position
 * 				ubik_h_card_entry_read_more_font_size
 * 				ubik_h_card_entry_read_more_spacing
 * 				ubik_h_card_entry_read_more_link_padding
 * 				ubik_h_card_entry_read_more_border_width
 * 				ubik_h_card_entry_read_more_border_radius
 * 				ubik_h_card_entry_read_more_color_heading
 * 					[if : ubik_h_card_entry_read_more_color_heading == true]
 * 					ubik_h_card_entry_read_more_bg_color
 * 					ubik_h_card_entry_read_more_border_color
 * 					ubik_h_card_entry_read_more_border_hover_color
 * 					ubik_h_card_entry_read_more_link_bg_color
 * 					ubik_h_card_entry_read_more_link_bg_hover_color
 * 					ubik_h_card_entry_read_more_text_color
 * 					ubik_h_card_entry_read_more_text_hover_color
 * 
 *      [if : ubik_blog_style == h-card]
 *      Sub-section : ubik_h_card_entry_image_section
 * 
 * 				ubik_h_card_entry_image_zoom
 * 				ubik_h_card_entry_image_overlay
 * 				ubik_h_card_entry_image_title_display
 * 					[if : ubik_h_card_entry_image_title_display == true]
 * 					ubik_h_card_entry_image_title_options_heading
 * 					ubik_h_card_entry_image_title_device_visibility
 * 					ubik_h_card_entry_image_title_position
 * 					ubik_h_card_entry_image_title_padding
 * 					ubik_h_card_entry_image_title_color_heading
 * 						[if : ubik_h_card_entry_image_title_color_heading == true]
 * 						ubik_h_card_entry_image_title_bg_color
 * 						ubik_h_card_entry_image_title_color
 * 						ubik_h_card_entry_image_title_hover_color
 * 					ubik_h_card_entry_image_title_typography_heading
 * 						[if : ubik_h_card_entry_image_title_typography_heading = true]
 * 						ubik_h_card_entry_image_title_typography_font_size_desktop
 * 						ubik_h_card_entry_image_title_typography_letter_spacing
 * 						ubik_h_card_entry_image_title_typography_text_transform
 * 						ubik_h_card_entry_image_title_typography_text_align
 * 
 *  Section : ubik_single_section
 * 
 * 		ubik_single_elements
 * 
 * 			[if featured_image in ubik_single_elements]
 * 			ubik_single_featured_image_options_heading
 * 			ubik_single_featured_image_height
 * 			ubik_single_featured_image_spacing
 * 
 * 			[if title in ubik_single_elements]
 * 			ubik_single_title_options_heading
 * 			ubik_single_title_tag
 * 			ubik_single_title_spacing
 * 			ubik_single_title_color_heading
 * 				[if : ubik_single_title_color_heading == true]
 * 				ubik_single_title_color
 * 			ubik_single_title_typography_heading
 * 				[if : ubik_single_title_typography_heading = true]
 * 				ubik_single_title_typography_font_size_desktop
 * 				ubik_single_title_typography_letter_spacing
 * 				ubik_single_title_typography_text_transform
 * 				ubik_single_title_typography_text_align
 * 
 *      [if meta in ubik_single_elements]
 *      ubik_single_meta_options_heading
 *      ubik_single_meta_elements
 * 			ubik_single_meta_hide_icon
 * 			ubik_single_meta_menu_position
 * 			ubik_single_meta_menu_spacing
 * 			ubik_single_meta_color_heading
 * 				[if : ubik_single_meta_color_heading == true]
 * 				ubik_single_meta_items_color
 * 				ubik_single_meta_links_hover_color
 * 			ubik_single_meta_typography_heading
 * 				[if : ubik_single_meta_typography_heading = true]
 * 				ubik_single_meta_typography_font_size_desktop
 * 				ubik_single_meta_typography_letter_spacing
 * 				ubik_single_meta_typography_text_transform
 * 
 *      [if tags in ubik_single_elements]
 *      ubik_single_tags_options_heading
 * 			ubik_single_tags_spacing
 * 			ubik_single_tags_color_heading
 * 				[if : ubik_single_tags_color_heading == true]
 * 				ubik_single_tags_text_color
 * 				ubik_single_tags_links_color
 * 				ubik_single_tags_links_hover_color
 * 			ubik_classic_single_tags_typography_heading
 * 				[if : ubik_classic_single_tags_typography_heading = true]
 * 				ubik_single_tags_typography_font_size
 * 				ubik_single_tags_typography_letter_spacing
 * 				ubik_single_tags_typography_text_transform
 * 
 * 			[if single_comments in ubik_single_elements]
 * 			ubik_single_comments_options_heading
 * 			ubik_single_comments_spacing
 * 
 * 			[if post_nav in ubik_single_elements]
 * 			ubik_single_navigation_options_heading
 * 			ubik_single_navigation_spacing
 * 
 * 	Section : ubik_general_scroll_top_section
 * 		
 * 		ubik_scroll_top_deactivate
 * 		ubik_scroll_top_icon
 * 
 * 	Section : ubik_general_search_form_section
 * 
 * 		ubik_general_search_form_height
 * 		ubik_general_search_form_font_size
 * 		ubik_general_search_form_padding
 * 		ubik_general_search_form_border_width_radius
 * 		ubik_general_search_form_color_heading
 * 		ubik_general_search_form_border_color
 * 		ubik_general_search_form_border_focus_color
 * 		ubik_general_search_form_bg_color
 * 		ubik_general_search_form_text_color
 * 		ubik_general_search_form_button_bg_color
 * 		ubik_general_search_form_icon_color
 * 		ubik_general_search_form_icon_hover_focus_color
 *  
 * 
 * Active callbacks
 */

/*-------------------------------------------------------------------------------*/
/* [ General fields ]
/*-------------------------------------------------------------------------------*/

Kirki::add_panel( 'ubik_general_panel', array(
  'title'       => 'General Options',
  'priority'    => 150,
));

/** Layout section */

Kirki::add_section( 'ubik_layout_section', array(
  'title'       => 'Layout',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_container_width',
	'description'     => esc_attr__( 'Containers Max Width (px)', 'ubik' ),
	'section'         => 'ubik_layout_section',
	'default'         => '1200',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '3000',
		'step'  => '1',
	),
	'priority'    		=> 10,
	'output' => array(
		array(
			'element'  				=> '.grid-container',
			'property' 				=> 'max-width',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
) );

/** Colors section */

Kirki::add_field( 'ubik_config', array(
	'type'        => 'radio',
	'settings'    => 'ubik_colorscheme',
	'label'       => esc_html__( 'Global Colors Options', 'ubik' ),
	'section'     => 'colors',
	'default'     => 'light',
	'priority'    => 5,
	'choices'     => array(
		'light'  => esc_html__( 'Light', 'ubik' ),
		'custom' => esc_html__( 'Custom', 'ubik' ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_primary_color',
	'label'							=> 'Site Primary Color',
	'section'           => 'colors',
  'default'           => '#1779ba',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.colors-custom a:hover, .colors-custom a:focus, .colors-custom .menu .is-active > a, .colors-custom button:hover, .colors-custom button:focus',
			'property' => 'color',
		),
		array(
			'element'  => '.colors-custom .entry-readmore a:hover, .colors-custom .entry-readmore a:focus',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_bg_color',
	'label'							=> 'Site Background Color',
	'section'           => 'colors',
  'default'           => '#ffffff',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => 'body.colors-custom',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_content_wrap_color',
	'label'							=> 'Main Content Background Color',
	'section'           => 'colors',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '#content-wrap',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_text_color',
	'label'							=> 'Site Text Color',
	'section'           => 'colors',
  'default'           => '#929292',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => 'body.colors-custom',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_headings_color',
	'label'							=> 'Site Headings Color',
	'section'           => 'colors',
  'default'           => '#333',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.colors-custom h1, .colors-custom h2, .colors-custom h3, .colors-custom h4, .colors-custom h5, .colors-custom h6',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_links_color',
	'label'							=> 'Site Links Color',
	'section'           => 'colors',
  'default'           => '#333',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.colors-custom a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_site_borders_color',
	'label'							=> 'Site Borders Color',
	'section'           => 'colors',
  'default'           => '#e9e9e9',
  'priority' 				  => 10,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.colors-custom .image-header, .colors-custom .frontpage-image-header',
			'property' => 'border-color',
		),
		array(
			'element'  => '.colors-custom .menu-bar, .colors-custom .frontpage-menu-bar',
			'property' => 'border-color',
		),
		array(
			'element'  => '.has-classic-vertical-bar.colors-custom .classic-vertical-bar:not(.right-bar):not(.sticky-container), .has-classic-vertical-bar.colors-custom .classic-vertical-bar:not(.right-bar) .classic-vertical-bar-inner.sticky, .has-classic-vertical-bar.colors-custom .classic-vertical-bar.right-bar:not(.sticky-container), .has-classic-vertical-bar.colors-custom .classic-vertical-bar.right-bar .classic-vertical-bar-inner.sticky',
			'property' => 'border-color',
		),
		array(
			'element'  => '.has-classic-vertical-bar.colors-custom .frontpage-classic-vertical-bar:not(.right-bar):not(.sticky-container), .has-classic-vertical-bar.colors-custom .frontpage-classic-vertical-bar:not(.right-bar) .frontpage-classic-vertical-bar-inner.sticky, .has-classic-vertical-bar.colors-custom .frontpage-classic-vertical-bar.right-bar:not(.sticky-container), .has-classic-vertical-bar.colors-custom .frontpage-classic-vertical-bar.right-bar .frontpage-classic-vertical-bar-inner.sticky',
			'property' => 'border-color',
		),
		array(
			'element'  => '.colors-custom .sidebar-area, .colors-custom .frontpage-sidebar-area',
			'property' => 'border-color',
		),
		array(
			'element'  => '.colors-custom .widget, .colors-custom .widget ul li',
			'property' => 'border-color',
		),
		array(
			'element'  => '.colors-custom .is-dropdown-submenu, .colors-custom .is-dropdown-submenu',
			'property' => 'border-color',
		),
		array(
			'element'  => '.colors-custom .classic-entry',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_colorscheme',
      'operator'      => '==',
      'value'         => 'custom',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'background',
	'settings'    => 'ubik_site_bg_img',
	'label'       => esc_attr__( 'Site Background Image', 'ubik' ),
	'section'     => 'colors',
	'default'     => array(
		'background-image'		 => '',
		'background-repeat'		 => 'repeat',
		'background-position'	 => 'center center',
		'background-size'		 => 'cover',
		'background-attachment'	 => 'scroll',
	),
	'priority'    => 10,
	'output'	 		=> array(
		array(
			'element' 	=> array(
				'body',
			),
		),
	),
	'transport'   => 'auto'
) );


Kirki::add_section( 'ubik_typography_section', array(
  'title'       => 'Typography',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'custom',
	'settings'    => 'ubik_typography_info',
	'section'     => 'ubik_typography_section',
	'default'     => '<div style="color: #333;text-align: center;padding: 20px;">' . esc_html__( 'Set global typography settings here', 'ubik' ) . '</div>',
	'priority'    => 10,
) );

Kirki::add_section( 'ubik_typography_body_section', array(
  'title'       => 'Body',
  'section'     => 'ubik_typography_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_body_general',
	'label'       => esc_attr__( 'Global Typography Options', 'ubik' ),
	'section'     => 'ubik_typography_body_section',
	'default'     => array(
		'font-family'    => 'Open Sans',
		'variant'        => '300',
		'font-size'      => '16px',
		'line-height'    => '1.6',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'body, p',
		),
	),
) );

Kirki::add_section( 'ubik_typography_headings_section', array(
  'title'       => 'Headings',
  'section'     => 'ubik_typography_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_font_family',
	'label'       => esc_attr__( 'Headings Font Family', 'ubik' ),
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		'font-family'    => 'inherit',
		'variant'        => '',
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h1, h2, h3, h4, h5, h6',
		),
	),
) );

function ubik_typography_headings_h1_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h1_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h1_options_heading', array(
		'label'    				=> esc_html__( 'H1', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 11,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h1_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h1_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    	=> '1.4',
		'letter-spacing' 	=> '0',
		'text-transform' 	=> 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 11,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h1',
		),
	),
) );

function ubik_typography_headings_h1_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h1_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '48',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h1_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '48',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h1_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '24',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h1_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h1_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h1_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h1_font_size_mobile',
      ),
    'priority' 					=> 12,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h1_font_size' );

function ubik_typography_headings_h2_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h2_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h2_options_heading', array(
		'label'    				=> esc_html__( 'H2', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 13,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h2_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h2_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 13,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h2',
		),
	),
) );

function ubik_typography_headings_h2_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h2_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '40',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h2_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '40',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h2_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h2_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h2_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h2_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h2_font_size_mobile',
      ),
    'priority' 					=> 14,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h2_font_size' );

function ubik_typography_headings_h3_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h3_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h3_options_heading', array(
		'label'    				=> esc_html__( 'H3', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 15,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h3_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h3_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 15,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h3',
		),
	),
) );

function ubik_typography_headings_h3_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h3_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '31',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h3_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '31',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h3_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '19',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h3_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h3_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h3_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h3_font_size_mobile',
      ),
    'priority' 					=> 16,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h3_font_size' );

function ubik_typography_headings_h4_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h4_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h4_options_heading', array(
		'label'    				=> esc_html__( 'H4', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 17,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h4_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h4_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 17,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h4',
		),
	),
) );

function ubik_typography_headings_h4_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h4_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '25',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h4_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '25',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h4_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '18',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h4_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h4_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h4_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h4_font_size_mobile',
      ),
    'priority' 					=> 18,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h4_font_size' );

function ubik_typography_headings_h5_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h5_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h5_options_heading', array(
		'label'    				=> esc_html__( 'H5', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 19,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h5_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h5_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 19,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h5',
		),
	),
) );

function ubik_typography_headings_h5_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h5_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h5_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h5_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '17',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h5_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h5_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h5_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h5_font_size_mobile',
      ),
    'priority' 					=> 20,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h5_font_size' );

function ubik_typography_headings_h6_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_typography_headings_h6_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_typography_headings_h6_options_heading', array(
		'label'    				=> esc_html__( 'H6', 'ubik' ),
		'section'  				=> 'ubik_typography_headings_section',
		'priority' 				=> 21,
	) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h6_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'typography',
	'settings'    => 'ubik_typography_headings_h6_general',
	'section'     => 'ubik_typography_headings_section',
	'default'     => array(
		// 'font-family'    => 'Open Sans',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'text-transform' => 'none',
		'text-decoration' => 'none',
	),
	'priority'    => 21,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' 		=> 'h6',
		),
	),
) );

function ubik_typography_headings_h6_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_typography_headings_h6_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h6_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_typography_headings_h6_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '16',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_typography_headings_h6_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_typography_headings_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_typography_headings_h6_font_size_desktop',
        'tablet' 		=> 'ubik_typography_headings_h6_font_size_tablet',
        'mobile' 		=> 'ubik_typography_headings_h6_font_size_mobile',
      ),
    'priority' 					=> 22,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
  ) ) );

}
add_action( 'customize_register', 'ubik_typography_headings_h6_font_size' );


/** Blog posts list section */

Kirki::add_section( 'ubik_general_blog_section', array(
  'title'       => 'Blog Posts List',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_blog_style',
  'label'	   		=> esc_html__( 'Blog Style', 'ubik' ),
	'section'     => 'ubik_general_blog_section',
	'default'     => 'classic',
	'priority'    => 10,
	'choices'     => array(
		'classic'   => esc_html__( 'Classic', 'ubik' ),
    'card' 		  => esc_html__( 'Cards', 'ubik' ),
    'h-card' 	  => esc_html__( 'Horizontal Cards', 'ubik' ),
	),
) );

Kirki::add_section( 'ubik_classic_entry_general_section', array(
  'title'       => 'Classic : General Options',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_classic_entry_posts_spacing',
	'label'           => esc_attr__( 'Posts Spacing (px)', 'ubik' ),
	'section'         => 'ubik_classic_entry_general_section',
	'priority' 				=> 10,
	'default'         => 40,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '300',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.classic-blog .cell',
			'property' 		=> 'margin-bottom',
			'units'				=> 'px',
		),
	),
	'transport'       => 'auto',
	'active_callback' => 'ubik_blog_style_is_classic',
) );

function ubik_classic_entry_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_general_section',
		'priority' 				    => 11,
		'active_callback' 		=> 'ubik_blog_style_is_classic',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_border_color',
	'description'				=> 'Border',
	'section'           => 'ubik_classic_entry_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.classic-blog .classic-entry',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_color_heading',
			'operator'      => '==',
			'value'         => '1',
		),
  ),
) );


Kirki::add_section( 'ubik_classic_entry_content_section', array(
  'title'       => 'Classic : Elements',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_classic_entry_elements',
	'label'           => __( 'Elements Positioning', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => array(
    'featured_image',
    'title',
    'meta',
    'content',
    'read_more',
	),
	'choices'         => array(
		'featured_image'    => esc_html__( 'Featured Image', 'ubik' ),
    'title'       		  => esc_html__( 'Title', 'ubik' ),
    'meta' 				      => esc_html__( 'Meta', 'ubik' ),
    'content' 			    => esc_html__( 'Content', 'ubik' ),
    'read_more'   		  => esc_html__( 'Read More', 'ubik' ),
	),
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_classic',
) );

function ubik_classic_entry_featured_image_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_classic_entry_featured_image_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_classic_entry_featured_image_options_heading', array(
		'label'    				=> esc_html__( 'Featured Image Options', 'ubik' ),
		'section'  				=> 'ubik_classic_entry_content_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_classic_entry_elements_has_featured_image',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_featured_image_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'slider',
	'settings'          => 'ubik_classic_entry_featured_image_max_height',
	'label'							=> 'Image Max Height (px)',
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '300',
  'priority' 				  => 11,
  'choices'     			=> array(
		'min'   => '0',
    'max'		=> '1000',
    'step'  => '1',
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-img',
			'property' => 'max-height',
			'units'		 => 'px',
		),
	),
	'transport' => 'auto',
	'active_callback' => 'ubik_classic_entry_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_classic_entry_featured_image_spacing',
	'label'       		=> esc_attr__( 'Margin', 'ubik' ),
	'section'     		=> 'ubik_classic_entry_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-img',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_classic_entry_featured_image_zoom',
	'label'           => esc_html__( 'Hover Zoom Effect', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => '1',
  'priority'        => 11,
  'active_callback' => 'ubik_classic_entry_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_classic_entry_featured_image_overlay',
	'label'           => esc_html__( 'Hover Overlay Effect', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => '1',
  'priority'        => 11,
  'active_callback' => 'ubik_classic_entry_elements_has_featured_image',
) );

function ubik_classic_entry_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_classic_entry_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_classic_entry_title_options_heading', array(
		'label'    				=> esc_html__( 'Title Options', 'ubik' ),
		'section'  				=> 'ubik_classic_entry_content_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_classic_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_classic_entry_title_spacing',
	'label'       		=> esc_attr__( 'Margin', 'ubik' ),
	'section'     		=> 'ubik_classic_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-title',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_title',
) );

function ubik_classic_entry_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_classic_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_title_color',
	'label'							=> esc_html__( 'Title', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-title a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'classic',
		),
		array(
      'setting'       => 'ubik_classic_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_classic_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_title_hover_color',
	'label'							=> esc_html__( 'Title: Hover', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-title a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'classic',
		),
		array(
      'setting'       => 'ubik_classic_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_classic_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_classic_entry_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_classic_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_title_typography_heading' );

function ubik_classic_entry_title_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_classic_entry_title_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '30',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_classic_entry_title_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '30',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_classic_entry_title_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_classic_entry_title_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_classic_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_classic_entry_title_typography_font_size_desktop',
      'tablet' 		=> 'ubik_classic_entry_title_typography_font_size_tablet',
      'mobile' 		=> 'ubik_classic_entry_title_typography_font_size_mobile',
    ),
    'priority' 					=> 14,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_classic_entry_elements_has_title_and_title_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_title_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_classic_entry_title_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.classic-entry .entry-title h2',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_classic_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_classic_entry_title_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
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
			'element'  				=> '.classic-entry .entry-title h2',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_classic_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_classic_entry_title_typography_text_align',
	'description'     => esc_attr__( 'Text Align', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left' 		=> esc_html__( 'Left', 'ubik' ),
		'center'  => esc_html__( 'Center', 'ubik' ),
		'right'  	=> esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.classic-entry .entry-title h2',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_classic_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_classic_entry_meta_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_classic_entry_meta_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_classic_entry_meta_options_heading', array(
		'label'    				=> esc_html__( 'Meta Options', 'ubik' ),
		'section'  				=> 'ubik_classic_entry_content_section',
		'priority' 				=> 15,
		'active_callback' => 'ubik_classic_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_meta_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_classic_entry_meta_elements',
	'label'           => __( 'Meta Elements Positioning', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => array(
    'author',
    'date',
    'categories',
    'comments',
	),
	'choices'         => array(
		'author'     	=> esc_html__( 'Author', 'ubik' ),
    'date'       	=> esc_html__( 'Date', 'ubik' ),
    'categories' 	=> esc_html__( 'Categories', 'ubik' ),
    'comments'   	=> esc_html__( 'Comments', 'ubik' ),
	),
  'priority'        => 15,
  'active_callback' => 'ubik_classic_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_classic_entry_meta_hide_icon',
	'label'           => esc_html__( 'Hide Meta Icons', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 0,
  'priority'        => 15,
  'active_callback' => 'ubik_classic_entry_elements_has_meta',
) );

kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_classic_entry_meta_menu_position',
	'label'           => esc_attr__( 'Menu Position', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left'   	=> 'Left',
		'center' 	=> 'Center',
    'right'		=> 'Right',
  ),
  'priority' 				=> 15,
  'active_callback' => 'ubik_classic_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_classic_entry_meta_menu_spacing',
	'label'       		=> esc_attr__( 'Margin', 'ubik' ),
	'section'     		=> 'ubik_classic_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-meta',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_meta',
) );

function ubik_classic_entry_meta_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_meta_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_meta_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_content_section',
		'priority' 				    => 16,
		'active_callback' 		=> 'ubik_classic_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_meta_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_meta_items_color',
	'label'							=> esc_html__( 'Items', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#929292',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-meta, .classic-entry .entry-meta .entry-meta__menu a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'classic',
		),
		array(
      'setting'       => 'ubik_classic_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_classic_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_meta_links_hover_color',
	'label'							=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-meta .entry-meta__menu a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'classic',
		),
		array(
      'setting'       => 'ubik_classic_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_classic_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_classic_entry_meta_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_meta_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_meta_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_content_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_classic_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_meta_typography_heading' );

function ubik_classic_entry_meta_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_classic_entry_meta_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '12',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_classic_entry_meta_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_classic_entry_meta_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_classic_entry_meta_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_classic_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_classic_entry_meta_typography_font_size_desktop',
      'tablet' 		=> 'ubik_classic_entry_meta_typography_font_size_tablet',
      'mobile' 		=> 'ubik_classic_entry_meta_typography_font_size_mobile',
    ),
    'priority' 					=> 17,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_classic_entry_elements_has_meta_and_meta_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_meta_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_classic_entry_meta_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.classic-entry .entry-meta',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_classic_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_classic_entry_meta_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.classic-entry .entry-meta',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'classic',
		),
		array(
			'setting'       => 'ubik_classic_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_classic_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_classic_entry_content_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_classic_entry_content_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_classic_entry_content_options_heading', array(
		'label'    				=> esc_html__( 'Content Options', 'ubik' ),
		'section'  				=> 'ubik_classic_entry_content_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_classic_entry_elements_has_content',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_content_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_classic_entry_excerpt_length',
	'label'           => esc_attr__( 'Excerpt Length', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 30,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
  ),
  'priority' 				=> 18,
  'active_callback' => 'ubik_classic_entry_elements_has_content',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_classic_entry_full_content',
	'label'           => esc_html__( 'Display Full content', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => '0',
  'priority'        => 18,
  'active_callback' => 'ubik_classic_entry_elements_has_content',
) );

function ubik_classic_entry_read_more_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_classic_entry_read_more_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_classic_entry_read_more_options_heading', array(
		'label'    				=> esc_html__( 'Read More Options', 'ubik' ),
		'section'  				=> 'ubik_classic_entry_content_section',
		'priority' 				=> 19,
		'active_callback' => 'ubik_classic_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_read_more_options_heading' );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_classic_entry_read_more_text',
  'label'           => esc_attr__( 'Read More Text', 'ubik' ),
  'section'         => 'ubik_classic_entry_content_section',
  'default'         => '',
	'priority'        => 19,
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_classic_entry_read_more_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'default'         => 'center',
	'priority'        => 19,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.classic-entry .entry-readmore',
			'property' 		=> 'text-align',
		),
	),
	'transport'       => 'auto',
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'dimension',
	'settings'        => 'ubik_classic_entry_read_more_font_size',
	'label'           => esc_attr__( 'Font Size', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'priority' 				=> 19,
	'default'         => '12px',
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-readmore a',
			'property' => 'font-size',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_classic_entry_read_more_margin',
	'label'       		=> esc_attr__( 'Margin', 'ubik' ),
	'section'     		=> 'ubik_classic_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 19,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-readmore',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_classic_entry_read_more_padding',
	'label'       		=> esc_attr__( 'Padding', 'ubik' ),
	'section'     		=> 'ubik_classic_entry_content_section',
	'default'     		=> array(
		'top'    => '12px',
		'bottom' => '12px',
		'left'   => '12px',
		'right'  => '12px',
	),
	'priority'    		=> 19,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-readmore a',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_classic_entry_read_more_border_width',
	'label'							=> 'Border width',
	'section'           => 'ubik_classic_entry_content_section',
	'priority' 				  => 19,
	'default'     		=> array(
		'top'    => '1px',
		'bottom' => '1px',
		'left'   => '1px',
		'right'  => '1px',
	),
  'choices'     			=> array(
		'top' 		=> esc_attr__( 'Top', 'ubik' ),
		'bottom' 	=> esc_attr__( 'Bottom', 'ubik' ),
		'left' 		=> esc_attr__( 'Left', 'ubik' ),
    'right' 	=> esc_attr__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'top',
			'element'  			=> '.classic-entry .entry-readmore a',
			'property' 			=> 'border-top-width',
		),
		array(
			'choice'      	=> 'bottom',
			'element'  			=> '.classic-entry .entry-readmore a',
			'property' 			=> 'border-bottom-width',
		),
		array(
			'choice'      	=> 'left',
			'element'  			=> '.classic-entry .entry-readmore a',
			'property' 			=> 'border-left-width',
		),
		array(
			'choice'      	=> 'right',
			'element'  			=> '.classic-entry .entry-readmore a',
			'property' 			=> 'border-right-width',
		),
	),
	'transport' => 'refresh',
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_classic_entry_read_more_border_radius',
	'label'           => esc_attr__( 'Border Radius', 'ubik' ),
	'section'         => 'ubik_classic_entry_content_section',
	'priority' 				=> 19,
	'default'         => 3,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.classic-entry .entry-readmore a',
			'property' => 'border-radius',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_classic_entry_elements_has_read_more',
) );

function ubik_classic_entry_read_more_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_classic_entry_read_more_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_classic_entry_read_more_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_classic_entry_content_section',
		'priority' 				    => 20,
		'active_callback' => 'ubik_classic_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_classic_entry_read_more_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_border_color',
	'label'							=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'classic',
		),
		array(
      'setting'       => 'ubik_classic_entry_elements',
      'operator'      => 'in',
      'value'         => 'read_more',
		),
		array(
      'setting'       => 'ubik_classic_entry_read_more_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_border_hover_color',
	'label'							=> esc_html__( 'Border: Hover', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a:hover, .classic-entry .entry-readmore a:focus',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'classic',
		),
		array(
      'setting'    => 'ubik_classic_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_classic_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'classic',
		),
		array(
      'setting'    => 'ubik_classic_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_classic_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_bg_hover_color',
	'label'							=> esc_html__( 'Background: Hover', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a:hover, .classic-entry .entry-readmore a:focus',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'classic',
		),
		array(
      'setting'    => 'ubik_classic_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_classic_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_text_color',
	'label'							=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'classic',
		),
		array(
      'setting'    => 'ubik_classic_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_classic_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_classic_entry_read_more_text_hover_color',
	'label'							=> esc_html__( 'Text: Hover', 'ubik' ),
	'section'           => 'ubik_classic_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.classic-entry .entry-readmore a:hover, .classic-entry .entry-readmore a:focus',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'classic',
		),
		array(
      'setting'    => 'ubik_classic_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_classic_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );


Kirki::add_section( 'ubik_card_entry_general_section', array(
  'title'       => 'Cards : General Options',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

function ubik_card_entry_columns( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_card_entry_columns_desktop', array(
    'default'           	=> '3',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_columns_tablet', array(
    'default'           	=> '2',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_columns_mobile', array(
    'default'           	=> '1',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_card_entry_columns_desktop', array(
    'label' 						=> esc_html__( 'Columns Number', 'ubik' ),
    'section'  					=> 'ubik_card_entry_general_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_card_entry_columns_desktop',
      'tablet' 	  => 'ubik_card_entry_columns_tablet',
      'mobile' 	  => 'ubik_card_entry_columns_mobile',
    ),
    'priority' 						=> 10,
    'input_attrs' 			=> array(
          'min'   	=> '1',
          'max'   	=> '5',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_blog_style_is_card',
  ) ) );

}
add_action( 'customize_register', 'ubik_card_entry_columns' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_card_entry_equal_height',
	'label'           => esc_html__( 'Equal Heights', 'ubik' ),
	'section'         => 'ubik_card_entry_general_section',
	'default'         => '0',
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_border_width',
	'label'           => esc_attr__( 'Cards Border Width (px)', 'ubik' ),
	'section'         => 'ubik_card_entry_general_section',
	'priority' 				=> 10,
	'default'         => 1,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '5',
    'step'  => '0.1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry',
			'property' => 'border-width',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_blog_style_is_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_border_radius',
	'label'           => esc_attr__( 'Cards Border Radius (px)', 'ubik' ),
	'section'         => 'ubik_card_entry_general_section',
	'priority' 				=> 10,
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '0.1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry',
			'property' => 'border-radius',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_blog_style_is_card',
) );

function ubik_card_entry_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_card_entry_general_section',
		'priority' 				    => 11,
		'active_callback' => 'ubik_blog_style_is_card',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_border_color',
	'label'							=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_card_entry_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );


Kirki::add_section( 'ubik_card_entry_content_section', array(
  'title'       => 'Cards : Elements',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_card_entry_elements',
	'label'           => __( 'Elements Positioning', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => array(
    'featured_image',
    'title',
    'meta',
    'content',
    'read_more',
	),
	'choices'         => array(
		'featured_image'    => esc_html__( 'Featured Image', 'ubik' ),
    'title'       		  => esc_html__( 'Title', 'ubik' ),
    'meta' 				      => esc_html__( 'Meta', 'ubik' ),
    'content' 			    => esc_html__( 'Content', 'ubik' ),
    'read_more'   		  => esc_html__( 'Read More', 'ubik' ),
	),
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_card',
) );

function ubik_card_entry_featured_image_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_card_entry_featured_image_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_card_entry_featured_image_options_heading', array(
		'label'    				=> esc_html__( 'Featured Image Options', 'ubik' ),
		'section'  				=> 'ubik_card_entry_content_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_card_entry_elements_has_featured_image',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_featured_image_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_featured_image_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-img',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_card_entry_featured_image_zoom',
	'label'           => esc_html__( 'Hover Zoom Effect', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => '1',
  'priority'        => 11,
  'active_callback' => 'ubik_card_entry_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_card_entry_featured_image_overlay',
	'label'           => esc_html__( 'Hover Overlay Effect', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => '1',
  'priority'        => 11,
  'active_callback' => 'ubik_card_entry_elements_has_featured_image',
) );

function ubik_card_entry_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_card_entry_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_card_entry_title_options_heading', array(
		'label'    				=> esc_html__( 'Title Options', 'ubik' ),
		'section'  				=> 'ubik_card_entry_content_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_title_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-title',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_title',
) );

function ubik_card_entry_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_title_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-title',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_title_color',
	'label'							=> esc_html__( 'Title', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-title a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_title_hover_color',
	'label'							=> esc_html__( 'Title: Hover', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-title a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_card_entry_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_title_typography_heading' );

function ubik_card_entry_title_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_card_entry_title_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '26',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_title_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '26',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_title_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_card_entry_title_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_card_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_card_entry_title_typography_font_size_desktop',
      'tablet' 		=> 'ubik_card_entry_title_typography_font_size_tablet',
      'mobile' 		=> 'ubik_card_entry_title_typography_font_size_mobile',
    ),
    'priority' 					=> 14,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_card_entry_elements_has_title_and_title_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_card_entry_title_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_title_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.card-entry .entry-title h2',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'card',
		),
		array(
			'setting'       => 'ubik_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_card_entry_title_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
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
			'element'  				=> '.card-entry .entry-title h2',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'card',
		),
		array(
			'setting'       => 'ubik_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_card_entry_title_typography_text_align',
	'description'     => esc_attr__( 'Text Align', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left' 		=> esc_html__( 'Left', 'ubik' ),
		'center'  => esc_html__( 'Center', 'ubik' ),
		'right'  	=> esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.card-entry .entry-title h2',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'card',
		),
		array(
			'setting'       => 'ubik_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_card_entry_meta_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_card_entry_meta_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_card_entry_meta_options_heading', array(
		'label'    				=> esc_html__( 'Meta Options', 'ubik' ),
		'section'  				=> 'ubik_card_entry_content_section',
		'priority' 				=> 15,
		'active_callback' => 'ubik_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_meta_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_card_entry_meta_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 15,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'  => 'ubik_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_card_entry_meta_elements',
	'label'           => __( 'Meta Elements Positioning', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => array(
    'author',
    'date',
    'categories',
    'comments',
	),
	'choices'         => array(
		'author'     	=> esc_html__( 'Author', 'ubik' ),
    'date'       	=> esc_html__( 'Date', 'ubik' ),
    'categories' 	=> esc_html__( 'Categories', 'ubik' ),
    'comments'   	=> esc_html__( 'Comments', 'ubik' ),
	),
  'priority'        => 15,
  'active_callback' => 'ubik_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_card_entry_meta_hide_icon',
	'label'           => esc_html__( 'Hide Meta Icons', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 0,
  'priority'        => 15,
  'active_callback' => 'ubik_card_entry_elements_has_meta',
) );

kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_card_entry_meta_menu_position',
	'label'           => esc_attr__( 'Menu Position', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left'   	=> 'Left',
		'center' 	=> 'Center',
    'right'		=> 'Right',
  ),
  'priority' 				=> 15,
  'active_callback' => 'ubik_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_meta_menu_spacing',
	'label'       		=> esc_attr__( 'spacing', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-meta',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_meta',
) );

function ubik_card_entry_meta_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_meta_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_meta_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 16,
		'active_callback' 		=> 'ubik_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_meta_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_meta_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-meta',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_meta_items_color',
	'label'							=> esc_html__( 'Items', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#929292',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-meta, .card-entry .entry-meta .entry-meta__menu a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_meta_links_hover_color',
	'label'							=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-meta .entry-meta__menu a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_card_entry_meta_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_meta_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_meta_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_meta_typography_heading' );

function ubik_card_entry_meta_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_card_entry_meta_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '12',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_meta_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_card_entry_meta_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_card_entry_meta_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_card_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_card_entry_meta_typography_font_size_desktop',
      'tablet' 		=> 'ubik_card_entry_meta_typography_font_size_tablet',
      'mobile' 		=> 'ubik_card_entry_meta_typography_font_size_mobile',
    ),
    'priority' 					=> 17,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_card_entry_elements_has_meta_and_meta_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_card_entry_meta_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_meta_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.card-entry .entry-meta',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'card',
		),
		array(
			'setting'       => 'ubik_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_card_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_card_entry_meta_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.card-entry .entry-meta',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'card',
		),
		array(
			'setting'       => 'ubik_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_card_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_card_entry_content_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_card_entry_content_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_card_entry_content_options_heading', array(
		'label'    				=> esc_html__( 'Content Options', 'ubik' ),
		'section'  				=> 'ubik_card_entry_content_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_card_entry_elements_has_content',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_content_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_card_entry_content_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 18,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'  => 'ubik_card_entry_elements_has_content',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_excerpt_length',
	'label'           => esc_attr__( 'Excerpt Length', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 30,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
  ),
  'priority' 				=> 18,
  'active_callback' => 'ubik_card_entry_elements_has_content',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_content_spacing',
	'label'       		=> esc_attr__( 'spacing', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 18,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-content',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_content',
) );

function ubik_card_entry_content_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_content_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_content_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_content_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_content_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-content',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'content',
		),
		array(
      'setting'       => 'ubik_card_entry_content_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_content_text_color',
	'label'							=> esc_html__( 'text', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#929292',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-content',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'content',
		),
		array(
      'setting'       => 'ubik_card_entry_content_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_card_entry_read_more_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_card_entry_read_more_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_card_entry_read_more_options_heading', array(
		'label'    				=> esc_html__( 'Read More Options', 'ubik' ),
		'section'  				=> 'ubik_card_entry_content_section',
		'priority' 				=> 20,
		'active_callback' => 'ubik_card_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_read_more_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_card_entry_read_more_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 20,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
    'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
  ),
  'active_callback'  => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_card_entry_read_more_text',
  'label'           => esc_attr__( 'Read More Text', 'ubik' ),
  'section'         => 'ubik_card_entry_content_section',
  'default'         => '',
	'priority'        => 20,
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_card_entry_read_more_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'default'         => 'center',
	'priority'        => 20,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.card-entry .entry-readmore',
			'property' 		=> 'text-align',
		),
	),
	'transport'       => 'auto',
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'dimension',
	'settings'        => 'ubik_card_entry_read_more_font_size',
	'label'           => esc_attr__( 'Font Size', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'priority' 				=> 20,
	'default'         => '12px',
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-readmore a',
			'property' => 'font-size',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_read_more_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 20,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-readmore',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_card_entry_read_more_padding',
	'label'       		=> esc_attr__( 'Padding', 'ubik' ),
	'section'     		=> 'ubik_card_entry_content_section',
	'default'     		=> array(
		'top'    => '12px',
		'bottom' => '12px',
		'left'   => '12px',
		'right'  => '12px',
	),
	'priority'    		=> 20,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-readmore a',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_card_entry_read_more_border_width',
	'label'							=> 'Border width',
	'section'           => 'ubik_card_entry_content_section',
	'priority' 				  => 20,
	'default'     		=> array(
		'top'    => '1px',
		'bottom' => '1px',
		'left'   => '1px',
		'right'  => '1px',
	),
  'choices'     			=> array(
		'top' 		=> esc_attr__( 'Top', 'ubik' ),
		'bottom' 	=> esc_attr__( 'Bottom', 'ubik' ),
		'left' 		=> esc_attr__( 'Left', 'ubik' ),
    'right' 	=> esc_attr__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'top',
			'element'  			=> '.card-entry .entry-readmore a',
			'property' 			=> 'border-top-width',
		),
		array(
			'choice'      	=> 'bottom',
			'element'  			=> '.card-entry .entry-readmore a',
			'property' 			=> 'border-bottom-width',
		),
		array(
			'choice'      	=> 'left',
			'element'  			=> '.card-entry .entry-readmore a',
			'property' 			=> 'border-left-width',
		),
		array(
			'choice'      	=> 'right',
			'element'  			=> '.card-entry .entry-readmore a',
			'property' 			=> 'border-right-width',
		),
	),
	'transport' => 'refresh',
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_card_entry_read_more_border_radius',
	'label'           => esc_attr__( 'Border Radius', 'ubik' ),
	'section'         => 'ubik_card_entry_content_section',
	'priority' 				=> 20,
	'default'         => 3,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.card-entry .entry-readmore a',
			'property' => 'border-radius',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_card_entry_elements_has_read_more',
) );

function ubik_card_entry_read_more_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_card_entry_read_more_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_card_entry_read_more_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_card_entry_content_section',
		'priority' 				    => 21,
		'active_callback' => 'ubik_card_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_card_entry_read_more_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'read_more',
		),
		array(
      'setting'       => 'ubik_card_entry_read_more_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_border_color',
	'label'							=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'card',
		),
		array(
      'setting'       => 'ubik_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'read_more',
		),
		array(
      'setting'       => 'ubik_card_entry_read_more_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_border_hover_color',
	'label'							=> esc_html__( 'Border: Hover', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a:hover, .card-entry .entry-readmore a:focus',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'card',
		),
		array(
      'setting'    => 'ubik_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_link_bg_color',
	'label'							=> esc_html__( 'Link Background', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'card',
		),
		array(
      'setting'    => 'ubik_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_link_bg_hover_color',
	'label'							=> esc_html__( 'Link Background: Hover', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a:hover, .card-entry .entry-readmore a:focus',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'card',
		),
		array(
      'setting'    => 'ubik_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_text_color',
	'label'							=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'card',
		),
		array(
      'setting'    => 'ubik_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_card_entry_read_more_text_hover_color',
	'label'							=> esc_html__( 'Text: Hover', 'ubik' ),
	'section'           => 'ubik_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 21,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.card-entry .entry-readmore a:hover, .card-entry .entry-readmore a:focus',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'card',
		),
		array(
      'setting'    => 'ubik_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );


Kirki::add_section( 'ubik_h_card_entry_general_section', array(
  'title'       => 'Horizontal Cards : General Options',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

function ubik_h_card_entry_columns( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_columns_desktop', array(
    'default'           	=> '2',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_columns_tablet', array(
    'default'           	=> '1',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_columns_mobile', array(
    'default'           	=> '1',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_columns_desktop', array(
    'label' 						=> esc_html__( 'Columns Number', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_general_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_h_card_entry_columns_desktop',
      'tablet' 	  => 'ubik_h_card_entry_columns_tablet',
      'mobile' 	  => 'ubik_h_card_entry_columns_mobile',
    ),
    'priority' 						=> 10,
    'input_attrs' 			=> array(
          'min'   	=> '1',
          'max'   	=> '5',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_blog_style_is_h_card',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_columns' );

function ubik_h_card_entry_height( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_height_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '200',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_height_tablet', array(
    'transport' 					=> 'refresh',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_height_mobile', array(
    'transport' 					=> 'refresh',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_height_desktop', array(
    'label' 						=> esc_html__( 'Cards Min Height (px)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_general_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_h_card_entry_height_desktop',
        'tablet' 		=> 'ubik_h_card_entry_height_tablet',
        'mobile' 		=> 'ubik_h_card_entry_height_mobile',
      ),
    'priority' 					=> 10,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '500',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_blog_style_is_h_card',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_height' );

function ubik_h_card_entry_custom_height( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_custom_height_desktop', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_custom_height_tablet', array(
    'transport' 					=> 'refresh',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_custom_height_mobile', array(
    'transport' 					=> 'refresh',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_custom_height_desktop', array(
    'label' 						=> esc_html__( 'Cards Custom Height (px)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_general_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_h_card_entry_custom_height_desktop',
        'tablet' 		=> 'ubik_h_card_entry_custom_height_tablet',
        'mobile' 		=> 'ubik_h_card_entry_custom_height_mobile',
      ),
    'priority' 					=> 10,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '500',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_blog_style_is_h_card',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_custom_height' );

function ubik_h_card_entry_image_width( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_image_width_desktop', array(
		'transport' 					=> 'postMessage',
		'default'         		=> '40',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_image_width_tablet', array(
    //'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_image_width_mobile', array(
    //'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_image_width_desktop', array(
    'label' 						=> esc_html__( 'Image Width (%)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_general_section',
    'settings' 					=> array(
        'desktop' 	=> 'ubik_h_card_entry_image_width_desktop',
        'tablet' 		=> 'ubik_h_card_entry_image_width_tablet',
        'mobile' 		=> 'ubik_h_card_entry_image_width_mobile',
      ),
    'priority' 					=> 10,
    'input_attrs' 			=> array(
					'min'			=> '',
          'max'   	=> '100',
          'step'  	=> '1',
      ),
    'active_callback' 	=> 'ubik_blog_style_is_h_card',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_width' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_h_card_entry_image_position',
	'label'           => esc_attr__( 'Featured Image Position', 'ubik' ),
	'section'         => 'ubik_h_card_entry_general_section',
	'default'         => 'left',
	'choices'         => array(
		'left'   	=> 'Left',
    'right'		=> 'Right',
  ),
  'priority' 				=> 10,
  'active_callback' => 'ubik_blog_style_is_h_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_border_width',
	'label'           => esc_attr__( 'Cards Border Width (px)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_general_section',
	'priority' 				=> 10,
	'default'         => 1,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '5',
    'step'  => '0.1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry',
			'property' => 'border-width',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_blog_style_is_h_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_border_radius',
	'label'           => esc_attr__( 'Cards Border Radius (px)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_general_section',
	'priority' 				=> 10,
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
    'step'  => '0.1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry',
			'property' => 'border-radius',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_blog_style_is_h_card',
) );

function ubik_h_card_entry_margin( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_top_margin', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_right_margin', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_bottom_margin', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_left_margin', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_setting( 'ubik_h_card_entry_tablet_top_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_tablet_right_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_tablet_bottom_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_tablet_left_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );

	$wp_customize->add_setting( 'ubik_h_card_entry_mobile_top_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_mobile_right_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_mobile_bottom_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_mobile_left_margin', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Responsive_Dimensions_Control( $wp_customize, 'ubik_h_card_entry_margin', array(
		'label'	   						=> esc_html__( 'Cards Margin (px)', 'ubik' ),
		'section'  						=> 'ubik_h_card_entry_general_section',				
		'settings'   					=> array(
			'desktop_top' 		=> 'ubik_h_card_entry_top_margin',
			'desktop_right' 	=> 'ubik_h_card_entry_right_margin',
			'desktop_bottom' 	=> 'ubik_h_card_entry_bottom_margin',
			'desktop_left' 		=> 'ubik_h_card_entry_left_margin',
			'tablet_top' 			=> 'ubik_h_card_entry_tablet_top_margin',
			'tablet_right' 		=> 'ubik_h_card_entry_tablet_right_margin',
			'tablet_bottom' 	=> 'ubik_h_card_entry_tablet_bottom_margin',
			'tablet_left' 		=> 'ubik_h_card_entry_tablet_left_margin',
			'mobile_top' 			=> 'ubik_h_card_entry_mobile_top_margin',
			'mobile_right' 		=> 'ubik_h_card_entry_mobile_right_margin',
			'mobile_bottom' 	=> 'ubik_h_card_entry_mobile_bottom_margin',
			'mobile_left' 		=> 'ubik_h_card_entry_mobile_left_margin',
		),
		'priority' 						=> 11,
		'input_attrs' 				=> array(
				'min'   => 0,
				'max'   => 500,
				'step'  => 1,
		),
		'active_callback' => 'ubik_blog_style_is_h_card',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_margin' );

function ubik_h_card_entry_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_general_section',
		'priority' 				    => 12,
		'active_callback' => 'ubik_blog_style_is_h_card',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_border_color',
	'label'							=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_h_card_entry_general_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_section( 'ubik_h_card_entry_content_section', array(
  'title'       => 'Horizontal Cards : Text Section',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_h_card_entry_elements',
	'label'           => esc_html__( 'Elements Positioning', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => array(
		'title',
    'content',
		'read_more',
	),
	'choices'         => array(
    'title'       		  => esc_html__( 'Title', 'ubik' ),
    'meta' 				      => esc_html__( 'Meta', 'ubik' ),
    'content' 			    => esc_html__( 'Content', 'ubik' ),
    'read_more'   		  => esc_html__( 'Read More', 'ubik' ),
	),
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_h_card',
) );

function ubik_h_card_entry_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_h_card_entry_title_options_heading', array(
		'label'    				=> esc_html__( 'Title Options', 'ubik' ),
		'section'  				=> 'ubik_h_card_entry_content_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_h_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_h_card_entry_title_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_h_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 11,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet-mobile'		=> esc_html__( 'Show on Tablet & Mobile', 'ubik' ),
		'show-mobile'						=> esc_html__( 'Show on Mobile Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_h_card_entry_elements_has_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_h_card_entry_title_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_h_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-title',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_title',
) );

function ubik_h_card_entry_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 12,
		'active_callback' 		=> 'ubik_h_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_title_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-title',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_h_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_title_color',
	'label'							=> esc_html__( 'Title', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-title a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_h_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_title_hover_color',
	'label'							=> esc_html__( 'Title: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 12,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-title a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_h_card_entry_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_h_card_entry_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_h_card_entry_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_title_typography_heading' );

function ubik_h_card_entry_title_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_title_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '18',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_title_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_title_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_title_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_h_card_entry_title_typography_font_size_desktop',
      'tablet' 		=> 'ubik_h_card_entry_title_typography_font_size_tablet',
      'mobile' 		=> 'ubik_h_card_entry_title_typography_font_size_mobile',
    ),
    'priority' 					=> 13,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_h_card_entry_elements_has_title_and_title_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_title_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_title_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-title h2',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'h-card',
		),
		array(
			'setting'       => 'ubik_h_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_h_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_h_card_entry_title_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-title h2',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'h-card',
		),
		array(
			'setting'       => 'ubik_h_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_h_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_h_card_entry_title_typography_text_align',
	'description'     => esc_attr__( 'Text Align', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left' 		=> esc_html__( 'Left', 'ubik' ),
		'center'  => esc_html__( 'Center', 'ubik' ),
		'right'  	=> esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 13,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-title h2',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'h-card',
		),
		array(
			'setting'       => 'ubik_h_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_h_card_entry_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_h_card_entry_meta_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_meta_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_h_card_entry_meta_options_heading', array(
		'label'    				=> esc_html__( 'Meta Options', 'ubik' ),
		'section'  				=> 'ubik_h_card_entry_content_section',
		'priority' 				=> 14,
		'active_callback' => 'ubik_h_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_meta_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_h_card_entry_meta_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_h_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 14,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet-mobile'		=> esc_html__( 'Show on Tablet & Mobile', 'ubik' ),
		'show-mobile'						=> esc_html__( 'Show on Mobile Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_h_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_h_card_entry_meta_elements',
	'label'           => __( 'Meta Elements Positioning', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => array(
    'author',
    'date',
	),
	'choices'         => array(
		'author'     	=> esc_html__( 'Author', 'ubik' ),
    'date'       	=> esc_html__( 'Date', 'ubik' ),
    'categories' 	=> esc_html__( 'Categories', 'ubik' ),
    'comments'   	=> esc_html__( 'Comments', 'ubik' ),
	),
  'priority'        => 14,
  'active_callback' => 'ubik_h_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_h_card_entry_meta_hide_icon',
	'label'           => esc_html__( 'Hide Meta Icons', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 0,
  'priority'        => 14,
  'active_callback' => 'ubik_h_card_entry_elements_has_meta',
) );

kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_h_card_entry_meta_menu_position',
	'label'           => esc_attr__( 'Menu Position', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'center',
	'choices'         => array(
		'left'   	=> 'Left',
		'center' 	=> 'Center',
    'right'		=> 'Right',
  ),
  'priority' 				=> 14,
  'active_callback' => 'ubik_h_card_entry_elements_has_meta',
) );

kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_h_card_entry_meta_menu_direction',
	'label'           => esc_attr__( 'Menu Direction', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'horizontal',
	'choices'         => array(
		'horizontal'   			=> 'Horizontal',
		'vertical' 					=> 'Vertical',
  ),
  'priority' 				=> 14,
  'active_callback' => 'ubik_h_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_h_card_entry_meta_menu_spacing',
	'label'       		=> esc_attr__( 'spacing', 'ubik' ),
	'section'     		=> 'ubik_h_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 14,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-meta',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_meta_menu_items_spacing',
	'label'           => esc_attr__( 'Items Spacing (Top/Bottom)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 0,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '30',
    'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-meta .entry-meta__menu li',
			'property' 				=> 'margin-top',
			'units'						=> 'px',
		),
		array(
			'element'  				=> '.h-card-entry__stacked .entry-meta .entry-meta__menu li',
			'property' 				=> 'margin-bottom',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_h_card_entry_meta_menu_direction',
      'operator'      => '==',
      'value'         => 'vertical',
    ),
  ),
) );

function ubik_h_card_entry_meta_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_meta_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_meta_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 15,
		'active_callback' 		=> 'ubik_h_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_meta_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_meta_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-meta',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_h_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_meta_items_color',
	'label'							=> esc_html__( 'Items', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#929292',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-meta, .h-card-entry__stacked .entry-meta .entry-meta__menu a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_h_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_meta_links_hover_color',
	'label'							=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 15,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-meta .entry-meta__menu a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_h_card_entry_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_h_card_entry_meta_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_meta_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_meta_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 16,
		'active_callback' 		=> 'ubik_h_card_entry_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_meta_typography_heading' );

function ubik_h_card_entry_meta_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_meta_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '12',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_meta_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_meta_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_meta_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_content_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_h_card_entry_meta_typography_font_size_desktop',
      'tablet' 		=> 'ubik_h_card_entry_meta_typography_font_size_tablet',
      'mobile' 		=> 'ubik_h_card_entry_meta_typography_font_size_mobile',
    ),
    'priority' 					=> 16,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_h_card_entry_elements_has_meta_and_meta_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_meta_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_meta_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-meta',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'h-card',
		),
		array(
			'setting'       => 'ubik_h_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_h_card_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_h_card_entry_meta_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 16,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__stacked .entry-meta',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_blog_style',
			'operator'      => '==',
			'value'         => 'h-card',
		),
		array(
			'setting'       => 'ubik_h_card_entry_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_h_card_entry_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_h_card_entry_content_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_content_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_h_card_entry_content_options_heading', array(
		'label'    				=> esc_html__( 'Content Options', 'ubik' ),
		'section'  				=> 'ubik_h_card_entry_content_section',
		'priority' 				=> 17,
		'active_callback' => 'ubik_h_card_entry_elements_has_content',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_content_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_h_card_entry_content_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_h_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 17,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet-mobile'		=> esc_html__( 'Show on Tablet & Mobile', 'ubik' ),
		'show-mobile'						=> esc_html__( 'Show on Mobile Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_h_card_entry_elements_has_content',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_excerpt_length',
	'label'           => esc_attr__( 'Excerpt Length', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 30,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '500',
    'step'  => '1',
  ),
  'priority' 				=> 17,
  'active_callback' => 'ubik_h_card_entry_elements_has_content',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_h_card_entry_content_spacing',
	'label'       		=> esc_attr__( 'spacing', 'ubik' ),
	'section'     		=> 'ubik_h_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 17,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-content',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_content',
) );

function ubik_h_card_entry_content_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_content_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_content_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 18,
		'active_callback' 		=> 'ubik_h_card_entry_elements_has_content',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_content_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_content_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-content',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'content',
		),
		array(
      'setting'       => 'ubik_h_card_entry_content_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_content_text_color',
	'label'							=> esc_html__( 'text', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#929292',
  'priority' 				  => 18,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-content',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'content',
		),
		array(
      'setting'       => 'ubik_h_card_entry_content_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_h_card_entry_read_more_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_read_more_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_h_card_entry_read_more_options_heading', array(
		'label'    				=> esc_html__( 'Read More Options', 'ubik' ),
		'section'  				=> 'ubik_h_card_entry_content_section',
		'priority' 				=> 19,
		'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_read_more_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_h_card_entry_read_more_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_h_card_entry_content_section',
	'default'     => 'all-devices',
	'priority'    => 19,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile', 'ubik' ),
		'show-tablet-mobile'		=> esc_html__( 'Show on Tablet & Mobile', 'ubik' ),
		'show-mobile'						=> esc_html__( 'Show on Mobile Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_h_card_entry_read_more_text',
  'label'           => esc_attr__( 'Read More Text', 'ubik' ),
  'section'         => 'ubik_h_card_entry_content_section',
  'default'         => '',
	'priority'        => 19,
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_h_card_entry_read_more_position',
  'label'	   		    => esc_html__( 'Position', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'default'         => 'center',
	'priority'        => 19,
	'choices'         => array(
		'left'	  => esc_html__( 'Left', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'right' 	=> esc_html__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'element'  		=> '.h-card-entry__stacked .entry-readmore',
			'property' 		=> 'text-align',
		),
	),
	'transport'       => 'auto',
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'dimension',
	'settings'        => 'ubik_h_card_entry_read_more_font_size',
	'label'           => esc_attr__( 'Font Size', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'priority' 				=> 19,
	'default'         => '12px',
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-readmore a',
			'property' => 'font-size',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_h_card_entry_read_more_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_h_card_entry_content_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '10px',
		'right'  => '10px',
	),
	'priority'    		=> 19,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-readmore',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_h_card_entry_read_more_link_padding',
	'label'       		=> esc_attr__( 'Link Padding', 'ubik' ),
	'section'     		=> 'ubik_h_card_entry_content_section',
	'default'     		=> array(
		'top'    => '12px',
		'bottom' => '12px',
		'left'   => '12px',
		'right'  => '12px',
	),
	'priority'    		=> 19,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-readmore a',
      'property' => 'padding',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_h_card_entry_read_more_border_width',
	'label'							=> 'Border width',
	'section'           => 'ubik_h_card_entry_content_section',
	'priority' 				  => 19,
	'default'     		=> array(
		'top'    => '1px',
		'bottom' => '1px',
		'left'   => '1px',
		'right'  => '1px',
	),
  'choices'     			=> array(
		'top' 		=> esc_attr__( 'Top', 'ubik' ),
		'bottom' 	=> esc_attr__( 'Bottom', 'ubik' ),
		'left' 		=> esc_attr__( 'Left', 'ubik' ),
    'right' 	=> esc_attr__( 'Right', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'top',
			'element'  			=> '.h-card-entry__stacked .entry-readmore a',
			'property' 			=> 'border-top-width',
		),
		array(
			'choice'      	=> 'bottom',
			'element'  			=> '.h-card-entry__stacked .entry-readmore a',
			'property' 			=> 'border-bottom-width',
		),
		array(
			'choice'      	=> 'left',
			'element'  			=> '.h-card-entry__stacked .entry-readmore a',
			'property' 			=> 'border-left-width',
		),
		array(
			'choice'      	=> 'right',
			'element'  			=> '.h-card-entry__stacked .entry-readmore a',
			'property' 			=> 'border-right-width',
		),
	),
	'transport' => 'refresh',
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_read_more_border_radius',
	'label'           => esc_attr__( 'Border Radius', 'ubik' ),
	'section'         => 'ubik_h_card_entry_content_section',
	'priority' 				=> 19,
	'default'         => 3,
	'choices'         => array(
		'min'   => '0',
    'max'		=> '50',
    'step'  => '1',
  ),
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.h-card-entry__stacked .entry-readmore a',
			'property' => 'border-radius',
			'units'		 => 'px',
    ),
	),
	'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
) );

function ubik_h_card_entry_read_more_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_read_more_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_read_more_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_content_section',
		'priority' 				    => 20,
		'active_callback' => 'ubik_h_card_entry_elements_has_read_more',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_read_more_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'read_more',
		),
		array(
      'setting'       => 'ubik_h_card_entry_read_more_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_border_color',
	'label'							=> esc_html__( 'Border', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_elements',
      'operator'      => 'in',
      'value'         => 'read_more',
		),
		array(
      'setting'       => 'ubik_h_card_entry_read_more_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_border_hover_color',
	'label'							=> esc_html__( 'Border: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a:hover, .h-card-entry__stacked .entry-readmore a:focus',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'h-card',
		),
		array(
      'setting'    => 'ubik_h_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_h_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_link_bg_color',
	'label'							=> esc_html__( 'Link Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'h-card',
		),
		array(
      'setting'    => 'ubik_h_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_h_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_link_bg_hover_color',
	'label'							=> esc_html__( 'Link Background: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a:hover, .h-card-entry__stacked .entry-readmore a:focus',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'h-card',
		),
		array(
      'setting'    => 'ubik_h_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_h_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_text_color',
	'label'							=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#333333',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'h-card',
		),
		array(
      'setting'    => 'ubik_h_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_h_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_read_more_text_hover_color',
	'label'							=> esc_html__( 'Text: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_content_section',
  'default'           => '#1779ba',
  'priority' 				  => 20,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__stacked .entry-readmore a:hover, .h-card-entry__stacked .entry-readmore a:focus',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' 	=> array(
    array(
      'setting'    => 'ubik_blog_style',
      'operator'   => '==',
      'value'      => 'h-card',
		),
		array(
      'setting'    => 'ubik_h_card_entry_elements',
      'operator'   => 'in',
      'value'      => 'read_more',
		),
		array(
      'setting'    => 'ubik_h_card_entry_read_more_color_heading',
      'operator'   => '==',
      'value'      => '1',
    ),
  ),
) );


Kirki::add_section( 'ubik_h_card_entry_image_section', array(
  'title'       => 'Horizontal Cards : Image Section',
  'section'     => 'ubik_general_blog_section',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_h_card_entry_image_zoom',
	'label'           => esc_html__( 'Image Hover Zoom Effect', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => '1',
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_h_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_h_card_entry_image_overlay',
	'label'           => esc_html__( 'Image Hover Overlay Effect', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => '1',
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_h_card',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_h_card_entry_image_title_display',
	'label'           => esc_html__( 'Show the Post Title', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => 0,
  'priority'        => 10,
  'active_callback' => 'ubik_blog_style_is_h_card',
) );

function ubik_h_card_entry_image_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_h_card_entry_image_title_options_heading', array(
		'label'    				=> esc_html__( 'Title Options', 'ubik' ),
		'section'  				=> 'ubik_h_card_entry_image_section',
		'priority' 				=> 20,
		'active_callback' => 'ubik_h_card_entry_image_show_title_is_true',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        => 'select',
	'settings'    => 'ubik_h_card_entry_image_title_device_visibility',
  'label'	   		=> esc_html__( 'Device Visibility', 'ubik' ),
	'section'     => 'ubik_h_card_entry_image_section',
	'default'     => 'all-devices',
	'priority'    => 20,
	'choices'     => array(
		'all-devices' 					=> esc_html__( 'Show on All Devices', 'ubik' ),
    'hide-tablet-mobile' 		=> esc_html__( 'Hide on Tablet & Mobile', 'ubik' ),
		'hide-mobile'					  => esc_html__( 'Hide on Mobile Only', 'ubik' ),
		'show-tablet-mobile'		=> esc_html__( 'Show on Tablet & Mobile', 'ubik' ),
		'show-mobile'						=> esc_html__( 'Show on Mobile Only', 'ubik' ),
  ),
  'active_callback'  => 'ubik_h_card_entry_image_show_title_is_true',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_h_card_entry_image_title_position',
  'label'	   		    => esc_html__( 'Title Position', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => 'center',
	'priority'        => 20,
	'choices'         => array(
		'top'	  	=> esc_html__( 'Top', 'ubik' ),
		'center'	=> esc_html__( 'Center', 'ubik' ),
    'bottom' 	=> esc_html__( 'Bottom', 'ubik' ),
	),
	'active_callback' => 'ubik_h_card_entry_image_show_title_is_true',
) );

function ubik_h_card_entry_image_title_padding( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_top_padding', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_right_padding', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_bottom_padding', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_left_padding', array(
		//'transport' 			=> 'postMessage',
		'default'           	=> '0',
		'sanitize_callback' 	=> 'ubik_sanitize_number',
	) );

	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_tablet_top_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_tablet_right_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_tablet_bottom_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_tablet_left_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );

	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_mobile_top_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_mobile_right_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_mobile_bottom_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_mobile_left_padding', array(
		//'transport' 			=> 'postMessage',
		'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Responsive_Dimensions_Control( $wp_customize, 'ubik_h_card_entry_image_title_padding', array(
		'label'	   						=> esc_html__( 'Title Padding (px)', 'ubik' ),
		'section'  						=> 'ubik_h_card_entry_image_section',				
		'settings'   					=> array(
			'desktop_top' 		=> 'ubik_h_card_entry_image_title_top_padding',
			'desktop_right' 	=> 'ubik_h_card_entry_image_title_right_padding',
			'desktop_bottom' 	=> 'ubik_h_card_entry_image_title_bottom_padding',
			'desktop_left' 		=> 'ubik_h_card_entry_image_title_left_padding',
			'tablet_top' 			=> 'ubik_h_card_entry_image_title_tablet_top_padding',
			'tablet_right' 		=> 'ubik_h_card_entry_image_title_tablet_right_padding',
			'tablet_bottom' 	=> 'ubik_h_card_entry_image_title_tablet_bottom_padding',
			'tablet_left' 		=> 'ubik_h_card_entry_image_title_tablet_left_padding',
			'mobile_top' 			=> 'ubik_h_card_entry_image_title_mobile_top_padding',
			'mobile_right' 		=> 'ubik_h_card_entry_image_title_mobile_right_padding',
			'mobile_bottom' 	=> 'ubik_h_card_entry_image_title_mobile_bottom_padding',
			'mobile_left' 		=> 'ubik_h_card_entry_image_title_mobile_left_padding',
		),
		'priority' 					=> 21,
		'input_attrs' 			=> array(
				'min'   => 0,
				'max'   => 500,
				'step'  => 1,
		),
		'active_callback' => 'ubik_h_card_entry_image_show_title_is_true',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_title_padding' );

function ubik_h_card_entry_image_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_image_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_image_section',
		'priority' 				    => 22,
		'active_callback' 		=> 'ubik_h_card_entry_image_show_title_is_true',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_image_title_bg_color',
	'label'							=> esc_html__( 'Background', 'ubik' ),
	'section'           => 'ubik_h_card_entry_image_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 22,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__img .entry-img-inner-content .entry-image-title',
			'property' => 'background-color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_image_title_color',
	'label'							=> esc_html__( 'Title', 'ubik' ),
	'section'           => 'ubik_h_card_entry_image_section',
  'default'           => '#fefefe',
  'priority' 				  => 22,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__img .entry-img-inner-content .entry-image-title a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_h_card_entry_image_title_hover_color',
	'label'							=> esc_html__( 'Title: Hover', 'ubik' ),
	'section'           => 'ubik_h_card_entry_image_section',
  'default'           => '#1779ba',
  'priority' 				  => 22,
  'choices'     			=> array(
		'alpha' 		=> true,
	),
	'output' 						=> array(
		array(
			'element'  => '.h-card-entry__img .entry-img-inner-content .entry-image-title a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
    array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_h_card_entry_image_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_h_card_entry_image_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_h_card_entry_image_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_h_card_entry_image_section',
		'priority' 				    => 23,
		'active_callback' 		=> 'ubik_h_card_entry_image_show_title_is_true',
	) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_title_typography_heading' );

function ubik_h_card_entry_image_title_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_h_card_entry_image_title_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '18',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_image_title_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '18',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_h_card_entry_image_title_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '14',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_h_card_entry_image_title_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_h_card_entry_image_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_h_card_entry_image_title_typography_font_size_desktop',
      'tablet' 		=> 'ubik_h_card_entry_image_title_typography_font_size_tablet',
      'mobile' 		=> 'ubik_h_card_entry_image_title_typography_font_size_mobile',
    ),
    'priority' 					=> 23,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_h_card_entry_image_show_title_is_true_and_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_h_card_entry_image_title_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_h_card_entry_image_title_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 23,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__img .entry-image-title h2',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_h_card_entry_image_title_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => 'Uppercase',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 23,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__img .entry-img-inner-content .entry-image-title h2',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_h_card_entry_image_title_typography_text_align',
	'description'     => esc_attr__( 'Text Align', 'ubik' ),
	'section'         => 'ubik_h_card_entry_image_section',
	'default'         => 'center',
	'choices'         => array(
		'left' 		=> esc_html__( 'Left', 'ubik' ),
		'center'  => esc_html__( 'Center', 'ubik' ),
		'right'  	=> esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 23,
	'output' => array(
		array(
			'element'  				=> '.h-card-entry__img .entry-img-inner-content .entry-image-title',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
      'setting'       => 'ubik_blog_style',
      'operator'      => '==',
      'value'         => 'h-card',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_display',
      'operator'      => '==',
      'value'         => '1',
		),
		array(
      'setting'       => 'ubik_h_card_entry_image_title_typography_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
	),
) );



/** Single post section */

Kirki::add_section( 'ubik_single_section', array(
  'title'       => 'Single Post Content',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_single_elements',
	'label'           => esc_attr__( 'Elements Positioning', 'ubik' ),
	'section'         => 'ubik_single_section',
	'priority'        => 10,
	'default'         => array(
    'featured_image',
    'title',
    'meta',
    'content',
		'tags',
		'post_nav',
	),
	'choices'         => array(
		'featured_image'    => esc_html__( 'Featured Image', 'ubik' ),
    'title'       		  => esc_html__( 'Title', 'ubik' ),
    'meta' 				      => esc_html__( 'Meta', 'ubik' ),
    'content' 			    => esc_html__( 'Content', 'ubik' ),
		'tags'   		  			=> esc_html__( 'Tags', 'ubik' ),
		'single_comments' 	=> esc_html__( 'Comments', 'ubik' ),
		'post_nav'   		  	=> esc_html__( 'Navigation', 'ubik' ),
	),
) );

function ubik_single_featured_image_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_featured_image_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_featured_image_options_heading', array(
		'label'    				=> esc_html__( 'Featured Image Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 11,
		'active_callback' => 'ubik_single_elements_has_featured_image',
	) ) );

}
add_action( 'customize_register', 'ubik_single_featured_image_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'slider',
	'settings'          => 'ubik_single_featured_image_height',
	'label'							=> 'Image Height (px)',
	'section'           => 'ubik_single_section',
  'default'           => '300',
  'priority' 				  => 11,
  'choices'     			=> array(
		'min'   => '0',
    'max'		=> '1000',
    'step'  => '1',
	),
	'output' 						=> array(
		array(
			'element'  => '.single-img img',
			'property' => 'height',
			'units'		 => 'px',
		),
	),
	'transport' 				=> 'auto',
	'active_callback' 	=> 'ubik_single_elements_has_featured_image',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_featured_image_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '0px',
		'bottom' => '0px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 11,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.single-img',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_featured_image',
) );

function ubik_single_title_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_title_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_title_options_heading', array(
		'label'    				=> esc_html__( 'Title Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 12,
		'active_callback' => 'ubik_single_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_single_title_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'select',
	'settings'    		=> 'ubik_single_title_tag',
	'label'       		=> esc_attr__( 'Tag', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> 'h2',
	'priority'    		=> 12,
	'choices'     		=> array(
		'h1' 		=> esc_html__( 'h1', 'ubik' ),
		'h2' 		=> esc_html__( 'h2', 'ubik' ),
		'h3' 		=> esc_html__( 'h3', 'ubik' ),
		'h4' 		=> esc_html__( 'h4', 'ubik' ),
		'h5' 		=> esc_html__( 'h5', 'ubik' ),
		'h6' 		=> esc_html__( 'h6', 'ubik' ),
	),
	'active_callback' => 'ubik_single_elements_has_title',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_title_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 12,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.single-title',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_title',
) );

function ubik_single_title_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_title_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_title_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 13,
		'active_callback' 		=> 'ubik_single_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_single_title_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_title_color',
	'label'							=> esc_html__( 'Title', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#333333',
  'priority' 				  => 13,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-title .single-title__title',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'title',
		),
		array(
      'setting'       => 'ubik_single_title_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_single_title_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_title_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_title_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 14,
		'active_callback' 		=> 'ubik_single_elements_has_title',
	) ) );

}
add_action( 'customize_register', 'ubik_single_title_typography_heading' );

function ubik_single_title_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_single_title_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '40',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_single_title_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '40',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_single_title_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
		'default'           	=> '20',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_single_title_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_single_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_single_title_typography_font_size_desktop',
      'tablet' 		=> 'ubik_single_title_typography_font_size_tablet',
      'mobile' 		=> 'ubik_single_title_typography_font_size_mobile',
    ),
    'priority' 					=> 14,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_single_elements_has_title_and_title_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_single_title_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_single_title_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.single-title .single-title__title',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_single_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_single_title_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_single_section',
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
			'element'  				=> '.single-title .single-title__title',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_single_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_single_title_typography_text_align',
	'description'     => esc_attr__( 'Text Align', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => 'left',
	'choices'         => array(
		'left' 		=> esc_html__( 'Left', 'ubik' ),
		'center'  => esc_html__( 'Center', 'ubik' ),
		'right'  	=> esc_html__( 'Right', 'ubik' ),
	),
	'priority'    		=> 14,
	'output' => array(
		array(
			'element'  				=> '.single-title .single-title__title',
			'property' 				=> 'text-align',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'title',
		),
		array(
			'setting'       => 'ubik_single_title_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_single_meta_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_meta_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_meta_options_heading', array(
		'label'    				=> esc_html__( 'Meta Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 15,
		'active_callback' => 'ubik_single_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_single_meta_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'sortable',
	'settings'        => 'ubik_single_meta_elements',
	'label'           => esc_attr__( 'Meta Elements Positioning', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => array(
    'author',
    'date',
    'categories',
    'comments',
	),
	'choices'         => array(
		'author'     	=> esc_html__( 'Author', 'ubik' ),
    'date'       	=> esc_html__( 'Date', 'ubik' ),
    'categories' 	=> esc_html__( 'Categories', 'ubik' ),
    'comments'   	=> esc_html__( 'Comments', 'ubik' ),
	),
  'priority'        => 15,
  'active_callback' => 'ubik_single_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_single_meta_hide_icon',
	'label'           => esc_html__( 'Hide Meta Icons', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => 0,
  'priority'        => 15,
  'active_callback' => 'ubik_single_elements_has_meta',
) );

kirki::add_field( 'ubik_config', array(
	'type'            => 'radio-buttonset',
	'settings'        => 'ubik_single_meta_menu_position',
	'label'           => esc_attr__( 'Menu Position', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => 'left',
	'choices'         => array(
		'left'   	=> 'Left',
		'center' 	=> 'Center',
    'right'		=> 'Right',
  ),
  'priority' 				=> 15,
  'active_callback' => 'ubik_single_elements_has_meta',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_meta_menu_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 15,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.single-meta',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_meta',
) );

function ubik_single_meta_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_meta_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_meta_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 16,
		'active_callback' 		=> 'ubik_single_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_single_meta_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_meta_items_color',
	'label'							=> esc_html__( 'Items', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#929292',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-meta, .single-meta .single-meta__menu a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_single_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_meta_links_hover_color',
	'label'							=> esc_html__( 'Links: Hover', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#1779ba',
  'priority' 				  => 16,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-meta .single-meta__menu a:hover',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'meta',
		),
		array(
      'setting'       => 'ubik_single_meta_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_single_meta_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_meta_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_meta_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 17,
		'active_callback' 		=> 'ubik_single_elements_has_meta',
	) ) );

}
add_action( 'customize_register', 'ubik_single_meta_typography_heading' );

function ubik_single_meta_typography_font_size( $wp_customize ) {

  $wp_customize->add_setting( 'ubik_single_meta_typography_font_size_desktop', array(
    'transport' 					=> 'postMessage',
    'default'           	=> '12',
    'sanitize_callback' 	=> 'ubik_sanitize_number',
  ) );

  $wp_customize->add_setting( 'ubik_single_meta_typography_font_size_tablet', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_setting( 'ubik_single_meta_typography_font_size_mobile', array(
		'transport' 					=> 'postMessage',
    'sanitize_callback' 	=> 'ubik_sanitize_number_blank',
  ) );

  $wp_customize->add_control( new Ubik_Customizer_Responsive_Slider_Control( $wp_customize, 'ubik_single_meta_typography_font_size_desktop', array(
    'label' 						=> esc_html__( 'Font size (px)', 'ubik' ),
    'section'  					=> 'ubik_single_section',
    'settings' 					=> array(
      'desktop' 	=> 'ubik_single_meta_typography_font_size_desktop',
      'tablet' 		=> 'ubik_single_meta_typography_font_size_tablet',
      'mobile' 		=> 'ubik_single_meta_typography_font_size_mobile',
    ),
    'priority' 					=> 17,
    'input_attrs' 			=> array(
			'min'			=> '',
      'max'   	=> '100',
      'step'  	=> '1',
		),
		'active_callback' 	=> 'ubik_single_elements_has_meta_and_meta_typo_on',
  ) ) );

}
add_action( 'customize_register', 'ubik_single_meta_typography_font_size' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_single_meta_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.single-meta',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_single_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_single_meta_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => 'none',
	'choices'         => array(
		'' 			 		 => esc_html__( 'Default', 'ubik' ),
		'none'  	 	 => esc_html__( 'None', 'ubik' ),
		'capitalize' => esc_html__( 'Capitalize', 'ubik' ),
		'lowercase'  => esc_html__( 'Lowercase', 'ubik' ),
		'uppercase'  => esc_html__( 'Uppercase', 'ubik' ),
	),
	'priority'    		=> 17,
	'output' => array(
		array(
			'element'  				=> '.single-meta',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'meta',
		),
		array(
			'setting'       => 'ubik_single_meta_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_single_tags_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_tags_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_tags_options_heading', array(
		'label'    				=> esc_html__( 'Tags Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 18,
		'active_callback' => 'ubik_single_elements_has_tags',
	) ) );

}
add_action( 'customize_register', 'ubik_single_tags_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_tags_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 18,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.single-tags',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_tags',
) );

function ubik_single_tags_color_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_tags_color_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_tags_color_heading', array(
    'label'	   		        => esc_html__( 'Colors', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 19,
		'active_callback' 		=> 'ubik_single_elements_has_tags',
	) ) );

}
add_action( 'customize_register', 'ubik_single_tags_color_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_tags_text_color',
	'label'							=> esc_html__( 'Text', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#929292',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-tags',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'tags',
		),
		array(
      'setting'       => 'ubik_single_tags_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_tags_links_color',
	'label'							=> esc_html__( 'Links', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#333333',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-tags a',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'tags',
		),
		array(
      'setting'       => 'ubik_single_tags_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_single_tags_links_hover_color',
	'label'							=> esc_html__( 'Links:hover', 'ubik' ),
	'section'           => 'ubik_single_section',
  'default'           => '#1779ba',
  'priority' 				  => 19,
  'choices'     			=> array(
		'alpha' 		=> false,
	),
	'output' 						=> array(
		array(
			'element'  => '.single-tags a:hover, .single-tags a:focus',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
	'active_callback' => array(
		array(
      'setting'       => 'ubik_single_elements',
      'operator'      => 'in',
      'value'         => 'tags',
		),
		array(
      'setting'       => 'ubik_single_tags_color_heading',
      'operator'      => '==',
      'value'         => '1',
    ),
  ),
) );

function ubik_single_tags_typography_heading( $wp_customize ) {
	
	$wp_customize->add_setting( 'ubik_single_tags_typography_heading', array(
    'sanitize_callback' 	=> 'ubik_sanitize_switch',
    'default'     		    => 0,
	) );

	$wp_customize->add_control( new Ubik_Customizer_Toggle_Control_Heading_Control( $wp_customize, 'ubik_single_tags_typography_heading', array(
    'label'	   		        => esc_html__( 'Typography', 'ubik' ),
    'section'  				    => 'ubik_single_section',
		'priority' 				    => 20,
		'active_callback' 		=> 'ubik_single_elements_has_tags',
	) ) );

}
add_action( 'customize_register', 'ubik_single_tags_typography_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_single_tags_typography_font_size',
	'label'           => esc_attr__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_single_section',
	'priority' 				=> 20,
	'default'         => 16,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '50',
		'step'  	=> '1',
	),
	'transport'       => 'auto',
	'output' => array(
		array(
			'element'  		=> '.single-tags',
			'property' 		=> 'font-size',
			'units'				=> 'px',
		),
	),
	'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'tags',
		),
		array(
			'setting'       => 'ubik_single_tags_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_single_tags_typography_letter_spacing',
	'description'     => esc_attr__( 'Letter Spacing (px)', 'ubik' ),
	'section'         => 'ubik_single_section',
	'default'         => '0',
	'choices'         => array(
		'min'   => '0',
    'max'		=> '10',
		'step'  => '1',
	),
	'priority'    		=> 20,
	'output' => array(
		array(
			'element'  				=> '.single-tags',
			'property' 				=> 'letter-spacing',
			'units'						=> 'px',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'tags',
		),
		array(
			'setting'       => 'ubik_single_tags_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'select',
	'settings'        => 'ubik_single_tags_typography_text_transform',
	'description'     => esc_attr__( 'Text Transform', 'ubik' ),
	'section'         => 'ubik_single_section',
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
			'element'  				=> '.single-tags',
			'property' 				=> 'text-transform',
		),
	),
  'transport'       => 'auto',
  'active_callback' => array(
		array(
			'setting'       => 'ubik_single_elements',
			'operator'      => 'in',
			'value'         => 'tags',
		),
		array(
			'setting'       => 'ubik_single_tags_typography_heading',
			'operator'      => '==',
			'value'         => '1',
		),
	),
) );

function ubik_single_comments_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_comments_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_comments_options_heading', array(
		'label'    				=> esc_html__( 'Comments Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 21,
		'active_callback' => 'ubik_single_elements_has_single_comments',
	) ) );

}
add_action( 'customize_register', 'ubik_single_comments_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_comments_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 21,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.single-post .comments-area',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_single_comments',
) );

function ubik_single_navigation_options_heading( $wp_customize ) {

	$wp_customize->add_setting( 'ubik_single_navigation_options_heading', array(
		'sanitize_callback' 	=> 'wp_kses',
	) );

	$wp_customize->add_control( new Ubik_Customizer_Heading_Control( $wp_customize, 'ubik_single_navigation_options_heading', array(
		'label'    				=> esc_html__( 'Navigation Options', 'ubik' ),
		'section'  				=> 'ubik_single_section',
		'priority' 				=> 24,
		'active_callback' => 'ubik_single_elements_has_post_nav',
	) ) );

}
add_action( 'customize_register', 'ubik_single_navigation_options_heading' );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_single_navigation_spacing',
	'label'       		=> esc_attr__( 'Spacing', 'ubik' ),
	'section'     		=> 'ubik_single_section',
	'default'     		=> array(
		'top'    => '10px',
		'bottom' => '10px',
		'left'   => '0px',
		'right'  => '0px',
	),
	'priority'    		=> 24,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.post-navigation',
      'property' => 'margin',
    ),
	),
	'active_callback' => 'ubik_single_elements_has_post_nav',
) );


/** Scroll top section */

Kirki::add_section( 'ubik_general_scroll_top_section', array(
  'title'       => 'Scroll to Top',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'toggle',
	'settings'        => 'ubik_scroll_top_deactivate',
	'label'           => esc_html__( 'Deactivate Scroll to Top', 'ubik' ),
	'section'         => 'ubik_general_scroll_top_section',
	'default'         => '0',
  'priority'        => 10,
) );

Kirki::add_field('ubik_config', array(
	'type'            => 'text',
	'settings'        => 'ubik_scroll_top_icon',
  'label'           => esc_attr__( 'Icon', 'ubik' ),
  'description'	    => sprintf( esc_html__( 'Enter the full icon class: %1$sfontawsome%2$s', 'ubik' ), '<a href="https://fontawesome.com" target="_blank">', '</a>' ),
  'section'         => 'ubik_general_scroll_top_section',
  'default'         => 'fas fa-angle-up',
	'priority'        => 10,
));


/** Search form section */

Kirki::add_section( 'ubik_general_search_form_section', array(
  'title'       => 'Search Form',
  'panel'       => 'ubik_general_panel',
  'priority'    => 160,
));

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_general_search_form_height',
	'label'           => esc_attr__( 'Form Height (px)', 'ubik' ),
	'section'         => 'ubik_general_search_form_section',
	'priority' 				=> 10,
	'default'         => 40,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '100',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.search-form input',
			'property' 		=> 'height',
			'units'				=> 'px',
		),
	),
	'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'            => 'slider',
	'settings'        => 'ubik_general_search_form_font_size',
	'label'           => esc_attr__( 'Font Size (px)', 'ubik' ),
	'section'         => 'ubik_general_search_form_section',
	'priority' 				=> 10,
	'default'         => 16,
	'choices'         => array(
		'min'   	=> '0',
		'max'   	=> '50',
		'step'  	=> '1',
	),
	'output' => array(
		array(
			'element'  		=> '.search-form input',
			'property' 		=> 'font-size',
			'units'				=> 'px',
		),
	),
	'transport'       => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'        		=> 'spacing',
	'settings'    		=> 'ubik_general_search_form_padding',
	'label'       		=> esc_attr__( 'Form Padding', 'ubik' ),
	'section'     		=> 'ubik_general_search_form_section',
	'default'     		=> array(
		'top'    => '7px',
		'bottom' => '7px',
		'left'   => '7px',
		'right'  => '7px',
	),
	'priority'    		=> 10,
	'transport' 			=> 'auto',
  'output'    			=> array(
    array(
      'element'  => '.search-form input',
      'property' => 'padding',
    ),
	),
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'dimensions',
	'settings'          => 'ubik_general_search_form_border_width_radius',
	'label'							=> 'Form Border Width - Border Radius',
	'section'           => 'ubik_general_search_form_section',
	'priority' 				  => 10,
	'default'     			=> array(
		'border-width'  				=> '1px',
		'border-radius' 				=> '3px',
	),
  'choices'     			=> array(
		'border-width' 					=> esc_attr__( 'Border Width', 'ubik' ),
    'border-radius' 				=> esc_attr__( 'Border Radius', 'ubik' ),
	),
	'output' => array(
		array(
			'choice'      	=> 'border-width',
			'element'  			=> '.search-form input',
			'property' 			=> 'border-width',
		),
		array(
			'choice'      	=> 'border-radius',
			'element'  			=> '.search-form input',
			'property' 			=> 'border-radius',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_border_color',
	'description'				=> esc_attr__( 'Border Color', 'ubik' ),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form input',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_border_focus_color',
	'description'				=> esc_attr__( 'Border Color: Focus', 'ubik' ),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#e9e9e9',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form input:focus',
			'property' 			=> 'border-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_bg_color',
	'description'				=> esc_attr__( 'Background Color', 'ubik'),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#fefefe',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form input, .search-form input:focus',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_text_color',
	'description'				=> esc_attr__( 'Text Color', 'ubik'),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#0a0a0a',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form input, .search-form input::placeholder',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_button_bg_color',
	'description'				=> esc_attr__( 'Search Button Background Color', 'ubik'),
	'section'           => 'ubik_general_search_form_section',
  'default'           => 'rgba(255,255,255,0)',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form button',
			'property' 			=> 'background-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_icon_color',
	'description'				=> esc_attr__( 'Search Icon Color', 'ubik'),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#929292',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form button',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'ubik_config', array(
	'type'              => 'color',
	'settings'          => 'ubik_general_search_form_icon_hover_focus_color',
	'description'				=> esc_attr__( 'Search Icon Color: Hover', 'ubik'),
	'section'           => 'ubik_general_search_form_section',
  'default'           => '#1779ba',
  'priority' 				  => 11,
  'choices'     			=> array(
		'alpha' => true,
	),
	'output' => array(
		array(
			'element'  			=> '.search-form button:hover, .search-form button:focus',
			'property' 			=> 'color',
		),
	),
	'transport' => 'auto',
) );




/*-------------------------------------------------------------------------------*/
/* [ Active callbacks ]
/*-------------------------------------------------------------------------------*/

/**
 * [ Table of contents ]
 * 
 * ubik_blog_style_is_classic()
 * ubik_classic_entry_elements_has_featured_image()
 * ubik_classic_entry_elements_has_title()
 * ubik_classic_entry_elements_has_title_and_title_typo_on()
 * ubik_classic_entry_elements_has_meta()
 * ubik_classic_entry_elements_has_meta_and_meta_typo_on()
 * ubik_classic_entry_elements_has_content()
 * ubik_classic_entry_elements_has_read_more()
 * ubik_blog_style_is_card()
 * ubik_card_entry_elements_has_featured_image()
 * ubik_card_entry_elements_has_title()
 * ubik_card_entry_elements_has_title_and_title_typo_on()
 * ubik_card_entry_elements_has_meta()
 * ubik_card_entry_elements_has_meta_and_meta_typo_on()
 * ubik_card_entry_elements_has_content()
 * ubik_card_entry_elements_has_read_more()
 * ubik_blog_style_is_h_card()
 * ubik_h_card_entry_elements_has_featured_image()
 * ubik_h_card_entry_elements_has_title()
 * ubik_h_card_entry_elements_has_title_and_title_typo_on()
 * ubik_h_card_entry_elements_has_meta()
 * ubik_h_card_entry_elements_has_meta_and_meta_typo_on()
 * ubik_h_card_entry_elements_has_content()
 * ubik_h_card_entry_elements_has_read_more()
 * ubik_h_card_entry_image_show_title_is_true()
 * ubik_h_card_entry_image_show_title_is_true_and_typo_on()
 * 
 * ubik_single_elements_has_featured_image()
 * ubik_single_elements_has_title()
 * ubik_single_elements_has_title_and_title_typo_on()
 * ubik_single_elements_has_tags()
 * ubik_single_elements_has_tags_and_tags_typo_on()
 * ubik_single_elements_has_single_comments()
 * ubik_single_elements_has_post_nav()
 * 
 */

function ubik_blog_style_is_classic() {
	return ( 'classic' == get_theme_mod( 'ubik_blog_style', 'classic' ) ) ? true : false;
}

function ubik_classic_entry_elements_has_featured_image() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'featured_image', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_title() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_title_and_title_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'title', $elements ) && '1' == get_theme_mod('ubik_classic_entry_title_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_meta() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'meta', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_meta_and_meta_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'meta', $elements ) && '1' == get_theme_mod('ubik_classic_entry_meta_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_content() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'content', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_classic_entry_elements_has_read_more() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_classic_entry_elements', $array );
	if ( ubik_blog_style_is_classic() && in_array( 'read_more', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_blog_style_is_card() {
	return ( 'card' == get_theme_mod( 'ubik_blog_style', 'classic' ) ) ? true : false;
}

function ubik_card_entry_elements_has_featured_image() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'featured_image', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_title() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_title_and_title_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'title', $elements ) && '1' == get_theme_mod('ubik_card_entry_title_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_meta() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'meta', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_meta_and_meta_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'meta', $elements ) && '1' == get_theme_mod('ubik_card_entry_meta_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_content() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'content', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_card_entry_elements_has_read_more() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_card_entry_elements', $array );
	if ( ubik_blog_style_is_card() && in_array( 'read_more', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_blog_style_is_h_card() {
	if ( 'h-card' == get_theme_mod( 'ubik_blog_style', 'classic' ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_featured_image() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'featured_image', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_title() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_title_and_title_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'title', $elements ) && '1' == get_theme_mod('ubik_h_card_entry_title_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_meta() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'meta', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_meta_and_meta_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'meta', $elements ) && '1' == get_theme_mod('ubik_h_card_entry_meta_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_content() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'content', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_elements_has_read_more() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'read_more' );
	$elements = get_theme_mod( 'ubik_h_card_entry_elements', $array );
	if ( ubik_blog_style_is_h_card() && in_array( 'read_more', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_image_show_title_is_true() {
	if ( 'h-card' == get_theme_mod( 'ubik_blog_style', 'classic' ) && true == get_theme_mod( 'ubik_h_card_entry_image_title_display', false ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_h_card_entry_image_show_title_is_true_and_typo_on() {
	if ( 'h-card' == get_theme_mod( 'ubik_blog_style', 'classic' ) && true == get_theme_mod( 'ubik_h_card_entry_image_title_display', false ) && '1' == get_theme_mod('ubik_h_card_entry_image_title_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_featured_image() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'featured_image', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_title() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'title', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_title_and_title_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'title', $elements ) && '1' == get_theme_mod('ubik_single_title_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_meta() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'meta', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_meta_and_meta_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'meta', $elements ) && '1' == get_theme_mod('ubik_single_meta_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_tags() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'tags', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_tags_and_tags_typo_on() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'tags', $elements ) && '1' == get_theme_mod('ubik_single_tags_typography_heading','0') ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_single_comments() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'single_comments', $elements ) ) {
		return true;
	} else {
		return false;
	}
}

function ubik_single_elements_has_post_nav() {
	$array = array( 'featured_image', 'title', 'meta', 'content', 'tags', 'post_nav', 'single_comments' );
	$elements = get_theme_mod( 'ubik_single_elements', $array );
	if ( in_array( 'post_nav', $elements ) ) {
		return true;
	} else {
		return false;
	}
}
