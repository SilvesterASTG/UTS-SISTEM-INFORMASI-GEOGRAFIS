
<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UTS SISTEM GEOGRAFIS</title>
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
			height: 400px;
			width: 600px;
			max-width: 100%;
			max-height: 100%;
		}
	</style>

	
</head>
<body>



<div id="map" style="width: 1500px; height: 1000px;"></div>
<script>

	const map = L.map('map').setView([-2.9208390433318576, 132.2944512492898], 13);
    
	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	const marker = L.marker([-2.9208390433318576, 132.2944512492898]).addTo(map)
		.bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();

	const circle = L.circle([-2.9208390433318576, 132.2944512492898], {
		color: 'red',
		fillColor: '#f03',
		fillOpacity: 0.5,
		radius: 500
	}).addTo(map).bindPopup('I am a circle.');

	const polygon = L.polygon([
		[-2.9049924817565356, 132.29240650551253],
		[-2.9203363270315044, 132.31755489725506],
        [-2.9384229368734385, 132.29781383881155],
        [-2.9231650578200337, 132.27764362696323]
	]).addTo(map).bindPopup('Kabupaten Fakfak.');


	const popup = L.popup()
		.setLatLng([-2.9208390433318576, 132.2944512492898])
		.setContent('Fak-fak.')
		.openOn(map);

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent(`Kordinat ${e.latlng.toString()}`)
			.openOn(map);
	}

	map.on('click', onMapClick);


</script>



</body>
</html>
