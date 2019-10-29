// Yandex Delivery-Map
ymaps.ready(initDeliveryMap);

function initDeliveryMap() {
  var myMap = new ymaps.Map('delivery_map', {
      center: [55.753774, 37.620147],
      zoom: 10,
      controls: ['geolocationControl', 'searchControl','trafficControl', 'zoomControl']
    }),

    deliveryPoint = new ymaps.GeoObject({
      geometry: {type: 'Point'},
      properties: {iconCaption: 'Адрес'}
    }, {
      preset: 'islands#blackDotIconWithCaption',
      draggable: true,
      iconCaptionMaxWidth: '215'
    }),
    control = myMap.controls.get('trafficControl'),
    searchControl = myMap.controls.get('searchControl');
  searchControl.options.set({noPlacemark: true, placeholderContent: 'Введите адрес доставки'});
  myMap.geoObjects.add(deliveryPoint);
  myMap.behaviors.disable('scrollZoom');

  function onZonesLoad(json) {

    // Добавляем зоны на карту.
    var deliveryZones = ymaps.geoQuery(json).addToMap(myMap);
    // Добавляем прямое геокодирование (Передаем адрес доставки из поля #billing_address_1)
    $('#billing_address_1').on('suggestions-set', function() {
      console.log($(this));
      // var myGeocoder = ymaps.geocode(billing_address_val);
    });

    // Задаём цвет и контент балунов полигонов.
    deliveryZones.each(function (obj) {
      var color = obj.options.get('fillColor');
      color = color.substring(0, color.length - 2);
      obj.options.set({fillColor: color, fillOpacity: 0.4});
      obj.properties.set('balloonContent', obj.properties.get('name'));
      obj.properties.set('balloonContentHeader', 'Время доставки: ' + obj.properties.get('time') + ' мин.')
    });
    // Проверим попадание адреса пользователя в одну из зон доставки.
    myGeocoder.then(function (res) {
      highlightResult(res.geoObjects.get(0));
    }, function (err) {
      // Обработка ошибки.
    });

    // Проверим попадание результата поиска в одну из зон доставки.
    searchControl.events.add('resultshow', function (e) {
      highlightResult(searchControl.getResultsArray()[e.get('index')]);
    });

    // Проверим попадание метки геолокации в одну из зон доставки.
    myMap.controls.get('geolocationControl').events.add('locationchange', function (e) {
      highlightResult(e.get('geoObjects').get(0));
    });

    // При перемещении метки сбрасываем подпись, содержимое балуна и перекрашиваем метку.
    deliveryPoint.events.add('dragstart', function () {
      deliveryPoint.properties.set({iconCaption: '', balloonContent: ''});
      deliveryPoint.options.set('iconColor', 'black');
    });

    // По окончании перемещения метки вызываем функцию выделения зоны доставки.
    deliveryPoint.events.add('dragend', function () {
      highlightResult(deliveryPoint);
    });

    function highlightResult(obj) {
      // Сохраняем координаты переданного объекта.
      var coords = obj.geometry.getCoordinates(),
        // Находим полигон, в который входят переданные координаты.
        polygon = deliveryZones.searchContaining(coords).get(0);
      if (polygon) {
        // Уменьшаем прозрачность всех полигонов, кроме того, в который входят переданные координаты.
        deliveryZones.setOptions('fillOpacity', 0.4);
        polygon.options.set('fillOpacity', 0.8);
        // Перемещаем метку с подписью в переданные координаты и перекрашиваем её в цвет полигона.
        deliveryPoint.geometry.setCoordinates(coords);
        deliveryPoint.options.set('iconColor', polygon.options.get('fillColor'));
        // Задаем подпись для метки.
        if (typeof(obj.getThoroughfare) === 'function') {
          setData(obj);
        } else {
          // Если вы не хотите, чтобы при каждом перемещении метки отправлялся запрос к геокодеру,
          // закомментируйте код ниже.
          ymaps.geocode(coords, {results: 1}).then(function (res) {
            var obj = res.geoObjects.get(0);
            setData(obj);
          });
        }
      } else {
        // Если переданные координаты не попадают в полигон, то задаём стандартную прозрачность полигонов.
        deliveryZones.setOptions('fillOpacity', 0.4);
        // Перемещаем метку по переданным координатам.
        deliveryPoint.geometry.setCoordinates(coords);
        // Задаём контент балуна и метки.
        deliveryPoint.properties.set({
          iconCaption: 'Доставка до этого адреса не осуществляется, будем рады видеть Вас в нашем ресторане!',
          balloonContent: 'Cвяжитесь с оператором',
          balloonContentHeader: ''
        });
        // Перекрашиваем метку в чёрный цвет.
        deliveryPoint.options.set('iconColor', 'black');
      }

      function setData(obj){
        var address = [obj.getThoroughfare(), obj.getPremiseNumber(), obj.getPremise()].join(' ');
        if (address.trim() === '') {
          address = obj.getAddressLine();
        }
        deliveryPoint.properties.set({
          iconCaption: address,
          balloonContent: address,
          balloonContentHeader: '<b>Время доставки: ' + polygon.properties.get('time') + ' р.</b>'
        });
      }
    }
  }

  $.ajax({
    url: template_url + '/assets/js/data.json',
    dataType: 'json',
    success: onZonesLoad
  });
}