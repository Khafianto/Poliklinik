<?php  
	include '../class/class.php';
	$sql = $proses->hapus("dokter","KodeDkt = '$_POST[id]'");
	echo "Berhasil";
?>