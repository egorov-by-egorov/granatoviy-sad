<footer class="footer">
	
    <!-- Contacts -->
	
    <section class="contact">
        <div class="container-fluid p-0">
            <p class="line-granat"></p>
            <div class="row align-items-center m-0">
				<?php  if (!wp_is_mobile() ): ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <?php
						echo is_page('term-delivery');
                        if (is_checkout() || is_page('term-delivery')) {
						?>
						
						<h3 class="contact__title">Зоны доставки ресторанов</h3>
						<div id="delivery_map" class="delivery_map"></div>
						<?php
							} else if (is_page( 825 )) {
						?>
						<div id="map" class="map"></div>
						<?php
						}
					?>
				</div>
				<?php endif; ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div class="contact__box">
                        <div class="container p-0">
                            <div class="row m-0">
								
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 d-none d-lg-block">
                                    <div class="row m-0 justify-content-md-center">
										
                                        <div class="col-lg-6 col-md-6">
                                            <nav class="footer__nav">
												<ul id="menu-menu-2" class="footer__nav-list">
													<li class="menu-item"><a href="https://granatoviy-sad.ru/" aria-current="page">Главная</a></li>
													<li class="menu-item"><a href="https://granatoviy-sad.ru/about-page/">Сеть ресторанов «Гранатовый Сад»</a></li>
													<li class="menu-item"><a href="https://granatoviy-sad.ru/shop/">Меню</a></li>
													<li class="menu-item"><a href="https://granatoviy-sad.ru/galereya/">Галерея</a></li>
													<li class="menu-item"><a href="https://granatoviy-sad.ru/term-delivery/">Условия доставки</a></li>
													<li class="menu-item"><a href="https://granatoviy-sad.ru/kontakty/">Контакты</a></li>
												</ul>
											</nav>
										</div>
										
                                        <div class="col-lg-6 col-md-6">
                                            <nav class="footer-nav">
												<ul id="menu-nav-sidebar__menu-1" class="footer__nav-list">
													<li class="menu-item"><a href="/restoran-marino/">Ресторан в Марьино</a></li>
													<li class="menu-item"><a href="/restoran-sokol/">Ресторан на Соколе</a></li>
													<li class="menu-item"><a href="/night-club/">Night club</a></li>
													<li class="menu-item"><a href="/awards/">Награды</a></li>
													<li class="menu-item"><a href="/bankets/">Банкеты/кейтеринг</a></li>
													<li class="menu-item"><a href="/vacancy/">Вакансии</a></li>
													<li class="menu-item"><a href="/regulations/">Правила</a></li>
												</ul>
											</nav>
										</div>
										
									</div>
								</div>
								
                                <div class="footer__logo col-xl-2 col-lg-2 pt-1">
                                    <a href="/">
                                        <img src="/wp-content/themes/pomegranate-garden-theme/assets/images/main_logo-white.svg"
										alt="logo">
									</a>
                                    <div class="social-images">
                                        <a target="_blank" rel="noopener" href="https://www.facebook.com/granatoviysad/"><img
											src="<?php bloginfo(template_url); ?>/assets/images/facebook-logo.svg"
										alt="icon" class="facebook"></a>
                                        <a target="_blank" rel="noopener"
										href="https://instagram.com/granatoviysad_n1?igshid=6l43kl3ar3i9"><img
											src="<?php bloginfo(template_url); ?>/assets/images/instagram-logo.svg"
										alt="icon" class="instagram"></a>
									</div>
								</div>
								
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 mt-4 mt-md-0">
                                    <div class="row justify-content-center justify-content-lg-end pr-0">
										
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-9 pr-lg-0">
                                            <ul class="contact__address-list contact__address-list-1">
                                                <li class="contact__address">
                                                    <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon.svg"
													alt="icon" class="contact__address-icon">
                                                    <span> Гранатовый сад №1 </span>
                                                    <span> (м. Сокол)</span>
												</li>
                                                <li class="contact__address">
                                                    <a href="tel:+74952555333">Бронь столов:
                                                        <div> +7 (495) 2-555-333</div>
													</a>
                                                    <a href="tel:+74952555551">Доставка:
                                                        <div> +7 (495) 2-555-55-1</div>
													</a>
												</li>
                                                <li class="contact__address">
                                                    <a href="mailto:info@granatoviy-sad.ru">Email:
                                                        <div>info@granatoviy-sad.ru</div>
													</a>
												</li>
											</ul>
										</div>
										
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-9 pr-lg-0">
                                            <ul class="contact__address-list contact__address-list-2">
                                                <li class="contact__address">
                                                    <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon.svg"
													alt="icon" class="contact__address-icon">
                                                    <span> Гранатовый сад №1</span>
                                                    <span> (м. Марьино)</span>
												</li>
                                                <li class="contact__address">
                                                    <a href="tel:+74993402552">Бронь столов:
                                                        <div> +7 (499) 340-25-52</div>
													</a>
                                                    <a href="tel:+74993400110">Доставка:
                                                        <div> +7 (499) 340-01-10</div>
													</a>
												</li>
                                                <li class="contact__address">
                                                    <a href="mailto:info@granatoviy-sad.ru">Email:
                                                        <div>info@granatoviy-sad.ru</div>
													</a>
												</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="copyright">
        <div class="container">
            <div class="row m-0 align-items-center">
				
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                    <p class="footer__copyright">Copyright © 2019 || Гранатовый сад</p>
				</div>
				
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <span class="developer__promind">Developed:
                        <a rel="noreferrer" target="_blank" href="https://promind.studio/">
                            <img class="developer__promind-img" src="<?php bloginfo(template_url); ?>/assets/images/promind-grey.png" alt="ProMind" title="ProMind">
                            ProMind
						</a>
					</span>
				</div>
				
			</div>
		</div>
	</div>
</footer>
</div>

<!-- Modals -->
<div class="modal fade" id="modal_book" tabindex="-1" role="dialog" aria-labelledby="modal_bookTitle"
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
                <div class="modal__choose-box">
                    <p class="line-granat"></p>
                    <h2 class="main__title">Выберите ресторан</h2>
                    <div class="row justify-content-around">
                        <button id="open-maryeno-sokol" class="leclick-reservation book__choose-btn"
						data-restaurant-id="12380" type="button" data-dismiss="modal" aria-label="Close">Сокол
						</button>
                        <button id="open-maryeno-rest" class="book__choose-btn" type="button">Марьино</button>
					</div>
				</div>
                <div id="box-maryeno-rest">
					<?php echo do_shortcode('[contact-form-7 id="5" title="Забронировать стол"]') ?>
					
				</div>
			</div>
		</div>
	</div>
</div>

<a href="#wrapper" class="scrollto scroll__top"></a>

<!-- YANDEX MAP -->
<script src="https://api-maps.yandex.ru/2.1/?apikey=24149691-1826-4838-ba59-7e142846a30a&lang=ru_RU" type="text/javascript"></script>
<script>const template_url = '<?= get_bloginfo("template_url"); ?>'</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (m, e, t, r, i, k, a) {
		m[i] = m[i] || function () {
			(m[i].a = m[i].a || []).push(arguments)
		};
		m[i].l = 1 * new Date();
		k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
	})
	(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
	
	ym(55655203, "init", {
		clickmap: true,
		trackLinks: true,
		accurateTrackBounce: true,
		webvisor: true
	});
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/55655203" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_footer(); ?>
</body>

</html> 