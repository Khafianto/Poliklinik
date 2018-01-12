<?php  
	include 'class/class.php';
?>
<h1>Data Resep</h1>
<a href="?halaman=detail_resep"><button class="btn btn-primary">Tambah</button></a>
<table class="table">
<thead>
	<tr>
		<th>No</th>
		<th>Tanggal Resep</th>
		<th>Kode Pasien</th>
		<th>Total Harga</th>
		<th>Bayar</th>
		<th>Kembali</th>
		<th>Action</th>
	</tr>
</thead>
	<?php  
		$x = 0;
		$sql = $proses->tampil("*","resep","");
		foreach ($sql as $data) {
			$x++;
	?>
	<tr>
		<td ><?php echo $x ?></td>
		<td ><?php echo $data[1] ?></td>
		<td ><?php echo $data[2] ?></td>
		<td ><?php echo $data[3] ?></td>
		<td ><?php echo $data[4] ?></td>
		<td ><?php echo $data[5] ?></td>
		<td >
			<button class="btn">Detail</button>
			<button class="btn">Hapus</button>
		</td>
	</tr>
	<?php } ?>
</table>