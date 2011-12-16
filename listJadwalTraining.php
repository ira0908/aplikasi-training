<?php
	include ("configuration/configuration.php");
	$query=mysql_query("select* from Jadwal_Training");

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/design2.css" />
		<title>
			List Jadwal Training
		</title>
	</head>
	<body>
		<table border="2" align="center" cellpadding='4' cellspacing="0">
			<tr>
				<th rowspan='2' align='center'>Kode<br />Training</th>
				<th colspan='2' align='center'>Tanggal</th>
				<th colspan='2' align='center'>Durasi</th>
				<th rowspan='2' align='center'>Waktu<br />Training</th>
				<th rowspan='2' align='center'>Maksimal<br />Peserta</th>
				<th colspan='2' align='center'>Harga Training</th>
				<th rowspan='2' align='center'>Lokasi<br />Training</th>
			</tr>
			<tr align='center'>
				<th>mulai</th>
				<th>selesai</th>
				<th>jam</th>
				<th>hari</th>
				<th>umum</th>
				<th>mahasiswa</th>
			</tr>
				<?php
					while($array=mysql_fetch_array($query))
					{
				?>
					<tr class="isi">
						<td>
							<a href=detailJadwalTraining.php?id=<?php echo $array['id'];?>>
							<?php echo $array['kode_paket_training'];?></a>
						</td>
						<td>
							<?php echo $array['tanggal_mulai'];?>
						</td>
						<td>
							<?php echo $array['tanggal_selesai'];?>
						</td>
						<td>
							<?php echo $array['durasi_jam'];?>
						</td>
						<td>
							<?php echo $array['durasi_hari'];?>
						</td>
						<td>
							<?php echo $array['waktu_training'];?>
						</td>
						<td>
							<?php echo $array['maksimal_peserta'];?>
						</td>
						<td>
							<?php echo $array['harga_training'];?>
						</td>
						<td>
							<?php echo $array['lokasi_training'];?>
						</td>
					</tr>
				<?php	
					}
				?>	
		</table>
	</body>
</html>
