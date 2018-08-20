  var mymap = L.map('mapid').setView([-0.316728, 100.357469], 15);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqOXNxdHF4bjBzb2czM2p6cmVzZzBwcXgifQ.l38Ez-rF1XCin25iUIynoQ'
}).addTo(mymap);

var batas=L.geoJSON(allbatas).addTo(mymap).setStyle({weight: 1});
var rumahkg=L.geoJSON(allbangunan).addTo(mymap).setStyle({color: "#000000"});
rumahkg.setStyle({weight: 1});
batas.setStyle({color: "#FF0000"});





