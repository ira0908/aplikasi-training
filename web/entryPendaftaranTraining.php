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
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="development-bundle/jquery-1.3.2.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.core.js"></script>
		<script type="text/javascript" src="development-bundle/ui/ui.datepicker.js"></script>   
		<script type="text/javascript" src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
		<script type="text/javascript" src="development-bundle/ui/effects.core.js"></script>
		<script type="text/javascript" src="development-bundle/ui/effects.drop.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function(){
			$("#tanggal").datepicker({
			showAnim    : "drop",
			showOptions : { direction: "up" }
			});
		});
		</script>
	</head>
	<body>
		<form method="post" action="system/save.php">
			<center><h2>
			Pendaftaran Training
			</h2></center>
		<table align='center'>
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
						<input type="radio" name="pembayaran" value="cash">
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
