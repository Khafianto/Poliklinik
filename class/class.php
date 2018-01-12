<?php
class proses{
	function __construct(){
		$server="localhost";
		$usr="root";
		$pwd="";
		$db="poliklinik";
		$this->con = new PDO("mysql:host=$server;dbname=$db", $usr, $pwd);
	}
	function insert($tabel, $val){
		$query="INSERT INTO $tabel VALUES ($val)";
		$ex = $this->con->query($query);
	}
	function edit($tabel, $val, $property){
		$query="UPDATE $tabel SET $val WHERE $property";
		$ex = $this->con->query($query);
	}
	function hapus($tabel, $property){
		$query = "DELETE FROM $tabel WHERE $property";
		$ex    = $this->con->query($query);
	}
	function tampil($select, $tabel, $property){
		$query= "SELECT $select FROM $tabel $property";
		$tam  = $this->con->query($query);
		return $tam;
	}
}

class input{
	function input($type=NULL, $nama=NULL, $val=NULL, $property=null)
	{
		$input = "<input type='$type' name='$nama' value='$val' $property>";
		return $input;
	}
	function selectw($nama=null, $jml=null, $val=null, $serc=null, $property=null, $check=null)
	{
		$op="";
		for ($x=1; $x <=$jml ; $x++) {
			$xxx="";
			if ($val[$x] ==$check) {
				$xxx="selected";
			}else{
				$xxx="";
			}
			$kl="<option $xxx value='$serc[$x]'>$val[$x]</option>";
			$op=$op.$kl;
		}
		$input = "<select name='$nama' $property>$op</select>";
		return $input;
	}
	function select($nama=null, $jml=null, $val=null,  $property=null, $check=null)
	{
		$op="";
		for ($x=1; $x <=$jml ; $x++) {
			$xxx="";
			if ($val[$x] ==$check) {
				$xxx="selected";
			}else{
				$xxx="";
			}
			$kl="<option $xxx>$val[$x]</option>";
			$op=$op.$kl;
		}
		$input = "<select name='$nama' $property>$op</select>";
		return $input;
	}
	function textarea($nama=null, $property=null, $val=null)
	{
		$input = "<textarea name='$nama' $property>$val</textarea>";
		return $input;
	}
	function form($sts=null, $action=null)
	{
		if ($sts== "open") {
			$form = "<form action='$action' method='POST' enctype='multipart/form-data'>";
			return $form;
		}elseif ($sts == "close") {
			$form = "</form>";
			return $form;
		}
	}
	function base_url($folder)
	{
		$url = "http://localhost:81/pilkatos".$folder;
		echo $url;
	}
}
$proses = new proses;
$form = new input;
	?>
