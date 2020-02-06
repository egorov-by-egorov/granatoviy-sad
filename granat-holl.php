<?php
	/*
		Template Name: Гранат Холл
	*/
?>
<!doctype html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Банкетный Зал - Гранат Холл</title>
		<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/granat-hall/assets/css/core.min.css">
		<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/granat-hall/assets/css/index.css">
		<!-- Scripts -->
		<script defer src="<?php bloginfo(template_url); ?>/granat-hall/assets/js/jquery-3.4.1.min.js"></script>
		<script defer src="<?php bloginfo(template_url); ?>/granat-hall/assets/js/core.min.js"></script>
		<script defer src="<?php bloginfo(template_url); ?>/granat-hall/assets/js/index.js"></script>
	</head>
	<body>
		<!-- Header -->
		<header class="header">
			<div class="header__top">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-2 d-none d-lg-block">г. Москва, улица Цимлянская 2а</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-4">
							<div class="header__logo">
								<a href="/">
									<img class="header__logo-img" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/main_logo.svg" alt="Логотип Гранат холла" />
								</a>
							</div>
						</div>
						<div class="col-lg-2 d-none d-lg-block">
							<a href="tel:+79858111111" class="header__phone">+7 985 811-11-11</a>
							<a href="tel:+79252122222" class="header__phone">+7 925 212-22-22</a>
						</div>
						<div class="col-lg-2 d-none d-lg-block"></div>
					</div>
					<button class="d-block d-lg-none mobile-btn" type="button">
						<span></span>
					</button>
					<nav id="mobile__menu" class="mobile__menu">
						<ul class="mobile__menu-list"></ul>
					</nav>
				</div>
			</div>
			<div class="header__bottom">
				<div class="container">
					<div class="header__bottom-decor">
						<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/decor/panel.svg" alt="decor">
					</div>
					<div class="row">
						
						<div class="col-lg-4 d-none d-lg-block">
							<nav class="header__nav">
								<ul>
									<li><a class="header__nav-link" href="/">Главная</a></li>
									<li><a class="header__nav-link" href="#about">О нас</a></li>
									<li><a class="header__nav-link" href="#hall">Залы</a></li>
								</ul>
							</nav>
						</div>
						
						<div class="col-lg-4"></div>
						
						<div class="col-lg-4 d-none d-lg-block">
							<nav class="header__nav">
								<ul>
									<li><a class="header__nav-link" href="#gallery">Галерея</a></li>
									<li><a class="header__nav-link" href="#feedback">Отзывы</a></li>
									<li><a class="header__nav-link" href="#contacts">Контакты</a></li>
									<li><a href="https://www.instagram.com/granat_hall/" target="_blank" class="socials__link">
									
										<?php  if (!wp_is_mobile() ): ?>
											<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/inst-white.svg" alt="Link to Instagram" class="socials__icon">
											<?php else:?>
												<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/inst-black.svg" alt="Link to Instagram" class="socials__icon">
										<?php endif; ?>
									</a></li>
								</ul>
							</nav>
<!--
							<div class="socials">
								<div class="row justify-content-center">
									
										<a href="#0" target="_blank" class="socials__link">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/vk.svg" alt="Link to Vkontakte" class="socials__icon">
										</a>
										
										<a href="#0" target="_blank" class="socials__link">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/fb.svg" alt="Link to Facebook" class="socials__icon">
										</a>
									
									<a href="https://www.instagram.com/granat_hall/" target="_blank" class="socials__link">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/inst.svg" alt="Link to Instagram" class="socials__icon">
									</a>
								</div>
							</div>
-->
						</div>
						
					</div>
				</div>
			</div>
			
		</header>
		<!-- Main -->
		<main id="wrapper" class="main">
			<!-- Hero -->
			<section class="main__section hero">
				<?php  if (!wp_is_mobile() ): ?>
				<video autoplay="" class="hero__video-box hero__video d-none d-sm-block" loop="" muted="" playsinline="">
					<source src="<?php bloginfo(template_url); ?>/granat-hall/assets/video/test1.mp4" type="video/mp4">
				</video>
				<?php endif; ?>
				<div class="container">
					<div class="hero__content">
						
						<button type="button" class="d-block d-xl-none main__input-submit main__input-submit--modal" data-toggle="modal" data-target="#main_modal_form">Забронировать</button>
						<form class="hero__form" >
							<div class="d-flex flex-row flex-wrap flex-xl-nowrap align-items-center">
								<div class="col-7 col-xl">
									<label class="hero__form-label" for="hero__form-calendar">
										<span>Дата события</span>
									</label>
									<div class="position-relative">
										<input id="hero__form-calendar" class="main__input main__input--calendar main__input--hero-form_input datepicker" type="text" value="27/05/2020">
										<img class="hero__form-img_calend" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/calend.svg" alt="icon">
									</div>
								</div>
								<div class="col-5 col-xl">
									<label class="hero__form-label" for="hero__form-persons">
										<span>Кол-во человек</span>
									</label>
									<input id="hero__form-persons"	class="main__input main__input--hero-form_input"	type="number"	placeholder="">
								</div>
								<div class="col-12 col-xl">
									<img class="hero__form-img_time d-none d-xl-block" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/time.svg" alt="icon">
									<div class="row justify-content-between justify-content-xl-start flex-nowrap p-0 pl-xl-4">
										<div class="col">
											<label class="hero__form-label" for="hero__form-start">
												<span>Начало</span>
											</label>
											<select id="hero__form-start" class="main__input hero__form-time" name="number">
												<option>11:00</option>
												<option selected="selected">11:30</option>
												<option>12:00</option>
												<option>12:30</option>
												<option>13:00</option>
												<option>13:30</option>
												<option>14:00</option>
												<option>14:30</option>
												<option>15:00</option>
												<option>15:30</option>
												<option>16:00</option>
												<option>16:30</option>
												<option>17:00</option>
												<option>17:30</option>
												<option>18:00</option>
												<option>18:30</option>
												<option>19:00</option>
												<option>19:30</option>
												<option>20:00</option>
												<option>20:30</option>
												<option>21:00</option>
												<option>21:30</option>
												<option>22:00</option>
												<option>22:30</option>
												<option>23:00</option>
												<option>23:30</option>
												<option>00:00</option>
												<option>00:30</option>
												<option>01:00</option>
												<option>01:30</option>
											</select>
										</div>
										<div class="col">
											<label class="hero__form-label" for="hero__form-end">
												<span>Окончание</span>
											</label>
											<select id="hero__form-end" class="main__input hero__form-time" name="number">
												<option>11:00</option>
												<option>11:30</option>
												<option>12:00</option>
												<option>12:30</option>
												<option>13:00</option>
												<option selected="selected">13:30</option>
												<option>14:00</option>
												<option>14:30</option>
												<option>15:00</option>
												<option>15:30</option>
												<option>16:00</option>
												<option>16:30</option>
												<option>17:00</option>
												<option>17:30</option>
												<option>18:00</option>
												<option>18:30</option>
												<option>19:00</option>
												<option>19:30</option>
												<option>20:00</option>
												<option>20:30</option>
												<option>21:00</option>
												<option>21:30</option>
												<option>22:00</option>
												<option>22:30</option>
												<option>23:00</option>
												<option>23:30</option>
												<option>00:00</option>
												<option>00:30</option>
												<option>01:00</option>
												<option>01:30</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-12 col-xl">
									<label class="hero__form-label" for="hero__form-name">
										<span>Имя*</span>
									</label>
									<input id="hero__form-name"
									class="main__input main__input--hero-form_input"
									type="text"
									placeholder="Ваше имя"
									title="Введите Ваше имя. Поле должно содержать минимум два символа и иметь только буквы."
									minlength="2"
									pattern="[A-Za-zА-Яа-яЁё]+"
									inputmode="text"
									spellcheck="true"
									oninvalid="this.setCustomValidity('Введите Ваше имя. Поле должно содержать минимум два символа и иметь только буквы.')"
									oninput="setCustomValidity('')"
									required>
								</div>
								<div class="col-12 col-xl">
									<label class="hero__form-label" for="hero__form-phone">
										<span>Телефон*</span>
									</label>
									<input id="hero__form-phone"
									class="main__input main__input--hero-form_input"
									type="text"
									placeholder="+7 ( ) ___-__-__"
									inputmode="numeric"
									spellcheck="true"
									oninvalid="this.setCustomValidity('Поле обязательно для заполнения.')"
									oninput="setCustomValidity('')"
									required>
								</div>
								<div class="col text-center">
									<button id="hero__form-submit" class="main__input-submit"  value="Забронировать">Забронировать</button>
								
								</div>
							</div>
								<div id="hero_message"></div>
						</form>
						
					</div>
				</div>
			</section>
			<!-- About -->
			<section id="about" class="main__section about">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<h2 class="main__title ">Гранат Холл - это 2 атмосферных зала</h2>
							<p class="main__desc">
								Гранат Холл – один из наиболее масштабных банкетных комплексов Москвы, идеально подходящий для проведения мероприятий любого формата. Он состоит из двух залов: зал на 300 и зал на 100 человек. <br/><br/>Роскошное оформление в бело-золотых тонах (большой зал) и специальные дизайн (маленький зал) не оставят никого без впечатлений. <br/><br/> Преимущество комплекса – новейшее аудиовизуальное оборудование, благодаря которому вы можете провести здесь не только праздники, но и деловые мероприятия, семинары, пресс-конференции и брифинги.
							</p>
						</div>
						<div class="col-12 col-md-6">
							<div class="main__frame">
								<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/about/1.jpg" alt="Фото гранат холла">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- New year -->
			<section id="newyear" class="main__section newyear">
				<div class="container position-relative">
					<div class="row">
						<div class="col-12 col-md-12 text-center">
							<h2 class="main__title main__title--decor">Новогодняя ночь 2020 в Гранат Холле</h2>
							<p class="main__desc">
								Великолепный банкетный зал, совершенно новая, потрясающая программа, меню для гурманов – всё, что нужно для  Новогодней ночи 2020 года! Атмосфера общего веселья не даст Вам скучать. <br/> Красочно оформленный зал, нарядная елка, программа развлечений, музыка и танцы посетителям Гранат Холла обеспечены.
							</p>
							
							<h3>В Новогодней программе:</h3>
							<ul class="nyul">
								<li>Дед Мороз и Снегурочка</li>
								<li>Ведущий и DJ</li>
								<li>развлекательные викторины</li>
								<li>приятные подарки </li>
								<li>необычние розыгрыши</li>
								<li>живая музыка</li>								
							</ul>
							
						</div>
						<div class="col-12 col-md-6">
							<p class="main__desc">
								<h2 class="main__title">Специальный гость - Эльбрус Джанмирзоев</h2>
								<p class="main__desc">
									Создать отличное Новогоднее настроение поможет изысканная музыкальная программа. <br/><br/> Атмосферу вечера задает известная звезда Эльбрус Джанмирзоев - один из самых популярных современных поп-исполнителей  . <br/><br/> 
									<a href="https://www.instagram.com/elbrusofficial/" target="_blank" class="socials__link elb">
										<img src="https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/granat-hall/assets/images/icons/inst.svg" alt="Link to Instagram" class="socials__icon"> elbrusofficial 
									</a> 
								</p>
							</div>
							<div class="col-12 col-md-6">
								<div class="main__frame">
									<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/about/elbrus.png" style="max-height:272px" alt="Эльбрус Джанмирзоев">
								</div>
							</div>
							<div class="col-12 ">
							<p class="main__desc">
								Если у вас не осталось сомнений, где отметить Новый год 2020, поспешите забронировать место для себя и своих друзей!   <br/>  Хотите, чтобы эта Новогодняя Ночь стала лучшей? Звоните <strong>+7 985 811-11-11 и +7 925 212-22-22 ! </strong>
								</p>
							</div>
							
							
						</div>
					</div>
				</section>
				<!-- Form -->
				<section class="main__section form">
					<div class="container position-relative">
						<div class="text-center">
							<h2 class="main__title main__title--decor">Забронировать зал</h2>
							<p class="form__desc">Оставьте контакты в форме ниже. Мы свяжемся с Вами для уточнения деталей</p>
						</div>
						<form class="form__form">
							<div class="row align-items-center justify-content-center">
								<label for="form__form-name"></label>
								<input id="form__form-name"
								class="main__input main__input--form mr-3"
								type="text"
								placeholder="Ваше имя"
								title="Введите Ваше имя. Поле должно содержать минимум два символа и иметь только буквы."
								minlength="2"
								pattern="[A-Za-zА-Яа-яЁё]+"
								inputmode="text"
								spellcheck="true"
								oninvalid="this.setCustomValidity('Введите Ваше имя. Поле должно содержать минимум два символа и иметь только буквы.')"
								oninput="setCustomValidity('')"
								required>
								<label for="form__form-phone"></label>
								<input id="form__form-phone"
								class="main__input main__input--form mr-3"
								type="text"
								placeholder="+7 ( ) ___-__-__"
								inputmode="numeric"
								spellcheck="true"
								oninvalid="this.setCustomValidity('Поле обязательно для заполнения.')"
								oninput="setCustomValidity('')"
								required>
								<button id="form__form-submit" class="main__input-submit main__input-submit--form" >Забронировать</button>
							</div>
							<div id="form_message"></div>
						</form>
					</div>
				</section>
				<!-- Hall -->
				<section id="hall" class="main__section hall">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-md-6">
								<div class="main__frame">
									<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/hall/1.jpg" alt="Зал на 300 человек">
								</div>
							</div>
							<div class="col-12 col-md-6">
								<h2 class="main__title">Зал на 300 человек</h2>
								<p class="main__desc">
									Вас ждет <strong>огромный банкетный зал</strong>, стильный и оригинальный интерьер, лучшее музыкальное оборудование. Наш просторный зал вмещает <strong>до 300 человек</strong>, а это означает, что даже самая грандиозная свадьба или юбилей у нас будут незабываемыми! <br/><br/> Для проведения <strong>свадеб и юбилеев</strong> мы индивидуально составляем концепцию праздника, продумываем размещение столов, подбираем лучшую команду для обслуживания. Чтобы громко и отметить свое мероприятий вы также можете заказать ди-джея или любимых музыкальных исполнителей.
								</p>
							</div>
							<div class="col-12 col-md-6 order-4 order-xl-3">
								<h2 class="main__title">Зал на 100 человек</h2>
								<p class="main__desc">
									Визитная карточка банкетного зала на 100 человек – интересный и необычный дизайн. Экстерьер здания и интерьер внутренних помещений производит впечатление настоящей сказки. <br/><br/>
									По индивидуальному заказу клиента мы украшаем зал в соответствии с тематикой и направленностью праздника, предлагаем яркие и нестандартные решения и креативность. <br/><br/>Заказывая проведения праздника в нашем заведении, вы получаете множество положительных эмоций и качественное обслуживание.
								</p>
							</div>
							<div class="col-12 col-md-6 order-3 order-xl-4">
								<div class="main__frame">
									<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/hall/2.jpg" alt="Зал на 100 человек">
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Gallery -->
				<section id="gallery" class="main__section gallery">
					<div class="container">
						<div class="text-center">
							<h2 class="main__title main__title--decor">Фотогалерея</h2>
						</div>
						<!-- Tabs control -->
						<ul class="nav gallery__tab-list" id="pills-tab" role="tablist">
							<li class="nav-item">
								<h2 class="nav-link main__title active" id="tab-slider-1" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-slide-1" aria-selected="true">Зал на 300 человек</h2>
							</li>
							<li class="nav-item">
								<h2 class="nav-link main__title" id="tab-slider-2" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-slide-2" aria-selected="false">Зал на 100 человек</h2>
							</li>
							<!--				<li class="nav-item">-->
							<!--					<h2 class="nav-link main__title" id="tab-slider-3" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-slide-3" aria-selected="false">Видео</h2>-->
							<!--				</li>-->
						</ul>
						<!-- Tabs content -->
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-slider-1">
								<!-- Gallery slider hall-300 -->
								<div class="gallery-slider__window text-center">
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/1.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/2.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/3.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/4.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/5.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/6.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/7.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/8.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/9.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/10.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/11.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/12.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/13.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/14.jpg" alt="Фото зала на 300 человек">
									</div>
								</div>
								<div class="gallery-slider__nav">
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/1.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/2.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/3.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/4.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/5.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/6.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/7.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/8.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/9.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/10.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/11.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/12.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/13.jpg" alt="Фото зала на 300 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_300/14.jpg" alt="Фото зала на 300 человек">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-slider-2">
								<!-- Gallery slider hall-100 -->
								<div class="gallery-slider__window text-center">
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/1.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/2.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/3.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/4.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/5.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/6.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/7.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__top">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/8.jpg" alt="Фото зала на 100 человек">
									</div>
								</div>
								<div class="gallery-slider__nav">
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/1.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/2.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/3.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/4.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/5.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/6.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/7.jpg" alt="Фото зала на 100 человек">
									</div>
									<div class="gallery-slider__thumbnail">
										<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/gallery/hall_100/8.jpg" alt="Фото зала на 100 человек">
									</div>
								</div>
							</div>
							<!--				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-slider-3">-->
							<!--					-- Gallery slider -- -->
							<!--					<div class="gallery-slider__window text-center">-->
							<!--						<div class="gallery-slider__top">видео 1</div>-->
							<!--						<div class="gallery-slider__top">видео 2</div>-->
							<!--						<div class="gallery-slider__top">видео 3</div>-->
							<!--						<div class="gallery-slider__top">видео 4</div>-->
							<!--					</div>-->
							<!--					<div class="gallery-slider__nav">-->
							<!--						<div class="gallery-slider__thumbnail">видео 1</div>-->
							<!--						<div class="gallery-slider__thumbnail">видео 2</div>-->
							<!--						<div class="gallery-slider__thumbnail">видео 3</div>-->
							<!--						<div class="gallery-slider__thumbnail">видео 4</div>-->
							<!--					</div>-->
							<!--				</div>-->
						</div>
					</div>
				</section>
				<!-- Advantages -->
				<section class="main__section advantages">
					<div class="container">
						<div class="text-center">
							<h2 class="main__title main__title--decor">Что вы полуаете</h2>
						</div>
						<div class="row justify-content-between">
							<div class="col-12 col-md-5">
								<div class="row">
									<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/table.svg" alt="icon"></div>
									<div class="advantages__desc col-12 col-md-10">
										<h3 class="advantages__title main__title">Два зала</h3>
										<p class="advantages__text main__desc">
											Возможность выбрать зал для разного количества гостей. Вы будете чувствовать себя комфортно.
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="row">
									<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/serving-dish.svg" alt="icon"></div>
									<div class="advantages__desc col-12 col-md-10">
										<h3 class="advantages__title main__title">Изысканное меню</h3>
										<p class="advantages__text main__desc">
											Блюда русской и европейской кухни
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="row">
									<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/rings.svg" alt="icon"></div>
									<div class="advantages__desc col-12 col-md-10">
										<h3 class="advantages__title main__title">Организация мероприятий</h3>
										<p class="advantages__text main__desc">
											Возможность выбрать зал для разного количества гостей. Вы будете чувствовать себя комфортно.
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="row">
									<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/wedding-arch.svg" alt="icon"></div>
									<div class="advantages__desc col-12 col-md-10">
										<h3 class="advantages__title main__title">Оформление зала</h3>
										<p class="advantages__text main__desc">
											Мы можем оформить зал согласно Вашим пожеланиям и тематике мероприятия.
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-5">
								<div class="row">
									<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/parking.svg" alt="icon"></div>
									<div class="advantages__desc col-12 col-md-10">
										<h3 class="advantages__title main__title">Собственная парковка</h3>
										<p class="advantages__text main__desc">
											У нас всегда найдется место для Вашего автомобиля!
										</p>
									</div>
								</div>
							</div>
							<!--
								<div class="col-12 col-md-5">
								<div class="row">
								<div class="advantages__pic col-12 col-md-2"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/percent.svg" alt="icon"></div>
								<div class="advantages__desc col-12 col-md-10">
								<h3 class="advantages__title main__title">Бонусная программа</h3>
								<p class="advantages__text main__desc">
								В нашем ресторане действует программа лояльности, полные условия можно узнать тут.
								</p>
								</div>
								</div>
								</div>
							-->
						</div>
					</div>
				</section>
				<!-- Banket -->
				<!-- <section class="main__section banket">
					<div class="container">
					<div class="banket__slider">
					<div class="banket__slide">
					<div class="text-center mb3">
					<h2 class="main__title main__title--decor">Банкет на свадьбу</h2>
					</div>
					<div class="row">
					<div class="col-12 col-md-6">
					<h3 class="banket__slide-subtitle">Примерное меню:</h3>
					<ol class="banket__slide-desc">
					<li>Гусь запеченный</li>
					<li>Салат из жареного сулугуни</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					</ol>
					</div>
					<div class="col-12 col-md-6 text-right">
					<img class="banket__slide-img" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/banket/1.jpg" alt="photo">
					</div>
					</div>
					<div class="text-center">
					<a class="banket__slide-link main__input-submit" href="#0">Смотреть полное меню</a>
					</div>
					</div>
					<div class="banket__slide">
					<div class="text-center mb3">
					<h2 class="main__title main__title--decor">Банкет на свадьбу</h2>
					</div>
					<div class="row">
					<div class="col-12 col-md-6">
					<h3 class="banket__slide-subtitle">Примерное меню:</h3>
					<ol class="main__desc">
					<li>Гусь запеченный</li>
					<li>Салат из жареного сулугуни</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					</ol>
					</div>
					<div class="col-12 col-md-6 text-right">
					<img class="banket__slide-img" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/banket/1.jpg" alt="photo">
					</div>
					</div>
					.text-center
					<a class="banket__slide-link main__input-submit" href="#0">Смотреть полное меню</a>
					
					</div>
					<div class="banket__slide">
					<div class="text-center mb3">
					<h2 class="main__title main__title--decor">Банкет на свадьбу</h2>
					</div>
					<div class="row">
					<div class="col-12 col-md-6">
					<h3 class="banket__slide-subtitle">Примерное меню:</h3>
					<ol class="banket__slide-desc">
					<li>Гусь запеченный</li>
					<li>Салат из жареного сулугуни</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					<li>Салат Греческий с Бакинскими овощами</li>
					</ol>
					</div>
					<div class="col-12 col-md-6 text-right">
					<img class="banket__slide-img" src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/banket/1.jpg" alt="photo">
					</div>
					</div>
					.text-center
					<a class="banket__slide-link main__input-submit main__input-submit--form" href="#0">Смотреть полное меню</a>
					
					</div>
					</div>
					</div>
				</section> -->
				<!-- Feedback -->
				<section id="feedback" class="main__section feedback">
					<div class="container">
						<div class="text-center">
							<h2 class="main__title main__title--decor">Отзывы</h2>
						</div>
						<div class="feedback__slider">
							<div class="feedback__slide">
								<div class="row">
									<div class="col-12 col-md-6">
										<h3 class="feedback__slide-title">Андрей</h3>
										<p class="feedback__slide-subject">Банкет на юбилей, 50 человек</p>
										<p class="main__desc">
											Просто идеальный банкет!!! Кухня- это что то запредельное, все получили гастрономическое удовольствие!  Качественное обслуживание, приветливый коллектив, разнообразная кухня — это лишь часть тех приятных моментов, которые я могу отметить. Спасибо нашему менеджеру  за  организацию ТАКОГО праздника!
										</p>
									</div>
									<div class="col-12 col-md-6">
										<div class="main__frame">
											<img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/feedback/1.jpg" alt="photo">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Contacts -->
				<section id="contacts" class="main__section contacts">
					<div class="row justify-content-center">
						
						<div class="contacts__item"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/map.svg" alt="icon" class="contacts__logo">
							<h3 class="contacts__title">Адрес</h3>
							<div class="contacts__info">Ул. Цимлянская 2а</div>
						</div>
						<div class="contacts__item"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/telephone.svg" alt="icon" class="contacts__logo">
							<h3 class="contacts__title">Бронь столов</h3>
							<div class="contacts__info">
								<a href="tel:+79858111111">+7 (985) 811-11-11</a>
								<a href="tel:+79252122222">+7 (925) 212-22-22</a>
							</div>
						</div>
						<div class="contacts__item"><img src="<?php bloginfo(template_url); ?>/granat-hall/assets/images/icons/email.svg" alt="icon" class="contacts__logo">
							<h3 class="contacts__title">Эл. адрес</h3>
							<div class="contacts__info">
								<a href="mailto:info@granatoviy-sad.ru">info@granatoviy-sad.ru</a>
							</div>
						</div>
					</div>
				</section>
				<!-- <Map> -->
				<section class="map"></section>
				
			</main>
			<!-- Footer -->
			<footer class="footer">
				<div class="container">
					<div class="row justify-content-center">
						<div class="developer__promind">
							<a rel="noreferrer" target="_blank" href="https://promind.studio/">
								<span>Developed by</span>
								<img class="developer__promind-img" src="<?php bloginfo('template_url') ?>/granat-hall/assets/images/icons/promind-grey.png" alt="ProMind" title="ProMind">
								<span>Promind</span>
							</a>
						</div>
					</div>
				</div>
			</footer>
			<!-- Modal -->
			<div class="modal fade" id="main_modal_form" tabindex="-1" role="dialog" aria-labelledby="ModalMainForm" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<span class="main_modal_form--exit" aria-hidden="true">&times;</span>
					</div>
				</div>
			</div>
			<a href="#wrapper" class="scrollto scroll__top"></a>
		</body>
	</html>	