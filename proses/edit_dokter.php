<?php 
	include '../class/class.php';
	$sql = $proses->edit("dokter","NamaDkt = '$_POST[NamaDkt]',Spesialis = '$_POST[Spesialis]', AlamatDkt = '$_POST[AlamatDkt]',TeleponDkt = '$_POST[TeleponDkt]',KodePlk = '$_POST[KodePlk]', Tarif = '$_POST[Tarif]'","KodeDkt = '$_POST[id]'");
	echo "Berhasil";
 ?>