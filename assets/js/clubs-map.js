jQuery(document).ready(function ($) {
    const locations = $('.clubs-map_locations li')
        .toArray()
        .map((location) =>
            $(location)
                .attr('data-club-location')
                .split(',')
                .map((coord) => parseFloat(coord)),
        );

    if (!ymaps.Map) {
        ymaps.modules.require(['Map', 'Placemark'], function (Map, Placemark) {
            ymaps.Map = Map;
            const map = new ymaps.Map('clubs-map', {
                center: locations[0],
                zoom: 11,
            });

            locations.forEach((location) => {
                const placemark = new Placemark(
                    location,
                    { iconContet: '' },
                    { preset: 'islands#darkOrangeDotIcon' },
                );
                map.geoObjects.add(placemark);
            });
        });

        const clubsSingleElement = $('#clubs-single-map');

        if (!clubsSingleElement.length) return;

        const clubsSingleLocation = clubsSingleElement
            .attr('data-map-location')
            .split(',')
            .map((cord) => Number(cord));

        ymaps.modules.require(['Map', 'Placemark'], function (Map, Placemark) {
            const clubsSingleMap = new ymaps.Map('clubs-single-map', {
                center: clubsSingleLocation,
                zoom: 11,
            });

            const placemark = new Placemark(
                clubsSingleLocation,
                { iconContet: '' },
                { preset: 'islands#darkOrangeDotIcon' },
            );
            clubsSingleMap.geoObjects.add(placemark);
        });
    }
});
