<?php
/**
 * Outputs page article
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

<div class="entry">
	<?php the_content();

	wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'ubik' ),
		'after'  => '</div>',
	) ); ?>
</div>
