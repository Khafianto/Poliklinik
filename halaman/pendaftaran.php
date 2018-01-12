<?php include 'class/class.php'; ?>
<h1>Pendaftaran</h1>
<button onclick="thickbox('thickbox/box-pendaftaran.php','tampil')" class="btn btn-primary">Tambah</button>
<table class="table" >
<thead>
	<tr>
		<th>No</th>
		<th>Tanggal Pendaftaran</th>
		<th>Kode Dokter</th>
		<th>Kode Pasien</th>
		<th>Kode Poliklinik</th>
		<th>Biaya</th>
		<th>Status Pasien</th>
		<th>Keterangan</th>
		<th>Action</th>
	</tr>
</thead>
	<?php 
		$x = 0;
		$sql = $proses->tampil("*","pendaftaran","");
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
		<td ><?php echo $data[6] ?></td>
		<td ><?php echo $data[7] ?></td>
		<td >
			
			<button onclick="hapus_pendaftaran('<?php echo $data[0] ?>')" class="btn btn-danger">Hapus</button>
		</td>
	</tr>
	<?php } ?>
</table>