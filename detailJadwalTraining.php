<?php
include("configuration/configuration.php");
$id		=$_GET['id'];
$query	= mysql_query("SELECT FROM Jadwal_Training WHERE id=$id");
$array	= mysql_fetch_array($query);

?>
<html>
	<head>
	<title>Jadwal Training</title>
	</head>
	<body>
		<center><h1>Jadwal Training</h1></center>
		<table>
			<tr>
				<td>Kode Paket Training</td>
				<td>:</td>
				<td><?php echo $array['kode_paket_training']?></td>
				
			</tr>
			<tr>
				<td>Tanggal Training</td>
				<td>:</td>
				<td><?php echo $array['tanggal_mulai']?></td>
				<td>Sampai</td>
				<td><?php echo $array['tanggal_selesai']?></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td>:</td>
				<td><?php echo $array['durasi_jam']?> Jam</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?php echo $array['durasi_hari']?>Hari</td> 
			</tr>
			<tr>
				<td>Waktu Training</td>
				<td>:</td>
				<td><?php echo $array['waktu_training']?></td>
			</tr>
			<tr>
				<td>Maksimal Peserta</td>
				<td>:</td>
				<td><?php echo $array['maksimal_peserta']?></td>
			</tr>
			<tr>
				<td>Harga Training</td>
				<td>:</td>
				<td><?php echo $array['harga_training']?></td>
			</tr>
			<tr>
				<td>Lokasi Training</td>
				<td>:</td>
				<td><?php echo $array['lokasi_training']?></td>
			</tr>
			<tr>
				<td>Silabus Training</td>
				<td>:</td>
				<td><?php echo $array['silabus']?></td>
			</tr>
			<tr>
				<td>Fasilitas</td>
				<td>:</td>
				<td><?php echo $array['fasilitas']?></td>
			</tr>
			<tr>
			<td>Aktif</td>
			<td>:</td>
			<td><?php echo $array['aktif']?></td>
			</tr>
		</table>
	</body>
</html>
