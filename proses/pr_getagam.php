<?php
	include "pr_connect.php";

	$sql = "select ST_asgeojson(geom) AS geometry, gid,kabupaten_,ibukota,batas_utar,batas_bara,batas_timu FROM indonesia_kab";
	$result = pg_query($sql);
	$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

	while ($isinya = pg_fetch_assoc($result)) {
		$features = array(
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geometry']),
		'properties' => array(
		'gid' => $isinya['gid'],
		'kabupaten_' => $isinya['kabupaten_'],
		'ibukota' => $isinya['ibukota'],
		'batas_utar' => $isinya['batas_utar'],
		'batas_sela' => $isinya['batas_sela'],
		'batas_bara' => $isinya['batas_bara'],
		'batas_timu' => $isinya['batas_timu'],


		)
	);
	array_push($hasil['features'], $features);
	}
	$data= json_encode($hasil);

	?>
