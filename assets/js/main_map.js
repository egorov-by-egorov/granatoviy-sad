// Yandex Map
ymaps.ready(initMap);

function initMap() {
  let location = ymaps.geolocation;
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

  location.get({
    provider: 'auto',
    // mapStateAutoApply: true,
    autoReverseGeocode: false
  }).then(
    function(result) {

      let userAddress = result.geoObjects.get(0).properties.get('text');
      let userCoodinates = result.geoObjects.get(0).geometry.getCoordinates();
      result.geoObjects.get(0).properties.set({
        balloonContentHeader: 'Моё местоположение',
        balloonContentBody: userCoodinates
      });
      map.geoObjects.add(result.geoObjects);
    });
};