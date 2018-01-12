<?php  
	include '../class/class.php';
	$wendu = $proses->tampil("NamaDkt","dokter","WHERE KodeDkt = '$_POST[kode]'");
	$dt = $wendu->fetch();
	$nama = $dt[0];
	echo $nama;
?>