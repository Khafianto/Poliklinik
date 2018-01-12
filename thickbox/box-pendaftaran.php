<?php 
  include '../class/class.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = 'Edit';
    $onclick = "edit_pendaftaran('$id')";
    $button = "Edit Pendaftaran";
    $nextID = "";
    $date = "";
    $status = "";
  }else{
    $id = "";
    $judul = "Tambah";
    $onclick = "simpan_pendaftaran()";
    $button = "Simpan Pendaftaran";
    $date = date('Y-m-d');
    $status = "Aktif";
  }
  $query = $proses->tampil("*","pendaftaran","WHERE NomorPendf = '$id'");
  $data = $query->fetch();
?>
<div class="in-thickbox">
  <p onclick="thickbox('','kimochi')" id="close">&times;</p>
  <h1><?php echo $judul; ?> Data Pendaftaran</h1>
  <table>
    <tr>
      <td>Tanggal Pendaftaran</td>
      <td>
        <input type="date" id="tanggal_pendaftaran" value="<?php echo $date;echo $data[1]; ?>" readonly>
      </td>
    </tr>
    <tr>
      <td>Dokter</td>
      <td>
        <input id="kode_dokter" onkeyup="cari_dokter()">
      </td>
    </tr>
    <tr>
      <td>Pasien</td>
      <td>
        <select id="kode_psn" >
          <option>Pilih</option>
          <?php 
            $sql = $proses->tampil("*","pasien","");
            foreach ($sql as $dkp) {
              if ($dkp[0] == $data[3]) {
              $ikeh = "selected";
            } else {
              $ikeh = "";
            }
           ?>
          <option <?php echo $ikeh ?> value="<?php echo $dkp[0] ?>" ><?php echo $dkp[1] ?></option>
          <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Poliklinik</td>
      <td>
        <input type="text" id="kode_plk" hidden="">
        <input type="text" id="nama_plk">
      </td>
    </tr>
    <tr>
      <td>Biaya</td>
      <td>
        <input type="number" id="biaya" onclick="validation('biaya')" onchange="validation('biaya')" onkeyup="validation('biaya')" placeholder="Masukkan biaya pendaftaran" value="5000" readonly="">
      </td>
    </tr>
    <tr>
      <td>Status Pasien</td>
      <td>
        <input type="text" id="status_pasien" onclick="validation('status_pasien')" onchange="validation('status_pasien')" onkeyup="validation('status_pasien')" placeholder="Masukkan Status pasien" value="<?php echo $data['6']; echo $status ?>" readonly>
      </td>
    </tr>
    <tr>
      <td>Keterangan</td>
      <td>
        <input type="text" id="keterangan" onclick="validation('keterangan')" onchange="validation('keterangan')" onkeyup="validation('keterangan')" placeholder="Masukkan Keterangan Pasien" value="<?php echo $data['7'] ?>">
      </td>
    </tr>
    <tr>
      <td colspan="3"><button type="button" onclick="<?php echo $onclick; ?>" class="btn btn-default"><?php echo $button ?></button></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    cari_poli();
  })
  function check_jk(e) {
    isi = $("#"+e).val();
    $("#gender").val(isi);
  }
</script>