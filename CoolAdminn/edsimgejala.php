<html>

<head>
	<title>Edit Gejala</title>
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
		$kd_gejala = $_REQUEST['kd_gejala2'];
		$gejala = $_REQUEST['gejala'];
		$sql = "UPDATE gejala SET gejala='$gejala' WHERE kd_gejala='$kd_gejala'";
		$result = mysql_query($sql)	or die("SQL Error" . mysql_error());
		if ($result) {
			echo "<center><strong>Data Telah Berhasil Diubah</strong></center>";
			echo "<center><a href='http://localhost/CoolAdmin/table.php'>OK</a></center>";
		} else {
			echo "<table style='margin-top:150px;' align='center'><tr><td>";
			echo "<div style='width:500px; height:50px auto; border:1px dashed #CCC; padding:3px 3px 3px 3px;'>";
			echo "<center><font color='#ff0000'><strong>Data tidak dapat di Update..!</strong></strong></font></center><br>";
			echo "<center><a href='http://localhost/CoolAdmin/table.php'>Kembali</a></center>";
			echo "</div>";
			echo "</td></tr></table>";
		}
		?>
	</div>
</body>

</html>