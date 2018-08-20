<?php

include 'proses/pr_getdata.php';



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

  <script type="text/javascript">

  var mymap = L.map('mapid').setView([-0.316728, 100.357469], 17);
  L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoiYXh2ZXI3IiwiYSI6ImNqOXNxdHF4bjBzb2czM2p6cmVzZzBwcXgifQ.l38Ez-rF1XCin25iUIynoQ'
}).addTo(mymap);

var argeojson = <?php echo json_encode($hasil) ?>;



// var jalan= L.geoJSON(jsonjalan).addTo(mymap);
// console.log(jsonjalan.features.length);

var poli;
// L.geoJSON(jsonjalan).addTo(mymap);

for (var i = 0; i < argeojson.features.length; i++) {
    if (argeojson.features[i].properties.status == 'Berisi') {
        console.log(argeojson.features[i].geometry);
        poli = L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli.setStyle({fillColor: '#00FF00'});
        poli.setStyle({fillOpacity: 0.5});
        poli.setStyle({color: 'none'});
        // poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/> <img src='../image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info'>Booking</button>");
        poli.bindPopup("<b>ID:</b> KG"+argeojson.features[i].properties.gid+"<br/>"+argeojson.features[i].properties.status+"<br/><button onclick='inforumah("+argeojson.features[i].properties.gid+")'>"+"View Detil</button>");

    }
    else if (argeojson.features[i].properties.status == 'Kosong') {

      poli=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
      poli.setStyle({fillColor: '	#696969'});
      poli.setStyle({fillOpacity: 0.5});
      poli.setStyle({color: 'none'});
      poli.bindPopup("<b>ID:</b> KG"+argeojson.features[i].properties.gid+"<br/>"+argeojson.features[i].properties.status+"<br/><button onclick='inforumah("+argeojson.features[i].properties.gid+")'>"+"View Detil</button>");
      //   // poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/><img src='../image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info'>Booking</button>");
    }
    else {
        poli=L.geoJSON(argeojson.features[i].geometry).addTo(mymap);
        poli.setStyle({fillColor: '#FFD700'});
        poli.setStyle({fillOpacity: 0.5});
        poli.setStyle({color: 'none'});
        poli.bindPopup("<b>ID:</b> KG"+argeojson.features[i].properties.gid+"<br/>"+argeojson.features[i].properties.status+"<br/><button onclick='inforumah("+argeojson.features[i].properties.gid+")'>"+"View Detil</button>");
        // poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan <br/> <img src='../image/example.jpg'> <br/>-harga (Rp.xxxxxxxx)<br/> <p>Keterangan, keterangan,keterangan </p><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info'>Booking</button>");
    }
}

console.log(argeojson);

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
