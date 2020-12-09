const CACHE_NAME = 'tastefood-3';
var urlsToCache = [
	'/',
	'/manifest.json',
	'/pages/index.html',
	'/pages/pendaftaran.html',
	'/pages/dashboardctf.html',
	'/pages/dashboardiot.html',
	'/pages/dashboardolimpiade.html',
	'/pages/dashboardwebinar.html',
	'/pages/registerctf.html',
	'/pages/registeriot.html',
	'/pages/registerolimpiade.html',
	'/pages/registerwebinar.html',
	'/css/style.css',
	'/css/materialize.css',
	'/css/materialize.min.css',
	'/js/materialize.js',
	'/js/materialize.min.js',
	'/js/script.js',
	'/js/init.js',
	'/images/banner1.png',
	'/images/banner2.png',
	'/images/banner3.png',
	'/images/logo.png',
	'/images/favicon.ico',
	'https://fonts.googleapis.com/icon?family=Material+Icons',
	'https://fonts.gstatic.com/s/materialicons/v55/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2',
	'https://code.jquery.com/jquery-2.1.1.min.js'
];

self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(function (cache) {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener('activate', function(event){
	event.waitUntil(
		caches.keys()
		.then(function(cacheNames) {
			return Promise.all(
				cacheNames.map(function(cacheName){
					if(cacheName != CACHE_NAME){	
						console.log("ServiceWorker: cache " + cacheName + " dihapus");
						return caches.delete(cacheName);
					}
				})
			);
		})
	);
})

self.addEventListener('fetch', function(event) {
	event.respondWith(
		caches.match(event.request, {cacheName:CACHE_NAME})
		.then(function(response) {
			if(response){
				console.log("ServiceWorker: Gunakan aset dari cache: ", response.url);
				return response;
			}
			
			console.log("ServiceWorker: Memuat aset dari server: ", event.request.url);
			return fetch(event.request);
		})
	);
});

