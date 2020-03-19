<html>

<head>
	<title>Hapus gejala</title>
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
	<div align="center" class="frame_border">
		<?php
		include "koneksi.php";
		$kdhapus = $_GET['kdhapus'];
		if ($kdhapus != "") {
			$sql = "DELETE FROM gejala WHERE kd_gejala='$kdhapus'";
			$result = mysql_query($sql)	or die("SQL Error" . mysql_error());
			if ($result) {
				echo "<center><strong>Data Telah Dihapus..!</strong></center>";
				echo "<center><a href='http://localhost/CoolAdmin/table.php'><strong>OK</strong></a></center>";
			} else {
				echo "<table style='margin-top:150px;' align='center'><tr><td>";
				echo "<div style='width:500px; height:50px auto; border:1px dashed #CCC; padding:3px 3px 3px 3px;'>";
				echo "<center><font color='#ff0000'>Data tidak dapat dihapus..!</strong></font></center><br>";
				echo "<center><a href='http://localhost/CoolAdmin/table.php'>Kembali</a></center>";
				echo "</div>";
				echo "</td></tr></table>";
			}
		}
		?></div>
</body>

</html>