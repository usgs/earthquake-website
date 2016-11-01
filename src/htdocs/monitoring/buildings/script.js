// markers() called by geojson feed included in html source

var json,
	markers = function (data) {
		json = data;
	};

(function() {
	var bounds = {};

	window.onload = function() {
		createMap();
	};

	function createMap() {
		var map, baseMaps, overlayMaps, layersControl;

		// Leaflet init
		map = new L.Map('map', {
			minZoom: 2,
			maxZoom: 13,
			scrollWheelZoom: false
		});
		bounds.all = new L.LatLngBounds(); // Bounds for all markers

		// Add map layers
		baseMaps = addBaseLayers(map);
		overlayMaps = addOverlays(map);

		// Layer controller
		layersControl = new L.Control.Layers(baseMaps, overlayMaps);
		map.addControl(layersControl);

		map.fitBounds(bounds.all);

	}

	function addBaseLayers(map) {
		var bing_road, mapq_osm, mapq_sat, mapb_light, layers;

		// Bing base layer
		bing_road = new L.BingLayer('AgnoqB__62tmNUN3e65ENzHgG2n4pvfDLwo-4-uEAFZ7_32KExs99dlYnwCgRk22', 'Road').addTo(map);

		// Mapbox light base layer
		mapb_light = new L.TileLayer('http://{s}.tiles.mapbox.com/v3/mapbox.world-light/{z}/{x}/{y}.png', {
			maxZoom: 16,
			attribution: 'Maps provided by <a href="http://mapbox.com/">Mapbox</a>, <a href="http://www.openstreetmap.org/" target="_blank">OpenStreetMap</a> and contributors.',
			subdomains: ['a','b','c','d'],
			detectRetina: true
		});

		layers = {
			"Map": bing_road,
			"Greyscale": mapb_light
		};
		return layers;
	}

	function addOverlays(map) {
		var style = { // Building markers
			radius: 6,
			color: '#000',
			weight: 1,
			opacity: 1,
			fillOpacity: 0.75
		},
		buildings = {
			'array': new L.LayerGroup(),
			'reference': new L.LayerGroup()
		},
		//labels = new L.LayerGroup(),
		layers;

		new L.GeoJSON(json, {
			pointToLayer: function (feature, latlng) {
				if (feature.properties.type === 'reference') {
					style.fillColor = '#00c'; // reference sites
				} else {
					style.fillColor = '#ff7800'; // array sites
				}
				bounds.all.extend(latlng);
				return new L.CircleMarker(latlng, style);
			},
			onEachFeature: function(feature, layer) {
				var content, imgs = '';
				if (feature.properties.photo) {
					imgs += '<a href="img/photos/' + feature.properties.photo + '" target="_blank"><img src="img/photos/thumbs/' + feature.properties.photo + '" alt="building photo" height="100" /></a>';
				}
				if (feature.properties.layout) {
					imgs += '<a href="img/layouts/' + feature.properties.layout + '" target="_blank"><img src="img/layouts/thumbs/' + feature.properties.layout_thumb + '" alt="building layout" height="100" /></a>';
				}
				content = [
					'<h2>', feature.properties.name, '</h2>',
					'<h3>', feature.properties.city, ', ', feature.properties.state, '</h3>',
					imgs,
					'<table>',
					'<tr><th>Station number</th><td>', feature.properties.station, '</td></tr>',
					'<tr><th>Building number</th><td>', feature.properties.building, '</td></tr>',
					'<tr><th>Sensors in building</th><td>', feature.properties.sensors_structure, '</td></tr>',
					'<tr><th>Sensors in ground</th><td>', feature.properties.sensors_ground, '</td></tr>',
					'</table>'
				].join('');
				layer.bindPopup(content, {autoPanPadding: new L.Point(20,20)});
				buildings[feature.properties.type].addLayer(layer);
			}
		});

		buildings.reference.addTo(map);
		buildings.array.addTo(map);

		layers = {
			'Reference Site': buildings.reference,
			'Building Array': buildings.array
			//'Labels': labels
		};
		return layers;
	}
})();