<?php 
	/*
		Template Name: Главная-страница
	*/
?>

<?php get_header(); ?>
<main class="main">
	
	<!-- Hero -->
	
    <section id="hero" class="hero">
        <?php echo do_shortcode('[rev_slider alias="gallery_slider"]'); ?>
	</section>
	
	
	<!-- About -->
	
    <section class="main__section about">
    	
		
		<div class="container-fluid p-0 m-0">
			
			
			
			<div class="container-fluid p-0 about__menu-gallery">
				
				<div class="container-custom">
					<p class="line-granat"></p>
					<h2 class="main__title">Наше меню</h2>
				</div>
				
				<div class="container-custom">
					<div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="grid-item grid-item--width40">
                            <a href="./product-category/supy/">
                            	<div class="about__menu-gallery-overlay"></div>
								<img alt="Горячие блюда" src="<?php bloginfo(template_url); ?>/assets/images/1-soup.jpg">
								<h3 class="about__menu-gallery-title">Супы</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="./product-category/salaty/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Салаты" src="<?php bloginfo(template_url); ?>/assets/images/2-salad.jpg">
								<h3 class="about__menu-gallery-title">Салаты</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="./product-category/zavtraki/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Завтраки" src="<?php bloginfo(template_url); ?>/assets/images/3-breakfast.jpg">
								<h3 class="about__menu-gallery-title">Завтраки</h3>
							</a>
							
						</div>
                        <div class="grid-item grid-item--width60">
							<a href="./product-category/deserty/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Десерты" src="<?php bloginfo(template_url); ?>/assets/images/4-dessert.jpg">
								<h3 class="about__menu-gallery-title">Десерты</h3>
							</a>
						</div>
                        <div class="grid-item">
							<a href="./product-category/garniry/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Гарниры" src="<?php bloginfo(template_url); ?>/assets/images/5-pervie-bluda.jpg">
								<h3 class="about__menu-gallery-title">Гарниры</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="./product-category/steyki-bbq/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Стейки" src="<?php bloginfo(template_url); ?>/assets/images/6-bbq.jpg">
								<h3 class="about__menu-gallery-title">Стейки</h3>
							</a>
						</div>
                        <div class="grid-item">
							<a href="./product-category/napitki/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Напитки" src="<?php bloginfo(template_url); ?>/assets/images/7-drinks.jpg">
								<h3 class="about__menu-gallery-title">Напитки</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="./product-category/sousy/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Соусы" src="<?php bloginfo(template_url); ?>/assets/images/8-sauces.jpg">
								<h3 class="about__menu-gallery-title">Соусы</h3>
							</a>
						</div>
					</div>
				</div>
                <div class="text-center">
                    <a href="./shop/" class="main__btn main__btn--link">
                        Больше меню <img class="bluedish" alt="больше" src="<?php bloginfo(template_url); ?>/assets/images/dish-icon.svg"><img class="whitedish" alt="больше" src="<?php bloginfo(template_url); ?>/assets/images/dish-icon-white.svg">
					</a>
				</div>
			</div>
			
			
			<div class="container-custom">
				<h2 class="main__title main__title--about">О ресторане</h2>
			</div>
			
			<div class="about__box about__bg">
    			<div class="row justify-content-between m-0">
    				<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
    					<div class="about__desc">
        					<p>
        						Основное направление ресторана – русская, кавказская кухни. Особое внимание уделяется блюдам, приготовленным на гриле, и свежей выпечке из тандыра. А плов, томленый в казане, не оставит равнодушным даже самого взыскательного посетителя. Широкий ассортимент коктейлей и прохладительных напитков утолит вашу жажду и порадует свежестью и буйством красок. Ресторан разделен на несколько автономных залов, где удобно разместится и небольшая компания и праздничный банкет. Для любителей свежего воздуха открыта летняя веранда. Ресторан в Марьино – заведение, где можно повеселиться, спеть любимые песни под караоке, насладиться ароматным кальяном или потанцевать под живую музыку.
							</p>
						</div>
					</div>
					<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
						<div class="about__pic">
        					<img src="<?php bloginfo(template_url); ?>/assets/images/about_pic.jpg" alt="Фото ресторана" class="about__pic-img">
						</div>
					</div>
				</div>
			</div>
			
			<div class="about__container">
				<div class="row m-0">
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 p-0">
						<div class="about__container-item about__container-item--bg1">
							
							<h3 class="about__container-title">Кейтеринг</h3>
							<a href="./bankets/" class="main__btn main__btn--more">Подробнее</a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 p-0">
						<div class="about__container-item about__container-item--bg2"></div>
					</div>
					<div class="col-lg-6 col-md-6 p-0">
						<div class="about__container-item about__container-item--bg3"></div>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 p-0">
						<div class="about__container-item about__container-item--bg4">
							<h3 class="about__container-title">Меню</h3>
							<a href="./shop/" class="main__btn main__btn--more">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--
	<div class="testi">
	 <?php echo do_shortcode('[testimonials theme="default_style" paginate="all" count="5" orderby="date" order="ASC" show_title="0" use_excerpt="0" reveal_full_content="0" show_thumbs="0" show_date="1" show_other="1" hide_view_more="1" output_schema_markup="1" show_rating="stars"]'); ?>
	</div>
	-->
    <!-- Gallery -->
	
    <section class="main__section gallery">
    	<div class="container-fluid p-0">
    		<p class="line-granat"></p>
    		<h2 class="main__title">Галерея</h2>
        	<div class="gallery__box">
			    <div class="container-fluid p-0">
			        <?php

						if ( $terms = get_terms( array( 'taxonomy' => 'category', 'include' => '165,164,166' , 'orderby' => 'include', 'exclude' => '1' ) ) ) : 

				 			echo '<div class="gallery__filter">';

									foreach ( $terms as $term ) :
										echo '<a href="' . $term -> term_id.'" class="gallery-filter__link">';
												echo $term->name;
										echo '</a>';
									endforeach;

							echo '</div>';
						endif;
					?>

					<div class="gallery-page__box-photo">

						<div id="164" class="gallery-page__box gallery-page__box--hide">
			 				<div class="row m-0">

						        <?php 
						            $posts = get_posts( array(
										'numberposts' => -1,
										'category_name'    => 'porechni-rest',
										'orderby'     => 'date',
										'order'       => 'ASC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									) );

									foreach( $posts as $post ){
										setup_postdata($post);
									    ?>
									    
							            <div class="col-6 col-sm-6 col-md-6 col-lg-3 gallery-page__item">
											<a href="<?php  
											$checkBigPic = get_field( "picture-big" );

											if( $checkBigPic ) {
												the_field('picture-big');
											} else {
												the_field('picture');
											}
										?>" class="img-zoom">
								                <div class="gallery-page__content">
							                    <img alt="" src="<?php the_field('picture'); ?>">
								                </div>
						                    </a>
							            </div>
								        

									    <?php
									}

											wp_reset_postdata(); // сброс
								?>
							</div>
						</div>

				    	<div id="165" class="gallery-page__box gallery-page__box--hide">
				    		<div class="row m-0">

						        <?php 
						            $posts = get_posts( array(
										'numberposts' => -1,
										'category_name'    => 'cherkaski-rest',
										'orderby'     => 'date',
										'order'       => 'ASC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									) );

									foreach( $posts as $post ){
										setup_postdata($post);
									    ?>
									    
							            <div class="col-6 col-sm-6 col-md-6 col-lg-3  gallery-page__item">
											<a href="<?php  
											$checkBigPic = get_field( "picture-big" );

											if( $checkBigPic ) {
												the_field('picture-big');
											} else {
												the_field('picture');
											}
										?>" class="img-zoom">
								                <div class="gallery-page__content">
							                    <img alt="" src="<?php the_field('picture'); ?>">
								                </div>
						                    </a>
							            </div>
								        

									    <?php
									}

									wp_reset_postdata(); // сброс
								?>
							</div>
						</div>

						<div id="166" class="gallery-page__box gallery-page__box--hide">
							<div class="row m-0">

						        <?php 
						            $posts = get_posts( array(
										'numberposts' => -1,
										'category_name'    => 'night-club',
										'orderby'     => 'date',
										'order'       => 'ASC',
										'post_type'   => 'post',
										'suppress_filters' => false, // подавление работы фильтров изменения SQL запроса
									) );

									foreach( $posts as $post ){
										setup_postdata($post);
									    ?>
									    
							            <div class="col-6 col-sm-6 col-md-6 col-lg-3  gallery-page__item">
											<a href="<?php  
											$checkBigPic = get_field( "picture-big" );

											if( $checkBigPic ) {
												the_field('picture-big');
											} else {
												the_field('picture');
											}
										?>" class="img-zoom">
								                <div class="gallery-page__content">
							                    <img alt="" src="<?php the_field('picture'); ?>">
								                </div>
						                    </a>
							            </div>
								        

									    <?php
									}

											wp_reset_postdata(); // сброс
								?>
							</div>
						</div>

			    	</div>

		    	</div>
			</div>
		</div>
	</section>
	
</main>
<?php get_footer(); ?>