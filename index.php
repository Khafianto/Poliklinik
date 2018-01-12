<?php  
	session_start();
	if (isset($_SESSION['id'])) {
		$sesi = $_SESSION['id'];
		if ($sesi == "admin") {
			$user = "Admin";
			$pasien = "";
			$dokter = "";
			$obat = "";
			$laporan = "hidden";
			$pendaftaran = "hidden";
			$bayar_dftr = "hidden";
			$bayar_obat = "hidden";
		} elseif ($sesi == "apotek") {
			$user = "Apotek";
			$pasien = "hidden";
			$dokter = "hidden";
			$obat = "";
			$laporan = "hidden";
			$pendaftaran = "hidden";
			$bayar_dftr = "hidden";
			$bayar_obat = "";
		} elseif ($sesi == "daftar") {
			$user = "Pendaftaran";
			$pasien = "";
			$dokter = "hidden";
			$obat = "hidden";
			$laporan = "hidden";
			$pendaftaran = "";
			$bayar_dftr = "";
			$bayar_obat = "hidden";
		} elseif ($sesi == "manager") {
			$user = "Manager";
			$pasien = "hidden";
			$dokter = "hidden";
			$obat = "hidden";
			$laporan = "";
			$pendaftaran = "hidden";
			$bayar_dftr = "hidden";
			$bayar_obat = "hidden";
		}
		
	} else {
		echo "<script>document.location='login.php'</script>";
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator Poliklinik</title>
<!--	<link rel="stylesheet" type="text/css" href="assets/css/index.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/thickbox.css"> 
<link rel="stylesheet" type="text/css" href="assets/css/css/bootstrap.css">
<!--<link rel="stylesheet" type="text/css" href="assets/css/css/bootstrap-theme.css">-->
<link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="dataTables/datatables.css">
</head>
<body>
<div class="wadah">
	<div class="header" style="background-color: #444;color: #fff;">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>Poliklinik Sehat Sejahtera</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container col-sm-2" style="background-color: #ddd; height: 500px;">
		
			<h2 style="margin-left: 20px;"><?php echo $user ?></h2>
			<hr>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="?halaman=home">Dashboard</a></li>
				<li class="<?php echo $pasien ?>"><a href="?halaman=pasien" >Pasien</a></li>
				<li class="<?php echo $dokter; ?>"><a href="?halaman=dokter" >Dokter</a></li>
				<li class="<?php echo $pendaftaran ?>"><a href="?halaman=pendaftaran" >Pendaftaran</a></li>
				<li class="<?php echo $pendaftaran ?>"><a href="?halaman=bayar_dftr" >Pembayaran Pendaftaran</a></li>
				<li class="<?php echo $obat; ?>"><a href="?halaman=obat" >Obat</a></li>
				<li class="<?php echo $bayar_obat;?>"><a href="?halaman=resep_obat" >Pembayaran Obat</a></li>
				<li class="<?php echo $laporan ?>"><a href="?halaman=laporan_pendaftaran" >Laporan Pendaftaran</a></li>
				<li class="<?php echo $laporan; ?>"><a href="?halaman=laporan_pembayaran" >Laporan Pembayaran</a>
				<li class="<?php echo $laporan; ?>"><a href="?halaman=laporan_pembayaran_obat" >Laporan Pembayaran Obat</a></li>
				<li><a href="proses/logout.php">Logout</a></li>
			</ul>
		
	</div>
	<div class="container col-sm-10">
		<div class="content">
			<?php
				if (isset($_GET['halaman'])){
					include "halaman/".$_GET['halaman'].".php";
				}else{
					include "halaman/home.php";
				}
			?>
		</div>
	</div>
	<div class="bg-thick" hidden="">
		
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="jq/function.js"></script>
<script type="text/javascript" src="jq/proses.js"></script>
<script type="text/javascript" src="jq/jquery.js"></script>
<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="dataTables/datatables.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$("#datepicker").datepicker({dateFormat:'yy/mm/dd'});
		$("#datepicker1").datepicker({dateFormat:'yy/mm/dd'});
		$(".table").DataTable();
	});
	function toggle(y) {
		$("."+y).toggle(99);
	}
</script>