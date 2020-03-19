<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Edit Data| admin </title>
<link rel="stylesheet" type="text/css" href="../style.css">
<style type="text/css">
body {margin:200px;}
.frame_border {
	 border:1px solid #CCC; width:auto; padding:25px; border-radius:5px; height:100px; position:relative;
	}
</style>
</head>
<body>
<div class="frame_border">
<?php
//include "connect/config.php";
//include_once('index.php');
include "../koneksi.php" ;
$idramuan=$_POST['kd_penyakit'];
$bahan=$_POST['textbahan'];
$ramuan=$_POST['textramuan'];
$kd_penyakit=$_POST['textkdpenyakit'];
$sql = "UPDATE tbramuan SET bahan='$bahan', ramuan='$ramuan', kd_penyakit='$kd_penyakit' WHERE idramuan='$idramuan'";
$result=mysql_query($sql)or die ("SQL Error".mysql_error());
if($result){
		echo "<center>Data Telah Berhasil Diubah</center>";
		echo "<center><a href='haladmin.php?top=ramuan.php'>OK</a></center>";
	}else{
		echo "<center><font color='#ff0000'>Error update</font></center>";
		echo "<center><a href='haladmin.php?top=ramuan.php'>Kembali</a></center>";
		}
?>
</div>
</body>
</html>
