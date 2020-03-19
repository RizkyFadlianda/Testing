<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Simpan Data Penyakit</title>
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
		//include "inc.connect/connect.php";
		include "koneksi.php";
		$kd_penyakit = $_POST['kd_penyakit'];
		$nama_penyakit = $_POST['nama_penyakit'];
		$definisi = $_POST['definisi'];
		$solusi = $_POST['solusi'];
		//cek keberadaan data
		$sqlrs = mysql_query("SELECT kd_penyakit FROM penyakit WHERE kd_penyakit='$kd_penyakit'");
		$rs = mysql_num_rows($sqlrs);
		if ($rs == 0) {
			$perintah = "INSERT INTO penyakit(kd_penyakit,nama_penyakit,definisi,solusi)VALUES('$kd_penyakit','$nama_penyakit','$definisi','$solusi')";
			$berhasil = mysql_query($perintah);
			//jika data berhasil disimpan
			if ($berhasil) {
				echo "<center><strong>Penyimpanan Berhasil</strong></center><br>";
				echo "<center><a href='http://localhost/CoolAdmin/chart.php'>OK</a></center>";
			} else {
				echo "<center><font color='#ff0000'><strong>Penyimpanan Gagal</strong></font></center><br>";
				echo "<center><a href='http://localhost/CoolAdmin/chart.php'>Kembali</a></center>";
			}
		} else {
			echo "<table style='margin-top:150px;' align='center'><tr><td>";
			echo "<div style='width:500px; height:50px auto; border:1px dashed #CCC; color:#F90; padding:3px 3px 3px 3px;'>";
			echo "<center><font>Kode Gejala $kd_gejala <strong>Telah ada di database, Masukkan Kode Unik..!</strong></font></center><br>";
			echo "<center><a href='http://localhost/CoolAdmin/chart.php'>Kembali</a></center>";
			echo "</div>";
			echo "</td></tr></table>";
		}
		?>
	</div>
</body>

</html>