<?php
/**
 * This file includes helper functions used for header.
 *
 * @package Ubik WordPress theme
 */

/*-------------------------------------------------------------------------------*/
/* [ Table of contents ]
/*-------------------------------------------------------------------------------*/

# ubik_mobile_bar_template()
# ubik_header_template()
# ubik_top_bar_template()
# ubik_classic_vertical_bar_template()
# ubik_sidebar_template()
# ubik_footer_template()

# ubik_general_css()
# ubik_header_css()
# ubik_top_bar_css()
# ubik_classic_vertical_bar_css()
# ubik_sidebar_css()
# ubik_footer_css()

/*-------------------------------------------------------------------------------*/
/* [ Fonctions ]
/*-------------------------------------------------------------------------------*/

/**
 * Mobile bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_mobile_bar_template' ) ) {
	
	function ubik_mobile_bar_template() {

		if ( ubik_mobile_bar_display() ) {

			get_template_part( 'template-parts/mobile/mobile-bar' );

		}

  }
  
  add_action( 'ubik_mobile_bar', 'ubik_mobile_bar_template' );
	
}

/**
* Header template
*
* @since 1.0.0
*/

if ( ! function_exists( 'ubik_header_template' ) ) {

	function ubik_header_template() {

		if ( ubik_frontpage_header_display() ) {

      if ( 'no-header' == ubik_frontpage_header_format() ) {

				return;

			} else {

				get_template_part( 'template-parts/header/frontpage/frontpage-layout' );

			}

		} elseif ( ubik_header_display() ) {

			get_template_part( 'template-parts/header/layout' );

		}

	}

	add_action( 'ubik_header', 'ubik_header_template' );

}

/**
 * Top bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_template' ) ) {
	
	function ubik_top_bar_template() {

		// return if no specific front page top bar and no global top bar
		if ( ! ubik_frontpage_top_bar_display() && ! ubik_top_bar_display() ) {
			return;
		}

		if ( ubik_frontpage_top_bar_display() ) {

      if ( ubik_frontpage_no_top_bar_display() ) {

				return;

			} else {

				get_template_part( 'template-parts/top-bar/frontpage/frontpage-top-bar' );

			}

		} elseif ( ubik_top_bar_display() ) {

			get_template_part( 'template-parts/top-bar/top-bar' );
		
		}

  }
  
  add_action( 'ubik_top_bar', 'ubik_top_bar_template' );
	
}

/**
 * Classic vertical bar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_template' ) ) {
	
	function ubik_classic_vertical_bar_template() {

		// return if no specific front page classic vertical bar and no global classic vertical bar
		if ( ! ubik_frontpage_classic_vertical_bar_display() && ! ubik_classic_vertical_bar_display() ) {
			return;
		}

		if ( ubik_frontpage_classic_vertical_bar_display() ) {

      if ( ubik_frontpage_no_vertical_bar_display() ) {

        return;

      } else {

        get_template_part( 'template-parts/vertical-bar/classic/frontpage/frontpage-classic-vertical-bar' );

      }

		} elseif ( ubik_classic_vertical_bar_display() ) {

			get_template_part( 'template-parts/vertical-bar/classic/classic-vertical-bar' );
		
		}

  }
  
  add_action( 'ubik_classic_vertical_bar', 'ubik_classic_vertical_bar_template' );
	
}

/**
 * Sidebar template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_template' ) ) {
	
	function ubik_sidebar_template() {

		// return if no specific front page sidebar and no global sidebar
		if ( ! ubik_frontpage_sidebar_display() && ! ubik_sidebar_display() ) {
			return;
		}

		if ( ubik_frontpage_sidebar_display() ) {

      if ( ubik_frontpage_no_sidebar_display() ) {

				return;

			} else {

				get_sidebar( 'frontpage' );

			}

		} elseif ( ubik_sidebar_display() ) {

			get_sidebar();
		
		}

  }
  
  add_action( 'ubik_sidebar', 'ubik_sidebar_template' );
	
}

/**
 * Footer template
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_template' ) ) {
	
	function ubik_footer_template() {

		// return if no specific front page footer and no global footer
		if ( ! ubik_frontpage_footer_display() && ! ubik_footer_display() ) {
			return;
		}

		if ( ubik_frontpage_footer_display() ) {

      if ( ubik_frontpage_no_footer_display() ) {

				return;

			} else {

				get_template_part( 'template-parts/footer/frontpage/frontpage-layout' );

			}

		} elseif ( ubik_footer_display() ) {

			get_template_part( 'template-parts/footer/layout' );
		
		}

  }
  
  add_action( 'ubik_footer', 'ubik_footer_template' );
	
}


/**
 * Outputs general custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_general_css' ) ) {
  
  function ubik_general_css( $output ) {

		// Vars
		$blog_style	= ubik_blog_style();
		
		$h1_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h1_font_size_desktop', '48' );
		$h1_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h1_font_size_tablet', '48' );
		$h1_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h1_font_size_mobile', '24' );
		$h2_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h2_font_size_desktop', '40' );
		$h2_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h2_font_size_tablet', '40' );
		$h2_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h2_font_size_mobile', '20' );
		$h3_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h3_font_size_desktop', '31' );
		$h3_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h3_font_size_tablet', '31' );
		$h3_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h3_font_size_mobile', '19' );
		$h4_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h4_font_size_desktop', '25' );
		$h4_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h4_font_size_tablet', '25' );
		$h4_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h4_font_size_mobile', '18' );
		$h5_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h5_font_size_desktop', '20' );
		$h5_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h5_font_size_tablet', '20' );
		$h5_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h5_font_size_mobile', '17' );
		$h6_font_size_desktop	= get_theme_mod( 'ubik_typography_headings_h6_font_size_desktop', '16' );
		$h6_font_size_tablet	= get_theme_mod( 'ubik_typography_headings_h6_font_size_tablet', '16' );
		$h6_font_size_mobile	= get_theme_mod( 'ubik_typography_headings_h6_font_size_mobile', '16' );

		$single_title_font_size_desktop	= get_theme_mod( 'ubik_single_title_typography_font_size_desktop', '40' );
		$single_title_font_size_tablet	= get_theme_mod( 'ubik_single_title_typography_font_size_tablet', '40' );
		$single_title_font_size_mobile	= get_theme_mod( 'ubik_single_title_typography_font_size_mobile', '20' );
		$single_meta_font_size_desktop	= get_theme_mod( 'ubik_single_meta_typography_font_size_desktop', '12' );
		$single_meta_font_size_tablet	= get_theme_mod( 'ubik_single_meta_typography_font_size_tablet' );
		$single_meta_font_size_mobile	= get_theme_mod( 'ubik_single_meta_typography_font_size_mobile' );
		
		$css = '';

		// H1 font size
		if ( ! empty( $h1_font_size_desktop ) ) {
			$css .= 'h1{font-size:'. esc_attr( $h1_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h1_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h1{font-size:'. esc_attr( $h1_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h1_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h1{font-size:'. esc_attr( $h1_font_size_mobile ) .'px;}}';
		}

		// H2 font size
		if ( ! empty( $h2_font_size_desktop ) ) {
			$css .= 'h2{font-size:'. esc_attr( $h2_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h2_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h2{font-size:'. esc_attr( $h2_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h2_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h2{font-size:'. esc_attr( $h2_font_size_mobile ) .'px;}}';
		}

		// H3 font size
		if ( ! empty( $h3_font_size_desktop ) ) {
			$css .= 'h3{font-size:'. esc_attr( $h3_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h3_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h3{font-size:'. esc_attr( $h3_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h3_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h3{font-size:'. esc_attr( $h3_font_size_mobile ) .'px;}}';
		}

		// H4 font size
		if ( ! empty( $h4_font_size_desktop ) ) {
			$css .= 'h4{font-size:'. esc_attr( $h4_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h4_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h4{font-size:'. esc_attr( $h4_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h4_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h4{font-size:'. esc_attr( $h4_font_size_mobile ) .'px;}}';
		}

		// H5 font size
		if ( ! empty( $h5_font_size_desktop ) ) {
			$css .= 'h5{font-size:'. esc_attr( $h5_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h5_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h5{font-size:'. esc_attr( $h5_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h5_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h5{font-size:'. esc_attr( $h5_font_size_mobile ) .'px;}}';
		}

		// H6 font size
		if ( ! empty( $h6_font_size_desktop ) ) {
			$css .= 'h6{font-size:'. esc_attr( $h6_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $h6_font_size_tablet ) ) {
			$css .= '@media screen and (max-width: 63.9375em) {h6{font-size:'. esc_attr( $h6_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $h6_font_size_mobile ) ) {
			$css .= '@media screen and (max-width: 39.9375em) {h6{font-size:'. esc_attr( $h6_font_size_mobile ) .'px;}}';
		}

		// Classic style
		if ( 'classic' == $blog_style ) {

			// vars
			$classic_entry_title_font_size_desktop	= get_theme_mod( 'ubik_classic_entry_title_typography_font_size_desktop', '30' );
			$classic_entry_title_font_size_tablet	= get_theme_mod( 'ubik_classic_entry_title_typography_font_size_tablet', '30' );
			$classic_entry_title_font_size_mobile	= get_theme_mod( 'ubik_classic_entry_title_typography_font_size_mobile', '20' );
			$classic_entry_meta_font_size_desktop	= get_theme_mod( 'ubik_classic_entry_meta_typography_font_size_desktop', '12' );
			$classic_entry_meta_font_size_tablet	= get_theme_mod( 'ubik_classic_entry_meta_typography_font_size_tablet' );
			$classic_entry_meta_font_size_mobile	= get_theme_mod( 'ubik_classic_entry_meta_typography_font_size_mobile' );

			// Entry title font size
			if ( ! empty( $classic_entry_title_font_size_desktop ) && '1' == get_theme_mod('ubik_classic_entry_title_typography_heading','0') ) {
				$css .= '.classic-entry .entry-title h2{font-size:'. esc_attr( $classic_entry_title_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $classic_entry_title_font_size_tablet ) && '1' == get_theme_mod('ubik_classic_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.classic-entry .entry-title h2{font-size:'. esc_attr( $classic_entry_title_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $classic_entry_title_font_size_mobile ) && '1' == get_theme_mod('ubik_classic_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.classic-entry .entry-title h2{font-size:'. esc_attr( $classic_entry_title_font_size_mobile ) .'px;}}';
			}

			// Entry meta font size
			if ( ! empty( $classic_entry_meta_font_size_desktop ) && '1' == get_theme_mod('ubik_classic_entry_meta_typography_heading','0') ) {
				$css .= '.classic-entry .entry-meta{font-size:'. esc_attr( $classic_entry_meta_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $classic_entry_meta_font_size_tablet ) && '1' == get_theme_mod('ubik_classic_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.classic-entry .entry-meta{font-size:'. esc_attr( $classic_entry_meta_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $classic_entry_meta_font_size_mobile ) && '1' == get_theme_mod('ubik_classic_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.classic-entry .entry-meta{font-size:'. esc_attr( $classic_entry_meta_font_size_mobile ) .'px;}}';
			}

		}

		// Cards style
		if ( 'card' == $blog_style ) {

			// vars
			$card_entry_title_font_size_desktop	= get_theme_mod( 'ubik_card_entry_title_typography_font_size_desktop', '26' );
			$card_entry_title_font_size_tablet	= get_theme_mod( 'ubik_card_entry_title_typography_font_size_tablet', '26' );
			$card_entry_title_font_size_mobile	= get_theme_mod( 'ubik_card_entry_title_typography_font_size_mobile', '20' );
			$card_entry_meta_font_size_desktop	= get_theme_mod( 'ubik_card_entry_meta_typography_font_size_desktop', '12' );
			$card_entry_meta_font_size_tablet	= get_theme_mod( 'ubik_card_entry_meta_typography_font_size_tablet' );
			$card_entry_meta_font_size_mobile	= get_theme_mod( 'ubik_card_entry_meta_typography_font_size_mobile' );

			// Entry title font size
			if ( ! empty( $card_entry_title_font_size_desktop ) && '1' == get_theme_mod('ubik_card_entry_title_typography_heading','0') ) {
				$css .= '.card-entry .entry-title h2{font-size:'. esc_attr( $card_entry_title_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $card_entry_title_font_size_tablet ) && '1' == get_theme_mod('ubik_card_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.card-entry .entry-title h2{font-size:'. esc_attr( $card_entry_title_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $card_entry_title_font_size_mobile ) && '1' == get_theme_mod('ubik_card_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.card-entry .entry-title h2{font-size:'. esc_attr( $card_entry_title_font_size_mobile ) .'px;}}';
			}

			// Entry meta font size
			if ( ! empty( $card_entry_meta_font_size_desktop ) && '1' == get_theme_mod('ubik_card_entry_meta_typography_heading','0') ) {
				$css .= '.card-entry .entry-meta{font-size:'. esc_attr( $card_entry_meta_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $card_entry_meta_font_size_tablet ) && '1' == get_theme_mod('ubik_card_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.card-entry .entry-meta{font-size:'. esc_attr( $card_entry_meta_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $card_entry_meta_font_size_mobile ) && '1' == get_theme_mod('ubik_card_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.card-entry .entry-meta{font-size:'. esc_attr( $card_entry_meta_font_size_mobile ) .'px;}}';
			}

		}
		
		// horizontal cards style
		if ( 'h-card' == $blog_style ) {

			// vars
			$h_card_height_desktop	= get_theme_mod( 'ubik_h_card_entry_height_desktop', '200' );
			$h_card_height_tablet	= get_theme_mod( 'ubik_h_card_entry_height_tablet', '200' );
			$h_card_height_mobile	= get_theme_mod( 'ubik_h_card_entry_height_mobile', '100' );
			$h_card_custom_height_desktop	= get_theme_mod( 'ubik_h_card_entry_custom_height_desktop' );
			$h_card_custom_height_tablet	= get_theme_mod( 'ubik_h_card_entry_custom_height_tablet' );
			$h_card_custom_height_mobile	= get_theme_mod( 'ubik_h_card_entry_custom_height_mobile' );

			$h_card_image_width_desktop	= get_theme_mod( 'ubik_h_card_entry_image_width_desktop', '40' );
			$h_card_image_width_tablet	= get_theme_mod( 'ubik_h_card_entry_image_width_tablet' );
			$h_card_image_width_mobile	= get_theme_mod( 'ubik_h_card_entry_image_width_mobile' );

			$h_card_top_margin = get_theme_mod( 'ubik_h_card_entry_top_margin', '0' );
			$h_card_right_margin = get_theme_mod( 'ubik_h_card_entry_right_margin', '0' );
			$h_card_bottom_margin = get_theme_mod( 'ubik_h_card_entry_bottom_margin', '0' );
			$h_card_left_margin = get_theme_mod( 'ubik_h_card_entry_left_margin', '0' );
			$h_card_top_margin_tablet = get_theme_mod( 'ubik_h_card_entry_tablet_top_margin' );
			$h_card_right_margin_tablet = get_theme_mod( 'ubik_h_card_entry_tablet_right_margin' );
			$h_card_bottom_margin_tablet = get_theme_mod( 'ubik_h_card_entry_tablet_bottom_margin' );
			$h_card_left_margin_tablet = get_theme_mod( 'ubik_h_card_entry_tablet_left_margin' );
			$h_card_top_margin_mobile = get_theme_mod( 'ubik_h_card_entry_mobile_top_margin' );
			$h_card_right_margin_mobile = get_theme_mod( 'ubik_h_card_entry_mobile_right_margin' );
			$h_card_bottom_margin_mobile = get_theme_mod( 'ubik_h_card_entry_mobile_bottom_margin' );
			$h_card_left_margin_mobile = get_theme_mod( 'ubik_h_card_entry_mobile_left_margin' );

			$h_card_entry_title_font_size_desktop	= get_theme_mod( 'ubik_h_card_entry_title_typography_font_size_desktop', '18' );
			$h_card_entry_title_font_size_tablet	= get_theme_mod( 'ubik_h_card_entry_title_typography_font_size_tablet' );
			$h_card_entry_title_font_size_mobile	= get_theme_mod( 'ubik_h_card_entry_title_typography_font_size_mobile' );
			$h_card_entry_meta_font_size_desktop	= get_theme_mod( 'ubik_h_card_entry_meta_typography_font_size_desktop', '12' );
			$h_card_entry_meta_font_size_tablet	= get_theme_mod( 'ubik_h_card_entry_meta_typography_font_size_tablet' );
			$h_card_entry_meta_font_size_mobile	= get_theme_mod( 'ubik_h_card_entry_meta_typography_font_size_mobile' );

			$h_card_image_title_top_padding = get_theme_mod( 'ubik_h_card_entry_image_title_top_padding', '0' );
			$h_card_image_title_right_padding = get_theme_mod( 'ubik_h_card_entry_image_title_right_padding', '0' );
			$h_card_image_title_bottom_padding = get_theme_mod( 'ubik_h_card_entry_image_title_bottom_padding', '0' );
			$h_card_image_title_left_padding = get_theme_mod( 'ubik_h_card_entry_image_title_left_padding', '0' );
			$h_card_image_title_top_padding_tablet = get_theme_mod( 'ubik_h_card_entry_image_title_tablet_top_padding' );
			$h_card_image_title_right_padding_tablet = get_theme_mod( 'ubik_h_card_entry_image_title_tablet_right_padding' );
			$h_card_image_title_bottom_padding_tablet = get_theme_mod( 'ubik_h_card_entry_image_title_tablet_bottom_padding' );
			$h_card_image_title_left_padding_tablet = get_theme_mod( 'ubik_h_card_entry_image_title_tablet_left_padding' );
			$h_card_image_title_top_padding_mobile = get_theme_mod( 'ubik_h_card_entry_image_title_mobile_top_padding' );
			$h_card_image_title_right_padding_mobile = get_theme_mod( 'ubik_h_card_entry_image_title_mobile_right_padding' );
			$h_card_image_title_bottom_padding_mobile = get_theme_mod( 'ubik_h_card_entry_image_title_mobile_bottom_padding' );
			$h_card_image_title_left_padding_mobile = get_theme_mod( 'ubik_h_card_entry_image_title_mobile_left_padding' );
			$h_card_entry_image_title_font_size_desktop	= get_theme_mod( 'ubik_h_card_entry_image_title_typography_font_size_desktop', '18' );
			$h_card_entry_image_title_font_size_tablet	= get_theme_mod( 'ubik_h_card_entry_image_title_typography_font_size_tablet' );
			$h_card_entry_image_title_font_size_mobile	= get_theme_mod( 'ubik_h_card_entry_image_title_typography_font_size_mobile' );

			// horizontal cards min height
			if ( ! empty( $h_card_height_desktop ) && '200' != $h_card_height_desktop ) {
				$css .= '.h-card-entry{min-height:'. esc_attr( $h_card_height_desktop ) .'px;}';
			}
			if ( ! empty( $h_card_height_tablet ) ) {
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.h-card-entry{min-height:'. esc_attr( $h_card_height_tablet ) .'px;}}';
			}
			if ( ! empty( $h_card_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry{min-height:'. esc_attr( $h_card_height_mobile ) .'px;}}';
			}

			// horizontal cards custom height
			if ( ! empty( $h_card_custom_height_desktop ) ) {
				$css .= '.h-card-entry{height:'. esc_attr( $h_card_custom_height_desktop ) .'px;}';
			}
			if ( ! empty( $h_card_custom_height_tablet ) ) {
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.h-card-entry{height:'. esc_attr( $h_card_custom_height_tablet ) .'px;}}';
			}
			if ( ! empty( $h_card_custom_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry{height:'. esc_attr( $h_card_custom_height_mobile ) .'px;}}';
			}

			// horizontal cards image width
			if ( ! empty( $h_card_image_width_desktop ) && '40' != $h_card_image_width_desktop ) {
				$css .= '.h-card-entry__img{width:'. esc_attr( $h_card_image_width_desktop ) .'%;}';
				$css .= '.h-card-entry__stacked{width:calc(100% - '. esc_attr( $h_card_image_width_desktop ) .'%);}';
			}
			if ( ! empty( $h_card_image_width_tablet ) ) {
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.h-card-entry__img{width:'. esc_attr( $h_card_image_width_tablet ) .'%;}}';
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.h-card-entry__stacked{width:calc(100% - '. esc_attr( $h_card_image_width_tablet ) .'%);}}';
			}
			if ( ! empty( $h_card_image_width_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry__img{width:'. esc_attr( $h_card_image_width_mobile ) .'%;}}';
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry__stacked{width:calc(100% - '. esc_attr( $h_card_image_width_mobile ) .'%);}}';
			}

			// horizontal cards margins
			if ( isset( $h_card_top_margin ) && '0' != $h_card_top_margin && '' != $h_card_top_margin
				|| isset( $h_card_right_margin ) && '0' != $h_card_right_margin && '' != $h_card_right_margin
				|| isset( $h_card_bottom_margin ) && '0' != $h_card_bottom_margin && '' != $h_card_bottom_margin
				|| isset( $h_card_left_margin ) && '0' != $h_card_left_margin && '' != $h_card_left_margin ) {
				$css .= '.h-card-entry{margin:'. esc_attr( ubik_spacing_css( $h_card_top_margin, $h_card_right_margin, $h_card_bottom_margin, $h_card_left_margin ) ) .'}';
			}
			if ( isset( $h_card_top_margin_tablet ) && '' != $h_card_top_margin_tablet
				|| isset( $h_card_right_margin_tablet ) && '' != $h_card_right_margin_tablet
				|| isset( $h_card_bottom_margin_tablet ) && '' != $h_card_bottom_margin_tablet
				|| isset( $h_card_left_margin_tablet ) && '' != $h_card_left_margin_tablet ) {
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.h-card-entry{margin:'. esc_attr( ubik_spacing_css( $h_card_top_margin_tablet, $h_card_right_margin_tablet, $h_card_bottom_margin_tablet, $h_card_left_margin_tablet ) ) .'}}';
			}
			if ( isset( $h_card_top_margin_mobile ) && '' != $h_card_top_margin_mobile
				|| isset( $h_card_right_margin_mobile ) && '' != $h_card_right_margin_mobile
				|| isset( $h_card_bottom_margin_mobile ) && '' != $h_card_bottom_margin_mobile
				|| isset( $h_card_left_margin_mobile ) && '' != $h_card_left_margin_mobile ) {
				$css .= '@media screen and (max-width: 39.9375em){.h-card-entry{margin:'. esc_attr( ubik_spacing_css( $h_card_top_margin_mobile, $h_card_right_margin_mobile, $h_card_bottom_margin_mobile, $h_card_left_margin_mobile ) ) .'}}';
			}

			// Entry title font size
			if ( ! empty( $h_card_entry_title_font_size_desktop ) && '1' == get_theme_mod('ubik_h_card_entry_title_typography_heading','0') ) {
				$css .= '.h-card-entry__stacked .entry-title h2{font-size:'. esc_attr( $h_card_entry_title_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $h_card_entry_title_font_size_tablet ) && '1' == get_theme_mod('ubik_h_card_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.h-card-entry__stacked .entry-title h2{font-size:'. esc_attr( $h_card_entry_title_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $h_card_entry_title_font_size_mobile ) && '1' == get_theme_mod('ubik_h_card_entry_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry__stacked .entry-title h2{font-size:'. esc_attr( $h_card_entry_title_font_size_mobile ) .'px;}}';
			}

			// Entry meta font size
			if ( ! empty( $h_card_entry_meta_font_size_desktop ) && '1' == get_theme_mod('ubik_h_card_entry_meta_typography_heading','0') ) {
				$css .= '.h-card-entry__stacked .entry-meta{font-size:'. esc_attr( $h_card_entry_meta_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $h_card_entry_meta_font_size_tablet ) && '1' == get_theme_mod('ubik_h_card_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.h-card-entry__stacked .entry-meta{font-size:'. esc_attr( $h_card_entry_meta_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $h_card_entry_meta_font_size_mobile ) && '1' == get_theme_mod('ubik_h_card_entry_meta_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry__stacked .entry-meta{font-size:'. esc_attr( $h_card_entry_meta_font_size_mobile ) .'px;}}';
			}

			// horizontal cards image title padding
			if ( isset( $h_card_image_title_top_padding ) && '' != $h_card_image_title_top_padding
				|| isset( $h_card_image_title_right_padding ) && '' != $h_card_image_title_right_padding
				|| isset( $h_card_image_title_bottom_padding ) && '' != $h_card_image_title_bottom_padding
				|| isset( $h_card_image_title_left_padding ) && '' != $h_card_image_title_left_padding ) {
				$css .= '.h-card-entry__img .entry-img-inner-content .entry-image-title{padding:'. esc_attr( ubik_spacing_css( $h_card_image_title_top_padding, $h_card_image_title_right_padding, $h_card_image_title_bottom_padding, $h_card_image_title_left_padding ) ) .'}';
			}
			if ( isset( $h_card_image_title_top_padding_tablet ) && '' != $h_card_image_title_top_padding_tablet
				|| isset( $h_card_image_title_right_padding_tablet ) && '' != $h_card_image_title_right_padding_tablet
				|| isset( $h_card_image_title_bottom_padding_tablet ) && '' != $h_card_image_title_bottom_padding_tablet
				|| isset( $h_card_image_title_left_padding_tablet ) && '' != $h_card_image_title_left_padding_tablet ) {
				$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.h-card-entry__img .entry-img-inner-content .entry-image-title{padding:'. esc_attr( ubik_spacing_css( $h_card_image_title_top_padding_tablet, $h_card_image_title_right_padding_tablet, $h_card_image_title_bottom_padding_tablet, $h_card_image_title_left_padding_tablet ) ) .'}}';
			}
			if ( isset( $h_card_image_title_top_padding_mobile ) && '' != $h_card_image_title_top_padding_mobile
				|| isset( $h_card_image_title_right_padding_mobile ) && '' != $h_card_image_title_right_padding_mobile
				|| isset( $h_card_image_title_bottom_padding_mobile ) && '' != $h_card_image_title_bottom_padding_mobile
				|| isset( $h_card_image_title_left_padding_mobile ) && '' != $h_card_image_title_left_padding_mobile ) {
				$css .= '@media screen and (max-width: 39.9375em){.h-card-entry__img .entry-img-inner-content .entry-image-title{padding:'. esc_attr( ubik_spacing_css( $h_card_image_title_top_padding_mobile, $h_card_image_title_right_padding_mobile, $h_card_image_title_bottom_padding_mobile, $h_card_image_title_left_padding_mobile ) ) .'}}';
			}

			// horizontal cards image title font size
			if ( ! empty( $h_card_entry_image_title_font_size_desktop ) && '1' == get_theme_mod('ubik_h_card_entry_image_title_typography_heading','0') ) {
				$css .= '.h-card-entry__img .entry-img-inner-content .entry-image-title h2{font-size:'. esc_attr( $h_card_entry_image_title_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $h_card_entry_image_title_font_size_tablet ) && '1' == get_theme_mod('ubik_h_card_entry_image_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.h-card-entry__img .entry-img-inner-content .entry-image-title h2{font-size:'. esc_attr( $h_card_entry_image_title_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $h_card_entry_image_title_font_size_mobile ) && '1' == get_theme_mod('ubik_h_card_entry_image_title_typography_heading','0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.h-card-entry__img .entry-img-inner-content .entry-image-title h2{font-size:'. esc_attr( $h_card_entry_image_title_font_size_mobile ) .'px;}}';
			}

		}

		// Single title font size
		if ( ! empty( $single_title_font_size_desktop ) && '1' == get_theme_mod('ubik_single_title_typography_heading','0') ) {
			$css .= '.single-title .single-title__title{font-size:'. esc_attr( $single_title_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $single_title_font_size_tablet ) && '1' == get_theme_mod('ubik_single_title_typography_heading','0') ) {
			$css .= '@media screen and (max-width: 63.9375em) {.single-title .single-title__title{font-size:'. esc_attr( $single_title_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $single_title_font_size_mobile ) && '1' == get_theme_mod('ubik_single_title_typography_heading','0') ) {
			$css .= '@media screen and (max-width: 39.9375em) {.single-title .single-title__title{font-size:'. esc_attr( $single_title_font_size_mobile ) .'px;}}';
		}

		// Single meta font size
		if ( ! empty( $single_meta_font_size_desktop ) && '1' == get_theme_mod('ubik_single_meta_typography_heading','0') ) {
			$css .= '.single-meta{font-size:'. esc_attr( $single_meta_font_size_desktop ) .'px;}';
		}
		if ( ! empty( $single_meta_font_size_tablet ) && '1' == get_theme_mod('ubik_single_meta_typography_heading','0') ) {
			$css .= '@media screen and (max-width: 63.9375em) {.single-meta{font-size:'. esc_attr( $single_meta_font_size_tablet ) .'px;}}';
		}
		if ( ! empty( $single_meta_font_size_mobile ) && '1' == get_theme_mod('ubik_single_meta_typography_heading','0') ) {
			$css .= '@media screen and (max-width: 39.9375em) {.single-meta{font-size:'. esc_attr( $single_meta_font_size_mobile ) .'px;}}';
		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* General CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_general_css' );

}


/**
 * Outputs header CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_header_css' ) ) {
  
  function ubik_header_css( $output ) {

    // Return output if no header
    if ( ! ubik_header_display() && ! ubik_frontpage_header_display() ) {
      return $output;
		}

		// Vars
		$header_format	= ubik_header_format();
		$specific_frontpage_header = ubik_frontpage_specific_header();
		$frontpage_header_format	= ubik_frontpage_header_format();
		$frontpage_content_logo_max_height_desktop = get_theme_mod( 'ubik_frontpage_header_content_site_logo_max_height_desktop', '50' );
    $frontpage_content_logo_max_height_tablet = get_theme_mod( 'ubik_frontpage_header_content_site_logo_max_height_tablet', '50' );
		$frontpage_content_logo_max_height_mobile = get_theme_mod( 'ubik_frontpage_header_content_site_logo_max_height_mobile', '50' );
		
		$css = '';

		// Add header classes on the front page if specific front page header is enabled
		if ( ubik_frontpage_header_display() ) {
				
			// Add image-header classes
			if ( 'image' == $frontpage_header_format ) {

				// Front page image-header vars
				$frontpage_image_header_height_desktop	= get_theme_mod( 'ubik_frontpage_image_header_height_desktop', '300' );
				$frontpage_image_header_height_tablet	= get_theme_mod( 'ubik_frontpage_image_header_height_tablet','250' );
				$frontpage_image_header_height_mobile	= get_theme_mod( 'ubik_frontpage_image_header_height_mobile', '200' );
				$frontpage_bg_img = get_header_image();
				$frontpage_bg_img_position = get_theme_mod( 'ubik_frontpage_image_header_bg_img_position', 'center center' );
				$frontpage_bg_img_attachment = get_theme_mod( 'ubik_frontpage_image_header_bg_img_attachment', 'scroll' );
				$frontpage_bg_img_repeat = get_theme_mod( 'ubik_frontpage_image_header_bg_img_repeat', 'no-repeat' );
				$frontpage_bg_img_size = get_theme_mod( 'ubik_frontpage_image_header_bg_img_size', 'cover' );
				$frontpage_content_tagline_font_size_desktop	= get_theme_mod( 'ubik_frontpage_header_content_site_tagline_font_size_desktop', '12' );
				$frontpage_content_tagline_font_size_tablet	= get_theme_mod( 'ubik_frontpage_header_content_site_tagline_font_size_tablet' );
				$frontpage_content_tagline_font_size_mobile	= get_theme_mod( 'ubik_frontpage_header_content_site_tagline_font_size_mobile' );
				$frontpage_content_page_title_font_size_desktop	= get_theme_mod( 'ubik_frontpage_header_content_page_title_font_size_desktop' );
				$frontpage_content_page_title_font_size_tablet	= get_theme_mod( 'ubik_frontpage_header_content_page_title_font_size_tablet' );
				$frontpage_content_page_title_font_size_mobile	= get_theme_mod( 'ubik_frontpage_header_content_page_title_font_size_mobile' );
				$frontpage_content_nav_font_size_desktop	= get_theme_mod( 'ubik_frontpage_header_content_nav_font_size_desktop', '16' );
				$frontpage_content_nav_font_size_tablet	= get_theme_mod( 'ubik_frontpage_header_content_nav_font_size_tablet' );
				$frontpage_content_nav_font_size_mobile	= get_theme_mod( 'ubik_frontpage_header_content_nav_font_size_mobile' );
				$frontpage_content_text_font_size_desktop	= get_theme_mod( 'ubik_frontpage_header_content_text_font_size_desktop', '16' );
				$frontpage_content_text_font_size_tablet	= get_theme_mod( 'ubik_frontpage_header_content_text_font_size_tablet' );
				$frontpage_content_text_font_size_mobile	= get_theme_mod( 'ubik_frontpage_header_content_text_font_size_mobile' );

				// Front page image-header height
				if ( ! empty( $frontpage_image_header_height_desktop ) ) {
					$css .= '.frontpage-image-header{min-height:'. esc_attr( $frontpage_image_header_height_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_image_header_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.frontpage-image-header{min-height:'. esc_attr( $frontpage_image_header_height_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_image_header_height_mobile ) ) {
					$css .= '@media screen and (max-width: 39.9375em) {.frontpage-image-header{min-height:'. esc_attr( $frontpage_image_header_height_mobile ) .'px;}}';
				}

				// Front page image-header background image
				if ( ! empty( $frontpage_bg_img ) ) {

					$css .= '.frontpage-image-header{background-image: url( '. esc_url( $frontpage_bg_img ) .' );}';

					if ( ! empty( $frontpage_bg_img_position ) ) {
						$css .= '.frontpage-image-header{background-position:'. esc_attr( $frontpage_bg_img_position ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_attachment ) ) {
						$css .= '.frontpage-image-header{background-attachment:'. esc_attr( $frontpage_bg_img_attachment ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_repeat ) ) {
						$css .= '.frontpage-image-header{background-repeat:'. esc_attr( $frontpage_bg_img_repeat ) .';}';
					}

					if ( ! empty( $frontpage_bg_img_size ) ) {
						$css .= '.frontpage-image-header{background-size:'. esc_attr( $frontpage_bg_img_size ) .';}';
					}

				}

				// Front page content logo max height
				if ( ! empty( $frontpage_content_logo_max_height_desktop ) && '50' != $frontpage_content_logo_max_height_desktop ) {
					$css .= '.frontpage-header-content .custom-logo{max-height:'. esc_attr( $frontpage_content_logo_max_height_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_content_logo_max_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.frontpage-header-content .custom-logo{max-height:'. esc_attr( $frontpage_content_logo_max_height_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_content_logo_max_height_mobile ) ) {
					$css .= '@media screen and (max-width: 39.9375em){.frontpage-header-content .custom-logo{max-height:'. esc_attr( $frontpage_content_logo_max_height_mobile ) .'px;}}';
				}

				// Front page content tagline font size
				if ( ! empty( $frontpage_content_tagline_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '.frontpage-header-content__tagline .site-tagline{font-size:'. esc_attr( $frontpage_content_tagline_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_content_tagline_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.frontpage-header-content__tagline .site-tagline{font-size:'. esc_attr( $frontpage_content_tagline_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_content_tagline_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.frontpage-header-content__tagline .site-tagline{font-size:'. esc_attr( $frontpage_content_tagline_font_size_mobile ) .'px;}}';
				}

				// Front page content page title font size
				if ( ! empty( $frontpage_content_page_title_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_header_content_page_title_typography_heading', '0') ) {
					$css .= '.frontpage-header-content__page-title .site-page-title{font-size:'. esc_attr( $frontpage_content_page_title_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_content_page_title_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_header_content_page_title_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.frontpage-header-content__page-title .site-page-title{font-size:'. esc_attr( $frontpage_content_page_title_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_content_page_title_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_header_content_page_title_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.frontpage-header-content__page-title .site-page-title{font-size:'. esc_attr( $frontpage_content_page_title_font_size_mobile ) .'px;}}';
				}

				// Front page content navigation font size
				if ( ! empty( $frontpage_content_nav_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_header_content_nav_typography_heading', '0') ) {
					$css .= '.frontpage-header-content__nav{font-size:'. esc_attr( $frontpage_content_nav_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_content_nav_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_header_content_nav_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.frontpage-header-content__nav{font-size:'. esc_attr( $frontpage_content_nav_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_content_nav_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_header_content_nav_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.frontpage-header-content__nav{font-size:'. esc_attr( $frontpage_content_nav_font_size_mobile ) .'px;}}';
				}

				// Front page content custom text font size
				if ( ! empty( $frontpage_content_text_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_header_content_text_typography_heading', '0') ) {
					$css .= '.frontpage-header-content__text, .frontpage-header-content__text p{font-size:'. esc_attr( $frontpage_content_text_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_content_text_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_header_content_text_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.frontpage-header-content__text, .frontpage-header-content__text p{font-size:'. esc_attr( $frontpage_content_text_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $frontpage_content_text_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_header_content_text_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.frontpage-header-content__text, .frontpage-header-content__text p{font-size:'. esc_attr( $frontpage_content_text_font_size_mobile ) .'px;}}';
				}
				
			}

			// Add front page menu-bar classes
			if ( 'no-header' != $frontpage_header_format ) {

				// vars
				$frontpage_menubar_min_height	= get_theme_mod( 'ubik_frontpage_menubar_min_height', '50' );
				$frontpage_menubar_bg_color	= get_theme_mod( 'ubik_frontpage_menubar_bg_color', '#fefefe' );
				$frontpage_menubar_borders_color	= get_theme_mod( 'ubik_frontpage_menubar_borders_color', '#e9e9e9' );
				$frontpage_logo_max_height_desktop = get_theme_mod( 'ubik_frontpage_menubar_logo_max_height_desktop', '50' );
    		$frontpage_logo_max_height_tablet = get_theme_mod( 'ubik_frontpage_menubar_logo_max_height_tablet', '50' );

				// Front page menu-bar min height
				if ( ! empty( $frontpage_menubar_min_height ) && '50' != $frontpage_menubar_min_height ) {
					$css .= '.frontpage-menu-bar-inner{min-height:'. esc_attr( $frontpage_menubar_min_height ) .'px;}';
				}

				// Front page menu-bar background color
				if ( ! empty( $frontpage_menubar_bg_color ) && ! ubik_frontpage_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) {
					$css .= '#header .frontpage-menu-bar{background-color:'. esc_attr( $frontpage_menubar_bg_color ) .';}';
				}

				// Front page menu-bar border top color
				if ( ! empty( $frontpage_menubar_borders_color ) && ! ubik_frontpage_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_frontpage_menubar_color_heading', '0') ) {
					$css .= '#header .frontpage-menu-bar-inner{border-color:'. esc_attr( $frontpage_menubar_borders_color ) .';}';
				}

				// Front page menu-bar logo max height
				if ( ! empty( $frontpage_logo_max_height_desktop ) && '50' != $frontpage_logo_max_height_desktop ) {
					$css .= '.frontpage-menu-bar .custom-logo{max-height:'. esc_attr( $frontpage_logo_max_height_desktop ) .'px;}';
				}
				if ( ! empty( $frontpage_logo_max_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.frontpage-menu-bar .custom-logo{max-height:'. esc_attr( $frontpage_logo_max_height_tablet ) .'px;}}';
				}

			}


		// Add header classes on all other pages
		} else {

			// Add image-header classes
			if ( 'image' == $header_format ) {

				// vars
				$image_header_height_desktop	= get_theme_mod( 'ubik_image_header_height_desktop', '300' );
				$image_header_height_tablet	= get_theme_mod( 'ubik_image_header_height_tablet', '250' );
				$image_header_height_mobile	= get_theme_mod( 'ubik_image_header_height_mobile', '200' );

				if ( ( is_singular( 'page' ) || ( is_home() && ! is_front_page() ) )
						 && has_post_thumbnail( get_queried_object_id() ) 
						 && true == get_theme_mod( 'ubik_image_header_page_featured_img_bg', false ) ) {

					$bg_img = get_the_post_thumbnail_url( get_queried_object_id() );

				} elseif ( is_singular( 'post' ) 
									 && has_post_thumbnail( get_queried_object_id() ) 
									 && true == get_theme_mod( 'ubik_image_header_single_featured_img_bg', false ) ) {

					$bg_img = get_the_post_thumbnail_url( get_queried_object_id() );

				} else {

					$bg_img = get_theme_mod( 'ubik_image_header_bg_img' );

				}
				$bg_img_position = get_theme_mod( 'ubik_image_header_bg_img_position', 'center center' );
				$bg_img_attachment = get_theme_mod( 'ubik_image_header_bg_img_attachment', 'scroll' );
				$bg_img_repeat = get_theme_mod( 'ubik_image_header_bg_img_repeat', 'no-repeat' );
				$bg_img_size = get_theme_mod( 'ubik_image_header_bg_img_size', 'cover' );
				$content_logo_max_height_desktop = get_theme_mod( 'ubik_header_content_site_logo_max_height_desktop', '50' );
    		$content_logo_max_height_tablet = get_theme_mod( 'ubik_header_content_site_logo_max_height_tablet', '50' );
				$content_logo_max_height_mobile = get_theme_mod( 'ubik_header_content_site_logo_max_height_mobile', '50' );
				$content_tagline_font_size_desktop	= get_theme_mod( 'ubik_header_content_site_tagline_font_size_desktop', '12' );
				$content_tagline_font_size_tablet	= get_theme_mod( 'ubik_header_content_site_tagline_font_size_tablet' );
				$content_tagline_font_size_mobile	= get_theme_mod( 'ubik_header_content_site_tagline_font_size_mobile' );
				$content_page_title_font_size_desktop	= get_theme_mod( 'ubik_header_content_page_title_font_size_desktop' );
				$content_page_title_font_size_tablet	= get_theme_mod( 'ubik_header_content_page_title_font_size_tablet' );
				$content_page_title_font_size_mobile	= get_theme_mod( 'ubik_header_content_page_title_font_size_mobile' );
				$content_breadcrumbs_font_size_desktop	= get_theme_mod( 'ubik_header_content_breadcrumbs_font_size_desktop', '16' );
				$content_breadcrumbs_font_size_tablet	= get_theme_mod( 'ubik_header_content_breadcrumbs_font_size_tablet' );
				$content_breadcrumbs_font_size_mobile	= get_theme_mod( 'ubik_header_content_breadcrumbs_font_size_mobile' );
				$content_nav_font_size_desktop	= get_theme_mod( 'ubik_header_content_nav_font_size_desktop', '16' );
				$content_nav_font_size_tablet	= get_theme_mod( 'ubik_header_content_nav_font_size_tablet' );
				$content_nav_font_size_mobile	= get_theme_mod( 'ubik_header_content_nav_font_size_mobile' );
				$content_text_font_size_desktop	= get_theme_mod( 'ubik_header_content_text_font_size_desktop', '16' );
				$content_text_font_size_tablet	= get_theme_mod( 'ubik_header_content_text_font_size_tablet' );
				$content_text_font_size_mobile	= get_theme_mod( 'ubik_header_content_text_font_size_mobile' );

				//Image-header height
				if ( ! empty( $image_header_height_desktop ) ) {
					$css .= '.image-header{min-height:'. esc_attr( $image_header_height_desktop ) .'px;}';
				}
				if ( ! empty( $image_header_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em) {.image-header{min-height:'. esc_attr( $image_header_height_tablet ) .'px;}}';
				}
				if ( ! empty( $image_header_height_mobile ) ) {
					$css .= '@media screen and (max-width: 39.9375em) {.image-header{min-height:'. esc_attr( $image_header_height_mobile ) .'px;}}';
				}

				// Image-header border width
				if ( ! empty( $image_header_border_width ) ) {
					$css .= '.image-header{border-bottom-width:'. esc_attr( $image_header_border_width ) .';}';
				}

				// Image-header background image
				if ( ! empty( $bg_img ) ) {

					$css .= '.image-header{background-image: url( '. esc_url( $bg_img ) .' );}';

					if ( ! empty( $bg_img_position ) ) {
						$css .= '.image-header{background-position:'. esc_attr( $bg_img_position ) .';}';
					}

					if ( ! empty( $bg_img_attachment ) ) {
						$css .= '.image-header{background-attachment:'. esc_attr( $bg_img_attachment ) .';}';
					}

					if ( ! empty( $bg_img_repeat ) ) {
						$css .= '.image-header{background-repeat:'. esc_attr( $bg_img_repeat ) .';}';
					}

					if ( ! empty( $bg_img_size ) ) {
						$css .= '.image-header{background-size:'. esc_attr( $bg_img_size ) .';}';
					}

				}

				// Content logo max height
				if ( ! empty( $content_logo_max_height_desktop ) && '50' != $content_logo_max_height_desktop ) {
					$css .= '.header-content .custom-logo{max-height:'. esc_attr( $content_logo_max_height_desktop ) .'px;}';
				}
				if ( ! empty( $content_logo_max_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.header-content .custom-logo{max-height:'. esc_attr( $content_logo_max_height_tablet ) .'px;}}';
				}
				if ( ! empty( $content_logo_max_height_mobile ) ) {
					$css .= '@media screen and (max-width: 39.9375em){.header-content .custom-logo{max-height:'. esc_attr( $content_logo_max_height_mobile ) .'px;}}';
				}

				// Content tagline font size
				if ( ! empty( $content_tagline_font_size_desktop ) && '1' == get_theme_mod('ubik_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '.header-content__tagline .site-tagline{font-size:'. esc_attr( $content_tagline_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $content_tagline_font_size_tablet ) && '1' == get_theme_mod('ubik_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.header-content__tagline .site-tagline{font-size:'. esc_attr( $content_tagline_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $content_tagline_font_size_mobile ) && '1' == get_theme_mod('ubik_header_content_site_tagline_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.header-content__tagline .site-tagline{font-size:'. esc_attr( $content_tagline_font_size_mobile ) .'px;}}';
				}

				// Content page title font size
				if ( ! empty( $content_page_title_font_size_desktop ) && '1' == get_theme_mod('ubik_header_content_page_title_typography_heading', '0') ) {
					$css .= '.header-content__page-title .site-page-title{font-size:'. esc_attr( $content_page_title_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $content_page_title_font_size_tablet ) && '1' == get_theme_mod('ubik_header_content_page_title_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.header-content__page-title .site-page-title{font-size:'. esc_attr( $content_page_title_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $content_page_title_font_size_mobile ) && '1' == get_theme_mod('ubik_header_content_page_title_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.header-content__page-title .site-page-title{font-size:'. esc_attr( $content_page_title_font_size_mobile ) .'px;}}';
				}

				// Content breadcrumbs font size
				if ( ! empty( $content_breadcrumbs_font_size_desktop ) && '1' == get_theme_mod('ubik_header_content_breadcrumbs_typography_heading', '0') ) {
					$css .= '.header-content__breadcrumbs .breadcrumbs{font-size:'. esc_attr( $content_breadcrumbs_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $content_breadcrumbs_font_size_tablet ) && '1' == get_theme_mod('ubik_header_content_breadcrumbs_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.header-content__breadcrumbs .breadcrumbs{font-size:'. esc_attr( $content_breadcrumbs_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $content_breadcrumbs_font_size_mobile ) && '1' == get_theme_mod('ubik_header_content_breadcrumbs_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.header-content__breadcrumbs .breadcrumbs{font-size:'. esc_attr( $content_breadcrumbs_font_size_mobile ) .'px;}}';
				}

				// Content navigation font size
				if ( ! empty( $content_nav_font_size_desktop ) && '1' == get_theme_mod('ubik_header_content_nav_typography_heading', '0') ) {
					$css .= '.header-content__nav{font-size:'. esc_attr( $content_nav_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $content_nav_font_size_tablet ) && '1' == get_theme_mod('ubik_header_content_nav_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.header-content__nav{font-size:'. esc_attr( $content_nav_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $content_nav_font_size_mobile ) && '1' == get_theme_mod('ubik_header_content_nav_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.header-content__nav{font-size:'. esc_attr( $content_nav_font_size_mobile ) .'px;}}';
				}

				// Content custom text font size
				if ( ! empty( $content_text_font_size_desktop ) && '1' == get_theme_mod('ubik_header_content_text_typography_heading', '0') ) {
					$css .= '.header-content__text, .header-content__text p{font-size:'. esc_attr( $content_text_font_size_desktop ) .'px;}';
				}
				if ( ! empty( $content_text_font_size_tablet ) && '1' == get_theme_mod('ubik_header_content_text_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 63.9375em) {.header-content__text, .header-content__text p{font-size:'. esc_attr( $content_text_font_size_tablet ) .'px;}}';
				}
				if ( ! empty( $content_text_font_size_mobile ) && '1' == get_theme_mod('ubik_header_content_text_typography_heading', '0') ) {
					$css .= '@media screen and (max-width: 39.9375em) {.header-content__text, .header-content__text p{font-size:'. esc_attr( $content_text_font_size_mobile ) .'px;}}';
				}
				
			}

			// Add menu-bar classes
			if ( 'no-header' != $header_format ) {

				// vars
				$menubar_min_height	= get_theme_mod( 'ubik_menubar_min_height', '50' );
				$menubar_bg_color	= get_theme_mod( 'ubik_menubar_bg_color', '#fefefe' );
				$menubar_borders_color	= get_theme_mod( 'ubik_menubar_borders_color', '#e9e9e9' );
				$menubar_logo_max_height_desktop = get_theme_mod( 'ubik_menubar_logo_max_height_desktop', '50' );
    		$menubar_logo_max_height_tablet = get_theme_mod( 'ubik_menubar_logo_max_height_tablet', '50' );

				// Menu-bar min height
				if ( ! empty( $menubar_min_height ) && '50' != $menubar_min_height ) {
					$css .= '.menu-bar-inner{min-height:'. esc_attr( $menubar_min_height ) .'px;}';
				}

				// Menu-bar background color
				if ( ! empty( $menubar_bg_color ) && ! ubik_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_menubar_color_heading', '0') ) {
					$css .= '#header .menu-bar{background-color:'. esc_attr( $menubar_bg_color ) .';}';
				}

				// Menu-bar borders color
				if ( ! empty( $menubar_borders_color ) && ! ubik_image_header_menubar_deactivate() && '1' == get_theme_mod('ubik_menubar_color_heading', '0') ) {
					$css .= '#header .menu-bar-inner{border-color:'. esc_attr( $menubar_borders_color ) .';}';
				}
				
				// Menu-bar logo max height
				if ( ! empty( $menubar_logo_max_height_desktop ) && '50' != $menubar_logo_max_height_desktop ) {
					$css .= '.menu-bar .custom-logo{max-height:'. esc_attr( $menubar_logo_max_height_desktop ) .'px;}';
				}
				if ( ! empty( $menubar_logo_max_height_tablet ) ) {
					$css .= '@media screen and (min-width: 40em) and (max-width: 63.9375em){.menu-bar .custom-logo{max-height:'. esc_attr( $menubar_logo_max_height_tablet ) .'px;}}';
				}

			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
      $output .= '/* Header CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_header_css' );

}

/**
 * Outputs top bar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_top_bar_css' ) ) {
  
  function ubik_top_bar_css( $output ) {

		// Return output if no top bar
		if ( ! ubik_frontpage_top_bar_display() && ! ubik_top_bar_display() ) {
			return $output;
		}

		// Vars
		$top_bar_height = get_theme_mod( 'ubik_top_bar_height', '2' );
		$frontpage_top_bar_height = get_theme_mod( 'ubik_frontpage_top_bar_height', '2' );
		
    $css = '';

		// Specific front page top bar custom style
		if ( ubik_frontpage_top_bar_display() ) {

			//Vars
			$frontpage_top_bar_text_font_size_desktop	= get_theme_mod( 'ubik_frontpage_top_bar_text_font_size_desktop', '16' );
			$frontpage_top_bar_text_font_size_tablet	= get_theme_mod( 'ubik_frontpage_top_bar_text_font_size_tablet' );
			$frontpage_top_bar_text_font_size_mobile	= get_theme_mod( 'ubik_frontpage_top_bar_text_font_size_mobile' );

			// Front page top bar height
			if ( ! empty( $frontpage_top_bar_height ) && '2' != $frontpage_top_bar_height ) {
				$css .= '.frontpage-top-bar-inner{height:'. esc_attr( $frontpage_top_bar_height ) .'em;}';

				// Ajust frontpage classic vertical bar footer padding bottom
				$css .= '.has-classic-vertical-bar.has-frontpage-top-bar .classic-vertical-bar-footer, .has-classic-vertical-bar.has-frontpage-top-bar .frontpage-classic-vertical-bar-footer{padding-bottom:'. esc_attr( $frontpage_top_bar_height ) .'em;}';
			}

			// Front page top bar custom text font size
			if ( ! empty( $frontpage_top_bar_text_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_top_bar_text_typography_heading', '0') ) {
				$css .= '.frontpage-top-bar-text, .frontpage-top-bar-text p{font-size:'. esc_attr( $frontpage_top_bar_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_top_bar_text_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_top_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.frontpage-top-bar-text, .frontpage-top-bar-text p{font-size:'. esc_attr( $frontpage_top_bar_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_top_bar_text_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_top_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-top-bar-text, .frontpage-top-bar-text p{font-size:'. esc_attr( $frontpage_top_bar_text_font_size_mobile ) .'px;}}';
			}

		// Top bar custom style
		} elseif ( ubik_top_bar_display() ) {

			//Vars
			$top_bar_text_font_size_desktop	= get_theme_mod( 'ubik_top_bar_text_font_size_desktop', '16' );
			$top_bar_text_font_size_tablet	= get_theme_mod( 'ubik_top_bar_text_font_size_tablet' );
			$top_bar_text_font_size_mobile	= get_theme_mod( 'ubik_top_bar_text_font_size_mobile' );
				
			// Top bar height
			if ( ! empty( $top_bar_height ) && '2' != $top_bar_height ) {
				$css .= '.top-bar-inner{height:'. esc_attr( $top_bar_height ) .'em;}';

				// Ajust classic vertical bar footer padding bottom
				$css .= '.has-classic-vertical-bar.has-top-bar .classic-vertical-bar-footer, .has-classic-vertical-bar.has-top-bar .frontpage-classic-vertical-bar-footer{padding-bottom:'. esc_attr( $top_bar_height ) .'em;}';
			}

			// Top bar custom text font size
			if ( ! empty( $top_bar_text_font_size_desktop ) && '1' == get_theme_mod('ubik_top_bar_text_typography_heading', '0') ) {
				$css .= '.top-bar-text, .top-bar-text p{font-size:'. esc_attr( $top_bar_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $top_bar_text_font_size_tablet ) && '1' == get_theme_mod('ubik_top_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.top-bar-text, .top-bar-text p{font-size:'. esc_attr( $top_bar_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $top_bar_text_font_size_mobile ) && '1' == get_theme_mod('ubik_top_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.top-bar-text, .top-bar-text p{font-size:'. esc_attr( $top_bar_text_font_size_mobile ) .'px;}}';
			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Top Bar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_top_bar_css' );

}

/**
 * Outputs classic vertical bar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_classic_vertical_bar_css' ) ) {
  
  function ubik_classic_vertical_bar_css( $output ) {

		// Return output if no classic vertical bar is activated
		if ( ! ubik_frontpage_classic_vertical_bar_display() && ! ubik_classic_vertical_bar_display() ) {
			return $output;
		}

    $css = '';

		// Front page classic vertical bar custom style
		if ( ubik_frontpage_classic_vertical_bar_display() ) {

			// Vars
			$frontpage_classic_vertical_bar_nav_font_size_desktop	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop', '16' );
			$frontpage_classic_vertical_bar_nav_font_size_tablet	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet' );
			$frontpage_classic_vertical_bar_nav_font_size_mobile	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile' );
			$frontpage_classic_vertical_bar_text_font_size_desktop	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_text_font_size_desktop', '16' );
			$frontpage_classic_vertical_bar_text_font_size_tablet	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_text_font_size_tablet' );
			$frontpage_classic_vertical_bar_text_font_size_mobile	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_text_font_size_mobile' );
			$frontpage_classic_vertical_bar_footer_text_font_size_desktop	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop', '16' );
			$frontpage_classic_vertical_bar_footer_text_font_size_tablet	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet' );
			$frontpage_classic_vertical_bar_footer_text_font_size_mobile	= get_theme_mod( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile' );

			// front page navigation font size
			if ( ! empty( $frontpage_classic_vertical_bar_nav_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '.frontpage-classic-vertical-bar-nav{font-size:'. esc_attr( $frontpage_classic_vertical_bar_nav_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_nav_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-nav{font-size:'. esc_attr( $frontpage_classic_vertical_bar_nav_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_nav_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-nav{font-size:'. esc_attr( $frontpage_classic_vertical_bar_nav_font_size_mobile ) .'px;}}';
			}

			// front page custom text font size
			if ( ! empty( $frontpage_classic_vertical_bar_text_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_text_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_text_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_text_font_size_mobile ) .'px;}}';
			}

			// Front page footer custom text font size
			if ( ! empty( $frontpage_classic_vertical_bar_footer_text_font_size_desktop ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_footer_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_footer_text_font_size_tablet ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_footer_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_classic_vertical_bar_footer_text_font_size_mobile ) && '1' == get_theme_mod('ubik_frontpage_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p{font-size:'. esc_attr( $frontpage_classic_vertical_bar_footer_text_font_size_mobile ) .'px;}}';
			}

		// Classic vertical bar custom style
		} elseif ( ubik_classic_vertical_bar_display() ) {

			// Vars
			$classic_vertical_bar_nav_font_size_desktop	= get_theme_mod( 'ubik_classic_vertical_bar_nav_typography_font_size_desktop', '16' );
			$classic_vertical_bar_nav_font_size_tablet	= get_theme_mod( 'ubik_classic_vertical_bar_nav_typography_font_size_tablet' );
			$classic_vertical_bar_nav_font_size_mobile	= get_theme_mod( 'ubik_classic_vertical_bar_nav_typography_font_size_mobile' );
			$classic_vertical_bar_text_font_size_desktop	= get_theme_mod( 'ubik_classic_vertical_bar_text_font_size_desktop', '16' );
			$classic_vertical_bar_text_font_size_tablet	= get_theme_mod( 'ubik_classic_vertical_bar_text_font_size_tablet' );
			$classic_vertical_bar_text_font_size_mobile	= get_theme_mod( 'ubik_classic_vertical_bar_text_font_size_mobile' );
			$classic_vertical_bar_footer_text_font_size_desktop	= get_theme_mod( 'ubik_classic_vertical_bar_footer_text_font_size_desktop', '16' );
			$classic_vertical_bar_footer_text_font_size_tablet	= get_theme_mod( 'ubik_classic_vertical_bar_footer_text_font_size_tablet' );
			$classic_vertical_bar_footer_text_font_size_mobile	= get_theme_mod( 'ubik_classic_vertical_bar_footer_text_font_size_mobile' );

			// Navigation font size
			if ( ! empty( $classic_vertical_bar_nav_font_size_desktop ) && '1' == get_theme_mod('ubik_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '.classic-vertical-bar-nav{font-size:'. esc_attr( $classic_vertical_bar_nav_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $classic_vertical_bar_nav_font_size_tablet ) && '1' == get_theme_mod('ubik_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.classic-vertical-bar-nav{font-size:'. esc_attr( $classic_vertical_bar_nav_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $classic_vertical_bar_nav_font_size_mobile ) && '1' == get_theme_mod('ubik_classic_vertical_bar_nav_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.classic-vertical-bar-nav{font-size:'. esc_attr( $classic_vertical_bar_nav_font_size_mobile ) .'px;}}';
			}

			// Custom text font size
			if ( ! empty( $classic_vertical_bar_text_font_size_desktop ) && '1' == get_theme_mod('ubik_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '.classic-vertical-bar-text, .classic-vertical-bar-text p{font-size:'. esc_attr( $classic_vertical_bar_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $classic_vertical_bar_text_font_size_tablet ) && '1' == get_theme_mod('ubik_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.classic-vertical-bar-text, .classic-vertical-bar-text p{font-size:'. esc_attr( $classic_vertical_bar_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $classic_vertical_bar_text_font_size_mobile ) && '1' == get_theme_mod('ubik_classic_vertical_bar_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.classic-vertical-bar-text, .classic-vertical-bar-text p{font-size:'. esc_attr( $classic_vertical_bar_text_font_size_mobile ) .'px;}}';
			}

			// Footer custom text font size
			if ( ! empty( $classic_vertical_bar_footer_text_font_size_desktop ) && '1' == get_theme_mod('ubik_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p{font-size:'. esc_attr( $classic_vertical_bar_footer_text_font_size_desktop ) .'px;}';
			}
			if ( ! empty( $classic_vertical_bar_footer_text_font_size_tablet ) && '1' == get_theme_mod('ubik_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 63.9375em) {.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p{font-size:'. esc_attr( $classic_vertical_bar_footer_text_font_size_tablet ) .'px;}}';
			}
			if ( ! empty( $classic_vertical_bar_footer_text_font_size_mobile ) && '1' == get_theme_mod('ubik_classic_vertical_bar_footer_text_typography_heading', '0') ) {
				$css .= '@media screen and (max-width: 39.9375em) {.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p{font-size:'. esc_attr( $classic_vertical_bar_footer_text_font_size_mobile ) .'px;}}';
			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Classic Vertical Bar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_classic_vertical_bar_css' );

}

/**
 * Outputs sidebar custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_sidebar_css' ) ) {
  
  function ubik_sidebar_css( $output ) {

		// Return output if no top bar
		if ( ! ubik_frontpage_sidebar_display() && ! ubik_sidebar_display() ) {
			return $output;
		}

		// Vars
		$widgets_border = get_theme_mod( 'ubik_sidebar_widgets_border_heading', false );
		$frontpage_widgets_border = get_theme_mod( 'ubik_frontpage_sidebar_widgets_border_heading', false );
		
		$css = '';

		// Specific front page sidebar custom style
		if ( ubik_frontpage_sidebar_display() ) {

			if ( $frontpage_widgets_border ) {
				$css .= '#frontpage-sidebar .widget{border-style: solid;}';
			}

		// Sidebar custom style
		} elseif ( ubik_sidebar_display() ) {

			if ( $widgets_border ) {
				$css .= '#sidebar .widget{border-style: solid;}';
			}

		}

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Sidebar CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_sidebar_css' );

}

/**
 * Outputs footer custom CSS
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'ubik_footer_css' ) ) {
  
  function ubik_footer_css( $output ) {

		// Return output if no footer
		if ( ! ubik_frontpage_footer_display() && ! ubik_footer_display() ) {
			return $output;
		}    
		
		$css = '';

		if ( ubik_frontpage_footer_display() ) {

			// vars
			$frontpage_footer_height_desktop	= get_theme_mod( 'ubik_frontpage_footer_height_desktop', '40' );
			$frontpage_footer_height_tablet	= get_theme_mod( 'ubik_frontpage_footer_height_tablet' );
			$frontpage_footer_height_mobile	= get_theme_mod( 'ubik_frontpage_footer_height_mobile' );
			$frontpage_footer_logo_height_desktop	= get_theme_mod( 'ubik_frontpage_footer_logo_height_desktop', '30' );
			$frontpage_footer_logo_height_tablet	= get_theme_mod( 'ubik_frontpage_footer_logo_height_tablet' );
			$frontpage_footer_logo_height_mobile	= get_theme_mod( 'ubik_frontpage_footer_logo_height_mobile' );

			// Front page footer height
			if ( ! empty( $frontpage_footer_height_desktop ) ) {
				$css .= '.frontpage-footer{height:'. esc_attr( $frontpage_footer_height_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_footer_height_tablet ) ) {
				$css .= '@media screen and (max-width: 63.9375em) {.frontpage-footer{height:'. esc_attr( $frontpage_footer_height_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_footer_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-footer{height:'. esc_attr( $frontpage_footer_height_mobile ) .'px;}}';
			}

			// Front page footer logo max height
			if ( ! empty( $frontpage_footer_logo_height_desktop ) ) {
				$css .= '.frontpage-footer-logo .custom-logo{max-height:'. esc_attr( $frontpage_footer_logo_height_desktop ) .'px;}';
			}
			if ( ! empty( $frontpage_footer_logo_height_tablet ) ) {
				$css .= '@media screen (max-width: 63.9375em) {.frontpage-footer-logo .custom-logo{max-height:'. esc_attr( $frontpage_footer_logo_height_tablet ) .'px;}}';
			}
			if ( ! empty( $frontpage_footer_logo_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.frontpage-footer-logo .custom-logo{max-height:'. esc_attr( $frontpage_footer_logo_height_mobile ) .'px;}}';
      }

		} elseif ( ubik_footer_display() ) {

			// vars
			$footer_height_desktop	= get_theme_mod( 'ubik_footer_height_desktop', '40' );
			$footer_height_tablet	= get_theme_mod( 'ubik_footer_height_tablet' );
			$footer_height_mobile	= get_theme_mod( 'ubik_footer_height_mobile' );
			$footer_logo_height_desktop	= get_theme_mod( 'ubik_footer_logo_height_desktop', '30' );
			$footer_logo_height_tablet	= get_theme_mod( 'ubik_footer_logo_height_tablet' );
			$footer_logo_height_mobile	= get_theme_mod( 'ubik_footer_logo_height_mobile' );

			// footer height
			if ( ! empty( $footer_height_desktop ) ) {
				$css .= '.site-footer{height:'. esc_attr( $footer_height_desktop ) .'px;}';
			}
			if ( ! empty( $footer_height_tablet ) ) {
				$css .= '@media screen and (max-width: 63.9375em) {.site-footer{height:'. esc_attr( $footer_height_tablet ) .'px;}}';
			}
			if ( ! empty( $footer_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.site-footer{height:'. esc_attr( $footer_height_mobile ) .'px;}}';
			}
			
			// footer logo max height
			if ( ! empty( $footer_logo_height_desktop ) ) {
				$css .= '.footer-logo .custom-logo{max-height:'. esc_attr( $footer_logo_height_desktop ) .'px;}';
			}
			if ( ! empty( $footer_logo_height_tablet ) ) {
				$css .= '@media screen and (max-width: 63.9375em) {.footer-logo .custom-logo{max-height:'. esc_attr( $footer_logo_height_tablet ) .'px;}}';
			}
			if ( ! empty( $footer_logo_height_mobile ) ) {
				$css .= '@media screen and (max-width: 39.9375em) {.footer-logo .custom-logo{max-height:'. esc_attr( $footer_logo_height_mobile ) .'px;}}';
      }
      
    }

    // If css var isn't empty add to custom css output
    if ( ! empty( $css ) ) {
			$output .= '/* Footer CSS */'. $css;
    }

    // Return output
    return $output;

  }

  add_filter( 'ubik_head_css', 'ubik_footer_css' );

}

