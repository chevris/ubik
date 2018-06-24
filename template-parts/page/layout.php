<?php
/**
 * Outputs correct page layout
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<article class="single-page-article">

  <?php
	// Get page entry
	get_template_part( 'template-parts/page/article' );

	?>

</article>
