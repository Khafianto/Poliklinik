<?php 
	include '../class/class.php';
	$sql = $proses->edit("pasien","NamaPsn = '$_POST[NamaPsn]',AlamatPsn = '$_POST[AlamatPsn]', GenderPsn = '$_POST[GenderPsn]', UmurPsn = '$_POST[UmurPsn]', TeleponPsn = '$_POST[TeleponPsn]'","KodePsn = '$_POST[id]'");
	echo "Berhasil";
 ?>