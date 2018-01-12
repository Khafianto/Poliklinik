<?php  
	include '../class/class.php';
	$KodeDkt = $_POST['KodeDkt'];
	$Biaya1 = $_POST['Biaya'];
	$macan = $proses->tampil("Tarif","dokter","WHERE KodeDkt = '$KodeDkt'");
	$Biaya = intval($Biaya1);
	$ex = $macan->fetch();
	$Tarif = intval($ex[0]);
	$JumlahByr = ($Biaya + $Tarif);
	$sql = $proses->insert("pendaftaran","'','$_POST[TanggalPendf]','$_POST[KodeDkt]','$_POST[KodePsn]','$_POST[KodePlk]','$_POST[Biaya]','$_POST[status_pasien]','$_POST[Ket]'");
	$ngeleh = $proses->insert("pembayaran","'','$_POST[KodePsn]','$_POST[KodeDkt]','$_POST[TanggalPendf]','$JumlahByr'");
	echo "Berhasil";
?>