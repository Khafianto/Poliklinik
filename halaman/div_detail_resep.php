<?php include '../class/class.php'; ?>
<table id="table">
	<tr>
		<th>No</th>
		<th>Nomor Resep</th>
		<th>Kode Obat</th>
		<th>Harga</th>
		<th>Jumlah Beli</th>
		<th>Dosis</th>
		<th>Sub Total</th>
	</tr>
	<?php 
		$qw = $proses->tampil("*","detail","WHERE NomorResep = '$_GET[Kode]'");
		$x = 0;
		foreach ($qw as $data) {
			$x++;
	 ?>
	<tr>
		<td align="center"><?php echo $x ?></td>
		<td align="center"><?php echo $data[1] ?></td>
		<td align="center"><?php echo $data[2] ?></td>
		<td align="center"><?php echo $data[3] ?></td>
		<td align="center"><?php echo $data[4] ?></td>
		<td align="center"><?php echo $data[5] ?></td>
		<td align="center"><?php echo $data[6] ?></td>
	</tr>
	<?php } ?>
</table>