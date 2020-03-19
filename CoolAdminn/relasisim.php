<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Simpan Aturan</title>
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
		//include "inc.connect/connect.php"; 
		include "koneksi.php";
		# Baca variabel Form (If Register Global ON)
		$id_rule = $_POST['textrule'];
		$kd_gejala = $_POST['textgejala'];
		$kd_penyakit = $_POST['textkdpenyakit'];
		$fakta_ya = $_POST['textya'];
		$fakta_tidak = $_POST['texttidak'];
		$solusi = $_POST['textsolusi'];
		# Validasi Form
		$sql_cek = "SELECT * FROM rule WHERE id_rule='$id_rule'";
		$qry_cek = mysql_query($sql_cek, $koneksi)
			or die("Gagal Cek" . mysql_error());
		$ada_cek = mysql_num_rows($qry_cek);
		if ($ada_cek >= 1) {
			echo "<center>RELASI TELAH ADA</center>";
			echo "<center><a href='http://localhost/CoolAdmin/form.php'>OK</a></center>";
			exit;
		} else {
			$sql  = "INSERT INTO rule (id_rule, kd_gejala, kd_penyakit, fakta_ya, fakta_tidak, solusi) VALUES ('$id_rule', '$kd_gejala', '$kd_penyakit', '$fakta_ya', '$fakta_tidak', '$solusi')";
			mysql_query($sql, $koneksi) or die("SQL Error" . mysql_error());
			echo "<center><strong>Data Berhasil Disimpan..!</strong></center>";
			echo "<center><a href='http://localhost/CoolAdmin/form.php'>OK</a></center>";
			//header("location: haladmin.php?top=relasi.php");
			//include "relasi.php";
		}
		?>
	</div>
</body>

</html>