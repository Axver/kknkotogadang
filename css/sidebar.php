<style>

  .btn-block {
    margin-top: 4px; 
    background-color: black;
   
}

</style>

<div class="row">
 <div class="col-sm-2"> 
<br/>

<h3><b>Main Menu</b></h3>
<button class="btn btn-info btn-block glyphicon glyphicon-globe " data-toggle="collapse" data-target="#administrasi">Administrasi</button>
<div id="administrasi" class="collapse">
<div class="checkbox">
  <label><input type="checkbox" value="" onclick="showsumbar()">Sumatra Barat</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" onclick="showagam()">Agam</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" onclick="kotogadang()" value="">Koto Gadang</label>
</div>
</div>


 <button class="btn btn-info btn-block glyphicon glyphicon-home " data-toggle="collapse" data-target="#bangunan">Bangunan</button>
 <div id="bangunan" class="collapse">
 <div class="checkbox">
  <label><input type="checkbox" value="">Rumah</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="">Rumah Kosong</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" >Rumah Berisi</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" >Ibadah</label>
</div>

<div class="checkbox">
  <label><input type="checkbox" value="" >Pendidikan</label>
</div>

<div class="checkbox">
  <label><input type="checkbox" value="" >Kantor</label>
</div>

<div class="checkbox">
  <label><input type="checkbox" value="" >Kesehatan</label>
</div>
<div class="checkbox">
  <label><input type="checkbox" value="" >Industri</label>
</div>
</div>



<button class="btn btn-info btn-block glyphicon glyphicon-map-marker" data-toggle="collapse" data-target="#point" >Tampil Point</button>
<div id="point" class="collapse">
<input type="checkbox" onclick="mbangunan()" value="Bangunan Berisi"> Bangunan Berisi<br/>
<input type="checkbox" onclick="mbangunan()" value="Bangunan Berisi"> Bangunan Kosong<br/>
</div>

<button  class="btn btn-info btn-block glyphicon glyphicon-pushpin" data-toggle="collapse" data-target="#jorong">Jorong</button>
<div id="jorong" class="collapse">
<input type="checkbox" onclick="rkg()" value="Bangunan Berisi"> Rumah Jr Kotogadang<br/>
<input type="checkbox" onclick="rkgbr()" value="Bangunan Berisi"> Rumah  Berisi Jr Kotogadang<br/>
<input type="checkbox" onclick="rkgk()" value="Bangunan Berisi"> Rumah  Kosong Jr Kotogadang<br/>
<input type="checkbox" onclick="brjkg()" value="Bangunan Berisi"> Bukan Rumah Jr Kotogadang<br/>
<input type="checkbox" onclick="jkg()" value="Bangunan Berisi"> Jalan Jr Kotogadang<br/>
</div>


<button class="btn btn-info btn-block glyphicon glyphicon-home" data-toggle="collapse" data-target="#ibadah">Ibadah</button>
<div id="ibadah" class="collapse">
<input type="checkbox" onclick="jkg()" value="Bangunan Berisi"> Rumah Ibadah Jr Kotogadang<br/>
<input type="checkbox"  value="Bangunan Berisi"> Rumah Ibadah Jr Gantiang<br/>
<input type="checkbox"  value="Bangunan Berisi"> Rumah Ibadah Jr Sutijo<br/>
</div>

<button class="btn btn-info btn-block glyphicon glyphicon-home" data-toggle="collapse" data-target="#pendidikan">Pendidikan</button>
<div id="pendidikan" class="collapse">
<input type="checkbox" onclick="jkg()" value="Bangunan Berisi"> Pendidikan Kotogadang<br/>
<input type="checkbox"  value="Bangunan Berisi"> Pendidikan Jr Gantiang<br/>
<input type="checkbox"  value="Bangunan Berisi"> Pendidikan Jr Sutijo<br/>
</div>


<h4>Tools</h4>
<button onclick="openweather()" class="btn btn-info btn-block glyphicon glyphicon-home">Openweather Map</button>


  <script>


    function openweather()
    {
      window.location="osm/example/index.php";  
    }


  function brjkg()
  {
    window.location="bukanrumahkg.php";
  }
  function rkgk()
  {
    window.location="rumahkosongkg.php";
  }
  
  function rkgbr()
  {
    window.location="rumahberisikg.php";
  }
  
  function jkg()
  {
    window.location="jalankg.php";
  }

   function rkg()
  {
    window.location="jorongkg.php";
  }

  function kotogadang()
  {
    window.location="index.php";
  }

  
  function mbangunan()
  {
    window.location="mbangunan.php";
  }

  
  function showsumbar()
  {
    window.location="sumbar.php";
  }

  
  function showagam()
  {
    window.location="agam.php";
  }

  </script>  
 </div>

 <div class="col-sm-10">
 <div id="mapid">
 
</div>  
 </div>
</div>