<?php
	/**
		* The template for displaying product content in the single-product.php template
		*
		* This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
		*
		* HOWEVER, on occasion WooCommerce will need to update template files and you
		* (the theme developer) will need to copy the new files to your theme to
		* maintain compatibility. We try to do this as little as possible, but it does
		* happen. When this occurs the version of the template file will be bumped and
		* the readme will list any important changes.
		*
		* @see     https://docs.woocommerce.com/document/template-structure/
		* @package WooCommerce/Templates
		* @version 3.4.0
	*/
	
	defined( 'ABSPATH' ) || exit;
	
	/**
		* Hook: woocommerce_before_single_product.
		*
		* @hooked wc_print_notices - 10
	*/
	do_action( 'woocommerce_before_single_product' );
	
	if ( post_password_required() ) {
		echo get_the_password_form(); // WPCS: XSS ok.
		return;
	}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
	
	
	<div class="row ">
		
		
		
		<?php  if (!wp_is_mobile() ): ?>
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
		<?php endif; ?>
		<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 shop_single woocommerce">
			<div class="row product_area">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<?php
						the_title( '<h1 class="shop__main-title entry-title">', '</h1>' );	
						if ( 'post' === get_post_type() ) :
					?>
					<?php endif; ?>
					<p class="line-granat"></p>
				</div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6"><?php do_action( 'woocommerce_before_single_product_summary' );	?></div>
				<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="summary entry-summary product">
						<?php							
							do_action( 'woocommerce_single_product_summary' );
							do_action( 'woocommerce_after_single_product_summary' );
						?>
					</div>
				</div>
				
			</div>
			<?php do_action( 'custom_output_related_products' ); ?>
		</div>
	</div>
	
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
