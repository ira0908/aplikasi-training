<?php
	include("configuration/configuration.php");
	$que = mysql_query("SELECT * FROM Paket_Training");
	
?>
<html>
	<head>
	<center><title>Jadwal Training</title>
	</head>
	<body>
		<form method="POST" action="system/save3.php" >
		<center><h1>Jadwal Training</h1></title></center>
		<table>
			<tr>
				<td>Kode Paket Training</td>
				<td>:</td>
				<td><select name='kode_paket_training'>
					<?php
						while($arr = mysql_fetch_array($que))
						{
					?>
						<option value=<?=$arr['kode_paket_training']?>>
						<?=$arr['nama_paket_training']?>
						</option>
					<?php	
						}
					?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Training</td>
				<td>:</td>
				<td><input type='text' name='tanggal_mulai'></td>
				<td>Sampai</td>
				<td><input type='text' name='tanggal_selesai'></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td>:</td>
				<td><input type='text' name='jam'>Jam</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type='text' name='hari'>Hari</td> 
			</tr>
			<tr>
				<td>Waktu Training</td>
				<td>:</td>
				<td><input type='text' name="waktu"></td>
			</tr>
			<tr>
				<td>Maksimal Peserta</td>
				<td>:</td>
				<td><input type='text' name="maksimal"></td>
			</tr>
			<tr>
				<td>Harga Umum</td>
				<td>:</td>
				<td><input type='text' name="harga_umum"></td>
			</tr>
			<tr>
				<td>Harga Mahasiswa</td>
				<td>:</td>
				<td><input type='text' name="harga_mahasiswa"></td>
			</tr>
			<tr>
				<td>Lokasi Training</td>
				<td>:</td>
				<td><input type='text' name="lokasi"></td>
			</tr>
			<tr>
				<td>Silabus Training</td>
				<td>:</td>
				<td><input type='action' name="silabus"></td>
			</tr>
			<tr>
				<td>Fasilitas</td>
				<td>:</td>
				<td><input type='text' name="fasilitas"></td>
			</tr>
			<tr>
			<td>Aktif</td>
			<td>:</td>
			<td><input type="radio" name="aktif" value=1>Ya
		  <input type="radio" name="aktif" value=0>Tidak</td>
			</tr>			
		</table>
		<input type='submit' name='save' value='save'>
		</center>
		</form>
	</body>
</html>
