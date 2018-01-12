<?php  
	include '../class/class.php';
	$qw = $proses->edit("obat","NamaObat = '$_POST[NamaObat]', JenisObat = '$_POST[JenisObat]',Kategori = '$_POST[Kategori]',HargaObat = '$_POST[HargaObat]', JumlahObat = '$_POST[JumlahObat]'","KodeObat = '$_POST[id]'");
	echo "Berhasil";
?>