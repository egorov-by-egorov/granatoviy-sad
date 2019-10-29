<!DOCTYPE html>
<html lang="ru">
	
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <meta content="ie=edge" http-equiv="X-UA-Compatible">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic" rel="stylesheet">
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="//leclick.ru/reservation/css/style.css" />
<script>window.onload=function(){var e,t=document.getElementsByTagName("head")[0];void 0===window.jQuery&&((e=document.createElement("script")).type="text/javascript",e.src="//leclick.ru/js/libs/jquery.js",t.appendChild(e));(e=document.createElement("script")).type="text/javascript",e.src="//leclick.ru/reservation/js/all.in.one.js",t.appendChild(e)};</script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	</head>
	
    <body>
        <div id="wrapper" class="wrapper">
            <header class="header">
                <div class="header__box">
					<div class="d-none d-lg-block doublehead-top">
						<div class="container-fluid p-0 container-fluid pl-5 pr-4">
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-8 p-0 topheader-address topheader-address-left">
									<span><i class="fas fa-map-marker-alt"></i> м. Сокол, Чапаевский пер. 10/2</span>
									<span><a href="tel:+74952555333"><i class="fa fa-phone" aria-hidden="true"></i>Бронь столов: +7 (495) 2-555-333</a></span>
									<span><a href="tel:+74952555551"><i class="fa fa-phone" aria-hidden="true"></i>Доставка: +7 (495) 2-555-55-1</a></span>
                                    <img src="<?php bloginfo(template_url); ?>/assets/images/granatIcon.svg" alt="логотип">
									<span><i class="fas fa-map-marker-alt"></i> м. Марьино, ул.Поречная д. 5/14, стр. 1</span>
								</div>
								
								<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 p-0 d-flex align-items-center justify-content-end line">
									<div class="d-lg-block d-none">
										<button class="main__btn main__btn--book" data-toggle="modal" data-target="#modal_book"><i class="far fa-calendar-alt"></i> Забронировать стол</button>
									</div>
									
									<!-- <div class="d-none d-sm-block">
										<a class="header__phone" href="">+7 (499) 340-25-52</a>
									</div>-->
									
									<!-- Sidebar btn -->
									<button class="sidebar-btn" type="button">
										<span></span>
									</button>
									
								</div>
								
							</div>
						</div>
						
					</div>
                    <div class="container-fluid p-0 container-custom">
						
                        <div class="row align-items-center">
                            <!-- Mobile phone btn -->
                            
                            <div class="header__logo col-6 col-sm-6 col-md-6 col-lg-2 col-xl-2">
                                <?php the_custom_logo( $blog_id ); ?>
							</div>
							<div class="col-2 col-sm-2 mobile-phone__dropdown">
							
	                          <button class="mobile-phone__btn" type="button">
	                               <i class="fas fa-map-marker-alt"></i>
								</button>
								<ul class="dropdown-list">
									<li class="dropdown-item">
										<h3 class="dropdown-item__title"> Гранатовый сад №1 <small>(м. Сокол)</small></h3>
										<a href="tel:+74993402552" class="dropdown-item__link">Чапаевский пер. 10/2</a>
									</li>
									<li class="dropdown-item">
										<h3 class="dropdown-item__title">Гранатовый сад №1 <small>(м. Марьино)</small></h3>
										<a href="tel:+74993402552" class="dropdown-item__link">ул.Поречная д. 5/14, стр. 1</a>
									</li>
								</ul>
							</div>
							<div class="col-2 col-sm-2 mobile-booking">
							<button class="mobile-book" data-toggle="modal" data-target="#modal_book"><i class="far fa-calendar-alt"></i></button>
							</div>
							
                            <!-- Mobile btn-->
                            <button class="col-2 col-sm-2 mobile-btn" type="button">
                                <span></span>
							</button>
							
                            <div class="col-md-10 col-lg-10 col-xl-10 align-items-center justify-content-center p-md-0">
                                
                                <nav class="header__nav p-0">
                                    <div class="row justify-content-end align-items-center m-0">
                                        <?php wp_nav_menu( array(
                                            'container'       => false,
                                            'menu'            => 'menu-1',
                                            'menu_class'      => 'header__nav-list',
                                            'echo'            => true,
                                            'fallback_cb'     => 'wp_page_menu',
                                            'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                            'depth'           => 0,
                                            'walker'          => ''
										) ); ?>
                                        
									</div>
								</nav>
								
							</div>
							
                           <!-- <div class="col-sm-12 col-md-3 col-lg-4 col-xl-4 p-0 d-flex align-items-center justify-content-end line">
                                <div class="d-lg-block d-none">
                                    <button class="main__btn main__btn--book" data-toggle="modal" data-target="#modal_book">Забронировать стол</button>
								</div>
								
                                
                                <button class="sidebar-btn" type="button">
                                    <span></span>
								</button>
								
							</div>-->
							
                            <aside class="nav-sidebar">
                                <nav class="nav-sidebar-nav">
                                    <?php wp_nav_menu( array(
                                        'container'       => false,
                                        'menu'            => 'nav-sidebar__menu',
                                        'menu_class'      => 'nav-sidebar__list',
                                        'echo'            => true,
                                        'fallback_cb'     => 'wp_page_menu',
                                        'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                        'depth'           => 0,
                                        'walker'          => '',
									) ); ?>
								</nav>
								
								
								
                                <section class="sidebar__contact">
                                    <div class="container-fluid p-0">
										
                                        <div class="contact__box sidebar__contact__box">
											
                                            <div class="row p-0 m-0">
                                                <h3 class="contact__title sidebar__contact-title col-md-12 col-lg-12 p-0">Контакты</h3>
                                                <ul class="col-md-6 col-lg-6 sidebar__contact__list">
                                                    <li class="contact__address">
                                                        <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon.svg" alt="icon" class="contact__address-icon">
                                                        <span>Чапаевский пер. 10/2</span>
													</li>
                                                    <li class="contact__address">
                                                        <span><a href="tel:+74950323777">+7(495) 032-37-77</a></span>
													</li>
                                                    <li class="contact__address">
                                                        <span>info@granatoviy-sad.ru</span>
													</li>
												</ul>
                                                <ul class="col-md-6 col-lg-6">
													<li class="contact__address">
                                                        <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon.svg" alt="icon" class="contact__address-icon">
                                                        <span>ул.Поречная д. 5/14, стр. 1</span>
													</li>
                                                    <li class="contact__address">
                                                        <span><a href="tel:+74993402552">+7(499) 340-25-52</a></span>
													</li>
                                                    <li class="contact__address">
                                                        <span>info@granatoviy-sad.ru</span>
													</li>
												</ul>
											</div>
											
										</div>
										
										
<!--                                        <div id="map-sidebar" class="map-sidebar"></div>-->

									</div>
								</section>
							</aside>
							
						</div>
					</div>
				</div>
			</header>									