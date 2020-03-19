<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Kulit| admin </title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		body {
			margin: 200px;
		}

		.frame_border {
			border: 1px solid #CCC;
			width: auto;
			padding: 25px;
			border-radius: 5px;
			height: 100px;
			position: relative;
		}
	</style>
</head>

<body>
	<div class="frame_border">
		<?php
		//include "connect/config.php";
		//include_once('index.php');
		include "koneksi.php";
		$kd_penyakit = $_POST['kd_penyakit'];
		$penyakit = $_POST['in_penyakit'];
		$definisi = $_POST['in_definisi'];
		$solusi = $_POST['in_solusi'];
		$sql = "UPDATE penyakit SET nama_penyakit='$penyakit',definisi='$definisi', solusi='$solusi' WHERE kd_penyakit='$kd_penyakit'";
		$result = mysql_query($sql) or die("SQL Error" . mysql_error());
		if ($result) {
			echo "<center>Data Telah Berhasil Diubah</center>";
			echo "<center><a href='http://localhost/CoolAdmin/chart.php'>OK</a></center>";
		} else {
			echo "<center><font color='#ff0000'>Error update</font></center>";
			echo "<center><a href='http://localhost/CoolAdmin/chart.php'>Kembali</a></center>";
		}
		?>
	</div>
</body>

</html>