<?php 
	/*
		Template Name: Гранат Холл
	*/
?>
<?php get_header(); ?>

<section class="gh-top">
	<div class="container">
		<div class="gh-top-content">
			<img class="holl-logo" src="/wp-content/themes/pomegranate-garden-theme/assets/images/logo-granathall.svg" alt="logo-granathall" />
			<p>Банкетный зал "Гранат Холл"</p>
			<span class="holl-loaction"><img src="/wp-content/themes/pomegranate-garden-theme/assets/images/location.svg" alt="location" /> ул. Цимлянская 2а</span>
			<a class="holl-tel" href="tel:+79252122222"><img src="/wp-content/themes/pomegranate-garden-theme/assets/images/tel.svg" alt="telephone" /> +7 (925) 212-22-22</a>
			<div class="holl-book">
				<a class="" data-toggle="modal" data-target="#modal_granat">Забронировать <img src="/wp-content/themes/pomegranate-garden-theme/assets/images/calendar.svg" alt="calendar" /></a>
			</div>
		</div>
		
	</section>
	
	<section class="main__section about-page">
    
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
	
	<style>
		section.gh-top{background-image: url(/wp-content/themes/pomegranate-garden-theme/assets/images/gh-top.jpg);position:relative;height: 100vh;background-size: cover;background-repeat: no-repeat;width: 100%;}
		section.gh-top .gh-top-content{width:800px;padding:30px 0;position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);text-align:center;background-color: rgba(256,256,256,0.8);border-radius:5px}
		img.holl-logo{width:220px;margin-bottom:30px}
		span.holl-loaction img{width:20px;}
		.gh-top-content p{margin-bottom:30px;font-size:18px;letter-spacing:1px;color:#000}
		a.holl-tel img{width:15px}
		span.holl-loaction, a.holl-tel{font-size:18px;margin:0 20px;color:#000}
		.holl-tel a{color:#000}
		.holl-book{margin-top:40px;margin-bottom:20px}
		.holl-book a{background-color:#a89964;color:#fff !important;font-size:22px;padding:7px 40px;border-radius:5px;cursor:pointer;text-decoration:none}
		.holl-book img{width:15px;margin-left:5px}
		
		#wpcf7-f1734-o1 input[type="tel"], #wpcf7-f5-o2 input[type="tel"]{
		min-width: 100%;
		height: 50px;
		border: 1px solid 
		#00000080;
		padding: 5px 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		color:
		#000000b3;
		}
		
		#wpcf7-f1734-o1 textarea, #wpcf7-f5-o2 textarea{
    width: 100%;
    border: 1px solid 
    #00000080;
    padding: 5px 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}
		
		
		@media screen and (max-width: 768px) {
		section.gh-top{background-position:85% 50%}
		section.gh-top .gh-top-content{width:95%;}
		img.holl-logo{width:150px}
		.gh-top-content p{font-size:16px}
		span.holl-loaction, a.holl-tel{font-size:16px;margin:0 10px}
		.holl-book{margin-top:30px;margin-bottom:0}
		.holl-book a{font-size:20px}
		}
	</style>
	
	
	<div class="modal fade" id="modal_granat" tabindex="-1" role="dialog" aria-labelledby="modal_bookTitle"
	aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header justify-content-center">
					<h2 class="modal-title" id="modal_bookTitle">Забронировать стол</h2>
					<button type="button" class="close modal_book-btn-close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fas fa-times"></i></span>
					</button>
				</div>
				<div class="modal-body">
					
					<?php echo do_shortcode('[contact-form-7 id="1734" title="Гранат Холл"]') ?>
					
					
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?> 