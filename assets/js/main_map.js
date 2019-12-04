// Yandex Map
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
      '<p><b>Бронь столов:</b> <a href="tel:+74952555333">+7 (495) 2-555-333</a></p>',
      '<p><b>Доставка еды:</b> <a href="tel:++74952555551">+7 (495) 2-555-55-1</a></p>',
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

ymaps.ready(initMap);

function initMap() {
  // Определение местоположения пользователя
  // let location = ymaps.geolocation;
  let map = new ymaps.Map("map", {
    center: [55.755814, 37.617635],
    zoom: 10,
    controls: ["zoomControl"]
  });
  map.behaviors.disable('scrollZoom');

  placemarks.forEach(function(obj) {
    let placemark1 = new ymaps.Placemark(
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
    map.geoObjects.add(placemark1);
  });
  // Определение местоположения пользователя

  // location.get({
  //   provider: 'auto',
  //   // mapStateAutoApply: true,
  //   autoReverseGeocode: false
  // }).then(
  //   function(result) {
  //
  //     let userAddress = result.geoObjects.get(0).properties.get('text');
  //     let userCoodinates = result.geoObjects.get(0).geometry.getCoordinates();
  //     result.geoObjects.get(0).properties.set({
  //       balloonContentHeader: 'Моё местоположение',
  //       balloonContentBody: userCoodinates
  //     });
  //     map.geoObjects.add(result.geoObjects);
  //   });
};
