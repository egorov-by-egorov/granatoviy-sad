<?php 
/*
Template Name: Контакты
*/
?>
<?php get_header() ?>
            <section class="main__section banket">
                <div class="container-fluid banket__header">
                    <div class="container">
                        <h2 class="banket__header-title">Контакты</h2>
                    </div>  
                </div>
                <div class="container">
                    <div class="row m-0">
                        <div class="col-lg-5 col-md-5 col-sm-12 contact-page__address-list--1">
                            <ul class="contact__address-list-1">
                                <li class="contact__address">
                                    <h3 class="contact__address-title">Ресторан на Чапаевском</h3>
                                </li>    
                                <li class="contact__address">
                                    <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon--black.svg" alt="icon" class="contact__address-icon">
                                    <span>Чапаевский пер. 10/2</span>
                                </li>
                                <li class="contact__address">
                                    <p class="contact__address-subtitle"><b>Бронь столов:</b></p>
                                    <a href="tel:+74952555333"></i>+7 (495) 2-555-333</a>
                                </li>
                                <li class="contact__address">
                                    <p class="contact__address-subtitle"><b>Доставка еды:</b></p>
                                    <a href="tel:+74952555551"></i>+7 (495) 2-555-55-1</a>
                                </li>
                                <li class="contact__address">
                                    <a href="mailto:info@granatoviy-sad.ru">info@granatoviy-sad.ru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <ul class="contact__address-list-2">
                                <li class="contact__address">
                                    <h3 class="contact__address-title">Ресторан на Поречной</h3>
                                </li>                                
                                <li class="contact__address">
                                    <img src="<?php bloginfo(template_url); ?>/assets/images/contact_icon--black.svg" alt="icon" class="contact__address-icon">
                                    <span>ул.Поречная д. 5/14, стр. 1</span>
                                </li>
                                <li class="contact__address">
                                    <p class="contact__address-subtitle"><b>Бронь столов:</b></p>
                                    <a href="tel:+74993402552">+7(499) 340-25-52</a>
                                </li>
                                <li class="contact__address">
                                    <p class="contact__address-subtitle"><b>Доставка еды:</b></p>
                                    <a href="tel:+74993400110">+7(499) 340-01-10</a>
                                </li>
                                <li class="contact__address">
                                    <p class="contact__address-subtitle"><b>Караоке NIGHT-CLUB:</b></p>
                                    <a href="tel:+74993472828">+7(499) 347-28-28</a>
                                </li>
                                <li class="contact__address">
                                    <a href="mailto:info@granatoviy-sad.ru">info@granatoviy-sad.ru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul class="contact__address-list border-right-0">
                                <li class="contact__address">
                                    <h3 class="contact__address-title">Часы работы</h3>
                                </li> 
                                <li class="contact__address">
                                    <span>Пн-Вск: 11:00-00:00</span>
                                </li>
                                <li class="contact__address">
                                    <span>Бесплатная доставка по г.Москве</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
<?php get_footer(); ?>