<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_sidebar( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
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