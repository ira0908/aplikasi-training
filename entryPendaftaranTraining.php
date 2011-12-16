<?php
	include "configuration/configuration.php";
	$query1 = mysql_query("SELECT * FROM Paket_Training");
	$query2 = mysql_query("SELECT * FROM Jadwal_Training WHERE Jadwal_Training.kode_paket_training=id");
?>
<html>
	<head>
		<title>
			Pendaftaran Training
		</title>
		<link rel="stylesheet" type="text/css" href="development-bundle/themes/base/ui.all.css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>   
		<script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
		<script type="text/javascript" src="development-bundle/ui/effects.core.js"></script>
		<script type="text/javascript" src="development-bundle/ui/effects.drop.js"></script>
		
		<script type="text/javascript"> 
			$(document).ready(function(){
				$("#tanggal").datepicker({showAnim:"drop", showOptions:{ direction: "up" }});
				disabledMahasiswa();
			});
			function enabledMahasiswa(){
				document.getElementById("txtPerguruan").disabled=false;
				document.getElementById("txtJurusan").disabled=false;
				document.getElementById("txtSemester").disabled=false;
			}
			
			function disabledMahasiswa(){
				document.getElementById("txtPerguruan").disabled=true;
				document.getElementById("txtJurusan").disabled=true;
				document.getElementById("txtSemester").disabled=true;
			}
		</script>
	</head>
	<body>
		<form method="post" action="system/save.php">
			<table>
				<tr>
					<td>
						Nama
					</td>
					<td>
						<input type="text" name="nama" class="" />
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						<textarea name="alamat" class="">
							&nbsp;
						</textarea>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Lahir
					</td>
					<td>
						<input id="tanggal" type="text" name="TanggalLahir" />
					</td>
				</tr>
				<tr>
					<td>
						Pekerjaan
					</td>
					<td>
						<input id="tanggal" type="text" name="pekerjaan" />
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
					<td>
						<input type="text" name="email" class="" />
					</td>
				</tr>
				<tr>
					<td>
						No. Telepon
					</td>
					<td>
						<input type="text" name="telp" class="" />
					</td>
				</tr>
				<tr>
					<td>
						Status
					</td>
					<td>
						<input type="radio" name="status" value="mahasiswa" onClick="enabledMahasiswa();">
							Mahasiswa
						</input>
						<input checked="checked" type="radio" name="status" value="umum" onClick="disabledMahasiswa();">
							Umum
						</input>			
					</td>
				</tr>
				<tr>
					<td>
						Perguruan Tinggi
					</td>
					<td>
						<input type="text" name="Perguruan_Tinggi" id="txtPerguruan"/>
					</td>
				</tr>
				<tr>
					<td>
						Jurusan
					</td>
					<td>
						<input type="text" name="jurusan" id="txtJurusan"/>
					</td>
				</tr>
				<tr>
					<td>
						Semester
					</td>
					<td>
						<input type="text" name="semester" id="txtSemester"/>
					</td>
				</tr>
				<tr>
					<td>
						Paket Training
					</td>
					<td>
						<select name="PaketTraining">
							<?php
								while($array1=mysql_fetch_array($query1))
								{ ?>
							<option value="<?=$array1['id']?>"><?=$array1['nama_paket_training']?></option>
							<?php	}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Tanggal Training
					</td>
					<td>
						<select name="TanggalTraining">
							<?php
								while($array2=mysql_fetch_array($query2))
								{ ?>
									<option value="<?=$array2['id']?>"><?=$array2['tanggal_mulai']?></option>
							<?php	}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Pembayaran DP
					</td>
					<td>
						<input type="radio" name="pembayaran" value="cash" checked="checked">
							Cash
						</input>
						<input type="radio" name="pembayaran" value="transfer">
							Transfer Via BCA
						</input>
					</td>
				</tr>
				<tr>
					<td>
						Keterangan
					</td>
					<td>
						<textarea name="keterangan" class="">
							&nbsp;
						</textarea>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;
					</td>
					<td>
						<input type="submit" value="submit" name="submit" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
