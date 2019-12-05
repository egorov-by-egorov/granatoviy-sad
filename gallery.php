<?php 
	/*
		Template Name: Галерея
	*/
?>
<?php get_header() ?>
<section class="banket">
    <div class="container-fluid banket__header">
        <div class="container">
            <h2 class="banket__header-title">Галерея</h2>
		</div>  
	</div>
</section>

<!-- Gallery -->

<section class="gallery">
	<div class="container p-0">
		<div class="about-page__desc">
			<?php
				while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-pure', get_post_type() );
				endwhile; // End of the loop.
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?> 