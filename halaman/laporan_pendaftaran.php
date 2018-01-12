<?php  
	include 'class/class.php';
?>
<h1>Laporan Pendaftaran</h1>
<div id="pencarian">
<form action="halaman/cetak_lap_dftr.php" target="_blank" method="post" role="form" class="col-sm-3">
	<div class="form-group">
		<label>Dari tanggal</label>
		<input type="text" name="from" required="" class="form-control" id="datepicker" value="">
	</div>
	<div class="form-group">
		<label>Sampai tanggal</label>
		<input type="text" name="to" required="" class="form-control" id="datepicker1" value="">
	</div>
	<div class="form-group">
		<input type="submit" name="cari" value="Cari" class="btn btn-default">
	</div>
</form>
</div>