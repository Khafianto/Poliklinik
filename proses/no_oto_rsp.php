<?php 
	$sql = $proses->tampil("max(NomorResep) as terakhir","resep","");

  $data = $sql->fetch();
  $lastID = $data['terakhir'];

 $lastNoUrut = substr($lastID, 3, 9);

  $nextNoUrut = $lastNoUrut + 1;

  $nextID = "RSP".sprintf("%03s",$nextNoUrut);
 ?>