<?php 
	include '../class/class.php';
	$sql = $proses->hapus("pasien","KodePsn = '$_POST[id]'");
	echo "Berhasil";
 ?>