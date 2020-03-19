<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Edit Data Rule</title>
	<script type="text/javascript" src="jquery-1.4.3.min.js"></script>
	<script type="text/javascript">
		function retrive_data() {
			var kd_penyakit;
			kd_penyakit = $("#hdpenyakit").val();
			var kd_gejala;
			kd_gejala = $("#hdgejala").val();
			var fakta_ya;
			fakta_ya = $("#hdya").val();
			var fakta_tidak;
			fakta_tidak = $("#hdtidak").val();
			var solusi;
			solusi = $("#hdsolusi").val();
			//retrive
			$("#textkdpenyakit").attr("value", kd_penyakit);
			$("#textgejala").attr("value", kd_gejala);
			$("#textya").attr("value", fakta_ya);
			$("#texttidak").attr("value", fakta_tidak);
			$("#textsolusi").attr("value", solusi);
		}
	</script>
</head>

<body onload="retrive_data();">
	<form id="form1" name="form1" method="post" action="update_relasi.php" enctype="multipart/form-data">
		<div>
			<table width="800" border="0" align="center" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" bgcolor="#99CC66">
				<tr>
					<td colspan="2">
						<div align="center"><b>Edit Data Rule</b></div>
					</td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>Kode Rule</td>
					<td> <?php
							include "koneksi.php";
							$kdubah = $_GET['kdubah'];
							#menampilkan data
							$qry = "SELECT * FROM rule WHERE id_rule='$kdubah'";
							$res_data = mysql_query($qry);
							$data = mysql_fetch_array($res_data);
							?><input type="text" id="textrule" name="textrule" disabled="disabled" size="5" maxlength="5" value="<?php echo $data['id_rule']; ?>">
						<label>

						</label>
						<input name="textrelasi" type="hidden" value="<?php echo $data['id_rule']; ?>" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>Kode Penyakit</td>
					<td><label>
							<select name="textkdpenyakit" id="textkdpenyakit">
								<option value="">[ Daftar Penyakit ]</option>
								<?php
								$sqlp = "SELECT * FROM penyakit ORDER BY kd_penyakit";
								$qryp = mysql_query($sqlp, $koneksi)
									or die("SQL Error: " . mysql_error());
								while ($datap = mysql_fetch_array($qryp)) {
									if ($datap['kd_penyakit'] == $kdsakit) {
										$cek = "selected";
									} else {
										$cek = "";
									}
									echo "<option value='$datap[kd_penyakit]' $cek>$datap[kd_penyakit]&nbsp;|&nbsp;$datap[nama_penyakit]</option>";
								}
								?>
							</select><input type="hidden" id="hdpenyakit" value="<?php echo $_GET['kd_penyakit']; ?>" />
						</label></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>Pertanyaan Gejala</td>
					<td><select name="textgejala" id="textgejala">
							<option value="">[ Pertanyaan Gejala ]</option>
							<option value="0">[ Stop ]</option>
							<?php
							$sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
							$qryg = mysql_query($sqlp, $koneksi)
								or die("SQL Error: " . mysql_error());
							while ($datag = mysql_fetch_array($qryg)) {
								if ($datag['kd_gejala'] == $kdgejala) {
									$cek = "selected";
								} else {

									$cek = "";
								}
								$datagejala = $datag['gejala'];
								$str = substr($datagejala, 0, 80);
								echo "<option value='$datag[kd_gejala]' $cek>$datag[kd_gejala]&nbsp;|&nbsp; $str &nbsp;...</option>";
							}
							?>
						</select>
						<input type="hidden" id="hdgejala" value="<?php echo $_GET['kd_gejala']; ?>" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td width="152">Fakta Ya</td>
					<td width="629">
						<select name="textya" id="textya">
							<option value="">[ Jika Ya ]</option>
							<option value="0">[ Stop ]</option>
							<?php
							$sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
							$qryg = mysql_query($sqlp, $koneksi)
								or die("SQL Error: " . mysql_error());
							while ($datag = mysql_fetch_array($qryg)) {
								if ($datag['kd_gejala'] == $kdgejala) {
									$cek = "selected";
								} else {

									$cek = "";
								}
								$datagejala = $datag['gejala'];
								$str = substr($datagejala, 0, 80);
								echo "<option value='$datag[kd_gejala]' $cek>$datag[kd_gejala]&nbsp;|&nbsp; $str &nbsp;...</option>";
							}
							?>
						</select>
						<input type="hidden" id="hdya" value="<?php echo $_GET['fakta_ya']; ?>" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>Fakta Tidak</td>
					<td><select name="texttidak" id="texttidak">
							<option value="">[ Jika Tidak ]</option>
							<option value="0">[ Stop ]</option>
							<?php
							$sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
							$qryg = mysql_query($sqlp, $koneksi)
								or die("SQL Error: " . mysql_error());
							while ($datag = mysql_fetch_array($qryg)) {
								if ($datag['kd_gejala'] == $kdgejala) {
									$cek = "selected";
								} else {

									$cek = "";
								}
								$datagejala = $datag['gejala'];
								$str = substr($datagejala, 0, 80);
								echo "<option value='$datag[kd_gejala]' $cek>$datag[kd_gejala]&nbsp;|&nbsp; $str &nbsp;...</option>";
							}
							?>
						</select>
						<input type="hidden" id="hdtidak" value="<?php echo $_GET['fakta_tidak']; ?>" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>Solusi</td>
					<td><select name="textsolusi" id="textsolusi">
							<option value="">[ Solusi Penyakit ]</option>
							<option value="0">[ Tidak Ada Solusi ]</option>
							<?php
							$sqlp = "SELECT * FROM penyakit ORDER BY kd_penyakit";
							$qryp = mysql_query($sqlp, $koneksi)
								or die("SQL Error: " . mysql_error());
							while ($datap = mysql_fetch_array($qryp)) {
								if ($datap['kd_penyakit'] == $kdsakit) {
									$cek = "selected";
								} else {
									$cek = "";
								}
								echo "<option value='$datap[kd_penyakit]' $cek>$datap[kd_penyakit]&nbsp;|&nbsp;$datap[nama_penyakit]</option>";
							}
							?>
						</select>
						<input type="hidden" id="hdsolusi" value="<?php echo $_GET['solusi']; ?>" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>&nbsp;</td>
					<td><input type="submit" name="Submit" value="Update" />
						<input type="button" value="Kembali" onclick="self.history.back();" /></td>
				</tr>
				<tr bgcolor="#FFFFFF">
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
		</div>
	</form>
</body>

</html>