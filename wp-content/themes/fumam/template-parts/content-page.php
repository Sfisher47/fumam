<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fumam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header py-20 mt-6 mt-lg-0 position-relative">		
		<div class="position-absolute start-0 end-0 top-0 bottom-0 bg-fu-cover" 
			style="background-image: url('<?php the_post_thumbnail_url('page_banner') ?>');">
			<!--<?php fumam_post_thumbnail(); ?>-->
		</div>
		<div class="position-absolute start-0 end-0 top-0 bottom-0 d-flex justify-content-center align-items-center">
			<?php the_title( '<h1 class="entry-title fw-light text-white text-center">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	

	<div class="entry-content py-10">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fumam' ),
								'after'  => '</div>',
							)
						);
					?>
				</div>
			</div>
		</div>		
	</div><!-- .entry-content -->
	
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'fumam' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
