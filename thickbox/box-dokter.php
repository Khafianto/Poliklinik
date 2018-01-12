<?php 
  include '../class/class.php';
  include '../proses/no_oto_dkt.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = 'Edit';
    $onclick = "edit_dokter('$id')";
    $button = "Edit Dokter";
    $nextID = "";
  }else{
    $id = "";
    $judul = "Tambah";
    $onclick = "simpan_dokter()";
    $button = "Simpan Dokter";
  }
  $query = $proses->tampil("*","dokter","WHERE KodeDkt = '$id'");
  $data = $query->fetch();
?>
<div class="in-thickbox">
  <p onclick="thickbox('','kimochi')" id="close">&times;</p>
  <h1><?php echo $judul; ?> Data Dokter</h1>
  <table>
    <tr>
      <td>Kode Dokter</td>
      <td>
        <input type="text" id="kode_dokter" onclick="validation('kode_dokter')" onchange="validation('kode_dokter')" onkeyup="validation('kode_dokter')" value="<?php echo $data[0]; echo $nextID; ?>" readonly>
      </td>
    </tr>
    <tr>
      <td>Nama Dokter</td>
      <td><input type="text" id="nama_dokter" placeholder="Masukkan Nama" onclick="validation('nama_dokter')" onchange="validation('nama_dokter')" onkeyup="validation('nama_dokter')" value="<?php echo $data[1]; ?>"></td>
    </tr>
    <tr>
      <td>Spesialis</td>
      <td>
        <input type="text" id="spesialis" onclick="validation('spesialis')" onchange="validation('spesialis')" onkeyup="validation('spesialis')" placeholder="Masukkan Spesialis" value="<?php echo $data[2] ?>">
      </td>
    </tr>
    <tr>
      <td>Alamat Dokter</td>
      <td>
        <textarea id="alamat_dokter" onclick="validation('alamat_dokter')" onchange="validation('alamat_dokter')" onkeyup="validation('alamat_dokter')" placeholder="Masukkan Alamat"><?php echo $data['3']; ?></textarea>
          
      </td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td><input type="text" id="nomor_telp" onclick="validation('nomor_telp')" onchange="validation('nomor_telp')" onkeyup="validation('nomor_telp')" placeholder="Masukkan Nomor Telepon" value="<?php echo $data['4'] ?>"></td>
    </tr>
    <tr>
      <td>Poli Klinik</td>
      <td><select type="text" id="poliklinik" onclick="validation('poliklinik')" onchange="validation('poliklinik')" onkeyup="validation('poliklinik')">
        <option>--Pilih--</option>
        <?php 
          $qw = $proses->tampil("*","poliklinik","");
          foreach ($qw as $dapol) {
            if ($dapol[0] == $data['5']) {
              $select = "selected";
            } else {
              $select = "";
            }
            
          
         ?>
        <option value="<?php echo $dapol[0] ?>" <?php echo $select; ?>><?php echo $dapol[1] ?></option>
        <?php } ?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Tarif</td>
      <td><input type="text" id="tarif" onclick="validation('tarif')" onchange="validation('tarif')" onkeyup="validation('tarif')" value="<?php echo $data['6'] ?>"></td>
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