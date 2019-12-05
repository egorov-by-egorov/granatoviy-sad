<?php
	/**
		* The template for displaying all pages.
		*
		* This is the template that displays all pages by default.
		* Please note that this is the WordPress construct of pages
		* and that other 'pages' on your WordPress site will use a
		* different template.
	*/
get_header(); ?>
<div class="clear"></div>
</header> <!-- / END HOME SECTION  -->
<div id="content" class="site-content">
	
	
	<main id="main" class="site-main" role="main">
		<div class="shop__main-container">
			<div class="container-custom">
				<?php woocommerce_content(); ?>
			</div>
		</div>
	</main><!-- #main -->
	
	
	<?php get_footer(); ?>			