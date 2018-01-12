<?php  
	include '../class/class.php';
	$kuriyama = $proses->insert("detail","'','$_POST[NomorResep]','$_POST[KodeObat]','$_POST[Harga]','$_POST[JumlahBeli]','$_POST[Dosis]','$_POST[SubTotal]'");
	echo "Berhasil";
?>