window.onload = function () {
  // Register Service worker for PWA
  if ('serviceWorker' in navigator) {
    // Register a service worker hosted at the root of the
    // site using the default scope.
    navigator.serviceWorker.register(document.location.origin + '/service-worker.js').then(function (registration) {
      console.log('Service worker registration succeeded:', registration);
    }, /*catch*/ function (error) {
      console.log('Service worker registration failed:', error);
    });
  } else {
    console.log('Service workers are not supported.');
  }
}

// initialize Yandex maps
ymaps.ready(init);
function init() {
  // Drugstores map
  if (document.querySelector('#drugstores-map')) {
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

  // Main office map
  if (document.querySelector('#main-office-map')) {
    let mainOfficeMap = new ymaps.Map('main-office-map', {
      center: [38.5779900197525, 68.75266134557997],
      zoom: 16
    });

    let myPlacemark = new ymaps.GeoObject(
      {
        geometry: {
          type: "Point",
          coordinates: [38.5779900197525, 68.75266134557997],
        },

        // properties: {
        //   iconContent: 'Головной офис'
        // }
      },

      {
        preset: 'islands#redDotIcon',
      }
    );

    mainOfficeMap.geoObjects.add(myPlacemark);
  }
}

//scroll top
document.querySelector('.scroll-top').addEventListener('click', function () {
  document.body.scrollIntoView({ block: 'start', behavior: 'smooth' });
});


// Mobile menu toggler
let mobileMenu = document.querySelector('.mobile-menu');

document.querySelectorAll('[data-action="toggle-menu"]').forEach((item) => {
  item.addEventListener('click', function () {
    mobileMenu.classList.toggle('mobile-menu--visible');
  });
});
