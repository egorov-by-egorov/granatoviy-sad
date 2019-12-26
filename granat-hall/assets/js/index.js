$(document).ready( e => {
	// global Variables
	let headerHeight;
	// Functions
	
	$(window).resize(function () {
		headerHeight = $('.header').outerHeight(true);
		if ($(window).width() <= 991) {
			$('.hero').css({
				height: "calc(89vh - " + headerHeight + "px)"
			});
			} else {
			$('.hero').css({
				height: "calc(100vh - " + headerHeight + "px)"
			})
		}
	});
	$(window).resize();
	
	// init Dom
	// mobile content
	if ($(window).width() <= 991) {
		if ($('#mobile__menu .mobile__menu-list').children().length === 0) {
			$(".header__nav li").clone().appendTo($('#mobile__menu .mobile__menu-list'));
			//		$(".socials").clone().appendTo($('#mobile__menu'));
			$("#contacts").clone().appendTo($('#mobile__menu'));
		}
	}
	
	// header scroll
	window.addEventListener('scroll', function (e) {
		let scroll = window.pageYOffset;
		if (scroll > 0) {
			$('.header').addClass('header--onscroll');
			if ($(window).width() <= 991) {
				$('.hero').css({
					height: '89vh'
				});
				} else {
				$('.hero').css({
					height: '100vh'
				});
			}
			} else {
			$('.header').removeClass('header--onscroll');
			if ($(window).width() <= 991) {
				$('.hero').css({
					height: "calc(89vh - " + headerHeight + "px)"
				});
				} else {
				$('.hero').css({
					height: "calc(100vh - " + headerHeight + "px)"
				});
			}
		}
		if (scroll > 500) {
			document.querySelector('.scroll__top').classList.add('scroll__top--active');
			} else {
			document.querySelector('.scroll__top').classList.remove('scroll__top--active');
		}
	});
	
	// mobile-menu
	$('.mobile-btn').on('click', function () {
		$(this).toggleClass('mobile-btn--active');
		$('body').toggleClass('mobile-menu--open');
		$('#mobile__menu').fadeToggle().css({
			top: headerHeight,
			height: "calc(100vh - " + headerHeight + "px)"
		});
	});
	
	// slow scrollTo
	$('.header__nav-link').on('click', e => {
		e.preventDefault();
		let id = $(e.target).attr('href');
		let top = $(id).offset().top - headerHeight;
		$('.mobile-btn').removeClass('mobile-btn--active');
		$('body').removeClass('mobile-menu--open');
		$('#mobile__menu').fadeOut(400);
		$('body,html').animate({ scrollTop: top }, 500);
	});
	
	
	// Hero form
	// Calendar
	$.datepicker.setDefaults($.datepicker.regional['ru']);
	$( ".datepicker" ).datepicker({
		dateFormat: "dd-mm-yy",
		altFormat: "dd-mm-yy",
		showOtherMonths: true,
		firstDay: 1,
		minDate: 0,
		selectOtherMonths: true,
		gotoCurrent: true,
		dayNamesMin: [ 'Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб' ],
		dayNames: [ "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье" ],
		monthNamesShort: [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
		monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
		showAnim: 'fadeIn',
	});
	// mobile main-Modal
	$('#main_modal_form').on('shown.bs.modal', function (e) {
		if ($('#main_modal_form .modal-content').children().length === 1 ) {
			$(".hero__form").detach().appendTo($('#main_modal_form .modal-content'));
		}
	});
	// Select
	/*$( "#hero__form-persons" )
		.selectmenu()
		.selectmenu( "menuWidget" )
		.addClass( "overflow" );
		$( "#hero__form-start" )
		.selectmenu()
		.selectmenu( "menuWidget" )
		.addClass( "overflow" );
		$( "#hero__form-end" )
		.selectmenu()
		.selectmenu( "menuWidget" )
		.addClass( "overflow" );*/
	
	// Mask
	$('#hero__form-phone').mask('+7 (999) 999-99-99');
	
	
	
	
	// Gallery slider
	
	$(document).ready(function(){	
		$("#gallery").show();
	});
	
	$('.gallery-slider__window').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><svg id="next" xmlns="http://www.w3.org/2000/svg" width="20" height="37.862" viewBox="0 0 20 37.862">\n' +
		'  <path id="Path_1" data-name="Path 1" d="M112.864,18.176,130.725.315a1.072,1.072,0,1,1,1.515,1.515l-17.1,17.1,17.1,17.1a1.075,1.075,0,0,1-.754,1.833,1.045,1.045,0,0,1-.754-.317L112.872,19.684A1.066,1.066,0,0,1,112.864,18.176Z" transform="translate(-112.556 0)"/>\n' +
		'</svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="37.862" viewBox="0 0 20 37.862">\n' +
		'  <defs>\n' +
		'    <clipPath id="clip-path">\n' +
		'      <rect width="20" height="37.862" fill="none"/>' +
		'    </clipPath>' +
		'  </defs>' +
		'  <g id="next" transform="translate(0)" clip-path="url(#clip-path)">\n' +
		'    <path id="Path_1" data-name="Path 1" d="M132.247,18.176,114.387.315a1.072,1.072,0,1,0-1.515,1.515l17.1,17.1-17.1,17.1a1.075,1.075,0,0,0,.754,1.833,1.045,1.045,0,0,0,.754-.317L132.24,19.684A1.066,1.066,0,0,0,132.247,18.176Z" transform="translate(-112.556)"/>\n' +
		'  </g>' +
		'</svg></button>',
		fade: true,
		infinite: true,
		asNavFor: '.gallery-slider__nav',
	});
	$('.gallery-slider__nav').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		asNavFor: '.gallery-slider__window',
		arrows: false,
		dots: false,
		dotsClass: 'main__slider-dots',
		centerMode: false,
		focusOnSelect: true,
		infinite: true,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			}
		]
	});
	
	
	// Hack при схлоповании слайдера на других табах
	$('h2[data-toggle="pill"]').on('shown.bs.tab', function (e) {
		$(".gallery-slider__window").slick('slickSetOption', 'adaptiveHeight', true, true);
		$(".gallery-slider__nav").slick('slickSetOption', 'adaptiveHeight', true, true);
	});
	
	// Banket slider
	// $('.banket__slider').slick({
	// 	infinite: true,
	// 	focusOnSelect: true,
	// 	arrows: true,
	// 	prevArrow: '<button type="button" class="banket__arrows-circle slick-prev"><img src="./assets/images/icons/left-arrow.svg" alt="prev button"></button>',
	// 	nextArrow: '<button type="button" class="banket__arrows-circle slick-next"><img src="./assets/images/icons/right-arrow.svg" alt="next button"></button>',
	// 	fade: true,
	// });
	
	// feedback slider
	$('.feedback__slider').slick({
		arrows: false,
		dots: true,
		dotsClass: 'main__slider-dots',
		pesponsive: [
			{
				breakpoint: 991,
				settings: {
				}
			}
		]
	});
	
	// Form
	/*$('.hero__form').on('submit', submitForm);
		function submitForm(e) {
		e.preventDefault();
		let form = $(e.target),
		request = ajaxForm(form);
		console.log(form);
		
		request.done(function(msg) {
		let mes = msg.message,
		status = msg.status;
		if (status === 'OK') {
		// form.append('<p class="success">' + mes + '</p>');
		$('#hero__form-submit').text('ОТПРАВЛЕНО');
		$(form).trigger('reset');
		} else {
		$('#hero__form-submit').text('ОШИБКА');
		form.append('<p class="error">' + mes + '</p>');
		$(form).trigger('reset');
		}
		});
		request.fail(function (jqXHR, textStatus) {
		alert("Request failed: " + textStatus);
		});
		}
		
		let ajaxForm = function(form) {
		let data = form.serialize(),
		url = form.attr('action');
		return $.ajax({
		type: 'POST',
		url: url,
		dataType: 'json',
		data: data
		})
	};*/
	
});
$(window).on('load', function(){
	setTimeout(function () {
		$('.map').html("<iframe src=\"https://yandex.ru/map-widget/v1/-/CCDrZX5-\" width=\"100%\" height=\"400\" frameborder=\"0\" allowfullscreen=\"false\"></iframe>")
	}, 2500)
});




$(document).ready(function(){
	
	$('#hero__form-submit').click(function(){
		
		event.preventDefault();
		
		var user_name    = $('#hero__form-name').val();
		var user_phone = $('#hero__form-phone').val();
		var user_date = $('#hero__form-calendar').val();
		var user_persons = $('#hero__form-persons').val();
		var user_start = $('#hero__form-start').val();
		var user_end = $('#hero__form-end').val();
		
		$.ajax({
			url: "https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/granat-hall/assets/php/server.php", 
			type: "post", 
			data: { 
				"name":    user_name,
				"phone":   user_phone,
				"udate":   user_date,
				"persons":   user_persons,
				"start":   user_start,
				"end":   user_end,
			},
			error:function(){$("#hero_message").html("Произошла ошибка! Пожалуйста, обновите страницу и попробуйте еще раз.");}, 
			
			beforeSend: function() {                     
				$("#hero_message").html("Отправляем данные...");                   
			},                 
			success: function(result){                     
				
				$('#hero_message').html(result);                     
				console.log("ntcn");                 
			}  
		});
		
	});
	
	$('#form__form-submit').click(function(){
		
		event.preventDefault();
		
		var user_name    = $('#form__form-name').val();
		var user_phone = $('#form__form-phone').val();
		
		$.ajax({
			url: "https://granatoviy-sad.ru/wp-content/themes/pomegranate-garden-theme/granat-hall/assets/php/server.php", 
			type: "post", 
			data: { 
				"name":    user_name,
				"phone":   user_phone
			},
			error:function(){$("#form_message").html("Произошла ошибка! Пожалуйста, обновите страницу и попробуйте еще раз.");}, 
			
			beforeSend: function() {                     
				$("#form_message").html("Отправляем данные...");                   
			},                 
			success: function(result){                     
				
				$('#form_message').html(result);                     
				console.log("ntcn");                 
			}  
		});
		
	});
});