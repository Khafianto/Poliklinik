<?php  
	include '../class/class.php';
	$wendu = $proses->tampil("dokter.KodePlk,poliklinik.NamaPlk","dokter,poliklinik","WHERE dokter.KodePlk = poliklinik.KodePlk AND dokter.KodeDkt = '$_POST[KodeDkt]'");
	$dt = $wendu->fetch();
	$ar = array('KodePlk' => $dt[0], 'NamaPlk' => $dt[1]);
	echo json_encode($ar);
?>