$(document).ready(function ($) {
    ymaps.ready(init);

    function init() {

        //путь до папки с темой
        var themePath = $('#ThemePath').val();

        var myMap;

        myMap = new ymaps.Map("map", {
            center: [45.350958421605284, 39.05811229735281],
            zoom: 14,
            scroll: true,
            controls: []
        });

        myMap.behaviors.disable('scrollZoom');

        myMap.controls.add("zoomControl", {
            position: {top: 15, left: 15}
        });
        var html = '<div class="popup">';
        html += '<img src="'+themePath+'images/housJPG.jpg" alt="" />';
        html += '<div class="popup-text">';
        html += '<p>Старомышастовская <br> улица Садовая № 211 <br> <a class="tel" href="tel:+79885242737">+79885242737</a>&nbsp;&nbsp;&nbsp;<a class="tel" href="tel:+79002475139">+79002475139</a></p>';
        html += '</div>';
        html += '</div>';

        var myPlacemark = new ymaps.Placemark([45.350958421605284, 39.05811229735281], {
                balloonContent: html
            },
            {
                iconLayout: 'default#image',
                iconImageHref: themePath + 'images/icon.png',
                iconImageSize: [50, 50],
                iconImageOffset: [-33, -50],
                balloonShadow: false
            });


        myMap.geoObjects.add(myPlacemark);

    }

});
