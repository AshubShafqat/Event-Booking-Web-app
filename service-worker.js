const CACHE_NAME = 'eventbuzz-cache-v1';
const urlsToCache = [
  '/',
  '/index.php',
  '/style.css',
  '/script.js',
  '/favicon.ico'  // adjust based on your actual assets
];

// Install event
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(urlsToCache);
    })
  );
});

// Fetch event
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => {
      return response || fetch(event.request);
    }).catch(() => {
      // Optionally return a fallback page for offline
    })
  );
});
