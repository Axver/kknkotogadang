<?php

include 'proses/pr_getjalan.php';



 ?>

<html>

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.3/dist/leaflet.css"
  integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
  crossorigin=""/>
  <script
  			  src="https://code.jquery.com/jquery-3.3.1.js"
  			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  			  crossorigin="anonymous"></script>


  <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.3.3/dist/leaflet.js"
   integrity="sha512-tAGcCfR4Sc5ZP5ZoVz0quoZDYX5aCtEm/eu1KhSLj2c9eFrylXZknQYmxUssFaVJKvvc0dJQixhGjG2yXWiV9Q=="
   crossorigin=""></script>

   <style media="screen">
     #mapid { height: 700px;  }
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

  <script type="text/javascript">

  var mymap = L.map('mapid').setView([-0.316728, 100.357469], 15);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqOXNxdHF4bjBzb2czM2p6cmVzZzBwcXgifQ.l38Ez-rF1XCin25iUIynoQ'
}).addTo(mymap);

var jsonjalan = <?php echo json_encode($hasil1) ?>;


// var jalan= L.geoJSON(jsonjalan).addTo(mymap);
// console.log(jsonjalan.features.length);

var poli;
// L.geoJSON(jsonjalan).addTo(mymap);


var jalan;
for (var i = 0; i < jsonjalan.features.length; i++) {

  L.geoJSON(jsonjalan.features[i].geometry).addTo(mymap).setStyle({color: '#FF0000'}).bindPopup("<b>Jalan</b><br/>"+"ID: "+jsonjalan.features[i].properties.gid+"<br/><button onclick='infojalan("+jsonjalan.features[i].properties.gid+")'>"+"View Detil</button>");
  // console.log(jsonjalan.features[i].geometry);


}


  </script>



  <script>








   function infojalan(idjalan) {

     alert(idjalan);

   }


      function inforumah(idrumah) {

        alert("KG"+idrumah);

      }




  </script>


  <script type="text/javascript">


  </script>


</body>

</html>
