<?php 
	include '../class/class.php';
	$sql = $proses->insert("dokter","'$_POST[KodeDkt]','$_POST[NamaDkt]','$_POST[Spesialis]','$_POST[AlamatDkt]','$_POST[TeleponDkt]','$_POST[KodePlk]','$_POST[Tarif]'");
	echo "Berhasil";
 ?>