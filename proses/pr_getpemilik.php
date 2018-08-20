<?php
	include "pr_connect.php";

	$sql = "SELECT gid, nama, nama_datuk, suku, tgl_lahir, pendidikan, pekerjaan, penghasilan, asuransi, aset, tabungan, nama_kampung
	FROM public.pemilik ORDER BY gid ASC";
	$result = pg_query($sql);
	$hasilpemilik = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

	while ($isinya = pg_fetch_assoc($result)) {
		$features = array(
		'type' => 'Feature',
		'properties' => array(
		'gid' => $isinya['gid'],
		'nama' => $isinya['nama'],


		)
	);
	array_push($hasilpemilik['features'], $features);
	}
	$data= json_encode($hasilpemilik);

	?>
