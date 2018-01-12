<?php  
	include '../class/class.php';
	$wendu = $proses->tampil("NamaPsn","pasien","WHERE KodePsn = '$_POST[kode]'");
	$dt = $wendu->fetch();
	$nama = $dt[0];
	echo $nama;
?>