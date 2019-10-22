<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pomegranate_Garden_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="shop__main-container">
		<div class="container-custom">

			<?php the_title( '<h1 class="shop__main-title entry-title">', '</h1>' ); ?>
<p class="line-granat"></p>
			<?php pomegranate_garden_theme_post_thumbnail(); ?>

			<div class="entry-content">
				<div class="row">
					<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 shop__sidebar">
						<?php echo do_shortcode('[wcas-search-form]'); ?>
						<?php wp_nav_menu( array(
							'container'       => false,
							'menu'            => 'woo-sidebar',
							'menu_class'      => 'gsw-sidebar',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>
					</div>
					<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 shop__main-category">
						<?php
							the_content();

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pomegranate-garden-theme' ),
								'after'  => '</div>',
							) );
						?>
						
					</div>
				</div>
			</div> <!-- .entry-content -->
		</div> <!-- container -->
	</div>
	<?php if ( get_edit_post_link() ) : ?>
		
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'pomegranate-garden-theme' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
