<?php

include "proses/pr_getbangunanpoint.php";

?>
<html>


<head>
<title> WebGis Koto Gadang</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css"
   integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
   crossorigin=""/>


 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
   integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
   crossorigin=""></script>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <style>
   
   #mapid { height: 700px; }
   </style>

   <?php  
   
   include 'css/bootstrap.php';
   ?>

</head>

<body>

<?php
include 'css/fixednavbar.php';
?>

  <?php
   include 'css/sidebar.php';
  ?>



<script>

  var mymap = L.map('mapid').setView([-0.316728, 100.357469], 15);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqOXNxdHF4bjBzb2czM2p6cmVzZzBwcXgifQ.l38Ez-rF1XCin25iUIynoQ'
}).addTo(mymap);
</script>

<script>
 var allbangunan = <?php echo json_encode($hasil2) ?>;
 var bangunan=L.geoJSON(allbangunan).addTo(mymap);
 



 var poli;
// L.geoJSON(jsonjalan).addTo(mymap);

for (var i = 0; i < allbangunan.features.length; i++) {
        // console.log(allbangunan.features[i].geometry);
        poli = L.geoJSON(allbangunan.features[i].geometry).addTo(mymap);
        poli.setStyle({fillColor: '#00FF00'});
        poli.setStyle({fillOpacity: 0.5});
        poli.setStyle({color: 'none'});
        // poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/> <img src='../image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info'>Booking</button>");
        poli.bindPopup("<b>ID:</b> "+allbangunan.features[i].properties.gid+"<br/>"+allbangunan.features[i].properties.nama+"<br/>"+allbangunan.features[i].properties.nama_datuk+"<br/>"+allbangunan.features[i].properties.suku+"<br/>"+allbangunan.features[i].properties.tgl+"<br/>"+allbangunan.features[i].properties.pendidikan+"<br/>"+"<br/><button onclick='inforumah("+allbangunan.features[i].properties.gid+")'>"+"View Detil</button>");
}

 
 

</script>
</div>  
 </div>
</div>



 

</body>



</html>