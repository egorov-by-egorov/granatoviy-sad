<?php 
	/*
		Template Name: О нас
	*/
?>
<?php get_header(); ?>

<section class="main__section about-page">
    <div class="container-fluid banket__header about-page__bg">
        <div class="container">
			<?php the_title( '<h1 class="banket__header-title">', '</h1>' ); ?>
		</div>
	</div>
    <div class="container">
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