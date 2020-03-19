<?php
//include "inc.connect/connect.php";
include "koneksi.php";
$kdsakit = $_REQUEST['cbopenyakit'];
$sqlp = "SELECT * FROM penyakit WHERE kd_penyakit='$kdsakit' ";
$qryp = mysql_query($sqlp);
$datap = mysql_fetch_array($qryp);
$sakit = $datap['nama_penyakit'];
?>
<html>

<head>
  <title>Tampilan Data Gejala Penyakit</title>
</head>

<body>
  <div align="left" style="background-color:" #CCCC99"><b>Nama Penyakit :
      <?php $sakit; ?>
    </b>
  </div>
  <br>
  <table width="650" border="0" align="left" cellpadding="2" cellspacing="1" bgcolor="#99CC99">
    <tr bgcolor="#CCCC99">
      <td colspan="3"><b>Daftar Gejala Per Penyakit</b></td>
    </tr>
    <tr bgcolor="#CCCC99">
      <td width="39" align="center"><b>No</b></td>
      <td width="84"><b>Kode</b></td>
      <td width="361"><b>Nama Gejala</b></td>
    </tr>
    <?php
    $kd_penyakit = $_POST['cbopenyakit'];
    //$sqlg="SELECT * FROM rule WHERE kd_penyakit='$penyakit'";
    //$sqlg  = "SELECT rule.kd_gejala, gejala.kd_gejala * FROM rule,gejala ";
    //$sqlg .= "WHERE gejala.kd_gejala=rule.kd_gejala ";
    //$sqlg .= "AND  rule.kd_penyakit='$kdsakit' ";
    //$sqlg .= "ORDER BY gejala.kd_gejala ASC";
    $sqlg = "SELECT rule.kd_gejala, rule.kd_penyakit, gejala.kd_gejala, gejala.gejala FROM rule, gejala WHERE rule.kd_penyakit='$kd_penyakit' AND rule.kd_gejala=gejala.kd_gejala GROUP BY rule.kd_gejala";
    $qryg = mysql_query($sqlg, $koneksi) or die("SQL Error" . mysql_error());
    $no = 0;
    while ($datag = mysql_fetch_array($qryg)) {
      $no++;
    ?>
      <tr bgcolor="#FFFFFF">
        <td align="center"><?php echo $no; ?></td>
        <td><?php echo $datag['kd_gejala']; ?></td>
        <td><?php echo $datag['gejala']; ?></td>
      </tr>
    <?php
    }
    ?>
    <tr>
      <td colspan="3" bgcolor="#CCCC99">
        <div align="right"><a href="http://localhost/CoolAdmin/calendar.php">Kembali</a></div>
      </td>
    </tr>
  </table>
</body>

</html>