<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Udpate data relasi</title>
	<style type="text/css">
		body {
			margin: 50px;
			background-image: url(../Image/Bottom_texture.jpg);
		}

		div {
			border: 1px dashed #666;
			background-color: #CCC;
			padding: 10px;
		}
	</style>
</head>

<body>
	<div>
		<?php
		include "koneksi.php";
		$id_rule = $_POST['textrelasi'];
		$kd_gejala = $_POST['textgejala'];
		$kd_penyakit = $_POST['textkdpenyakit'];
		$fakta_ya = $_POST['textya'];
		$fakta_tidak = $_POST['texttidak'];
		$solusi = $_POST['textsolusi'];

		$query = mysql_query("UPDATE rule SET kd_gejala='$kd_gejala', kd_penyakit='$kd_penyakit', fakta_ya='$fakta_ya', fakta_tidak='$fakta_tidak', solusi='$solusi' WHERE id_rule='$id_rule'") or die(mysql_error());
		if ($query) {
			echo "<center><font color='#0000ff'>DATA BERHASIL DIUPDATE..!</font></center>";
			echo "<center><a href='http://localhost/CoolAdmin/form.php'>OK</a></center>";
			//header("location: ../admin/haladmin.php?top=Relasi.php");
		} else {
			echo "<center><font color='#ff0000'>DATA TIDAK DAPAT DI UPDATE..!</font></center>";
			echo "<center><a href='http://localhost/CoolAdmin/form.php'>Kembali</a></center>";
		}
		?></div>
</body>

</html>