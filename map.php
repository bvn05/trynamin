<!DOCTYPE html>
<html>
<head>
    <title>Leaflet Quick Start Guide</title>
    <!-- Include Leaflet CSS file -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
         integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
         crossorigin=""/>
</head>
<body>

<!-- Put a div element with a certain id where you want your map to be -->
<div id="map" style="height: 450px; width: auto"></div>

<!-- Include Leaflet JavaScript file after Leaflet’s CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

<script>
    // Setting up the map
    var map = L.map('map').setView([  14.466286227665975,121.47778213455456
          ], 13);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Adding markers, circles, and polygons
// Define the center coordinates and range
var centerCoords = [
    [14.466286227665975, 121.47778213455456], // Center 1
    [14.463739646161201, 121.47208846557834], // Center 2
    [14.46556044107733, 121.48369599584566]   // Center 3
];

var numMarkers = 50; // Number of additional markers

// Function to generate random coordinates within a range around a center
function generateRandomCoords(center) {
    var radius = 0.02; // You can adjust this radius as needed
    var lat = center[0] + (Math.random() - 0.5) * radius * 2;
    var lng = center[1] + (Math.random() - 0.5) * radius * 2;
    return [lat, lng];
}

// Loop to create markers around each center
for (var i = 0; i < centerCoords.length; i++) {
    var center = centerCoords[i];
    for (var j = 0; j < numMarkers; j++) {
        var markerCoords = generateRandomCoords(center);
        var marker = L.marker(markerCoords).addTo(map).bindPopup('Marker ' + (j + 1));
    }
}
    // var circle = L.circle([14.466286227665867,121.47778213454642], {
    //     color: 'red',
    //     fillColor: '#f03',
    //     fillOpacity: 0.5,
    //     radius: 500
    // }).addTo(map);
    var polygon = L.polygon([
        [51.509, -0.08],
        [51.503, -0.06],
        [51.51, -0.047]
    ]).addTo(map);

    // Working with popups
    marker.bindPopup("<b>Hello world!").openPopup();
        // circle.bindPopup("I am a circle.");
        // polygon.bindPopup("I am a polygon.");

    // Dealing with events
    // function onMapClick(e) {
    //     alert("You clicked the map at " + e.latlng);
    // }

    // map.on('click', onMapClick);
</script>

</body>
</html>
