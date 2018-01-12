<?php  
	include '../class/class.php';
	$ikeh = $proses->insert("resep","'$_POST[NomorResep]','$_POST[TanggalResep]','$_POST[KodePsn]','$_POST[TotalHarga]','$_POST[Bayar]','$_POST[Kembali]'");
	echo "Berhasil";
?>