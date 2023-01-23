// initialize Yandex maps
ymaps.ready(init);
function init() {
  let drugstoresMap = new ymaps.Map('drugstores-map', {
    center: [38.5779900197525, 68.75266134557997],
    zoom: 16
  });

  // let drugstores defined in blade
  drugstores.forEach(drugstore => {
    // create new markers and add into map
    let myPlacemark = new ymaps.GeoObject(
      {
        geometry: {
          type: "Point",
          coordinates: [drugstore['x_coordinates'], drugstore['y_coordinates']],
        },

        properties: {
          iconContent: drugstore['title']
        }
      },

      {
        preset: 'islands#redStretchyIcon',
      }
    );

    drugstoresMap.geoObjects.add(myPlacemark);
  });
}

//scroll top
document.querySelector('.scroll-top').addEventListener('click', function () {
  document.body.scrollIntoView({ block: 'start', behavior: 'smooth' });
});
