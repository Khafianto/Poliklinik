<?php  
	include '../class/class.php';
	$macan = $proses->tampil("SUM()","","");
	$kimochi = $proses->insert("pembayaran","'','$_POST[KodePsn]','$_POST[KodeDkt]','$_POST[TanggalByr]','100000'");
	echo "Berhasil";
?>