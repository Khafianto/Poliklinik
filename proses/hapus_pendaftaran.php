<?php  
	include '../class/class.php';
	$sql = $proses->hapus("pendaftaran","NomorPendf = '$_POST[id]'");
	echo "Berhasil";
?>