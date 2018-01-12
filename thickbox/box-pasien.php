<?php 
  include '../class/class.php';
  include '../proses/no_oto_psn.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = 'Edit';
    $onclick = "edit_pasien('$id')";
    $button = "Edit Pasien";
    $nextID = "";
  }else{
    $id = "";
    $judul = "Tambah";
    $onclick = "simpan_pasien()";
    $button = "Simpan Pasien";
  }
  $query = $proses->tampil("*","pasien","WHERE KodePsn = '$id'");
  $data = $query->fetch();
?>
<div class="in-thickbox">
  <p onclick="thickbox('','kimochi')" id="close">&times;</p>
  <h1><?php echo $judul; ?> Data Pasien</h1>
  <table>
    <tr>
      <td>Kode Pasien</td>
      <td>
        <input type="text" id="kode_pasien" placeholder="Masukkan kode_pasien" onclick="validation('kode_pasien')" onchange="validation('kode_pasien')" onkeyup="validation('kode_pasien')" value="<?php echo $data[0]; echo $nextID; ?>" readonly>
      </td>
    </tr>
    <tr>
      <td>Nama Pasien</td>
      <td><input type="text" id="nama_Pasien" placeholder="Masukkan Nama" onclick="validation('nama_Pasien')" onchange="validation('nama_Pasien')" onkeyup="validation('nama_Pasien')" value="<?php echo $data[1]; ?>"></td>
    </tr>
    <tr>
      <td>Alamat Pasien</td>
      <td>
        <textarea id="alamat_psn" onclick="validation('alamat_psn')" onchange="validation('alamat_psn')" onkeyup="validation('alamat_psn')" placeholder="Masukkan Alamat"><?php echo $data['2']; ?></textarea>
          
      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>
        <?php
          $ch1 = "";
          $ch2 = ""; 
          if ($data['3'] == "Laki-laki" ) {
            $ch1 = "checked";
          } else if ($data['3'] == "Perempuan") {
            $ch2 = "checked";
          }
         ?>
        <input type="radio" name="gender" id="gender-lk" value="Laki-laki" <?php echo $ch1; ?> onclick="check_jk('gender-lk')">Laki-laki
        <input type="radio" name="gender" id="gender-pr" value="Perempuan" <?php echo $ch2; ?> onclick="check_jk('gender-pr')">Perempuan
      <input type="text" id="gender" hidden="" value="<?php echo $data['3'] ?>">
      </td>
    </tr>
    <tr>
      <td>Umur Pasien</td>
      <td><input type="text" id="umur_psn" onclick="validation('umur_psn')" onchange="validation('umur_psn')" onkeyup="validation('umur_psn')" value="<?php echo $data['4'] ?>" placeholder="Masukkan Umur Pasien"></td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td><input type="text" id="nomor_telp" onclick="validation('nomor_telp')" onchange="validation('nomor_telp')" onkeyup="validation('nomor_telp')" placeholder="Masukkan Nomor Telepon" value="<?php echo $data['5'] ?>"></td>
    </tr>
    <tr>
      <td colspan="3"><button type="button" onclick="<?php echo $onclick; ?>"  class="btn btn-default"><?php echo $button ?></button></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
  function check_jk(e) {
    isi = $("#"+e).val();
    $("#gender").val(isi);
  }
</script>