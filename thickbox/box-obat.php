<?php 
  include '../class/class.php';
  include '../proses/no_oto_obat.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = 'Edit';
    $onclick = "edit_obat('$id')";
    $button = "Edit Obat";
    $nextID = "";
  }else{
    $id = "";
    $judul = "Tambah";
    $onclick = "simpan_obat()";
    $button = "Simpan Obat";
  }
  $query = $proses->tampil("*","obat","WHERE KodeObat = '$id'");
  $data = $query->fetch();
?>
<div class="in-thickbox">
  <p onclick="thickbox('','kimochi')" id="close">&times;</p>
  <h1><?php echo $judul; ?> Data Obat</h1>
  <table>
    <tr>
      <td>Kode Obat</td>
      <td>
        <input type="text" id="kode_obat" onclick="validation('kode_obat')" onchange="validation('kode_obat')" onkeyup="validation('kode_obat')" value="<?php echo $data[0]; echo $nextID; ?>" readonly>
      </td>
    </tr>
    <tr>
      <td>Nama Obat</td>
      <td><input type="text" id="nama_obat" placeholder="Masukkan Nama" onclick="validation('nama_obat')" onchange="validation('nama_obat')" onkeyup="validation('nama_obat')" value="<?php echo $data[1]; ?>"></td>
    </tr>
    <tr>
      <td>Jenis Obat</td>
      <td>
        <select id="jenis_obat">
          <option>Pilih</option>
          <?php 
            if ($data[2] == "Padat") {
              $p = "selected";
            } else if ($data[2] == "Semi Padat") {
              $sp = "selected";
            } else if ($data[2] == "Cair"){
              $c = "selected";
            } else {
              $p = "";
              $sp = "";
              $c = "";
            }
           ?>
          <option value="Padat" <?php echo $p ?>>Padat</option>
          <option value="Semi Padat" <?php echo $sp ?>>Semi Padat</option>
          <option value="Cair" <?php echo $c ?>>Cair</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Kategori Obat</td>
      <td>
        <select id="kategori_obat" >
          <option>Pilih</option>
          <?php 
            if ($data[3] == "A") {
              $a = "selected";
            } else if ($data[3] == "B") {
              $b = "selected";
            } else if ($data[3] == "C"){
              $c = "selected";
            } else if ($data[3] == "D"){
              $d = "selected";
            } else {
              $a = "";
              $b = "";
              $c = "";
              $d = "";
            }
           ?>
          <option value="A" <?php echo $a ?>>A</option>
          <option value="B" <?php echo $b ?>>B</option>
          <option value="C" <?php echo $c ?>>C</option>
          <option value="D" <?php echo $d ?>>D</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Harga Obat</td>
      <td><input type="number" id="harga_obat" onclick="validation('harga_obat')" onchange="validation('harga_obat')" onkeyup="validation('harga_obat')" placeholder="Masukkan harga obat" value="<?php echo $data['4'] ?>"></td>
    </tr>
    <tr>
      <td>Jumlah Obat</td>
      <td>
        <input type="number" id="jumlah_obat" onclick="validation('jumlah_obat')" onchange="validation('jumlah_obat')" onkeyup="validation('jumlah_obat')" placeholder="Masukkan jumlah obat" value="<?php echo $data['5'] ?>">
      </td>
    </tr>
    <tr>
      <td colspan="3"><button type="button" onclick="<?php echo $onclick; ?>" class="btn btn-default"><?php echo $button ?></button></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
  function check_jk(e) {
    isi = $("#"+e).val();
    $("#gender").val(isi);
  }
</script>