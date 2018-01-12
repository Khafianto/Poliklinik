<?php 
	include '../class/class.php';
	$sql = $proses->insert("pasien","'$_POST[KodePsn]','$_POST[NamaPsn]','$_POST[AlamatPsn]','$_POST[GenderPsn]','$_POST[UmurPsn]','$_POST[TeleponPsn]'");
	echo "Berhasil";
 ?>