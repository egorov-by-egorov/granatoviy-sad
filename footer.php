<footer class="footer">

    <!-- Contacts -->

    <section class="contact">
        <div class="container-fluid p-0">
            <p class="line-granat"></p>
            <h3 class="contact__title">Контакты</h3>
            <div class="row align-items-center m-0">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div id="map" class="map">

                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                    <div class="contact__box">
                        <div class="container p-0">
                            <div class="row m-0">

                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 d-none d-lg-block">
                                    <div class="row m-0 justify-content-md-center">

                                        <div class="col-lg-6 col-md-6">
                                            <nav class="footer__nav">
                                                <?php wp_nav_menu(array(
                                                    'container' => false,
                                                    'menu' => 'menu-1',
                                                    'menu_class' => 'footer__nav-list',
                                                    'echo' => true,
                                                    'fallback_cb' => 'wp_page_menu',
                                                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                                    'depth' => 0,
                                                    'walker' => ''
                                                )); ?>
                                            </nav>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <nav class="footer-nav">
                                                <?php wp_nav_menu(array(
                                                    'container' => false,
                                                    'menu' => 'nav-sidebar__menu',
                                                    'menu_class' => 'footer__nav-list',
                                                    'echo' => true,
                                                    'fallback_cb' => 'wp_page_menu',
                                                    'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                                                    'depth' => 0,
                                                    'walker' => '',
                                                )); ?>
                                            </nav>
                                        </div>

                                    </div>
                                </div>

                                <div class="footer__logo col-xl-2 col-lg-2 pt-1">
                                    <a href="/">
                                        <img src="<?php bloginfo(template_url); ?>/assets/images/main_logo-white.svg"
                                             alt="logo">
                                    </a>
                                    <div class="social-images">
                                        <a target="_blank" href="https://www.facebook.com/granatoviysad/"><img
                                                    src="<?php bloginfo(template_url); ?>/assets/images/facebook-logo.svg"
                                                    alt="icon" class="facebook"></a>
                                        <a target="_blank"
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
                                                    <a href="mailto:granatoviysad1@bk.ru">Email:
                                                        <div>granatoviysad1@bk.ru</div>
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
                                                    <a href="mailto:granatoviysad1@bk.ru">Email:
                                                        <div>granatoviysad1@bk.ru</div>
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
                        <a rel="nofollow" target="_blank" href="https://promind.studio/">
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
<div class="mobfixedphone"><a href="tel:+74993402552"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
<a href="#wrapper" class="scrollto scroll__top"></a>

<?php wp_footer(); ?>
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
</body>

</html> 