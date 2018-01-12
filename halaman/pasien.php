<?php include 'class/class.php'; ?>
<h1>Data Pasien</h1>
<button onclick="thickbox('thickbox/box-pasien.php','tampil')" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
<table class="table">
<thead>
	<tr>
		<th>No</th>
		<th>Nama Pasien</th>
		<th>Alamat Pasien</th>
		<th>Gender Pasien</th>
		<th>Umur Pasien</th>
		<th>Nomor Telepon</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>
	<?php 
		$x = 0;
		$sql = $proses->tampil("*","pasien","");
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
			<button onclick="thickbox('thickbox/box-pasien.php?id=<?php echo $data[0]; ?>','tampil')" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
			<button onclick="hapus_pasien('<?php echo $data[0] ?>')" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
			<a href="halaman/kartu_pasien.php?Kode=<?php echo $data[0] ?>" target="_blank"><button class="btn btn-success"><i class="glyphicon glyphicon-print"></i> Cetak</button></a>
		</td>
	</tr>
	<?php } ?>
	</tbody>
</table>