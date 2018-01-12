<?php 
  include '../class/class.php';
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $judul = 'Edit';
    $onclick = "edit_pembayaran('$id')";
    $button = "Edit Pembayaran";
    $nextID = "";
    $date = "";
  }else{
    $id = "";
    $judul = "Tambah";
    $onclick = "simpan_pembayaran()";
    $button = "Simpan Pembayaran";
    $date = date('Y-m-d');
  }
  $query = $proses->tampil("*","pembayaran","WHERE NomorByr = '$id'");
  $data = $query->fetch();
?>
<div class="in-thickbox">
  <p onclick="thickbox('','kimochi')" id="close">&times;</p>
  <h1><?php echo $judul; ?> Data Pembayaran</h1>
  <table>
      <td>Dokter</td>
      <td>
        <input type="text" id="kode_dkt" onclick="validation('kode_dkt')" onchange="validation('kode_dkt'), cari_nama_dokter()" onkeyup="validation('kode_dkt'), cari_nama_dokter()" value="<?php echo $data[2] ?>">
      </td>
      <td>
        <input type="text" id="nama_dkt" onclick="validation('nama_dkt')" onchange="validation('nama_dkt') " onkeyup="validation('nama_dkt')" readonly="">
      </td>
    </tr>
    <tr>
      <td>Pasien</td>
      <td>
        <input type="text" id="kode_psn" onclick="validation('kode_psn')" onchange="validation('kode_psn'), cari_nama()" onkeyup="validation('kode_psn'), cari_nama()" value="<?php echo $data[1] ?>">
      </td>
      <td>
        <input type="text" id="nama_psn" readonly="">
      </td>
    </tr>
    <tr>
      <td>Tanggal Bayar</td>
      <td>
      <input type="date" id="tanggal_bayar" readonly="" value="<?php echo $date; echo $data[3] ?>">
      </td>
    </tr>
    
    <tr>
      <td colspan="3"><button type="button" onclick="<?php echo $onclick; ?>" class="btn btn-default"><?php echo $button ?></button></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
 $(document).ready(function () {
   cari_nama();
   cari_nama_dokter();
 })
  function check_jk(e) {
    isi = $("#"+e).val();
    $("#gender").val(isi);
  }
</script>