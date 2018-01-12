<?php 
	$sql = $proses->tampil("max(KodePsn) as terakhir","pasien","");

  $data = $sql->fetch();
  $lastID = $data['terakhir'];

 $lastNoUrut = substr($lastID, 3, 9);

  $nextNoUrut = $lastNoUrut + 1;

  $nextID = "PSN".sprintf("%03s",$nextNoUrut);
 ?>