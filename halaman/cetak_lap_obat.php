<?php 
	include '../class/class.php';
?>
<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
<center>
	<p style="font-size: 2em; margin: 0;">Laporan Pembayaran Obat</p>
	<p style="font-size: 1.5em; ">Poliklinik Sehat Sejahtera</p>
	<table border="1" style="border-collapse: collapse;border:1px solid #000; width: 75%;">
		
	<tr>
		<th>No</th>
		<th>Tanggal Resep</th>
		<th>Kode Pasien</th>
		<th>Total Harga</th>
		<th>Bayar</th>
		<th>Kembali</th>
		
	</tr>
	<?php  
		$x = 0;
		if (isset($_POST['from'],$_POST['to'])) {
			$sql = $proses->tampil("NomorResep,TanggalResep,pasien.NamaPsn,TotalHarga,Bayar,Kembali","resep,pasien","WHERE TanggalResep BETWEEN '$_POST[from]' and '$_POST[to]' and pasien.KodePsn = resep.KodePsn");
			$relawan = $proses->tampil("SUM(TotalHarga)","resep","WHERE TanggalResep BETWEEN '$_POST[from]' and '$_POST[to]'");
			$tri = $relawan->fetch();
			$majid = $tri['0'];
		} else {
			$sql = $proses->tampil("*","resep","");
			$majid = "0";
		}
		
		foreach ($sql as $data) {
			$x++;
	?>
	<tr>
		<td align="center"><?php echo $x ?></td>
		<td align="center"><?php echo $data[1] ?></td>
		<td align="center"><?php echo $data[2] ?></td>
		<td align="center"><?php echo $data[3] ?></td>
		<td align="center"><?php echo $data[4] ?></td>
		<td align="center"><?php echo $data[5] ?></td>
	</tr>

	<?php } ?>
	<tr style="font-weight: bold;">
			<td colspan="4" align="right" style="padding-right: 300px;">Total Pembayaran</td>

 
			<td align="center" colspan="2"><?php echo $majid ?></td>

		</tr>
	</table>
	</center>
	<div>
		<table style="float: right;margin-right: 120px;margin-top: 50px;">
			<tr>
				<td>Mengetahui</td>
			</tr>
			<tr>
				<td><br><br><br></td>
			</tr>
			<tr>
				<td>Manager</td>
			</tr>
		</table>
	</div>
<script type="text/javascript" src="../jq/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		window.print();
	})
</script>