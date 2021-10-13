<div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                     <div id="map" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/Leaflet.heat/dist/leaflet-heat.js"></script>

<script>

	var peta2 = L.tileLayer(
				'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
					attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
						'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
						'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
					id: 'mapbox/satellite-v9'
				});

	var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			});

	var map = L.map('map', {
				center: [-6.176776, 107.1368883],
				zoom: 10,
				layers: [peta3]
			});

	var batasadmin_kab= L.layerGroup();
	var kec_kerawanan= L.layerGroup();
	var Tahun2019= L.layerGroup();
	var dinihari2019= L.layerGroup();
	var pagihari2019= L.layerGroup();
	var sianghari2019= L.layerGroup();
	var malamhari2019= L.layerGroup();

	var myStyle = {
		"color": "#000000",
		"weight": 2.5,
		"opacity": 0.65
	};

	var myStyle2 = {
		"color": "#ba0000",
		"weight": 2,
		"opacity": 0.65
	};

	function popUp(f,l){
		var out = [];
		if (f.properties){
			out.push("Kabupaten: "+f.properties['KABUPATEN']);
			l.bindPopup(out.join("<br />"));
		}
	}
		
	function popUp2(f,l){
		var out = [];
		if (f.properties){
			out.push("KECAMATAN "+f.properties['KECAMATAN']);
			out.push("Kerawanan:  "+f.properties['Tingkat_Kr']);
			l.bindPopup(out.join("<br />"));
		}
	}

	function popUp3(f,l){
		var out = [];
		if (f.properties){
			out.push("Jenis Kriminalitas: "+f.properties['Jenis_krim']);
			out.push("Lokasi: "+f.properties['lokasi']);
			l.bindPopup(out.join("<br />"));
		}
	}

	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/batasadmin_kab.geojson"],{onEachFeature:popUp, style: myStyle}).addTo(batasadmin_kab);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/kec_kerawanan.geojson"],{onEachFeature:popUp2, style: myStyle2}).addTo(kec_kerawanan);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/Tahun2019.geojson"],{onEachFeature:popUp3}).addTo(Tahun2019);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/dinihari2019.geojson"],{onEachFeature:popUp3 }).addTo(dinihari2019);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/pagihari2019.geojson"],{onEachFeature:popUp3}).addTo(pagihari2019);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/sianghari2019.geojson"],{onEachFeature:popUp3}).addTo(sianghari2019);
	var jsonTest = new L.GeoJSON.AJAX(["<?= base_url() ?>assets/geojson/malamhari2019.geojson"],{onEachFeature:popUp3}).addTo(malamhari2019);

	var baseMaps = {
		"Satellite": peta2,
		"Streets": peta3,
		
	};

	var overlayer = {
		'Batas Admin Kabupaten': batasadmin_kab,
		'Batas Kecamatan': kec_kerawanan, 
		'Kriminalitas Tahun 2019': Tahun2019,
		'Pukul 00.01-06.00 Tahun 2019': dinihari2019,
		'Pukul 06.01-12.00 Tahun 2019': pagihari2019,
		'Pukul 12.01-18.00 Tahun 2019': sianghari2019,
		'Pukul 18.01-00.00 Tahun 2019': malamhari2019,
	};

	var diniHari = [
		[-6.2708331, 107.0692539, "50"], 
		[-6.2952056, 107.1385408, "50"], 
		[-6.2885993, 107.078225, "50"], 
		[-6.2720543, 107.1566057, "50"], 
		[-6.2449165, 107.0651757, "50"], 
		[-6.222666, 107.1650193, "50"], 
		[-6.302696, 107.1203997, "50"], 
		[-6.2836912, 107.1311818, "50"], 
		[-6.2590255, 107.0804108, "50"], 
		[-6.2648881, 107.1133499, "50"], 
		[-6.3889423, 107.087446, "50"], 
		[-6.1853604, 107.2178804, "50"], 
		[-6.2709905, 107.0815892, "50"], 
		[-6.2662981, 107.1015509, "50"], 
		[-6.0696094, 107.1416413, "50"], 
		[-6.2637876, 107.141231, "50"], 
		[-6.2562781, 107.0588797, "50"], 
		[-6.2662643, 107.0565576, "50"], 
		[-6.2754944, 107.1707853, "50"], 
		[-6.2575794, 107.1734998, "50"], 
		[-6.2412154, 107.0677428, "50"], 
		[-6.424599, 107.068, "50"], 
		[-6.2718565, 107.2247192, "50"], 
		[-6.3411431, 107.2039255, "50"], 
		[-6.2457867, 107.2378337, "50"], 
		[-6.2490632, 107.098615, "50"], 
	];

	var pagi = [
		[-6.2760872, 107.182417, "50"], 
		[-6.268519, 107.1238084, "50"], 
		[-6.2675391, 107.0998066, "50"], 
		[-6.2673114, 107.0515074, "50"], 
		[-6.2612496, 107.0703793, "50"], 
		[-6.2783866, 107.1156417, "50"], 
		[-6.2814489, 107.1538448, "50"], 
		[-6.3248453, 107.1617035, "50"], 
		[-6.324986, 107.1599727, "50"], 
		[-6.2528297, 107.1863247, "50"], 
		[-6.2815731, 107.0556642, "50"], 
		[-6.1674946, 107.1688129, "50"], 
		[-6.2713554, 107.1523814, "50"], 
		[-6.2590491, 107.1503598, "50"], 
		[-6.2172339, 107.0605609, "50"], 
		[-6.2803241, 107.0858803, "50"], 
		[-6.2583037, 107.0939659, "50"], 
		[-6.2735551, 107.0987878, "50"], 
	];

	var siang = [
		[  -6.300931, 107.1593207, "50" ],
		[  -6.3309792, 107.1324524, "50" ],
		[  -6.2783513, 107.1658787, "50" ],
		[  -6.2464397, 107.0891172, "50" ],
		[  -6.334769, 107.0601607, "50" ],
		[  -6.26663, 107.1341242, "50" ],
		[  -6.3558612, 107.0959246, "50" ],
		[  -6.224749, 107.1607135, "50" ],
		[  -6.2665148, 107.1852787, "50" ],
		[  -6.289308, 107.1519917, "50" ],
		[  -6.3149777, 107.0619441, "50" ],
		[  -6.3442391, 107.1066934, "50" ],
		[  -6.2522221, 107.0683606, "50" ],
		[  -6.2528297, 107.1863247, "50" ],
		[  -6.3652333, 107.1162557, "50" ],
		[  -6.3019654, 107.1172708, "50" ],
		[  -6.3197138, 107.1412558, "50" ],
		[  -6.1959588, 107.0447736, "50" ],
		[  -6.2609352, 107.1180975, "50" ],
		[  -6.2786884, 107.1632755, "50" ],
		[  -6.2655616, 1070741201.0, "50" ],
		[  -6.2637414, 107.0476701, "50" ],
		[  -6.2646107, 107.0708021, "50" ],
		[  -6.2959434, 107.1104762, "50" ],
		[  -6.2895639, 107.1523921, "50" ],
		[  -6.3356806, 107.1835729, "50" ],
		[  -6.2702621, 107.0449713, "50" ],
	];

	var malam = [
		[  -6.2885254, 107.0512122, "50" ],
		[  -6.3212637, 107.0574556, "50" ],
		[  -6.3620926, 107.1048344, "50" ],
		[  -6.335964, 107.1053203, "50" ],
		[  -6.3193348, 107.125973, "50" ],
		[  -6.3312586, 107.0762897, "50" ],
		[  -6.270171, 107.085783, "50" ],
		[  -6.2530644, 107.0893234, "50" ],
		[  -6.2249764, 107.1604939, "50" ],
		[  -6.2761805, 107.1713542, "50" ],
		[  -6.4321233, 107.080879, "50" ],
		[  -6.2579166, 107.1591916, "50" ],
		[  -6.2962462, 107.1901554, "50" ],
		[  -6.278171, 107.1144469, "50" ],
		[  -6.3256497, 107.1449772, "50" ],
		[  -6.1672312, 107.0445406, "50" ],
		[  -6.3483126, 107.1832683, "50" ],
		[  -6.3739875, 107.1571844, "50" ],
		[  -6.3315404, 107.0325384, "50" ],
		[  -6.3432469, 107.1098077, "50" ],
		[  -6.2587207, 107.1652707, "50" ],
		[  -6.2592859, 107.1773747, "50" ],
		[  -6.3107434, 107.180646, "50" ],
		[  -6.1664644, 107.0450458, "50" ],
		[  -6.3487979, 107.0322388, "50" ],
		[  -6.2712215, 107.0441869, "50" ],
		[  -6.2890333, 107.0535779, "50" ],
	];

	var tahun2019 = [
		[ -6.2708331, 107.0692539, "50" ],
		[ -6.2952056, 107.1385408, "50" ],
		[ -6.2885993, 107.078225, "50" ],
		[ -6.2720543, 107.1566057, "50" ],
		[ -6.300931, 107.1593207, "50" ],
		[ -6.2885254, 107.0512122, "50" ],
		[ -6.3309792, 107.1324524, "50" ],
		[ -6.2760872, 107.182417, "50" ],
		[ -6.268519, 107.1238084, "50" ],
		[ -6.2449165, 107.0651757, "50" ],
		[ -6.2675391, 107.0998066, "50" ],
		[ -6.2783513, 107.1658787, "50" ],
		[ -6.2464397, 107.0891172, "50" ],
		[ -6.3212637, 107.0574556, "50" ],
		[ -6.3620926, 107.1048344, "50" ],
		[ -6.335964, 107.1053203, "50" ],
		[ -6.334769, 107.0601607, "50" ],
		[ -6.26663, 107.1341242, "50" ],
		[ -6.3193348, 107.125973, "50" ],
		[ -6.3558612, 107.0959246, "50" ],
		[ -6.224749, 107.1607135, "50" ],
		[ -6.222666, 107.1650193, "50" ],
		[ -6.2673114, 107.0515074, "50" ],
		[ -6.2612496, 107.0703793, "50" ],
		[ -6.3312586, 107.0762897, "50" ],
		[ -6.2665148, 107.1852787, "50" ],
		[ -6.289308, 107.1519917, "50" ],
		[ -6.270171, 107.085783, "50" ],
		[ -6.2530644, 107.0893234, "50" ],
		[ -6.2249764, 107.1604939, "50" ],
		[ -6.302696, 107.1203997, "50" ],
		[ -6.2761805, 107.1713542, "50" ],
		[ -6.3149777, 107.0619441, "50" ],
		[ -6.2836912, 107.1311818, "50" ],
		[ -6.2783866, 107.1156417, "50" ],
		[ -6.4321233, 107.080879, "50" ],
		[ -6.2579166, 107.1591916, "50" ],
		[ -6.2590255, 107.0804108, "50" ],
		[ -6.2648881, 107.1133499, "50" ],
		[ -6.2962462, 107.1901554, "50" ],
		[ -6.2814489, 107.1538448, "50" ],
		[ -6.3442391, 107.1066934, "50" ],
		[ -6.2522221, 107.0683606, "50" ],
		[ -6.2528297, 107.1863247, "50" ],
		[ -6.3248453, 107.1617035, "50" ],
		[ -6.324986, 107.1599727, "50" ],
		[ -6.2528297, 107.1863247, "50" ],
		[ -6.3652333, 107.1162557, "50" ],
		[ -6.3019654, 107.1172708, "50" ],
		[ -6.3197138, 107.1412558, "50" ],
		[ -6.1959588, 107.0447736, "50" ],
		[ -6.3889423, 107.087446, "50" ],
		[ -6.278171, 107.1144469, "50" ],
		[ -6.3256497, 107.1449772, "50" ],
		[ -6.2815731, 107.0556642, "50" ],
		[ -6.1674946, 107.1688129, "50" ],
		[ -6.1672312, 107.0445406, "50" ],
		[ -6.3483126, 107.1832683, "50" ],
		[ -6.1853604, 107.2178804, "50" ],
		[ -6.2709905, 107.0815892, "50" ],
		[ -6.2662981, 107.1015509, "50" ],
		[ -6.0696094, 107.1416413, "50" ],
		[ -6.2713554, 107.1523814, "50" ],
		[ -6.3739875, 107.1571844, "50" ],
		[ -6.2609352, 107.1180975, "50" ],
		[ -6.2637876, 107.141231, "50" ],
		[ -6.2786884, 107.1632755, "50" ],
		[ -6.3315404, 107.0325384, "50" ],
		[ -6.2655616, 1070741201.0, "50" ],
		[ -6.3432469, 107.1098077, "50" ],
		[ -6.2637414, 107.0476701, "50" ],
		[ -6.2646107, 107.0708021, "50" ],
		[ -6.2587207, 107.1652707, "50" ],
		[ -6.2562781, 107.0588797, "50" ],
		[ -6.2590491, 107.1503598, "50" ],
		[ -6.2662643, 107.0565576, "50" ],
		[ -6.2592859, 107.1773747, "50" ],
		[ -6.2754944, 107.1707853, "50" ],
		[ -6.2172339, 107.0605609, "50" ],
		[ -6.3107434, 107.180646, "50" ],
		[ -6.2575794, 107.1734998, "50" ],
		[ -6.2959434, 107.1104762, "50" ],
		[ -6.2803241, 107.0858803, "50" ],
		[ -6.2583037, 107.0939659, "50" ],
		[ -6.2895639, 107.1523921, "50" ],
		[ -6.1664644, 107.0450458, "50" ],
		[ -6.2412154, 107.0677428, "50" ],
		[ -6.3487979, 107.0322388, "50" ],
		[ -6.2735551, 107.0987878, "50" ],
		[ -6.3356806, 107.1835729, "50" ],
		[ -6.424599, 107.068, "50" ],
		[ -6.2712215, 107.0441869, "50" ],
		[ -6.2718565, 107.2247192, "50" ],
		[ -6.3411431, 107.2039255, "50" ],
		[ -6.2457867, 107.2378337, "50" ],
		[ -6.2890333, 107.0535779, "50" ],
		[ -6.2702621, 107.0449713, "50" ],
		[ -6.2490632, 107.098615, "50" ]
	];

	L.heatLayer(diniHari, {radius: 25}).addTo(dinihari2019);
	L.heatLayer(pagi, {radius: 25}).addTo(pagihari2019);
	L.heatLayer(siang, {radius: 25}).addTo(sianghari2019);
	L.heatLayer(malam, {radius: 25}).addTo(malamhari2019);
	L.heatLayer(tahun2019, {radius: 25}).addTo(Tahun2019);

	L.control.layers(baseMaps, overlayer).addTo(map);
	
</script>