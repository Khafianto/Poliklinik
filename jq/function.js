function panggil_konten(c) {
  $(".konten").load(c);
}
function thickbox(url, method) {
  if (method == "tampil") {
    $(".bg-thick").load(url); // Load thickbox
    $(".bg-thick").fadeIn(100); // Tampil thickbox
  } else {
  $(".bg-thick").fadeOut(100); // Tutup thickbox
  }
}


function validation(d) {
	isi = $("#"+d).val()
	if (isi == "") {
		$("#"+d).css({"outline-color":"#F21322"});
	} else {
		$("#"+d).css({"outline-color":"#16A085"});
	}
	
}
function cari_harga() {
    kode = $("#kode_obat").val();
    $.ajax({
      url : "proses/cari_harga.php",
      type : "POST",
      data : {
          kode : kode
      },
      success:function(hasil) {
          $("#harga").val(hasil);
      }
    })
}
function cari_dokter() {
  KodeDkt = $("#kode_dokter").val();
  $.ajax({
          dataType:"json",
          url:"proses/cari_dokter.php",
          type:"POST",
          data:{KodeDkt:KodeDkt},
          success:function (hasil) {
            $("#kode_plk").val(hasil.KodePlk);
            $("#nama_plk").val(hasil.NamaPlk);
  }})
}
function cari_poli(){
  KodePlk = $("#kode_plk").val();
  $.ajax({url:"proses/cari_poli.php",type:"POST",data:{KodePlk:KodePlk},success:function (hasil) {
    $("#nama_plk").val(hasil);
  }})
} 
function cari_nama(){
  kode = $("#kode_psn").val();
  $.ajax({
    url : "proses/cari_nama.php",
    type : "POST",
    data : {
        kode : kode
    },
    success:function(hasil){
      $("#nama_psn").val(hasil);
    }
  })
}
function cari_nama_dokter(){
  kode = $("#kode_dkt").val();
  $.ajax({
    url : "proses/cari_nama_dokter.php",
    type : "POST",
    data : {
        kode : kode
    },
    success:function(hasil){
      $("#nama_dkt").val(hasil);
    }
  })
}
function panggil_div(a, b) {
  $("."+a).load(b);
}
function focus_text(ok ) {
  $("#"+ok).focus();
}
function pencarian(c, d) {
  e = $("#"+d).val();
  panggil_konten('halaman/'+c+'?key='+e);
}
function sign_in() {
  username = $("#username").val();
  password = $("#password").val();
  if (username == "") {
    alert('Username belum diisi');
    $("#username").focus();
  } else if (password == "") {
    alert('Password belum diisi');
    $("#password").focus();
  } else {
    $.ajax({
      url : "proses/sign_in.php",
      type : "POST",
      data : {
        username : username, password : password
      },
      success:function (hasil) {
        if (hasil == "Berhasil_A") {
          $(".login").css({"top":"-100%"});
          $(".admin").css({"display":"block"});
          $(".laporan").css({"display":"none"});
        } else if (hasil == "Berhasil_B") {
          $(".login").css({"top":"-100%"});
          $(".admin").css({"display":"none"});
          $(".laporan").css({"display":"block"});
        } else if (hasil == "Salah_K_PoU") {
          alert('Username atau password salah');
        } else {
          alert(hasil);
        }
      }
    })
  }
}
function hitung_sub() {
    hr = parseInt($("#harga").val());
    jb = parseInt($("#jumlah_beli").val());
    $("#sub_total").val(hr * jb);
  }
function kembalian() {
  th = parseInt($("#total_harga").val());
  nb = parseInt($("#bayar").val());
  hsl = (nb - th);
  if (hsl > 0) {
    $("#kembali").val(hsl);
  } else {
    $("#kembali").val('0');
  }
}