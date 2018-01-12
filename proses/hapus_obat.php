<?php  
	include '../class/class.php';
	$qw = $proses->hapus("obat","KodeObat = '$_POST[id]'");
	echo "Berhasil";
?>