<?php  
	include '../class/class.php';
	$sql = $proses->tampil("*","pasien","WHERE KodePsn = '$_GET[Kode]'");
	$data = $sql->fetch();
?>
<link rel="stylesheet" type="text/css" href="../assets/css/kartu.css">
<div class="kartu">
	<div class="judul-kartu">
		<h2>Kartu Pasien Poliklinik Sehat Sejahtera</h2>
	</div>
	<hr>
	<div class="isi-kartu">
		<table>
			<tr>
				<td>Kode Pasien</td>
				<td>:</td>
				<td><?php echo $data[0] ?></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><?php echo $data[1] ?></td>
			</tr>
			<tr>
				<td>Alamat Pasien</td>
				<td>:</td>
				<td><?php echo $data[2] ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $data[3] ?></td>
			</tr>
			<tr>
				<td>Umur Pasien</td>
				<td>:</td>
				<td><?php echo $data[4] ?></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td>:</td>
				<td><?php echo $data[5] ?></td>
			</tr>
		</table>
	</div>
	<hr>
	<div class="footer">
		<i>Kartu ini milik pasien yang sudah mendaftar</i>
	</div>
</div>
<script type="text/javascript" src="../jq/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		window.print();
	})
</script>