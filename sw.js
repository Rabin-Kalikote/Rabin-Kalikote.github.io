const staticCacheName = 'site-static-v1';
const assets = [
  '/',
  '/index.html',
  '/js/bootstrap.min.js',
  '/js/jquery-3.1.1.min.js',
  '/js/bootstrap.min.js',
  '/js/main.js',
  '/js/smooth-scroll.js',
  '/js/wow.js',
  '/css/animate.css',
  '/css/bootstrap.min.css',
  '/css/main.css',
  '/css/fonts/grbold.otf',
  '/css/fonts/grbook.otf',
  '/css/fonts/grlight.otf',
  '/css/fonts/grmedium.otf',
  '/img/askmattrab.jpg',
  '/img/askmattrab.png',
  '/img/bootstrap.png',
  '/img/codes2.jpg',
  '/img/css.png',
  '/img/askmattrab.jpg',
  '/img/html.png',
  '/img/jquery.png',
  '/img/js.png',
  '/img/logo0.png',
  '/img/matt-sir.jpg',
  '/img/mattrab.png',
  '/img/pgsql.png',
  '/img/poem.jpg',
  '/img/profile.jpg',
  '/img/python.png',
  '/img/qbasic.png',
  '/img/rails.png',
  '/img/ruby.png',
  '/img/sbs.jpg',
  '/img/sbslogo.jpg',
  '/img/sql.png',
  '/img/sx3c.jpg',
  '/img/sxclogo.jpg',
  '/img/tcb.jpg',
  '/img/tcblogo.jpg',
  '/img/updates.jpg',
  '/library/font-awesome/css/font-awesome.css',
  '/library/Jindagi-Ko-Bato-By-Rabin-Kalikote.pdf',
];

// install event
self.addEventListener('install', evt => {
  evt.waitUntil(
    caches.open(staticCacheName).then((cache) => {
      console.log('caching shell assets');
      cache.addAll(assets);
    })
  );
});

// activate event
self.addEventListener('activate', evt => {
  evt.waitUntil(
    caches.keys().then(keys => {
      return Promise.all(keys
        .filter(key => key !== staticCacheName)
        .map(key => caches.delete(key))
      );
    })
  );
});

// fetch event
self.addEventListener('fetch', evt => {
  evt.respondWith(
    caches.match(evt.request).then(cacheRes => {
      return cacheRes || fetch(evt.request).then(fetchRes => {
        return caches.open(dynamicCacheName).then(cache => {
          cache.put(evt.request.url, fetchRes.clone());
          return fetchRes;
        })
      });
    })
  );
});
