<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ubik WordPress theme
 */

// Blog style
$blog_style = ubik_blog_style();

get_header(); ?>

<div id="content-wrap" class="grid-container grid-x">

  <div id="primary" class="content-area cell auto small-order-2">

    <div class="content">

      <?php	if ( have_posts() ) : ?>

				<div class="<?php echo esc_attr( ubik_blog_classes() ); ?>">

					<?php
					// Loop through posts
					while ( have_posts() ) : the_post(); ?>

						<div class="<?php echo esc_attr( ubik_blog_cell_classes() ); ?>">
				
							<?php
							if ( 'card' == $blog_style ) {

								get_template_part( 'template-parts/entry/card', get_post_type() );

							} elseif ( 'h-card' == $blog_style ) {

								get_template_part( 'template-parts/entry/h-card', get_post_type() );

							} else {

								get_template_part( 'template-parts/entry/classic', get_post_type() );

							} ?>
						
						</div>

					<?php endwhile; ?>

				</div>

			<?php
			// Display post pagination
			ubik_pagination();

			else :

			// No post found notice
			get_template_part( 'template-parts/none' );

			endif; ?>

    </div><!-- #content -->

  </div><!-- #primary -->

  <?php do_action( 'ubik_sidebar' ); ?>

</div><!-- #content-wrap -->

<?php get_footer(); ?>
