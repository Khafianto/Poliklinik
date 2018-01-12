<?php  
	include '../class/class.php';
	$qw = $proses->insert("obat","'$_POST[KodeObat]','$_POST[NamaObat]','$_POST[JenisObat]','$_POST[Kategori]','$_POST[HargaObat]','$_POST[JumlahObat]'");
	echo "Berhasil";
?>