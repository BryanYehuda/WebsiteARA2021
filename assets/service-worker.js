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
    '/css/designed.css',
    '/css/materialize.css',
    '/css/materialize.min.css',

    '/js/materialize.js',
    '/js/materialize.min.js',
    '/js/script.js',
    '/js/init.js',

    './application/controllers/Iot.php',
    './application/controllers/Panitiaaraonly.php',
    './application/controllers/Welcome.php',
    './application/controllers/Ctf.php',
    './application/controllers/Login.php',
    './application/controllers/OTP.php',
    './application/controllers/Olimpiade.php',
    './application/models/M_data.php',
    './application/models/M_panitia.php',
    './application/models/M_otp.php',
    './application/models/m_data.php',
    './application/models/m_panitia.php',

    './application/views/dashboardiot/doneAbstrak.php',
    './application/views/dashboardiot/formAbstrak.php',
    './application/views/dashboardiot/login.php',
    './application/views/dashboardiot/uploadsukses.php',
    './application/views/dashboardctf/dashboardctf.php',
    './application/views/dashboardctf/dashboardctf.php',
  './application/views/dashboardolim/dashboardOlim.php',
    './application/views/panitia/p_ctf.php',

    './application/views/panitia/p_footer.php',
    './application/views/panitia/p_header.php',
    './application/views/panitia/p_iot.php',
    './application/views/panitia/p_login.php',
    './application/views/panitia/p_result.php',
    './application/views/panitia/p_sel.php',
    './application/views/panitia/p_webinar.php',

    '/application/views/ctf.php',
    '/application/views/daftar.php',
    '/application/views/footer.php',
    '/application/views/header.php',
    '/application/views/home.php',
    '/application/views/iot.php',
    '/application/views/iot_ori.php',
    '/application/views/olim.php',
    '/application/views/success.php',
    '/application/views/webinar.php',
    '/application/views/successwebinar.php',
    '/application/views/tutup_iot.php',
    '/application/views/v_message.php',
    '/application/views/v_submitotp.php',
    '/application/views/successwebinar.php',
    '/application/views/welcome_message.php',
    '/application/views/webinarctf.php',
    '/application/views/webinariot.php',

    '/application/views/images/Background.png',
    '/application/views/images/berhasil.png',
    '/application/views/images/container 2.png',
    '/application/views/images/ctf.png',
    '/application/views/images/CTFdaftar.png',
    '/application/views/images/CTFicon.png',
    '/application/views/images/favicon.ico',
    '/application/views/images/footer_taskbar.png',
    '/application/views/images/home.png',
    '/application/views/images/home(1).png',
    '/application/views/images/home(2).png',
    '/application/views/images/home(3).png',
    '/application/views/images/home(5).png',
    '/application/views/images/home(6).png',
    '/application/views/images/home(7).png',
    '/application/views/images/home(8).png',
    '/application/views/images/home(9).png',
    '/application/views/images/home(10).png',
    '/application/views/images/home(11).png',
    '/application/views/images/iot.png',
    '/application/views/images/IOTdaftar.png',
    '/application/views/images/IOTicon.png',
    '/application/views/images/logo-ara.png',
    '/application/views/images/logo_black_ara.png',
    '/application/views/images/logo_black_ara_2.png',
    '/application/views/images/olim.png',
    '/application/views/images/OLIMdaftar.png',
    '/application/views/images/OLIMicon.png',
    '/application/views/images/upload_black.png',
    '/application/views/images/uploadberhasil.png',
    '/application/views/images/webinar.png',
    '/application/views/images/WEBINARdaftar.png',
    '/application/views/images/WEBINARicon.png',
    '/application/views/js/init.js',
    '/application/views/js/materialize.js',
    '/application/views/js/materialize.min.js',
    '/application/views/js/script.js',
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
        caches.open(CACHE_NAME).then(function(cache) {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys()
        .then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheName != CACHE_NAME) {
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
        caches.match(event.request, { cacheName: CACHE_NAME })
        .then(function(response) {
            if (response) {
                console.log("ServiceWorker: Gunakan aset dari cache: ", response.url);
                return response;
            }

            console.log("ServiceWorker: Memuat aset dari server: ", event.request.url);
            return fetch(event.request);
        })
    );
});