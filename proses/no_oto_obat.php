<?php 
	$sql = $proses->tampil("max(KodeObat) as terakhir","obat","");

  $data = $sql->fetch();
  $lastID = $data['terakhir'];

 $lastNoUrut = substr($lastID, 3, 9);

  $nextNoUrut = $lastNoUrut + 1;

  $nextID = "OBT".sprintf("%03s",$nextNoUrut);
 ?>