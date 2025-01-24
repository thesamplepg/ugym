jQuery(document).ready(function ($) {
    if (!ymaps.Map) {
        ymaps.modules.require(['Map', 'Placemark'], function (Map, Placemark) {
            // Нужно вручную добавить класс в пространство имен ymaps,
            // так как при использовании метода require()
            // этого не происходит.
            ymaps.Map = Map;
            var map = new ymaps.Map('clubs-map', {
                center: [55.76, 37.64],
                zoom: 8,
            });
            // Класс Placemark не добавлен в публичную область видимости.
            var placemark = new Placemark(
                [55.55, 37.0],
                { iconContet: '' },
                { preset: 'islands#darkOrangeDotIcon' },
            );
            map.geoObjects.add(placemark);
        });
    }
});
