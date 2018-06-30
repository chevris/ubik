/*
 * Theme uses Laravel Mix
 */

let mix = require( 'laravel-mix' );


// Compile assets
mix.sass( 'assets/src/scss/style.scss', 'assets/dist/css' )
  .sass( 'assets/src/scss/editor-style.scss', 'assets/dist/css' );

mix.scripts([
  'assets/src/scripts/foundation.js',
  'assets/src/scripts/scroll-top.js'
], 'assets/dist/js/all.js');

mix.sourceMaps();
