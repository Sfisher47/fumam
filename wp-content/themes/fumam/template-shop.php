<?php
/*
    Template Name: Fumam Shop Page


 * The template for displaying shop pages
 *
 * This is the template that displays shop pages like cart page, checkout page.
 * Please note that this is the WooCommerce construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fumam
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'shop' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
