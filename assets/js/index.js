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
    $('#billing_phone').mask('+7 (999) 999-99-99');

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


  // DADATA
  // $("#billing_address_1").suggestions({
  //   token: "f65601ab45356d54b5fb7592dc6444feaa556d3e",
  //   type: "ADDRESS",
  //   /* Вызывается, когда пользователь выбирает одну из подсказок */
  //   onSelect: function(suggestion) {
  //     // console.log(suggestion.value);
  //   }
  // });
});

