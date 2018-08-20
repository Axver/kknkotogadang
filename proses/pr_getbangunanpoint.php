<?php
	include "pr_connect.php";

	$sql = "select ST_asgeojson(geom) AS geometry, bangunan_point.gid,pemilik.nama,pemilik.suku,pemilik.nama_datuk,pemilik.tgl_lahir,pemilik.pendidikan  FROM bangunan_point INNER JOIN pemilik ON bangunan_point.gid=pemilik.gid;";
	$result = pg_query($sql);
	$hasil2 = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);
    
	while ($isinya = pg_fetch_assoc($result)) {
		
		$features = array(
			
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geometry']),
		'properties' => array(
		'gid' => $isinya['gid'],
		'nama'=> $isinya['nama'],
		'nama_datuk'=> $isinya['nama_datuk'],
		'suku'=> $isinya['suku'],
		'tgl'=> $isinya['tgl_lahir'],
		'pendidikan'=> $isinya['pendidikan'],
		


		)
	);
	array_push($hasil2['features'], $features);
	}
	
	 $data= json_encode($hasil2);

	?>
