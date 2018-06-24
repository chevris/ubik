<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Ubik WordPress theme
 */

get_header(); ?>

<div id="content-wrap" class="grid-container grid-x">

  <div id="primary" class="content-area cell auto small-order-2">

    <div class="content">

    <?php	if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/search/layout' ); ?>

      <?php endwhile; ?>

      <?php
      // Display post pagination
      ubik_pagination(); ?>

    <?php else :

    // No post found notice
    get_template_part( 'template-parts/none' );

    endif; ?>

    </div><!-- #content -->

  </div><!-- #primary -->

  <?php do_action( 'ubik_sidebar' ); ?>

</div><!-- #content-wrap -->

<?php get_footer(); ?>

