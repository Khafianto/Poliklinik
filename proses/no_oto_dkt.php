<?php 
	$sql = $proses->tampil("max(KodeDkt) as terakhir","dokter","");

  $data = $sql->fetch();
  $lastID = $data['terakhir'];

 $lastNoUrut = substr($lastID, 3, 9);

  $nextNoUrut = $lastNoUrut + 1;

  $nextID = "DKT".sprintf("%03s",$nextNoUrut);
 ?>