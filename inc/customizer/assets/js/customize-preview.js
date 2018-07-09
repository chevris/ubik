/**
 * Update Customizer settings live.
 *
 * @version 1.0.0
 */

( function( $ ) {

  // Declare vars
  var api = wp.customize,
      body = $( 'body' ),
      siteHeader = $( '#header' )

  /******** General *********/

  // Site title
  api('blogname', function( value ) {
    value.bind( function( newval ) {
      $( '.site-title' ).text( newval );
    });
  });

  // Site description
  api('blogdescription', function( value ) {
    value.bind( function( newval ) {
      $( '.site-tagline' ).text( newval );
    });
  });

  // Color scheme.
	wp.customize( 'ubik_colorscheme', function( value ) {
		value.bind( function( to ) {

			// Update color body class.
			$( 'body' )
				.removeClass( 'colors-light colors-custom colors-scheme' )
				.addClass( 'colors-' + to );
		});
  });
  
  // H1 font size
  api( 'ubik_typography_headings_h1_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h1_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h1_font_size_desktop">h1 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h1_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h1_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h1_font_size_tablet">@media screen and (max-width: 63.9375em) {h1 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h1_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h1_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h1_font_size_mobile">@media screen and (max-width: 39.9375em) {h1 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // H2 font size
  api( 'ubik_typography_headings_h2_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h2_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h2_font_size_desktop">h2 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h2_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h2_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h2_font_size_tablet">@media screen and (max-width: 63.9375em) {h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h2_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h2_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h2_font_size_mobile">@media screen and (max-width: 39.9375em) {h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // H3 font size
  api( 'ubik_typography_headings_h3_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h3_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h3_font_size_desktop">h3 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h3_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h3_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h3_font_size_tablet">@media screen and (max-width: 63.9375em) {h3 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h3_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h3_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h3_font_size_mobile">@media screen and (max-width: 39.9375em) {h3 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // H4 font size
  api( 'ubik_typography_headings_h4_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h4_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h4_font_size_desktop">h4 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h4_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h4_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h4_font_size_tablet">@media screen and (max-width: 63.9375em) {h4 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h4_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h4_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h4_font_size_mobile">@media screen and (max-width: 39.9375em) {h4 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // H5 font size
  api( 'ubik_typography_headings_h5_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h5_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h5_font_size_desktop">h5 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h5_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h5_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h5_font_size_tablet">@media screen and (max-width: 63.9375em) {h5 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h5_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h5_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h5_font_size_mobile">@media screen and (max-width: 39.9375em) {h5 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // H6 font size
  api( 'ubik_typography_headings_h6_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h6_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h6_font_size_desktop">h6 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h6_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h6_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h6_font_size_tablet">@media screen and (max-width: 63.9375em) {h6 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_typography_headings_h6_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_typography_headings_h6_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_typography_headings_h6_font_size_mobile">@media screen and (max-width: 39.9375em) {h6 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Classic entry title font size
  api( 'ubik_classic_entry_title_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_title_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_title_typography_font_size_desktop">.classic-entry .entry-title h2 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_entry_title_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_title_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_title_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.classic-entry .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_entry_title_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_title_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_title_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.classic-entry .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Classic entry meta font size
  api( 'ubik_classic_entry_meta_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_meta_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_meta_typography_font_size_desktop">.classic-entry .entry-meta { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_entry_meta_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_meta_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_meta_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.classic-entry .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_entry_meta_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_entry_meta_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_entry_meta_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.classic-entry .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Cards entry title font size
  api( 'ubik_card_entry_title_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_title_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_title_typography_font_size_desktop">.card-entry .entry-title h2 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_card_entry_title_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_title_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_title_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.card-entry .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_card_entry_title_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_title_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_title_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.card-entry .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Card entry meta font size
  api( 'ubik_card_entry_meta_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_meta_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_meta_typography_font_size_desktop">.card-entry .entry-meta { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_card_entry_meta_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_meta_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_meta_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.card-entry .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_card_entry_meta_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_card_entry_meta_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_card_entry_meta_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.card-entry .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // horizontal cards height
  api( 'ubik_h_card_entry_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_height_desktop">.h-card-entry { min-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // horizontal cards custom height
  api( 'ubik_h_card_entry_custom_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_custom_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_custom_height_desktop">.h-card-entry { height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // horizontal cards image width
  api( 'ubik_h_card_entry_image_width_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_image_width_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_image_width_desktop">.h-card-entry__img { width: ' + to + '%; }.h-card-entry__stacked{width:calc(100% - ' + to + '%); }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // horizontal cards entry title font size
  api( 'ubik_h_card_entry_title_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_title_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_title_typography_font_size_desktop">.h-card-entry__stacked .entry-title h2 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_title_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_title_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_title_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.h-card-entry__stacked .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_title_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_title_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_title_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.h-card-entry__stacked .entry-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Horizontal card entry meta font size
  api( 'ubik_h_card_entry_meta_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_meta_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_meta_typography_font_size_desktop">.h-card-entry__stacked .entry-meta { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_meta_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_meta_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_meta_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.h-card-entry__stacked .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_meta_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_meta_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_meta_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.h-card-entry__stacked .entry-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // horizontal cards entry image title font size
  api( 'ubik_h_card_entry_image_title_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_image_title_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_image_title_typography_font_size_desktop">.h-card-entry__img .entry-img-inner-content .entry-image-title h2 { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_image_title_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_image_title_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_image_title_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.h-card-entry__img .entry-img-inner-content .entry-image-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_h_card_entry_image_title_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_h_card_entry_image_title_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_h_card_entry_image_title_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.h-card-entry__img .entry-img-inner-content .entry-image-title h2 { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Single title font size
  api( 'ubik_single_title_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_title_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_title_typography_font_size_desktop">.single-title .single-title__title { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_single_title_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_title_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_title_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.single-title .single-title__title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_single_title_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_title_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_title_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.single-title .single-title__title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Single meta font size
  api( 'ubik_single_meta_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_meta_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_meta_typography_font_size_desktop">.single-meta { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_single_meta_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_meta_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_meta_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.single-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_single_meta_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_single_meta_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_single_meta_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.single-meta { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );


  /******** Top bar *********/

  // Logo max height
  api( 'ubik_top_bar_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_logo_max_height_desktop">.top-bar .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_top_bar_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.top-bar .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_top_bar_logo_max_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_logo_max_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_logo_max_height_mobile">@media screen and (max-width: 39.9375em) {.top-bar .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page logo max height
  api( 'ubik_frontpage_top_bar_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_logo_max_height_desktop">.frontpage-top-bar .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_top_bar_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.frontpage-top-bar .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_top_bar_logo_max_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_logo_max_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_logo_max_height_mobile">@media screen and (max-width: 39.9375em) {.frontpage-top-bar .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Top Bar custom text font size
  api( 'ubik_top_bar_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_text_font_size_desktop">.top-bar-text, .top-bar-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_top_bar_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.top-bar-text, .top-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_top_bar_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_top_bar_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_top_bar_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.top-bar-text, .top-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page top bar custom text font size
  api( 'ubik_frontpage_top_bar_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_text_font_size_desktop">.frontpage-top-bar-text, .frontpage-top-bar-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_top_bar_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-top-bar-text, .frontpage-top-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_top_bar_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_top_bar_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_top_bar_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-top-bar-text, .frontpage-top-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  
  /******** Header *********/

  // Front page image-header height
  api( 'ubik_frontpage_image_header_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_image_header_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_image_header_height_desktop">.frontpage-image-header { min-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_image_header_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_image_header_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_image_header_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.frontpage-image-header { min-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_image_header_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_image_header_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_image_header_height_mobile">@media screen and (max-width: 39.9375em) {.frontpage-image-header { min-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Image-header height
  api( 'ubik_image_header_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_image_header_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_image_header_height_desktop">.image-header { min-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_image_header_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_image_header_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_image_header_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.image-header { min-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_image_header_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_image_header_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_image_header_height_mobile">@media screen and (max-width: 39.9375em) {.image-header { min-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu bar logo max height
  api( 'ubik_menubar_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_logo_max_height_desktop">.menu-bar .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu bar logo max height tablet
  api( 'ubik_menubar_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.menu-bar .custom-logo{max-height: ' + to + 'px;}}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page logo max height
  api( 'ubik_frontpage_menubar_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_logo_max_height_desktop">.frontpage-menu-bar .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu bar logo max height tablet
  api( 'ubik_frontpage_menubar_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.frontpage-menu-bar .custom-logo{max-height: ' + to + 'px;}}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu-bar background color
  api( 'ubik_menubar_bg_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_bg_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_bg_color">#header .menu-bar{ background-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page menu-bar background color
  api( 'ubik_frontpage_menubar_bg_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_bg_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_bg_color">#header .frontpage-menu-bar{ background-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Menu-bar borders color
  api( 'ubik_menubar_borders_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_menubar_borders_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_menubar_borders_color">#header .menu-bar-inner{ border-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page menu-bar borders color
  api( 'ubik_frontpage_menubar_borders_color', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_menubar_borders_color' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_menubar_borders_color">#header .frontpage-menu-bar-inner{ border-color: ' + to + '; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content logo max height
  api( 'ubik_header_content_site_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_logo_max_height_desktop">.header-content .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_site_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.header-content .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_site_logo_max_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_logo_max_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_logo_max_height_mobile">@media screen and (max-width: 39.9375em) {.header-content .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page header content logo max height
  api( 'ubik_frontpage_header_content_site_logo_max_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_logo_max_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_logo_max_height_desktop">.frontpage-header-content .custom-logo{max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_site_logo_max_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_logo_max_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_logo_max_height_tablet">@media screen and (min-width: 40em) and (max-width: 63.9375em) {.frontpage-header-content .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_site_logo_max_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_logo_max_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_logo_max_height_mobile">@media screen and (max-width: 39.9375em) {.frontpage-header-content .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content tagline font size
  api( 'ubik_header_content_site_tagline_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_tagline_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_tagline_font_size_desktop">.header-content__tagline .site-tagline { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_site_tagline_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_tagline_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_tagline_font_size_tablet">@media screen and (max-width: 63.9375em) {.header-content__tagline .site-tagline { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_site_tagline_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_site_tagline_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_site_tagline_font_size_mobile">@media screen and (max-width: 39.9375em) {.header-content__tagline .site-tagline { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page header content tagline font size
  api( 'ubik_frontpage_header_content_site_tagline_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_tagline_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_tagline_font_size_desktop">.frontpage-header-content__tagline .site-tagline { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_site_tagline_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_tagline_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_tagline_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-header-content__tagline .site-tagline { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_site_tagline_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_site_tagline_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_site_tagline_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-header-content__tagline .site-tagline { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content page title font size
  api( 'ubik_header_content_page_title_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_page_title_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_page_title_font_size_desktop">.header-content__page-title .site-page-title { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_page_title_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_page_title_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_page_title_font_size_tablet">@media screen and (max-width: 63.9375em) {.header-content__page-title .site-page-title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_page_title_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_page_title_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_page_title_font_size_mobile">@media screen and (max-width: 39.9375em) {.header-content__page-title .site-page-title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page Header content page title font size
  api( 'ubik_frontpage_header_content_page_title_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_page_title_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_page_title_font_size_desktop">.frontpage-header-content__page-title .site-page-title { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_page_title_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_page_title_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_page_title_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-header-content__page-title .site-page-title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_page_title_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_page_title_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_page_title_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-header-content__page-title .site-page-title { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content breadcrumbs font size
  api( 'ubik_header_content_breadcrumbs_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_breadcrumbs_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_breadcrumbs_font_size_desktop">.header-content__breadcrumbs .breadcrumbs { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_breadcrumbs_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_breadcrumbs_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_breadcrumbs_font_size_tablet">@media screen and (max-width: 63.9375em) {.header-content__breadcrumbs .breadcrumbs { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_breadcrumbs_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_breadcrumbs_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_breadcrumbs_font_size_mobile">@media screen and (max-width: 39.9375em) {.header-content__breadcrumbs .breadcrumbs { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content navigation font size
  api( 'ubik_header_content_nav_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_nav_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_nav_font_size_desktop">.header-content__nav { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_nav_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_nav_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_nav_font_size_tablet">@media screen and (max-width: 63.9375em) {.header-content__nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_nav_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_nav_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_nav_font_size_mobile">@media screen and (max-width: 39.9375em) {.header-content__nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page header content navigation font size
  api( 'ubik_frontpage_header_content_nav_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_nav_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_nav_font_size_desktop">.frontpage-header-content__nav { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_nav_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_nav_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_nav_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-header-content__nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_nav_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_nav_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_nav_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-header-content__nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Header content custom text font size
  api( 'ubik_header_content_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_text_font_size_desktop">.header-content__text, .header-content__text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.header-content__text, .header-content__text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_header_content_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_header_content_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_header_content_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.header-content__text, .header-content__text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page header content custom text font size
  api( 'ubik_frontpage_header_content_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_text_font_size_desktop">.frontpage-header-content__text, .frontpage-header-content__text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-header-content__text, .frontpage-header-content__text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_header_content_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_header_content_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_header_content_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-header-content__text, .frontpage-header-content__text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  /******** Vertical Bar *********/

  // // Classic vertical bar text
  // api('ubik_classic_vertical_bar_text_content', function( value ) {
  //   value.bind( function( newval ) {
  //     $( '.classic-vertical-bar-text' ).text( newval );
  //   });
  // });

  // // Front page classic vertical bar text
  // api('ubik_frontpage_classic_vertical_bar_text_content', function( value ) {
  //   value.bind( function( newval ) {
  //     $( '.frontpage-classic-vertical-bar-text' ).text( newval );
  //   });
  // });

  // // Classic vertical bar footer text
  // api('ubik_classic_vertical_bar_footer_text_content', function( value ) {
  //   value.bind( function( newval ) {
  //     $( '.classic-vertical-bar-footer-text' ).text( newval );
  //   });
  // });

  // // Front page classic vertical bar footer text
  // api('ubik_frontpage_classic_vertical_bar_footer_text_content', function( value ) {
  //   value.bind( function( newval ) {
  //     $( '.frontpage-classic-vertical-bar-footer-text' ).text( newval );
  //   });
  // });

  // Classic vertical bar navigation font size
  api( 'ubik_classic_vertical_bar_nav_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_nav_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_nav_typography_font_size_desktop">.classic-vertical-bar-nav { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_nav_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_nav_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_nav_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.classic-vertical-bar-nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_nav_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_nav_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_nav_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.classic-vertical-bar-nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page classic vertical bar navigation font size
  api( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_desktop">.frontpage-classic-vertical-bar-nav { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_nav_typography_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-nav { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Classic vertical bar custom text font size
  api( 'ubik_classic_vertical_bar_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_text_font_size_desktop">.classic-vertical-bar-text, .classic-vertical-bar-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.classic-vertical-bar-text, .classic-vertical-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.classic-vertical-bar-text, .classic-vertical-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page classic vertical bar custom text font size
  api( 'ubik_frontpage_classic_vertical_bar_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_text_font_size_desktop">.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-text, .frontpage-classic-vertical-bar-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Classic vertical bar footer custom text font size
  api( 'ubik_classic_vertical_bar_footer_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_footer_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_footer_text_font_size_desktop">.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_footer_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_footer_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_footer_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_classic_vertical_bar_footer_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_classic_vertical_bar_footer_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_classic_vertical_bar_footer_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.classic-vertical-bar-footer-text, .classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page classic vertical bar footer custom text font size
  api( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_desktop">.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_tablet">@media screen and (max-width: 63.9375em) {.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_classic_vertical_bar_footer_text_font_size_mobile">@media screen and (max-width: 39.9375em) {.frontpage-classic-vertical-bar-footer-text, .frontpage-classic-vertical-bar-footer-text p { font-size: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );




  /******* Footer ***********/

  // Footer height
  api( 'ubik_footer_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_height_desktop">.site-footer { height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_footer_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_height_tablet">@media screen and (max-width: 63.9375em) {.site-footer { height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_footer_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_height_mobile">@media screen and (max-width: 39.9375em) {.site-footer { height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );


  // Front page footer height
  api( 'ubik_frontpage_footer_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_height_desktop">.frontpage-footer { height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_footer_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_height_tablet">@media screen and (max-width: 63.9375em) {.frontpage-footer { height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_footer_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_height_mobile">@media screen and (max-width: 39.9375em) {.frontpage-footer { height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Footer logo max height
  api( 'ubik_footer_logo_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_logo_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_logo_height_desktop">.footer-logo .custom-logo { max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_footer_logo_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_logo_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_logo_height_tablet">@media screen and (max-width: 63.9375em) {.footer-logo .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_footer_logo_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_footer_logo_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_footer_logo_height_mobile">@media screen and (max-width: 39.9375em) {.footer-logo .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );

  // Front page footer logo max height
  api( 'ubik_frontpage_footer_logo_height_desktop', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_logo_height_desktop' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_logo_height_desktop">.frontpage-footer-logo .custom-logo { max-height: ' + to + 'px; }</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_footer_logo_height_tablet', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_logo_height_tablet' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_logo_height_tablet">@media screen and (max-width: 63.9375em) {.frontpage-footer-logo .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );
  api( 'ubik_frontpage_footer_logo_height_mobile', function( value ) {
    value.bind( function( to ) {
      var $child = $( '.customizer-ubik_frontpage_footer_logo_height_mobile' );
      if ( to ) {
        var style = '<style class="customizer-ubik_frontpage_footer_logo_height_mobile">@media screen and (max-width: 39.9375em) {.frontpage-footer-logo .custom-logo { max-height: ' + to + 'px; }}</style>';
        if ( $child.length ) {
          $child.replaceWith( style );
        } else {
          $( 'head' ).append( style );
        }
      } else {
        $child.remove();
      }
    } );
  } );


} )( jQuery );