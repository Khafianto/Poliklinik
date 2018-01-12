<?php  
	include 'class/class.php';
?>
<h1>Data Pembayaran Pendaftaran</h1>

<table class="table">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Pasien</th>
		<th>Nama Dokter</th>
		<th>Tanggal Bayar</th>
		<th>Jumlah Bayar</th>

	</tr>
</thead>
	<?php  
		$x = 0;
		$waifu = $proses->tampil("NomorByr,pasien.NamaPsn,dokter.NamaDkt,TanggalByr,JumlahByr","pembayaran,dokter,pasien","WHERE pembayaran.KodePsn = pasien.KodePsn and pembayaran.KodeDkt = dokter.KodeDkt");
		foreach ($waifu as $data) {
			$x++;
		
	?>
	<tr>
		<td ><?php echo $x ?></td>
		<td ><?php echo $data[1] ?></td>
		<td ><?php echo $data[2] ?></td>
		<td ><?php echo $data[3] ?></td>
		<td ><?php echo $data[4] ?></td>
		
	</tr>
	<?php } ?>
</table>