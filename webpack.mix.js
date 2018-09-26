/*
 * Theme uses Laravel Mix
 */

let mix = require( 'laravel-mix' );


// Compile assets
mix.sass( 'assets/src/scss/foundation.min.scss', 'assets/css' )
	.sass( 'assets/src/scss/style.min.scss', 'assets/css' )
  .sass( 'assets/src/scss/editor-style.min.scss', 'assets/css' );

mix.scripts([
  'assets/src/scripts/foundation-init.js',
  'assets/src/scripts/scroll-top.js'
], 'assets/js/all.min.js');

mix.sourceMaps();
