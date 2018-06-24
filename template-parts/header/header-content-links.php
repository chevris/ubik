<?php
/**
 * Header content links template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<?php
// Default links
$defaults = array(
  array(
    'link_custom_text' 											=> '',
    'link_custom_url'  											=> '',
    'link_custom_icon'											=> '',
    'link_custom_borders_style' 						=> 'solid',
    'link_custom_borders_width' 						=> '2',
    'link_custom_borders_radius' 						=> '5',
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
);

// Theme_mod settings to check.
$settings = get_theme_mod( 'ubik_header_content_links_custom_repeater', $defaults );

if ( $settings ) :

  foreach( $settings as $setting ) : 

    $text  = ( isset( $setting['link_custom_text'] ) ) ? $setting['link_custom_text'] : '';
    $url = ( isset( $setting['link_custom_url'] ) ) ? $setting['link_custom_url'] : '';
    $icon = ( isset( $setting['link_custom_icon'] ) ) ? $setting['link_custom_icon'] : '';
    ?>
    
    <a id="header-content-link-<?php echo esc_attr( str_replace( ' ', '_', $text ) ); ?>" href="<?php echo esc_url( $url ); ?>">
      <span class="<?php echo esc_attr( $icon ); ?>"></span>
      <?php echo esc_html( $text ); ?>
    </a>
          
  <?php endforeach;

endif;
?>

