<?php 
	include 'class/class.php';
	include 'proses/no_oto_rsp.php';
	$date = date('Y-m-d');
 ?>
<h1>Detail Resep</h1>
<a href="?halaman=resep_obat"><button class="btn btn-danger"><i class="glyphicon glyphicon-chevron-left"></i> Batal</button></a>
<table>
	<tr>
		<td>Nomor Resep</td>
		<td><input type="text" id="nomor_resep" value="<?php echo $nextID ?>" readonly></td>
	</tr>
	<tr>
		<td>Pasien</td>
		<td><input type="text" id="kode_psn" onchange="cari_nama()" onkeyup="cari_nama()"></td>
		<td><input type="text" id="nama_psn" readonly=""></td>
	</tr>
	<tr>
		<td>Obat</td>
		<td>
			<select id="kode_obat" onclick="cari_harga()" onkeyup="cari_harga()" onchange="cari_harga()">
			<option>Pilih</option>
			<?php  
				$sql = $proses->tampil("KodeObat,NamaObat","obat","");
				foreach ($sql as $data) {
					
				
			?>
			<option value="<?php echo $data[0] ?>"><?php echo $data[1] ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" id="harga" placeholder="" readonly=""></td>
		<td><input type="number" id="jumlah_beli" placeholder="Masukkan jumlah beli" onkeyup="hitung_sub()" onchange="hitung_sub()" onclick="hitung_sub()"></td>
		<td><input type="text" id="sub_total" placeholder="Sub total" readonly=""></td>
	</tr>
	<tr>
		<td>Dosis</td>
		<td><input type="text" id="dosis" placeholder="Masukkan dosis obat"></td>
		<td><input type="date" id="tanggal_resep" value="<?php echo $date; ?>" readonly></td>
		<td><button onclick="simpan_detail_resep()" class="btn btn-info">+</button></td>
	</tr>
</table>
<div class="table-detail">
	<table class="table">
	<thead>
	<tr>
		<th>No</th>
		<th>Nomor Resep</th>
		<th>Kode Obat</th>
		<th>Harga</th>
		<th>Jumlah Beli</th>
		<th>Dosis</th>
		<th>Sub Total</th>
	</tr>
	</thead>
	<?php 
		if (isset($_GET['Kode'])) {
			$qw = $proses->tampil("*","detail","WHERE NomorResep = '$_GET[Kode]'");
			$gila = $proses->tampil("SUM(SubTotal) as total_harga","detail","WHERE NomorResep = '$_GET[Kode]'");
			$kocak = $gila->fetch();
		} else {
			$qw = $proses->tampil("*","detail","WHERE NomorResep = '$nextID'");
			$kocak = "0";
		}
		$x = 0;
		foreach ($qw as $data) {
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
	</tr>
	<?php } ?>
	<tr>
		<td>Total Harga</td>
		<td><input type="text" id="total_harga" readonly="" value="<?php echo $kocak[0] ?>"></td>
		<td><input type="text" id="bayar" placeholder="Masukkan nominal bayar" onchange="kembalian()" onkeyup="kembalian()"></td>
		<td><input type="text" id="kembali" readonly=""></td>
		<td><button onclick="simpan_resep()" class="btn btn-default">Simpan</button></td>
	</tr>
</table>

</div>
<script src="jq/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		// panggil_div('table-detail','halaman/div_detail_resep.php?Kode=');
	})
	
</script>