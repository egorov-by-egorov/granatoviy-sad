$('.wc-ajx-btn-checkout').text('Оформить заказ');
$('th.wc-ajx-text-left').text('Товар');
$(document).ready(() => {
  
    // Choose Rest
    $("#open-maryeno-rest").click(function() {
      $(".modal__choose-box").hide();
      $("#box-maryeno-rest").show();
    });

    $('#modal_book').on('hidden.bs.modal', function (e) {
      $(".modal__choose-box").show();
      $("#box-maryeno-rest").hide();
    });

    // sidebar-menu

    $('.sidebar-btn').on('click', function () {
        const navSidebar = $('.nav-sidebar');
        $(this).toggleClass('sidebar-btn--active');
        navSidebar.toggleClass('nav-sidebar--active');
    });

    // mobile-phone-btn
    $('.mobile-phone__btn').click(function(e){
      $('.dropdown-list').slideToggle();
      e.preventDefault();
      e.stopPropagation();
      $(document).click(function(){
        $('.dropdown-list').slideUp();
      });
    });

    // mobile-menu

    $('.mobile-btn').on('click', function () {
        const nav = $('.header__nav-list');
        $(this).toggleClass('mobile-btn--active');
        nav.toggleClass('header__nav-list--mobile');
    });

    //	Modals

    // modal-form

    $('#btn__call-form-1').on('click', function () {
        $('.wrapper').css('filter', 'blur(4px)');
        $('.modal__form-overlay').fadeIn();
    });
    $('#btn__call-form-2').on('click', function () {
        $('.wrapper').css('filter', 'blur(4px)');
        $('.modal__form-overlay').fadeIn();
    });

    // General btn close

    $('.modal__close').on('click', () => {
        $('.modal__form-overlay').fadeOut();
        $('.modal__pictures-overlay').fadeOut();
        $('.wrapper').css('filter', 'none');
    });

    // slow scrollTo

    $('.scrollto').on('click', e => {
        e.preventDefault();
        let id = $(e.target).attr('href');
        let top = $(id).offset().top;
        $("html:not(:animated),body:not(:animated)").animate({ scrollTop: top }, 600);
    });



    // header-scroll
    window.addEventListener('scroll', function (e) {
        var scroll = window.pageYOffset;
        if (scroll > 5) {
            document.querySelector('.header').classList.add('header-bg--active');
        } else {
            document.querySelector('.header').classList.remove('header-bg--active');
        }

        if (scroll > 500) {
            document.querySelector('.scroll__top').classList.add('scroll__top--active');
        } else {
            document.querySelector('.scroll__top').classList.remove('scroll__top--active');
        }
    });

    // Gallery

    // Tabs
    $('.gallery-filter__link:first-child').addClass('gallery-filter__link--active');
    $('#165').show();

    $('.gallery-filter__link').click(function(e) {
      // debugger;
      e.preventDefault();

      $(this).addClass('gallery-filter__link--active').siblings().removeClass('gallery-filter__link--active');

      $('.gallery-page__box').hide();
      let currentLinkTab = $(this).attr('href');

      $('#' + currentLinkTab).fadeIn();
    });

    // Mask inputs

    $('#form__tel').mask('+7 (999) 999-99-99');

    // Magnific
    $('.img-zoom').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    }); 


    // Air Datepicker

    $('#book-datepicker').datepicker({
      classes: "book-datepicker--flight-box",
      position: 'right top',
      timepicker: true,
      timeFormat: "hh:ii",
      minHours: 11,
      maxHours: 23,
      minutesStep: 5,
    });

    // woo-sidebar-accordion

    $('#menu-woo-sidebar li.menu-item-has-children a').click(
    function(event) {
      // event.preventDefault();
      var toggle = $(this).nextUntil('#menu-woo-sidebar li.menu-item-has-children a');
      toggle.slideToggle();
      $('#menu-woo-sidebar li .sub-menu').not(toggle).slideUp();
    });

    // Yandex Map
    ymaps.ready(init);

    var placemarks = [
      {
        latitude: 55.800200,
        longitude: 37.519081,
        hintContent: '<div class="map__hint"><p class="line-granat"></p><p>Гранатовый сад №1 "Чапаевский пер. 10/2"</p></div>',
        balloonContent: [
          '<div class="map__balloon">',
          '<p class="line-granat">',
          '<h3 class="contact__title">Контакты</h3>',
          "<p>Ресторан Гранатовый сад №1!</p>",
          "<p>Ждём Вас по адресу: Чапаевский пер. 10/2</p>",
          "<p>Контакты:</p>",
          '<p><b>Бронь столов:</b> <a href="tel:+74950323777">+7(495) 032-37-77</a></p>',
          '<p><b>Доставка еды:</b> <a href="tel:+74997286656">+7(499) 728-66-56</a></p>',
          '<p><b>Email:</b> <a href="mailto:info@granatoviy-sad.ru">info@granatoviy-sad.ru</a></p>',
          "</div>"
        ]
      },
      {
        latitude: 55.644887,
        longitude: 37.752957,
        hintContent: '<div class="map__hint"><p class="line-granat"></p>Гранатовый сад №1 "ул.Поречная д. 5/14, стр.1"</div>',
        balloonContent: [
          '<div class="map__balloon">',
          '<p class="line-granat">',
          '<h3 class="contact__title">Контакты</h3>',
          "<p>Ресторан Гранатовый сад №1!</p>",
          "<p>Ждём Вас по адресу: ул.Поречная д. 5/14, стр.1</p>",
          "<p>Контакты:</p>",
          '<p><b>Бронь столов:</b> <a href="tel:+74993402552">+7(499) 340-25-52</a></p>',
          '<p><b>Доставка еды:</b> <a href="tel:+74993400110">+7(499) 340-01-10</a></p>',
          '<p><b>Караоке NIGHT-CLUB:</b> <a href="tel:+74993472828">+7(499) 347-28-28</a></p>',
          '<p>Email: <a href="mailto:info@granatoviy-sad.ru">info@granatoviy-sad.ru</a></p>',
          "</div>"
        ]
      }
    ];

function init() {
  var location = ymaps.geolocation;
  var map1 = new ymaps.Map("map", {
    center: [55.755814, 37.617635],
    zoom: 10,
    controls: ["zoomControl"]
  });
  map1.behaviors.disable('scrollZoom');

  // var map2 = new ymaps.Map("map-sidebar", {
  //   center: [55.755814, 37.617635],
  //   zoom: 9,
  //   controls: ["zoomControl","geolocationControl"],
  // });
  // map2.behaviors.disable('scrollZoom');

  placemarks.forEach(function(obj) {
    var placemark1 = new ymaps.Placemark(
      [obj.latitude, obj.longitude],
      {
        hintContent: obj.hintContent,
        balloonContent: obj.balloonContent.join("")
      },
      {
        iconLayout: "default#image",
        iconImageHref: "https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/images/location.svg",
        iconImageSize: [46, 46]
        // iconImageOffset: [-23, -57]
      }
    );
    // var placemark2 = new ymaps.Placemark(
    //   [obj.latitude, obj.longitude],
    //   {
    //     hintContent: obj.hintContent,
    //     balloonContent: obj.balloonContent.join("")
    //   },
    //   {
    //     iconLayout: "default#image",
    //     iconImageHref: "https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/assets/images/location.svg",
    //     iconImageSize: [46, 46]
    //     // iconImageOffset: [-23, -57]
    //   }
    // );
    map1.geoObjects.add(placemark1);
    // map2.geoObjects.add(placemark2);
  });

  location.get({
          provider: 'yandex',
          mapStateAutoApply: false,
          autoReverseGeocode: false
      }).then(
        function(result) {

          var userAddress = result.geoObjects.get(0).properties.get('text');
          var userCoodinates = result.geoObjects.get(0).geometry.getCoordinates();
          result.geoObjects.get(0).properties.set({
              balloonContentHeader: 'Моё местоположение',
              balloonContentBody: userAddress
          });
            map1.geoObjects.add(result.geoObjects);
        });
  };

});

