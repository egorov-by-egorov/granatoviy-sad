<div class="container static">
	<?php
		the_content();
		
		wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pomegranate-garden-theme' ),
		'after'  => '</div>',
		) );
	?>
	
</div>