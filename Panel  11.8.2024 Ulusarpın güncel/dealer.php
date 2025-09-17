<?php include "template/header.php"; ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="images/deal.jpg">  
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?= $lang['dealers'] ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="index.php"><?= $lang['home'] ?></a></li>
                    <li><?= $lang['dealers'] ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<style>
    /* Harita div'i için stil ayarları */
    #map {
        height: 600px;
        /* Harita yüksekliği */
    }
</style>
<!--==============================
      Contact Form Area
    ==============================-->

<section class=" space-top space-extra-bottom">
    <div class="container">

        <div id="map"></div>
    </div>
</section>
<!--==============================
			Footer Area
	==============================-->


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
    // Haritayı başlat ve Türkiye merkezli olarak ayarla
    var map = L.map('map').setView([39.9334, 32.8597], 6); // Koordinatlar (39.9334, 32.8597) Türkiye'nin merkezi, zoom seviyesi 6

    // OpenStreetMap katmanını ekle
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors' // Harita katkıcılarına atıf
    }).addTo(map); // Katmanı haritaya ekle

    // Bayi bilgileri
    var bayilikler = [{
            "name": "Yapılcan Motorlu Araçlar", // Bayi adı
            "lat": 38.3686, // Enlem
            "lon": 34.0297, // Boylam
            "address": "Aksaray, Türkiye", // Adres
            "phone": "+90 382 215 61 69" // Telefon numarası
        },
        {
            "name": "Yapılcan Motorlu Araçlar", // Bayi adı
            "lat": 38.3686, // Enlem
            "lon": 34.0297, // Boylam
            "address": "Aksaray, Türkiye", // Adres
            "phone": "+90 382 215 61 69" // Telefon numarası
        }
    ];



    // Bayilikleri haritaya ekle
    bayilikler.forEach(function(bayi) {
        // Her bir bayi için marker (işaretleyici) oluştur
        var marker = L.marker([bayi.lat, bayi.lon]).addTo(map); // Marker'ı haritaya ekle
        // Marker'a popup (bilgi balonu) ekle
        marker.bindPopup("<b>" + bayi.name + "</b><br>Adres: " + bayi.address + "<br>Telefon: " + bayi.phone);
    });

</script>






<br><br>



<?php include "template/footer.php"; ?>