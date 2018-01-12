<?php include 'class/class.php'; ?>
<h1>Data Obat</h1>
<button onclick="thickbox('thickbox/box-obat.php','tampil')" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
<table class="table" >
<thead>
	<tr>
		<th>No</th>
		<th>Nama Obat</th>
		<th>Jenis Obat</th>
		<th>Kategori Obat</th>
		<th>Harga Obat</th>
		<th>Jumlah Obat</th>
		<th>Action</th>
	</tr>
</thead>
	<?php 
		$x = 0;
		$sql = $proses->tampil("*","obat","");
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
			<button onclick="thickbox('thickbox/box-obat.php?id=<?php echo $data[0]; ?>','tampil')" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
			<button onclick="hapus_obat('<?php echo $data[0] ?>')" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Hapus</button>
		</td>
	</tr>
	<?php } ?>
</table>