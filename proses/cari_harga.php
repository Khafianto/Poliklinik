<?php  
	include '../class/class.php';
	$sql = $proses->tampil("HargaObat","obat","WHERE KodeObat = '$_POST[kode]'");
	$dt = $sql->fetch();
	$rega = $dt[0];
	echo $rega;
?>