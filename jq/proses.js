function simpan_pasien() {
	KodePsn = $("#kode_pasien").val();
	NamaPsn = $("#nama_Pasien").val();
	AlamatPsn = $("#alamat_psn").val();
	GenderPsn = $("#gender").val();
	UmurPsn = $("#umur_psn").val();
	TeleponPsn = $("#nomor_telp").val();
	if (NamaPsn == "") {
		alert('Nama masih kosong');
		$("#nama_Pasien").focus();
	} else if (AlamatPsn == "") {
		alert('Alamat masih kosong');
		$("#alamat_psn").focus();
	} else if (UmurPsn == "") {
		alert('Umur belum diisi');
		$("#umur_psn").focus();
	} else if (TeleponPsn == "") {
		alert('Nomor telepon belum diisi');
		$("#nomor_telp").focus();
	} else {
		$.ajax({
			url : "proses/simpan_pasien.php",type:"POST",data:{KodePsn:KodePsn, NamaPsn:NamaPsn, AlamatPsn:AlamatPsn, GenderPsn:GenderPsn, UmurPsn:UmurPsn, TeleponPsn:TeleponPsn},success:function (hasil) {
				alert(hasil);
				window.location="?halaman=pasien";
			}
		})
	}
}
function edit_pasien(id) {
	KodePsn = $("#kode_pasien").val();
	NamaPsn = $("#nama_Pasien").val();
	AlamatPsn = $("#alamat_psn").val();
	GenderPsn = $("#gender").val();
	UmurPsn = $("#umur_psn").val();
	TeleponPsn = $("#nomor_telp").val();
	if (NamaPsn == "") {
		alert('Nama masih kosong');
		$("#nama_Pasien").focus();
	} else if (AlamatPsn == "") {
		alert('Alamat masih kosong');
		$("#alamat_psn").focus();
	} else if (UmurPsn == "") {
		alert('Umur belum diisi');
		$("#umur_psn").focus();
	} else if (TeleponPsn == "") {
		alert('Nomor telepon belum diisi');
		$("#nomor_telp").focus();
	} else {
		$.ajax({
			url : "proses/edit_pasien.php",type:"POST",data:{KodePsn:KodePsn, NamaPsn:NamaPsn, AlamatPsn:AlamatPsn, GenderPsn:GenderPsn, UmurPsn:UmurPsn, TeleponPsn:TeleponPsn, id:id},success:function (hasil) {
				alert(hasil);
				window.location="?halaman=pasien";
			}
		})
	}
}
function hapus_pasien(id) {
	$.ajax({url:"proses/hapus_pasien.php",type:"POST",data:{id : id},success:function (hasil) {
				alert(hasil);
				window.location="?halaman=pasien";
	}})
}
function simpan_dokter() {
	KodeDkt = $("#kode_dokter").val();
	NamaDkt = $("#nama_dokter").val();
	Spesialis = $("#spesialis").val();
	AlamatDkt = $("#alamat_dokter").val();
	TeleponDkt = $("#nomor_telp").val();
	KodePlk = $("#poliklinik").val();
	Tarif = $("#tarif").val();
	if (NamaDkt == "") {
		alert('Nama masih kosong');
		$("#nama_dokter").focus();
	} else if (Spesialis == "") {
		alert('Spesialis belum dipilih');
	} else if (AlamatDkt == "") {
		alert('Alamat masih kosong');
		$("#alamat_dokter").focus();
	} else if (TeleponDkt == "") {
		alert('Telepon masih kosong');
		$("#nomor_telp").focus();
	} else if (Tarif == "") {
		alert('Tarif masih kosong');
		$("#tarif").focus();
	} else if (KodePlk == "") {
		alert('Poliklinik belum dipilih');
	} else {
		$.ajax({url:"proses/simpan_dokter.php",type:"POST",data:{KodeDkt:KodeDkt,NamaDkt:NamaDkt,Spesialis:Spesialis,AlamatDkt:AlamatDkt,TeleponDkt:TeleponDkt,KodePlk:KodePlk,Tarif:Tarif},success:function (hasil) {
			alert(hasil);
			window.location="?halaman=dokter";
		}})
	}
 }
 function edit_dokter(id) {
 	KodeDkt = $("#kode_dokter").val();
	NamaDkt = $("#nama_dokter").val();
	Spesialis = $("#spesialis").val();
	AlamatDkt = $("#alamat_dokter").val();
	TeleponDkt = $("#nomor_telp").val();
	KodePlk = $("#poliklinik").val();
	Tarif = $("#tarif").val();
	if (NamaDkt == "") {
		alert('Nama masih kosong');
		$("#nama_dokter").focus();
	} else if (Spesialis == "") {
		alert('Spesialis belum dipilih');
	} else if (AlamatDkt == "") {
		alert('Alamat masih kosong');
		$("#alamat_dokter").focus();
	} else if (TeleponDkt == "") {
		alert('Telepon masih kosong');
		$("#nomor_telp").focus();
	} else if (Tarif == "") {
		alert('Tarif masih kosong');
		$("#tarif").focus();
	} else if (KodePlk == "") {
		alert('Poliklinik belum dipilih');
	} else {
		$.ajax({url:"proses/edit_dokter.php",type:"POST",data:{KodeDkt:KodeDkt,NamaDkt:NamaDkt,Spesialis:Spesialis,AlamatDkt:AlamatDkt,TeleponDkt:TeleponDkt,KodePlk:KodePlk,Tarif:Tarif, id:id},success:function (hasil) {
			alert(hasil);
			window.location="?halaman=dokter";
		}})
	}	
 }
 function hapus_dokter(id) {
 	$.ajax({url:"proses/hapus_dokter.php",type:"POST",data:{id:id},success:function (hasil) {
 		alert(hasil);
 		window.location="?halaman=dokter"
 	}})
 }
 function simpan_obat() {
 	KodeObat = $("#kode_obat").val();
 	NamaObat = $("#nama_obat").val();
 	JenisObat = $("#jenis_obat").val();
 	Kategori = $("#kategori_obat").val();
 	HargaObat = $("#harga_obat").val();
 	JumlahObat = $("#jumlah_obat").val();
 	if (NamaObat == "") {
 		alert('Nama belum diisi');
 		$("#nama_obat").focus();
 	} else if (JenisObat == "") {
 		alert('Jenis obat belum dipilih');
 	} else if (Kategori == "") {
 		alert('Kategori obat belum dipilih');
 	} else if (HargaObat == "") {
 		alert('Harga obat belum dipilih');
 		$("#harga_obat").focus();
 	} else if (JumlahObat == "") {
 		alert('Jumlah obat masih kosong')
 		$("#jumlah_obat").focus();
 	} else {
 		$.ajax({url:"proses/simpan_obat.php",type:"POST",data:{KodeObat:KodeObat,NamaObat:NamaObat,JenisObat:JenisObat,Kategori:Kategori,HargaObat:HargaObat,JumlahObat:JumlahObat},success:function (hasil) {
 			alert(hasil);
 			window.location = "?halaman=obat";
 		}})
 	}
 }
 function edit_obat(id) {
 	KodeObat = $("#kode_obat").val();
 	NamaObat = $("#nama_obat").val();
 	JenisObat = $("#jenis_obat").val();
 	Kategori = $("#kategori_obat").val();
 	HargaObat = $("#harga_obat").val();
 	JumlahObat = $("#jumlah_obat").val();
 	if (NamaObat == "") {
 		alert('Nama belum diisi');
 		$("#nama_obat").focus();
 	} else if (JenisObat == "") {
 		alert('Jenis obat belum dipilih');
 	} else if (Kategori == "") {
 		alert('Kategori obat belum dipilih');
 	} else if (HargaObat == "") {
 		alert('Harga obat belum dipilih');
 		$("#harga_obat").focus();
 	} else if (JumlahObat == "") {
 		alert('Jumlah obat masih kosong')
 		$("#jumlah_obat").focus();
 	} else {
 		$.ajax({url:"proses/edit_obat.php",type:"POST",data:{KodeObat:KodeObat,NamaObat:NamaObat,JenisObat:JenisObat,Kategori:Kategori,HargaObat:HargaObat,JumlahObat:JumlahObat,id:id},success:function (hasil) {
 			alert(hasil);
 			window.location = "?halaman=obat";
 		}})
 	}
 }
 function hapus_obat(id) {
 	$.ajax({url:"proses/hapus_obat.php",type:"POST",data:{id:id},success:function (hasil) {
 		alert(hasil);
 		window.location = "?halaman=obat";
 	}})
 }
 function simpan_pendaftaran() {
 	TanggalPendf = $("#tanggal_pendaftaran").val();
 	KodeDkt = $("#kode_dokter").val();
 	KodePsn = $("#kode_psn").val();
 	KodePlk = $("#kode_plk").val();
 	Biaya = $("#biaya").val();
 	status_pasien = $("#status_pasien").val();
 	Ket = $("#keterangan").val();
 	if (KodeDkt == "") {
 		alert('Dokter belum dipilih')
 	} else if (KodePsn == "") {
 		alert('Pasien belum dipilih')
 	} else if (KodePlk == "") {
 		alert('Poliklinik belum dipilih')
 	} else if (Biaya == "") {
 		alert('Biaya belum diisi')
 	} else if (status_pasien == "") {
 		alert('Status pasien masih kosong');
 		$("#status_pasien").focus();
 	} else if (Ket == "") {
 		alert('Keterangan belum diisi');
 		$("#keterangan").focus();
 	} else {
 		$.ajax({url:"proses/simpan_pendaftaran.php",type:"POST",data:{TanggalPendf:TanggalPendf,KodeDkt:KodeDkt,KodePsn:KodePsn,KodePlk:KodePlk,Biaya:Biaya,status_pasien:status_pasien,Ket:Ket},success:function (hasil) {
 			alert(hasil);
 			window.location = '?halaman=pendaftaran';
 		}})
 	}
 }
 function hapus_pendaftaran(id) {
 	$.ajax({url:"proses/hapus_pendaftaran.php",type:"POST",data:{id:id},success:function (hasil) {
 		alert(hasil);
 		window.location = '?halaman=pendaftaran';
 	}})
 }
 function simpan_detail_resep() {
 	NomorResep = $("#nomor_resep").val();
 	KodeObat = $("#kode_obat").val();
 	Harga = $("#harga").val();
 	JumlahBeli = $("#jumlah_beli").val();
 	Dosis = $("#dosis").val();
 	SubTotal = $("#sub_total").val();
 	if (KodeObat == "") {
 		alert('Obat belum dipilih')
 	} else if (JumlahBeli == "") {
 		alert('Jumlah belum diisi');
 		$("#jumlah_beli").val();
 	} else if (Dosis == "") {
 		alert('Dosis belum diisi');
 		$("#dosis").val();
 	} else {
 		$.ajax({url:"proses/simpan_detail_resep.php",type:"POST",data:{NomorResep:NomorResep,KodeObat:KodeObat,Harga:Harga,JumlahBeli:JumlahBeli,Dosis:Dosis,SubTotal:SubTotal},success:function (hasil) {
 			alert(hasil);
 			window.location = '?halaman=detail_resep&Kode='+NomorResep;
 		}})
 	}
 }
 function simpan_resep() {
 	NomorResep = $("#nomor_resep").val();
 	TanggalResep = $("#tanggal_resep").val();
 	KodePsn = $("#kode_psn").val();
 	TotalHarga = $("#total_harga").val();
 	Bayar = $("#bayar").val();
 	Kembali = $("#kembali").val();
 	if (KodePsn == "") {
 		alert('Kode pasien belum diisi');
 	} else if (Bayar == "") {
 		alert('Nominal bayar belum diisi');
 	} else {
 		$.ajax({url:"proses/simpan_resep.php",type:"POST",data:{NomorResep:NomorResep,TanggalResep:TanggalResep,KodePsn:KodePsn,TotalHarga:TotalHarga,Bayar:Bayar,Kembali:Kembali},success:function (hasil) {
 			alert(hasil);
 			window.location = '?halaman=detail_resep';
 		}})
 	}
 }
 function simpan_pembayaran() {
 	KodePsn = $("#kode_psn").val();
 	KodeDkt = $("#kode_dkt").val();
 	TanggalByr = $("#tanggal_bayar").val();
 	if (KodeDkt == "") {
 		alert('Dokter belum diisi');
 		$("#kode_dkt").focus();
 	} else if (KodePsn == "") {
 		alert('Pasien belum diisi');
 		$("#kode_psn").focus();
 	} else {
 		$.ajax({url:"proses/simpan_pembayaran.php",type:"POST",data:{KodePsn:KodePsn,KodeDkt:KodeDkt,TanggalByr:TanggalByr},success:function (hasil) {
 			alert(hasil);
 			window.location = '?halaman=bayar_dftr';
 		}})
 	}
 }