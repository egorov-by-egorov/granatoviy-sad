<?php 
	/*
		Template Name: Главная-страница
	*/
?>

<?php get_header(); ?>
<main class="main">
	
	<!-- Hero -->
	
	<?php  if (!wp_is_mobile() ): ?>
	
    <section id="hero" class="hero">
		<link rel="stylesheet" href="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/css/swiper.min.css">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				
				<div class="swiper-slide">
					<img class="swiper-bg" src="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/images/slide3.jpg" alt="Меню ресторанов" />
					<div class="container swiper-item">
						<a class="main__btn main__btn--book single_a" href="/menu/" style="">Посмотреть меню</a>
						</div>
				</div>
				
				<div class="swiper-slide">
					<img class="swiper-bg" src="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/images/birthday_bann.jpg" alt="Гранат Холл" />
					<div class="container swiper-item"></div>
				</div>
				
				<div class="swiper-slide">
					<img class="swiper-bg" src="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/images/slide4.jpg" alt="Гранат Холл" />
					<div class="container swiper-item">
						<a class="main__btn main__btn--book" href="/granat-holl" >Посмотреть</a>
					</div>
				</div>
				
			</div>
			<div class="swiper-pagination swiper-pagination-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-button-prev swiper-button-white"></div>
		</div>
		<script src="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/js/swiper.min.js"></script>
		<script>
			var swiper = new Swiper('.swiper-container', {
				spaceBetween: 30,
				effect: 'fade',
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});
		</script>
	</section>
	<?php endif; ?>
	
	<!-- About -->
	
    <section class="main__section about">
    	
		
		<div class="container-fluid p-0 m-0">
			
			
			
			<div class="container-fluid p-0 about__menu-gallery">
				
				<div class="container-custom">
					<p class="line-granat"></p>
					<h2 class="main__title">Меню доставки</h2>
				</div>
				
				<div class="container-custom">
					<div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="grid-item grid-item--width40">
                            <a href="/menu-cat/supy/">
                            	<div class="about__menu-gallery-overlay"></div>
								<img alt="Горячие блюда" src="<?php bloginfo(template_url); ?>/assets/images/1-soup.jpg">
								<h3 class="about__menu-gallery-title">Супы</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/salaty/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Салаты" src="<?php bloginfo(template_url); ?>/assets/images/2-salad.jpg">
								<h3 class="about__menu-gallery-title">Салаты</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/zavtraki/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Завтраки" src="<?php bloginfo(template_url); ?>/assets/images/3-breakfast.jpg">
								<h3 class="about__menu-gallery-title">Завтраки</h3>
							</a>
							
						</div>
                        <div class="grid-item grid-item--width60">
							<a href="/menu-cat/deserty/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Десерты" src="<?php bloginfo(template_url); ?>/assets/images/4-dessert.jpg">
								<h3 class="about__menu-gallery-title">Десерты</h3>
							</a>
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/garniry/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Гарниры" src="<?php bloginfo(template_url); ?>/assets/images/5-pervie-bluda.jpg">
								<h3 class="about__menu-gallery-title">Гарниры</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/shashliki/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Шашлыки" src="<?php bloginfo(template_url); ?>/assets/images/shashlyk.jpg">
								<h3 class="about__menu-gallery-title">Шашлыки</h3>
							</a>
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/napitki/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Напитки" src="<?php bloginfo(template_url); ?>/assets/images/7-drinks.jpg">
								<h3 class="about__menu-gallery-title">Напитки</h3>
							</a>
							
						</div>
                        <div class="grid-item">
							<a href="/menu-cat/sousy/">
								<div class="about__menu-gallery-overlay"></div>
								<img alt="Соусы" src="<?php bloginfo(template_url); ?>/assets/images/8-sauces.jpg">
								<h3 class="about__menu-gallery-title">Соусы</h3>
							</a>
						</div>
					</div>
				</div>
                <div class="text-center">
                    <a href="/menu/" class="main__btn main__btn--link">
                        Больше меню <img class="bluedish" alt="больше" src="<?php bloginfo(template_url); ?>/assets/images/dish-icon.svg"><img class="whitedish" alt="больше" src="<?php bloginfo(template_url); ?>/assets/images/dish-icon-white.svg">
					</a>
				</div>
			</div>
			
			
			<div class="container-custom">
				<h2 class="main__title main__title--about">О ресторане</h2>
			</div>
			
			<div class="about__box about__bg">
    			<div class="row justify-content-between m-0">
    				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    					<div class="about__desc">
							<?php  if (!wp_is_mobile() ): ?>
							<img src="<?php bloginfo(template_url); ?>/assets/images/about_pic.jpg" alt="Фото ресторана" class="about__pic-img">
							<?php endif; ?>
        					<p>
        						Если у вас намечается какое-то торжество, романтический ужин или Вы просто хотите вкусно поесть в ресторане, сеть ресторанов «Гранатовый сад №1» ждет вас! В этом уютном месте, где царит атмосфера гармонии и присутствует индивидуальный подход к каждому клиенту, вы непременно расслабитесь и насладитесь изысканной кухней, меню которой включает в себя неожиданные приятные сюрпризы.
							</p>
							<p>Филиалы сети в Москве - <a href="/restoran-marino/" >ресторан в Марьино</a> и <a href="/restoran-sokol/" >ресторан на Соколе</a>.</p>
							<p>Помимо традиционных блюд русской, европейской и французской кухонь, ресторан готов предложить вам массу удивительных эксклюзивных кулинарных шедевров, уникальные рецепты которых разработаны командой шеф-поваров данного заведения и сохраняются в тайне.</p>
							<p>В ресторане вы найдете не только изысканные блюда, качественные вина и приятную атмосферу, но и уважительное отношение со стороны персонала. Вас действительно встретят как гостей: заглянув в «Гранатовый сад №1» один раз, многие посетители ресторана становятся его постоянными клиентами. </p>							
							<p><b>Зайдите и убедитесь во всем на собственном опыте!</b></p>							
							<p>И конечно, в наших ресторанах вас ждет огромный <a href="/bankets/">банкетный зал</a>, стильный и оригинальный интерьер, лучшее музыкальное оборудование. По индивидуальному заказу клиента мы украшаем зал в соответствии с тематикой и направленностью праздника, предлагаем яркие и нестандартные решения и креативность. Для проведения свадеб и юбилеев мы индивидуально составляем концепцию праздника, продумываем размещение столов, подбираем лучшую команду для обслуживания. Чтобы громко и отметить свое мероприятий вы также можете заказать ди-джея или любимых музыкальных исполнителей.</p>
							<p>Ресторан также осуществляет <a href="/menu/">доставку еды</a> по всей Москве. Мы гарантируем оперативную доставку и превосходное качество наших блюд! Стоимость доставки бесплатная. </p>
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
							<a href="./menu/" class="main__btn main__btn--more">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
</main>
<?php get_footer(); ?>