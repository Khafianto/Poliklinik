<?php
	session_start(); 
	include 'class/class.php';
	if (isset($_SESSION['id'])) {
		echo "<script>document.location='index.php'</script>";
	} else {
		
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/css/bootstrap-theme.css">
</head>
<body style="background-color: #34495e;">
	<div class="login">
		<div class="page-header">
			<h2>Sim Poliklinik</h2>
		</div>
		<form action="proses/sign_in.php" method="post" role="form">
			<div class="form-group">
				<label>Username :</label>
				<input type="text" name="username" class="form-control" required="">
			</div>
			<div class="form-group">
				<label>Password :</label>
				<input type="password" name="password" class="form-control" required="">
			</div>
			<input type="submit" name="isi" value="Masuk" class="btn btn-default">
		</form>
	</div>
</body>
</html>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>