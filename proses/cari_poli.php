<?php  
	include '../class/class.php';
	$wendu = $proses->tampil("NamaPlk","poliklinik","WHERE KodePlk = '$_POST[KodePlk]'");
	$dt = $wendu->fetch();
	$nama = $dt[0];
	echo $nama;
?>