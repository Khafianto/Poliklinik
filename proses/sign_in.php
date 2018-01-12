<?php  
	session_start();
	include '../class/class.php';
	if (isset($_POST['isi'])) {
		$cr = $proses->tampil("*","login","WHERE username = '$_POST[username]' and password = '$_POST[password]'");
		$io = $cr->rowCount();
		$uu = $cr->fetch();
		if ($io == 1) {
			if ($uu['Level'] == 'admin') {
				$_SESSION['id'] = $_POST['username'];
				echo "<script>alert('Berhasil admin')</script>";
				echo "<script>document.location='../index.php'</script>";
			} elseif ($uu['Level'] == 'manager') {
				$_SESSION['id'] = $_POST['username'];
				echo "<script>alert('Berhasil manager')</script>";
				echo "<script>document.location='../index.php'</script>";
			} elseif ($uu['Level'] == 'apotek') {
				$_SESSION['id'] = $_POST['username'];
				echo "<script>alert('Berhasil Petugas apotek')</script>";
				echo "<script>document.location='../index.php'</script>";
			} elseif ($uu['Level'] == 'daftar') {
				$_SESSION['id'] = $_POST['username'];
				echo "<script>alert('Berhasil Petugas pendaftaran')</script>";
				echo "<script>document.location='../index.php'</script>";
			}
			
		} else {
			echo "<script>alert('Gagal login')</script>";
			echo "<script>document.location='../login.php'</script>";
		}
		
	}	
?>