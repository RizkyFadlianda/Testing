<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Hapus Data</title>
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
		include "koneksi.php";
		$kdhapus = $_GET['kdhapus'];
		//$isipertanyaan = $_GET['pertanyaan'];
		if ($kdhapus  != "") {
			$sql = "DELETE FROM penyakit WHERE kd_penyakit='$kdhapus'";
			mysql_query($sql, $koneksi) or die("SQL Error" . mysql_error());
			echo "<center><b>Data berhasil dihapus</b></center>";
			echo "<center><a href='http://localhost/CoolAdmin/chart.php'><b>OK</b></a></center>";
			//include "index.php?top=gejala.php";
		} else {
			echo "<center>Data belum berhasil dihapus</center>";
			echo "<center><a href=http://localhost/CoolAdmin/chart.php'><b>Kembali</b></a></center>";
		}
		?>
	</div>
</body>

</html>